<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Arrayable;

final class GithubUser implements Arrayable
{
    /**
     * @var array
     */
    private $attributes;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function isTooYoung(): bool
    {
        return $this->createdAt() > $this->twoWeeksAgo();
    }

    public function createdAt(): Carbon
    {
        return new Carbon($this->get('created_at'));
    }

    private function twoWeeksAgo(): Carbon
    {
        return Carbon::now()->subDays(14);
    }

    private function get($name)
    {
        return array_get($this->attributes, $name);
    }

    public function getId()
    {
        return $this->get('id');
    }

    public function getName()
    {
        return $this->get('name');
    }

    public function getEmail()
    {
        return $this->get('email');
    }

    public function getUsername()
    {
        return $this->get('login');
    }

    public function toArray(): array
    {
        return [
            'id' => $this->get('id'),
            'name' => $this->get('name'),
            'email' => $this->get('email'),
            'username' => $this->get('login'),
        ];
    }
}
