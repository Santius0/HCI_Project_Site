<?php

namespace App\Queries;

use App\Thread;
use Illuminate\Contracts\Pagination\Paginator;

final class SearchThreads
{
    /**
     * @return \App\Thread[]
     */
    public static function get(string $keyword, int $perPage = 20): Paginator
    {
        return Thread::feedQuery()
            ->where('threads.subject', 'LIKE', "%$keyword%")
            ->orWhere('threads.body', 'LIKE', "%$keyword%")
            ->paginate($perPage)
            ->appends(['search' => $keyword]);
    }
}
