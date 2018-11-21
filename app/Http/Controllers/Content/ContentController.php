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
//                'images' => [
//                    ['src' => 'https://image.ibb.co/dziuxf/3.jpg', 'name' => '1'],
//                    ['src' => 'https://image.ibb.co/f1P1cf/4.jpg', 'name' => '2'],
//                    ['src' => 'https://image.ibb.co/iHcyOL/6.jpg', 'name' => '3'],
//                    ['src' => 'https://image.ibb.co/kTZdOL/7.jpg', 'name' => '4'],
//                ]

            ),array(
                'badge_header' => 'Initial Application Sketches',
                'badge_header_route' => 'prototype.storyboard',
                'badge_content' => 'Multiple design sketches made by the development team.<br>Narrowed down to three ideas that were then further polished.',
            ),array(
                'badge_header' => 'Storyboarding',
                'badge_header_route' => 'prototype.storyboard',
                'badge_content' => 'Single design sketch chosen. Storyboard created, and analysed.',
            ),
            array(
                'badge_header' => 'Initial Application Design',
                'badge_header_route' => 'prototype',
                'badge_content' => '1st Prototype iteration created',
//                 'images' => [
//                    ['src' => 'https://image.ibb.co/nuLwA0/1.jpg', 'name' => '1'],
//                    ['src' => 'https://image.ibb.co/dEGExf/2.jpg', 'name' => '2'],
//                    ['src' => 'https://image.ibb.co/nz2Mcf/3.jpg', 'name' => '3'],
//                    ['src' => 'https://image.ibb.co/ifY53L/4.jpg', 'name' => '4'],
//                    ['src' => 'https://image.ibb.co/hzyiq0/5.jpg', 'name' => '5'],
//                    ['src' => 'https://image.ibb.co/ctPOq0/6.jpg', 'name' => '6'],
//                    ['src' => 'https://image.ibb.co/cZctq0/7.jpg', 'name' => '7'],
//                    ['src' => 'https://image.ibb.co/fosRA0/8.jpg', 'name' => '8'],
//                    ['src' => 'https://image.ibb.co/cmr8OL/9.jpg', 'name' => '9'],
//                ]
            ),
            array(
                'badge_header' => 'Self Testing',
                'badge_header_route' => 'research.results',
                'badge_content' => 'Design re-assessed and improved upon.',
//                'images' => [
//                    ['src' => 'https://image.ibb.co/dbTPV0/IMG-20181101-WA0001.jpg', 'name' => '1'],
//                    ['src' => 'https://image.ibb.co/fnsUxf/IMG-20181101-WA0000.jpg', 'name' => '2'],
//                    ['src' => 'https://image.ibb.co/gKhjV0/IMG-20181102-WA0009.jpg', 'name' => '3'],
//                    ['src' => 'https://image.ibb.co/m3Q4V0/IMG-20181102-WA0008.jpg', 'name' => '4'],
//                    ['src' => 'https://image.ibb.co/ih2jV0/IMG-20181102-WA0004.jpg', 'name' => '5'],
//                    ['src' => 'https://image.ibb.co/nK27iL/IMG-20181102-WA0003.jpg', 'name' => '6'],
//                    ['src' => 'https://image.ibb.co/m11YOL/IMG-20181102-WA0001.jpg', 'name' => '7'],
//                    ['src' => 'https://image.ibb.co/inMBA0/IMG-20181102-WA0002.jpg', 'name' => '8'],
//                ]

            ),
            array(
                'badge_header' => 'Controlled Observation',
                'badge_header_route' => 'research.results',
                'badge_content' => 'Multiple rounds of controller observation and re-design.',
//                 'images' => [
//                    ['src' => 'https://image.ibb.co/eTJuxf/1.jpg', 'name' => '1'],
//                    ['src' => 'https://image.ibb.co/csMQ3L/8.jpg', 'name' => '2'],
//                    ['src' => 'https://image.ibb.co/dOd53L/5.jpg', 'name' => '3'],
//                ]
            ),
            array(
                'badge_header' => 'Final LoFi Prototype',
                'badge_header_route' => 'prototype',
                'badge_content' => 'Final LoFi deign was  created.',
                'file_list' => array(['link' => 'https://share.proto.io/T4EDZF/', 'name' => 'Final prototype on Proto.io']),
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
        $content_thread = Thread::where('title', 'Team Roles')->first();
        $group = 'Development Team';
        $people = User::where('user_type', User::DEVELOPER)->orderBy('name')->get();
        return view('content.people', compact('people', 'group', 'content_thread'));
    }

    public function test_users()
    {
        $content_thread = Thread::where('title', 'Recruiting Test Users')->first();
        $group = 'Test Users';
        $people = User::where('user_type', User::TEST_USER)->orderBy('name')->get();
        return view('content.people', compact('people', 'group', 'content_thread'));
    }

    public function files()
    {
        $files = [
          ['name' => 'Project Proposal Document', 'link' => 'https://docs.google.com/document/d/1TR90babwad7q6gaxcaNVx403_kr3vhGTLZ9gc9swmzA/edit'],
        ];
        return view('content.files', compact('files'));
    }

    public function user_testing()
    {
        return view('content.user_testing');
    }

    public function storyboard()
    {
        $rows = [
            ['task' => 'Access Newsfeed', 'knowledge' => 'UI should encourage users to navigate to newsfeed when an unread alert appears. ', 'comments' => ''],
            ['task' => 'Identify issue requiring immediate attention via Newsfeed. In this case class gas leak information', 'knowledge' => 'Alert shown clearly at top of newsfeed.', 'comments' => 'Alerts and announcements are not easily differentiated from other newsfeed items.'],
            ['task' => 'Obtain all relevant information from newsfeed item', 'knowledge' => 'Ability to view further details clearly communicated to user.', 'comments' => 'Information provided in newsfeed item did not convey all required information'],
            ['task' => 'View further details on item', 'knowledge' => '', 'comments' => ''],
            ['task' => 'View temporary class locations', 'knowledge' => 'Readable timetable view available.', 'comments' => ''],
            ['task' => 'Obtain directions to temporary class locations', 'knowledge' => 'Assumed that user understands google maps UI', 'comments' => ''],
            ['task' => 'Check for changes to situation', 'knowledge' => '', 'comments' => 'Have to search for the original post for updates. No means to effectively do this currently'],
        ];
        $panels = [
            ['image' => asset('images/Storyboard/1.jpg'), 'name' => '1'],
            ['image' => asset('images/Storyboard/2.jpg'), 'name' => '2'],
            ['image' => asset('images/Storyboard/3.jpg'), 'name' => '3'],
            ['image' => asset('images/Storyboard/4.jpg'), 'name' => '4'],
            ['image' => asset('images/Storyboard/5.jpg'), 'name' => '5'],
        ];
        return view('content.storyboard', compact('rows', 'panels'));
    }

    public function sketches()
    {
        return view('content.sketches');
    }

    public function hifi()
    {
        $systems = [
            [     'head' => [
                        'name' => 'Newsfeed',
                        'child' => [
                            'name' => 'View All News Items',
                            'child' => [
                                'name' => 'Select Item',
                                'child' => [
                                    'name' => 'View Item'
                                ]
                            ]
                        ]
                    ]
            ],
            [     'head' => [
                    'name' => 'Classes',
                    'child' => [
                        'name' => 'Subsystem 1.1',
                        'child' => [
                            'name' => 'Subsystem 2.2'
                        ]
                    ]
                ]
          ],
            [     'head' => [
                    'name' => 'Third',
                    'child' => [
                        'name' => 'Subsystem 3.1',
                        'child' => [
                            'name' => 'Subsytem 3.2'
                        ]
                    ]
                ]
          ],
            [     'head' => [
                    'name' => 'Fourth',
                    'child' => [
                        'name' => 'Subsystem 4.1',
                        'child' => [
                            'name' => 'Subsytem 4.2'
                        ]
                    ]
                ]
          ],[     'head' => [
                    'name' => 'Fifth',
                    'child' => [
                        'name' => 'Subsystem 5.1',
                        'child' => [
                            'name' => 'Subsystem 5.2'
                        ]
                    ]
                ]
          ],
        ];
        return view('content.hifi', compact('systems'));
//        return redirect(asset('Prototype/index.html'));
    }

    public function heuristic_eval()
    {
        $heuristics = [
            ['title' => 'Visibility of system status',
                'description'=>'Always keep users informed about what is going on,through appropriate feedback within reasonable time. For example, if a system operation will take some time, give an indication of how long and how much is complete.',
                'responses' => [
                    ['body' => 'The buttons from experience from other applications says what to expect.', 'author' => 'Maya', 'rating' => 2],
                    ['body' => 'The visibility of system statuses could be more visible and impactful, but this is not really a problem as it is sufficient. For example, when scrolling to the bottom of the News Feed and Alerts screens the screen heading disappear. This may confuse the user as to what part of the application they are using.', 'author' => 'Keneil', 'rating' => 3],
                ],
                'rating' => 2.2
            ],
            ['title' => 'Match between system and the real world',
                'description'=>'The system should speak the user’s language, with words, phrases and concepts familiar to the user, rather than system-oriented terms. Follow real-world conventions, making information appear in natural and logical order.',
                'responses' => [],
                'rating' => 2.55
            ],
            ['title' => 'User control and freedom',
                'description'=>'Users often choose system functions by mistake and need a clearly marked ‘emergency exit’ to leave the unwanted state without having to go through an extended dialog. Support undo and redo.',
                'responses' => [],
                'rating' => 4.4
            ],
            ['title' => 'Consistency and standards',
                'description'=>'Users should not have to wonder whether words, situations or actions mean the same thing in different contexts. Follow platform conventions and accepted standards.',
                'responses' => [],
                'rating' => 3.4
            ],
            ['title' => 'Error prevention',
                'description'=>'Make it difficult to make errors. Even better than good error messages is a careful design that prevents a problem from occurring in the first place.',
                'responses' => [],
                'rating' => 3.45
            ],
            ['title' => 'Recognition rather than recall',
                'description'=>'Make objects, actions and options visible. The user should not have to remember information from one part of the dialog to another. Instructions for use of the system should be visible or easily retrievable whenever appropriate.',
                'responses' => [],
                'rating' => 33
            ],
            ['title' => 'Flexibility and efficiency of use',
                'description'=>'Allow users to tailor frequent actions. Accelerators – unseen by the novice user – may often speed up the interaction for the expert user to such an extent that the system can cater to both inexperienced and experienced users.',
                'responses'=>[],
                'rating' => 34.3
                ],
            ['title' => 'Aesthetic and minimalist design',
                'description'=>'Dialogs should not contain information that is irrelevant or rarely needed. Every extra unit of information in a dialog competes with the relevant units of information and diminishes their relative visibility.',
                'responses'=>[],
                'rating' => 34.3
            ],
            ['title' => 'Help users recognize, diagnose and recover from errors',
                'description'=>'Error messages should be expressed in plain language (no codes), precisely indicate the problem, and constructively suggest a solution.',
                'responses'=>[],
                'rating' => 34.3
            ],
            ['title' => 'Help and documentation',
                'description'=>'Few systems can be used with no instructions so it may be necessary to provide help and documentation. Any such information should be easy to search, focused on the user’s task, list concrete steps to be carried out, and not be too large.',
                'responses'=>[],
                'rating' => 34.3
            ],
        ];
        $results = Thread::where('rating', 2)->get();
        return view('content.heuristic_eval', compact('results', 'heuristics'));
    }

    public function brainstorming()
    {
        return view('content.brainstorming');
    }
}
