<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const DEFAULT = 1;
    const DEVELOPER = 2;
    const PROFESSOR = 3;
    const ADMIN = 4;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password', 'user_type', 'bio', 'github_id', 'github_username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function emailAddress(): string
    {
        return $this->email;
    }

    public function username(): string
    {
        return $this->username;
    }

    public function user_type(): int
    {
        return $this->user_type;
    }

    public function bio()
    {
        return $this->bio;
    }

    public function githubUsername()
    {
        return $this->github_username;
    }

    public function gravatarUrl($size = 100): string
    {
        $hash = md5(strtolower(trim($this->email)));
        $default = urlencode(route('avatar', ['username' => $this->username()]));
//        $default = urlencode("https://img.icons8.com/color/50/000000/avatar.png");

        return "https://www.gravatar.com/avatar/$hash?d=$default&s=$size";
    }

    public static function findByUsername(string $username): self
    {
        return static::where('username', $username)->firstOrFail();
    }

    public static function findByEmailAddress(string $emailAddress): self
    {
        return static::where('email', $emailAddress)->firstOrFail();
    }

    public static function findByGithubId(string $githubId): self
    {
        return static::where('github_id', $githubId)->firstOrFail();
    }
}
