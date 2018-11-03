<?php

namespace App\Http\Controllers\Content;

use App\Thread;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function index()
    {
        return view('content.overview');
    }

    public function definition()
    {
        $problem_thread = Thread::where('title', 'Project Definition')->first();
        return view('content.problem_definition', compact('problem_thread'));
    }

    public function users()
    {
        $users_thread = Thread::where('title', 'Stakeholders and Users')->first();
        return view('content.users_and_stakeholders', compact('users_thread'));
    }

    public function research()
    {
        $research_methods_thread = Thread::where('title', 'Research Methods')->first();
        return view('content.research', compact('research_methods_thread'));
    }

    public function prototyping()
    {
        $problem_thread = Thread::where('title', 'Problem Definition')->first();
        return view('content.problem_definition', compact('problem_thread'));
    }

}
