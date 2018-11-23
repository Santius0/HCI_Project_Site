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
                'badge_header' => 'Idea Brainstorming',
                'badge_header_route' => 'brainstorming',
                'badge_content' => '3 ideas presented and before a single one is selected',
            ),
            array(
                'badge_header' => 'Conceptual Design',
                'badge_header_route' => 'proposal',
                'badge_content' => Thread::where('title', 'Conceptual Design')->first()->excerpt(),
                'in_page_id' => '#conceptual-design'
            ),
            array(
                'badge_header' => 'Problem Definition',
                'badge_header_route' => 'proposal',
                'badge_content' => Thread::where('title', 'Project Definition')->first()->excerpt(),
                'in_page_id' => '#problem-definition'
            ),
            array(
                'badge_header' => 'Identify Users and Stakeholders',
                'badge_header_route' => 'proposal',
                'badge_content' => Thread::where('title', 'Stakeholders and Users')->first()->excerpt(),
                'in_page_id' => '#users-and-stakeholders'
            ),
            array(
                'badge_header' => 'Identify Development Team Member Roles',
                'badge_header_route' => 'people.devs',
                'badge_content' => Thread::where('title', 'Team Roles')->first()->excerpt(),
            ),
            array(
                'badge_header' => 'Select Research Methods',
                'badge_header_route' => 'proposal',
                'badge_content' => Thread::where('title', 'Research Methods')->first()->excerpt(),
                'in_page_id' => '#research-methods'
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
                'badge_header' => 'Initial Application Sketches Made',
                'badge_header_route' => 'prototype.sketches',
                'badge_content' => 'Multiple design sketches made by the development team. Narrowed down to three ideas that were then further polished.',
                'in_page_id' => '#chosen-sketches'
            ),
            array(
                'badge_header' => 'Self Testing',
                'badge_header_route' => 'research.results',
                'badge_content' => 'LoFi prototype assessed by team using multiple scenarios and appropriate changes made.',
                'in_page_id' => '#self-testing',
            ),
            array(
                'badge_header' => 'Controlled Observation',
                'badge_header_route' => 'research.results',
                'badge_content' => 'Users were provided with a prototype and asked to attempt to navigate to the best of their abilities.',
                'in_page_id' => '#controlled-observation',
            ),
            array(
                'badge_header' => 'Initial LoFi Prototype Developed',
                'badge_header_route' => 'prototype',
                'badge_content' => 'Final LoFi prototype completed, using paper.',
            ),
            array(
                'badge_header' => 'Storyboarding',
                'badge_header_route' => 'prototype.storyboard',
                'badge_content' => 'Initial LoFi prototype used to create storyboard.',
                'in_page_id' => '#storyboard'
            ),
            array(
                'badge_header' => 'Video Demo Created',
                'badge_header_route' => 'prototype.storyboard',
                'badge_content' => 'Video demo using storyboard uploaded.',
                'in_page_id' => '#video'
            ),

            array(
                'badge_header' => 'Task Centered Walkthrough',
                'badge_header_route' => 'prototype.storyboard',
                'badge_content' => 'Task centered walkthrough using storyboard carried out.',
                'in_page_id' => '#walkthrough',

            ),
            array(
                'badge_header' => 'MedFi Prototype Developed',
                'badge_header_route' => 'prototype',
                'badge_content' => 'Initial design re-assessed and improved upon after storyboarding and self testing to make develop a medium fidelity prototype.',
                'in_page_id' => '#medfi-prototype',

            ),
            array(
                'badge_header' => 'HiFi Prototype Developed',
                'badge_header_route' => 'hifi.eval',
                'badge_content' => 'LoFi prototype design improved upon and used to develop HiFi prototype.',
                'file_list' =>[
                    ['name' => 'See HiFi Prototype 1.0', 'link' => asset('HiFi_Prototype/HiFi_Prototype_1.0/index.html')],
                ]

            ),
            array(
                'badge_header' => 'Heuristic Evaluation',
                'badge_header_route' => 'hifi.eval',
                'badge_content' => 'Heuristic evaluation carried out using HiFi prototype.',
                'in_page_id' => '#evaluation'
            ),
            array(
                'badge_header' => 'Final HiFi Prototype Developed',
                'badge_header_route' => 'hifi.eval',
                'badge_content' => 'Using feedback from heuristic analysis, HiFi prototype was improved upon.',
                'in_page_id' => '#evaluation',
                'file_list' =>[
                    ['name' => 'See HiFi Prototype 1.1', 'link' => asset('HiFi_Prototype/HiFi_Prototype_1.1/index.html')],
                ]
            ),
            array(
                'badge_header' => 'Final Document',
                'badge_header_route' => 'hifi.eval',
                'badge_content' => 'Final document created.',
                'in_page_id' => '#evaluation',
                'file_list' =>[
                    ['name' => 'Final Document', 'link' => asset('HiFi_Prototype/HiFi_Prototype_1.1/index.html')],
                ]
            ),
        );
        return view('home', ['timeline_items' => $timeline_items]);
    }
}
