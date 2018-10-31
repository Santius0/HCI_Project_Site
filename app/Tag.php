<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    const TABLE = 'tags';

    protected $table = self::TABLE;
    protected $fillable = ['name', 'description'];

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string
    {
        return $this->description;
    }

}
