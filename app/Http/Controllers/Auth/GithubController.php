<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\User;
use Laravel\Socialite\Facades\Socialite;
use App\GithubUser;
//use App\Jobs\UpdateProfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Two\InvalidStateException;
use Laravel\Socialite\Two\User as SocialiteUser;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GithubController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     */
    public function handleProviderCallback()
    {
        if(User::findByGithubId($this->getSocialiteUser()->getId())->first()->github_id == $this->getSocialiteUser()->getId()) {
            try {
                $socialiteUser = $this->getSocialiteUser();
            } catch (InvalidStateException $exception) {
                $this->error('errors.github_invalid_state');

                return redirect()->route('login');
            }

            try {
                $user = User::findByGithubId($socialiteUser->getId());
            } catch (ModelNotFoundException $exception) {
                return $this->userNotFound(new GithubUser($socialiteUser->getRaw()));
            }

            return $this->userFound($user, $socialiteUser);
        }
    }

    private function getSocialiteUser(): SocialiteUser
    {
        return Socialite::driver('github')->user();
    }

    private function userFound(User $user, SocialiteUser $socialiteUser): RedirectResponse
    {
        $user->update([
            'github_username' => $socialiteUser->getNickname()
        ]);

        Auth::login($user);

        return redirect()->route('threads');
    }

    private function userNotFound(GithubUser $user): RedirectResponse
    {
        if ($user->isTooYoung()) {
            $this->error('errors.github_account_too_young');

            return redirect()->home();
        }

        return $this->redirectUserToRegistrationPage($user);
    }

    private function redirectUserToRegistrationPage(GithubUser $user): RedirectResponse
    {
        session(['githubData' => $user->toArray()]);

        return redirect()->route('register');
    }
}
