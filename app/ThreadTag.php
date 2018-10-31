<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreadTag extends Model
{
    const TABLE = 'thread_tag';
    protected $table = self::TABLE;
    protected $fillable = ['thread_id', 'tag_id'];

    public function id(): int
    {
        return $this->id;
    }

    public function thread_id(): int
    {
        return $this->thread_id;
    }

    public function tag_id(): int
    {
        return $this->tag_id;
    }
}
