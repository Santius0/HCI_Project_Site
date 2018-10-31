<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;
use Carbon\Carbon;

class Comment extends Model
{
    const TABLE = 'comments';
//    const THREAD_COMMENT = 1;
//    const REPLY = 2;

    protected $table = self::TABLE;
    protected $fillable = ['body', 'author_id', 'parent_id', 'type'];

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function author()
    {
        return User::find($this->author_id());
    }

    public function excerpt(): string
    {
        return strip_tags(Markdown::convertToHtml($this->body()));
    }

    public function parent_id()
    {
        return $this->parent_id;
    }

    public function author_id(): int
    {
        return $this->author_id;
    }

    public function child_count(): int
    {
        return $this->child_count;
    }

    public function most_recent_child_id(): int
    {
        return $this->most_recent_child_id;
    }

    public function type(): int
    {
        return $this->type;
    }

    public function createdAt(): Carbon
    {
        return $this->created_at;
    }

    public function updatedAt(): Carbon
    {
        return $this->updated_at;
    }
}
