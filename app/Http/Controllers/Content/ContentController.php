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
        return view('content.project_proposal');
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
          ['name' => 'Project Brainstorming - Assignment 1', 'link' => asset('files_and_docs/Project_Brainstorming_A1.pdf')],
          ['name' => 'Project Proposal Document - Assignment 2', 'link' => asset('files_and_docs/Project_Proposal_A2.pdf')],
          ['name' => 'Application Design - Assignment 3', 'link' => asset('files_and_docs/Application_Design_A3.pdf')],
          ['name' => 'HiFi Prototype and Heuristic Analysis - Assignment 4', 'link' => asset('files_and_docs/HiFi_Prototype_and_Heuristic_Analysis_A4.pdf')],
          ['name' => 'Final Project Document - Assignment 5', 'link' => asset('files_and_docs/Final_Document_A5.pdf')],
        ];
        $image_files = [
            ['name' => 'Group Brainstorming Images', 'link' => asset('files_and_docs/Brainstorm.zip')],
            ['name' => 'Initial Design Sketches', 'link' => asset('files_and_docs/Design_Sketches.zip')],
            ['name' => 'Affinity Diagram Images', 'link' => asset('files_and_docs/Affinity_Diagram.zip')],
            ['name' => 'Storyboard Images', 'link' => asset('files_and_docs/Storyboard.zip')],
            ['name' => 'LoFi Prototype', 'link' => asset('files_and_docs/LoFi.zip')],
            ['name' => 'MedFi Prototype', 'link' => asset('files_and_docs/MedFi.zip')],
        ];
        return view('content.files', compact('files', 'image_files'));
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
                    ['body' => 'The visibility of system statuses could be more visible and impactful, but this is not really a problem as it is sufficient. For example, when scrolling to the bottom of the News Feed and Alerts screens the screen heading disappear. This may confuse the user as to what part of the application they are using.', 'author' => 'Keneil', 'rating' => 0],
                    ['body' => 'The button assets used are commonly used in other applications', 'author' => 'Maya', 'rating' => 0],
                ],
            ],
            ['title' => 'Match between system and the real world',
                'description'=>'The system should speak the user’s language, with words, phrases and concepts familiar to the user, rather than system-oriented terms. Follow real-world conventions, making information appear in natural and logical order.',
                'responses' => [
                    ['body' => 'Colour coding of alerts could make visual ranking easier as users will know by first glance what to take note of first.', 'author' => 'Maya', 'rating' => 1],
                    ['body' => 'Some components of the system may not be as close to real-world conventions, but are easy enough to understand and map to real-world actions. For example, some individual alerts in the Alerts screen may have a higher priority to the user but they are not particularly highlighted except for the different symbols fixed next to the alert.', 'author' => 'Keneil', 'rating' => 0],
                    ['body' => 'Certain alerts will have a higher level of immediate importance to students, dependant on their current location, and/or if the alert directly affects them. Currently all alerts are treated equally for all users.', 'author' => 'Sergio', 'rating' => 1],
                ],
            ],
            ['title' => 'User control and freedom',
                'description'=>'Users often choose system functions by mistake and need a clearly marked ‘emergency exit’ to leave the unwanted state without having to go through an extended dialog. Support undo and redo.',
                'responses' => [
                    ['body' => 'The system provides adequate support for exiting states, undo, and redo. It may just take the user a little more time to do this in screens such as News Feeds and Alerts because of the scrolling feature they have, but this is not necessarily a problem.', 'author' => 'Keniel', 'rating' => 0],
                    ['body' => 'Colour coding of alerts could make visual ranking easier as users will know by first glance what to take note of first.', 'author' => 'Maya', 'rating' => 1],
                    ['body' => "Users have to tap a 'back' button 1-2 times to return from certain interfaces", 'author' => 'Sergio', 'rating' => 0],
                ],
            ],
            ['title' => 'Consistency and standards',
                'description'=>'Users should not have to wonder whether words, situations or actions mean the same thing in different contexts. Follow platform conventions and accepted standards.',
                'responses' => [
                    ['body' => 'Familiar buttons with different functions will cause confusion for first time users.', 'author' => 'Maya', 'rating' => 1],
                    ['body' => 'The checks next to the gates on the Campus Status screen appear as though they can be clicked (not supposed to be clicked). This may confuse the user a bit, but is not a huge problem that would need to be fixed given the time constraint', 'author' => 'Keneil', 'rating' => 1],
                    ['body' => 'Campus Status page, checkboxes looks clickable(can be changed by user).', 'author' => 'Liam', 'rating' => 1],
                    ['body' => 'Some UI elements such as the checkboxes in the Campus Status and Shuttle Service interfaces may look clickable to some users though they are not.', 'author' => 'Sergio', 'rating' => 2],
                ],
            ],
            ['title' => 'Error prevention',
                'description'=>'Make it difficult to make errors. Even better than good error messages is a careful design that prevents a problem from occurring in the first place.',
                'responses' => [
                    ['body' => 'The minimal amount of user input means less errors are expected, however layout will always be an issue depending on the user(font size, colour scheme, spacing, ordering of items, search restrictions).', 'author' => 'Maya', 'rating' => 0],
                    ['body' => 'The distance between each item in the menu pane may be too little for users with large hands. This may cause incorrect selections to be made', 'author' => 'Keneil', 'rating' => 1],
                    ['body' => 'Users may click on the wrong item on the newsfeed element at times due to the size of the device and distance between the elements.', 'author' => 'Sergio', 'rating' => 1],
                ],
            ],
            ['title' => 'Recognition rather than recall',
                'description'=>'Make objects, actions and options visible. The user should not have to remember information from one part of the dialog to another. Instructions for use of the system should be visible or easily retrievable whenever appropriate.',
                'responses' => [
                    ['body' => 'App is minimalistic, limited options for impactful data.', 'author' => 'Maya', 'rating' => 0],
                    ['body' => 'Users may have to remember where the button to go to the menu button is when scrolling down screens. The user may have to remember where the button is. This is not a huge problem but it can be fixed if time permits .', 'author' => 'Keneil', 'rating' => 1],
                    ['body' => 'Menu is hidden until accessed, as a result, it is not immediately obvious to a new user of the application how to access the less commonly accessed screens such as Campus Directory, Shuttle Service or Campus Map.', 'author' => 'Sergio', 'rating' => 1],
                ],
            ],
            ['title' => 'Flexibility and efficiency of use',
                'description'=>'Allow users to tailor frequent actions. Accelerators – unseen by the novice user – may often speed up the interaction for the expert user to such an extent that the system can cater to both inexperienced and experienced users.',
                'responses'=>[
                    ['body' => 'The app caters to new and experienced users. However a tutorial or help dialog can be helpful for the rare cases.', 'author' => 'Maya', 'rating' => 1],
                    ['body' => 'The application doesn’t allow for tailoring actions. This is not a problem.', 'author' => 'Keneil', 'rating' => 1],
                    ['body' => "Doesn't allow for user to pin alert types.", 'author' => 'Liam', 'rating' => 1],
                    ['body' => "No acceleration options available to for experienced users.", 'author' => 'Sergio', 'rating' => 1],

                ],
            ],
            ['title' => 'Aesthetic and minimalist design',
                'description'=>'Dialogs should not contain information that is irrelevant or rarely needed. Every extra unit of information in a dialog competes with the relevant units of information and diminishes their relative visibility.',
                'responses'=>[
                    ['body' => "Hardly any dialog and the information is concise and useful.", 'author' => 'Maya', 'rating' => 0],
                    ['body' => "The application contains very little irrelevant information. This is not a problem.", 'author' => 'Keneil', 'rating' => 0],
                    ['body' => "Added notifications in Alert notices.", 'author' => 'Liam', 'rating' => 1],
                    ['body' => "Newsfeed can look cluttered at times due to the amount of information that has to be delivered at a glance.", 'author' => 'Sergio', 'rating' => 0],
                ],
            ],
            ['title' => 'Help users recognize, diagnose and recover from errors',
                'description'=>'Error messages should be expressed in plain language (no codes), precisely indicate the problem, and constructively suggest a solution.',
                'responses'=>[
                    ['body' => "Errors are explained in the most layman way.", 'author' => 'Maya', 'rating' => 1],
                    ['body' => "The error messages may be a little vague at times. This is not a huge problem.", 'author' => 'Keneil', 'rating' => 1],
                    ['body' => "Error messages should consist of one line. Short and sweet.", 'author' => 'Liam', 'rating' => 0],
                    ['body' => "Error messages could be more user friendly.", 'author' => 'Sergio', 'rating' => 1],
                ],
            ],
            ['title' => 'Help and documentation',
                'description'=>'Few systems can be used with no instructions so it may be necessary to provide help and documentation. Any such information should be easy to search, focused on the user’s task, list concrete steps to be carried out, and not be too large.',
                'responses'=>[
                    ['body' => "Documentation and a form of instructions can be added, but the simplistic nature of the app do not demand it.", 'author' => 'Maya', 'rating' => 2],
                    ['body' => "The system does not offer enough instructions to the user. The system relies on user intuition. This should be fixed but should be given a low priority.", 'author' => 'Keneil', 'rating' => 2],
                    ['body' => "If there is a concern with the timetable date/time, no steps on who to contact.", 'author' => 'Liam', 'rating' => 2],
                    ['body' => "No user documentation is available to guide new users and help existing ones.", 'author' => 'Sergio', 'rating' => 1],
                ],
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
