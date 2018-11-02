<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class Thread extends Model
{
    const TABLE = 'threads';

    protected $table = self::TABLE;
    protected $fillable = ['author_id', 'title', 'body'];

    public function id(): int
    {
        return $this->id;
    }

    public function author_id(): int {
        return $this->author_id;
    }

    public function author(): User
    {
        return User::find($this->author_id);
    }

    public function title(): string
    {
        return $this->title;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function displayBody()
    {
        Markdown::convertToHtml($this->body());
    }

    public function excerpt(int $limit = 100): string
    {
        return str_limit(strip_tags(Markdown::convertToHtml($this->body())), $limit);
    }

    public function tags()
    {
        $thread_tags = ThreadTag::where('thread_id', $this->id)->get()->pluck('tag_id');
        $tags = array();
        foreach ($thread_tags as $thread_tag){
            $tags[] = Tag::find($thread_tag);
        }
        return $tags;
    }

    public function tags_ids()
    {
        $thread_tags = ThreadTag::where('thread_id', $this->id)->get()->pluck('tag_id');
        $tags = array();
        foreach ($thread_tags as $thread_tag){
            $tags[] = Tag::find($thread_tag)->only('id');
        }
        return $tags;
    }

    public function comments()
    {
        return Comment::where('parent_id', $this->id())->get();
    }

    public function createdAt(): Carbon
    {
        return $this->created_at;
    }

    public function updatedAt(): Carbon
    {
        return $this->updated_at;
    }

    /**
     * @return \App\Thread[]
     */
    public static function feed(int $limit = 20): Collection
    {
        return static::feedQuery()->limit($limit)->get();
    }

    /**
     * @return \App\Thread[]
     */
    public static function feedPaginated(int $perPage = 20): Paginator
    {
        return static::feedQuery()->paginate($perPage);
    }

    /**
     * @return \App\Thread[]
     */
    public static function feedByTagPaginated(Tag $tag, int $perPage = 20): Paginator
    {
        return static::feedQuery()
            ->join('taggables', function ($join) use ($tag) {
                $join->on('threads.id', 'taggables.taggable_id')
                    ->where('taggable_type', static::TABLE);
            })
            ->where('taggables.tag_id', $tag->id())
            ->paginate($perPage);
    }

    /**
     * This will order the threads by creation date and latest reply.
     */
    public static function feedQuery(): Builder
    {
        return static::leftJoin('replies', function ($join) {
            $join->on('threads.id', 'replies.replyable_id')
                ->where('replies.replyable_type', static::TABLE);
        })
            ->orderBy('latest_creation', 'DESC')
            ->groupBy('threads.id')
            ->select('threads.*', DB::raw('
                CASE WHEN COALESCE(MAX(replies.created_at), 0) > threads.created_at
                THEN COALESCE(MAX(replies.created_at), 0)
                ELSE threads.created_at
                END AS latest_creation
            '));
    }
}
