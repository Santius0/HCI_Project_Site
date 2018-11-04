<?php

namespace App\Http\Controllers\Content;

use App\Thread;
use App\User;
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

    public function proposal()
    {
        $problem_thread = Thread::where('title', 'Project Definition')->first();
        return view('content.problem_definition', compact('problem_thread'));
    }

    public function users()
    {
        $users_thread = Thread::where('title', 'Stakeholders and Users')->first();
        return view('content.users_and_stakeholders', compact('users_thread'));
    }

    public function research_methods()
    {
        $research_methods_thread = Thread::where('title', 'Research Methods')->first();
        return view('content.research_methods', compact('research_methods_thread', 'survey'));
    }

    public function research_results()
    {
        $research_results_thread = Thread::where('title', 'Research Results')->first();
        return view('content.research_results', compact('research_results_thread'));
    }

    public function research()
    {
        $research_results_thread = Thread::where('title', 'Research Results')->first();
        return view('content.research_results', compact('research_results_thread'));
    }

    public function prototype()
    {
        $reflection_thread = Thread::where('title', 'Reflection')->first();
        return view('content.prototype_overview', compact('reflection_thread'));
    }

    public function prototype_timeline()
    {
        $timeline_items = array(
            array(
                'badge_header' => 'Problem Definition',
                'badge_header_route' => 'proposal.definition',
                'badge_content' => Thread::where('title', 'Project Definition')->first()->excerpt(),
//                'date' => '',
//                'file_list' => array(['link' => 'https://www.google.com', 'name' => 'Design Doc']),
//                'images' => [
//                    ['asset_src' => 'images/My_UWI_Owl.png', 'name' => 'concept'],
//                    ['src' => 'https://drive.google.com/drive/folders/17DGtvlyBeWRiSsv4i-1sVvoocQmP-a9D', 'name' => 'concept2']
//                ]
            ),
            array(
                'badge_header' => 'Conceptual Design',
                'badge_header_route' => 'proposal.concept',
                'badge_content' => Thread::where('title', 'Conceptual Design')->first()->excerpt(),
//                'file_list' => array(['link' => 'https://www.google.com', 'name' => 'Design Doc']),
//                'images' => [
//                    ['asset_src' => 'images/My_UWI_Owl.png', 'name' => 'concept'],
//                    ['src' => 'https://drive.google.com/drive/folders/17DGtvlyBeWRiSsv4i-1sVvoocQmP-a9D', 'name' => 'concept2']
//                ]
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
//                'file_list' => array(['link' => 'https://www.google.com', 'name' => 'Survey Questions']),

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
                'images' => [
                    ['src' => asset('images/Users/1.jpg'), 'name' => '1'],
                    ['src' => asset('images/Users/2.jpg'), 'name' => '2'],
                    ['src' => asset('images/Users/3.jpg'), 'name' => '3'],
                    ['src' => asset('images/Users/4.jpg'), 'name' => '4'],
                    ['src' => asset('images/Users/5.jpg'), 'name' => '5'],
                    ['src' => asset('images/Users/6.jpg'), 'name' => '6'],
                    ['src' => asset('images/Users/7.jpg'), 'name' => '7'],
                    ['src' => asset('images/Users/8.jpg'), 'name' => '8'],
                    ['src' => asset('images/Users/9.jpg'), 'name' => '9'],
                ]

            ),
            array(
                'badge_header' => 'Initial Application Design',
                'badge_header_route' => 'prototype',
                'badge_content' => 'Design sketches completed',
                 'images' => [
                ['src' => asset('images/Design_Sketch/1.jpeg'), 'name' => '1'],
                ['src' => asset('images/Design_Sketch/2.jpeg'), 'name' => '2'],
                ['src' => asset('images/Design_Sketch/3.jpeg'), 'name' => '3'],
                ['src' => asset('images/Design_Sketch/4.jpeg'), 'name' => '4'],
                ['src' => asset('images/Design_Sketch/5.jpeg'), 'name' => '5'],
                ['src' => asset('images/Design_Sketch/6.jpeg'), 'name' => '6'],
                ['src' => asset('images/Design_Sketch/7.jpeg'), 'name' => '7'],
                ['src' => asset('images/Design_Sketch/8.jpeg'), 'name' => '8'],
                ['src' => asset('images/Design_Sketch/9.jpeg'), 'name' => '9'],
    ]
            )
        );
        return view('content.timeline', ['timeline_items' => $timeline_items]);
    }

    public function concept()
    {
        $concept_thread = Thread::where('title', 'Conceptual Design')->first();
        return view('content.concept', compact('concept_thread'));;
    }

    public function development_team()
    {
        $content_thread = Thread::where('title', 'Recruiting Test Users')->first();
        $group = 'Development Team';
        $people = User::where('user_type', User::DEVELOPER)->orderBy('name')->get();
        return view('content.people', compact('people', 'group', 'content_thread'));
    }

    public function test_users()
    {
        $group = 'Test Users';
        $people = User::where('user_type', User::TEST_USER)->orderBy('name')->get();
        return view('content.people', compact('people', 'group'));
    }

    public function files()
    {
        $files = [
          ['name' => 'Project Proposal Document', 'link' => 'https://docs.google.com/document/d/1Nu_wGyuH_YlbpmIGzlqsj88UVrqvIiWq4xSjPNMinCY/edit#'],
//          ['name' => 'Test User Images', 'link' => 'https://drive.google.com/drive/folders/1bcYFrOGww4_mxx5Pt_mRtlSzloAnYH__'],
        ];
        return view('content.files', compact('files'));
    }



}
