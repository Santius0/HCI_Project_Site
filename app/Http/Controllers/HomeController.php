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
                'badge_header' => 'Assess Research Results',
                'badge_header_route' => 'research.results',
                'badge_content' => 'Using information gathered from the interviews, the application design process began.',
            ),
            array(
                'badge_header' => 'Initial Application Sketches',
                'badge_header_route' => 'prototype.sketches',
                'badge_content' => 'Multiple design sketches made by the development team.<br>Narrowed down to three ideas that were then further polished.',
            ),array(
                'badge_header' => 'Storyboarding',
                'badge_header_route' => 'prototype.storyboard',
                'badge_content' => 'Single design sketch chosen. Storyboard created, and analysed.',
            ),
            array(
                'badge_header' => 'Initial Application Prototype',
                'badge_header_route' => 'prototype',
                'badge_content' => 'Initial design sketches completed.',
            ),
            array(
                'badge_header' => 'Self Testing',
                'badge_header_route' => 'prototype.testing',
                'badge_content' => 'Initial design assessed by team using multiple scenarios and appropriate changes made.',

            ),
            array(
                'badge_header' => 'Second Application Prototype',
                'badge_header_route' => 'prototype',
                'badge_content' => 'Initial design re-assessed and improved upon.',

            ),
            array(
                'badge_header' => 'Controlled Observation',
                'badge_header_route' => 'prototype.testing',
                'badge_content' => 'Users were provided with a prototype and asked to attempt to navigate to the nest of their abilities.',
            ),
            array(
                'badge_header' => 'Assess Research Results #2',
                'badge_header_route' => 'research.results',
                'badge_content' => 'Using the data gathered during the controlled observation experiment the application prototype was further modified.',
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
