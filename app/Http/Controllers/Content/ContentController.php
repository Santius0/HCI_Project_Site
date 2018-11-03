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
                'badge_header' => 'Conceptual Design',
                'badge_header_route' => 'proposal.concept',
                'badge_content' => Thread::where('title', 'Conceptual Design')->first()->excerpt(),
//                'date' => '',
                'file_list' => array(['link' => 'https://www.google.com', 'name' => 'Design Doc']),
                'images' => array(['asset_src' => 'images/My_UWI_Owl.png', 'name' => 'concept'])
            ),
            array(
                'badge_header' => 'Conceptual Design',
                'badge_header_route' => 'proposal.concept',
                'badge_content' => Thread::where('title', 'Conceptual Design')->first()->excerpt(),
//                'date' => '',
                'file_list' => array(['link' => 'https://www.google.com', 'name' => 'Design Doc']),
                'images' => array(['src' => 'https://drive.google.com/drive/folders/17DGtvlyBeWRiSsv4i-1sVvoocQmP-a9D', 'name' => 'concept2'])
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
        $group = 'Development Team';
        $people = User::where('user_type', User::DEVELOPER)->get();
        return view('content.people', compact('people', 'group'));
    }

    public function test_users()
    {
        $group = 'Test Users';
        $people = User::where('user_type', User::TEST_USER)->get();
        return view('content.people', compact('people', 'group'));
    }

    public function files()
    {
        $files = [
          ['name' => 'Project Proposal Document', 'link' => 'https://docs.google.com/document/d/1Nu_wGyuH_YlbpmIGzlqsj88UVrqvIiWq4xSjPNMinCY/edit#'],
          ['name' => 'Test User Images', 'link' => 'https://drive.google.com/drive/folders/1bcYFrOGww4_mxx5Pt_mRtlSzloAnYH__'],
        ];
        return view('content.files', compact('files'));
    }



}
