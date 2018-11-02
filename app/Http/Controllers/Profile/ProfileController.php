<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use LasseRafn\InitialAvatarGenerator\InitialAvatar;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('users.profile', ['user' => Auth::user()]);
    }

    public function avatar(User $user)
    {
        $avatar = new InitialAvatar();

        return $avatar
            ->name($user->name())
            ->background('#2C3E50')
            ->size(100)
            ->generate()
            ->response('png', 100);
    }
}
