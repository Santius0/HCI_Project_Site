<?php

namespace App\Http\Controllers\Auth;

use App\User;
//use App\Jobs\SendEmailConfirmation;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Exceptions\CannotCreateUser;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(RedirectIfAuthenticated::class);
    }

//    /**
//     * Get a validator for an incoming registration request.
//     */
//    protected function validator(array $data): ValidatorContract
//    {
//        if($data['password']){
//            return Validator::make($data, app(RegisterRequest::class)->rules());
//        }
//        return Validator::make($data, app(RegisterRequestGitHub::class)->rules());
//    }

    public function register(Request $request)
    {
        if(!$request->password) {
            $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'username' => 'required|max:40|unique:users',
            ]);
            event(new Registered($user = $this->create($request->all())));
        }
        else{
            $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'username' => 'required|max:40|unique:users',
                'password' => 'required|confirmed|min:6'
            ]);
            event(new Registered($user = $this->create($request->all(), 1)));
        }
        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     */
    protected function create(array $data, int $mode = 0)
    {

        $this->assertEmailAddressIsUnique($data['email']);
        $this->assertUsernameIsUnique($data['username']);

        if($mode == 0) {
            $user = new User([
                'name' => $data['name'],
                'email' => $data['email'],
                'username' => strtolower($data['username']),
                'github_id' => $data['githubId'],
                'github_username' => $data['githubUsername'],
                'user_type' => User::DEFAULT,
                'remember_token' => '',
            ]);
        }
        else{
            $user = new User([
                'name' => $data['name'],
                'email' => $data['email'],
                'username' => strtolower($data['username']),
                'password' => Hash::make($data['password']),
                'user_type' => User::DEFAULT,
                'remember_token' => '',
            ]);
        }
        $user->save();
//        $this->dispatch(new SendEmailConfirmation($user));
        return $user;
    }


    public function showRegistrationFormNoSocial()
    {
        return view('auth.register-email');
    }

    private function assertEmailAddressIsUnique(string $emailAddress)
    {
        try {
            User::findByEmailAddress($emailAddress);
        } catch (ModelNotFoundException $exception) {
            return true;
        }

        throw CannotCreateUser::duplicateEmailAddress($emailAddress);
    }

    private function assertUsernameIsUnique(string $username)
    {
        try {
            User::findByUsername($username);
        } catch (ModelNotFoundException $exception) {
            return true;
        }

        throw CannotCreateUser::duplicateUsername($username);
    }
}
