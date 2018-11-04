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
                'badge_header' => 'Identify Development Team Member Roles',
                'badge_header_route' => 'people.devs',
                'badge_content' => Thread::where('title', 'Team Roles')->first()->excerpt(),
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
                'badge_header' => 'Interviews',
                'badge_header_route' => 'prototype.testing',
                'badge_content' => 'Test users are interviewed.',

            ),
            array(
                'badge_header' => 'Initial Application Design',
                'badge_header_route' => 'prototype',
                'badge_content' => 'Initial design sketches completed.',
            ),
            array(
                'badge_header' => 'Self Testing',
                'badge_header_route' => 'prototype.testing',
                'badge_content' => 'Initial design assessed by team using multiple scenarios.',

            ),
            array(
                'badge_header' => 'Second Application Design',
                'badge_header_route' => 'prototype',
                'badge_content' => 'Initial design re-assessed and improved upon.',

            ),
            array(
                'badge_header' => 'Controlled Observation',
                'badge_header_route' => 'prototype.testing',
                'badge_content' => 'Users were provided with a prototype and asked to attempt to navigate to the nest of their abilities.',
            ),
            array(
                'badge_header' => 'Final LoFi Prototype',
                'badge_header_route' => 'prototype',
                'badge_content' => 'Final LoFi prototype was created.',
                'file_list' => array(
                    ['link' => 'https://share.proto.io/T4EDZF/', 'name' => 'Final prototype on Proto.io'],
                    ['link' => 'https://docs.google.com/document/d/1Nu_wGyuH_YlbpmIGzlqsj88UVrqvIiWq4xSjPNMinCY/edit#', 'name' => 'Finalised Project Proposal and Research Document'],
                ),
            )
        );
        return view('home', ['timeline_items' => $timeline_items]);
    }
}
