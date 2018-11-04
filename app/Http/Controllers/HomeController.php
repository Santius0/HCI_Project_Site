<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timeline_items = array(
            array(
                'badge_header' => 'Problem Definition',
                'badge_header_route' => 'proposal.definition',
                'badge_content' => Thread::where('title', 'Project Definition')->first()->excerpt(),
            ),
            array(
                'badge_header' => 'Conceptual Design',
                'badge_header_route' => 'proposal.concept',
                'badge_content' => Thread::where('title', 'Conceptual Design')->first()->excerpt(),
            ),
            array(
                'badge_header' => 'Identify Users and Stakeholders',
                'badge_header_route' => 'proposal.users',
                'badge_content' => Thread::where('title', 'Stakeholders and Users')->first()->excerpt(),
            ),
            array(
                'badge_header' => 'Select Research Methods',
                'badge_header_route' => 'research.methods',
                'badge_content' => Thread::where('title', 'Research Methods')->first()->excerpt(),
            ),
            array(
                'badge_header' => 'Recruit Test Users',
                'badge_header_route' => 'people.users',
                'badge_content' => Thread::where('title', 'Recruiting Test Users')->first()->excerpt(),
            ),

            array(
                'badge_header' => 'Research Interviews',
                'badge_header_route' => 'research.results',
                'badge_content' => '',

            ),
            array(
                'badge_header' => 'Initial Application Design',
                'badge_header_route' => 'prototype',
                'badge_content' => 'Design sketches completed',
            ),
            array(
                'badge_header' => 'Self Testing',
                'badge_header_route' => 'research.results',
                'badge_content' => 'Design re-assessed and improved upon.',

            ),
            array(
                'badge_header' => 'Controlled Observation',
                'badge_header_route' => 'research.results',
                'badge_content' => 'Multiple rounds of controller observation and re-design.',
            ),
            array(
                'badge_header' => 'Final LoFi Prototype',
                'badge_header_route' => 'prototype',
                'badge_content' => 'Final LoFi design was  created.',
                'file_list' => array(['link' => 'https://share.proto.io/T4EDZF/', 'name' => 'Final prototype on Proto.io']),
            )
        );
        return view('home', ['timeline_items' => $timeline_items]);
    }
}
