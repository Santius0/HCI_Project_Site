@extends('content.base')
@title('Problem Definition')

@section('post_body')
    <div id="conceptual-design">
        <h3>Conceptual Project Design</h3>
        <h4>Project Goals</h4>
        <ul>
            <li><p>News/bulletin board – Publications can be made by the correct roles to inform the masses.</p></li>
            <li><p>Safety Alerts- Campus police, Student Council and Campus Administration can make alerts about dangers or critical matters happening around campus.</p></li>
            <li><p>Administration Alerts- Inform students and staff of important events, dates, deadlines and changes.</p></li>
            <li><p>Class alerts- Alert students of class relocation or cancellations.</p></li>
            <li><p>Faculty alerts- news about Departments and Faculties for specific categories of students.</p></li>
            <li><p>Interactive Maps – Helps students locate classrooms and buildings using GPS and geotags.</p></li>
            <li><p>Shuttle services – Campus Police and shuttle drivers can share location, activity and routes currently covered to students and staff.</p></li>
            <li><p>News/bulletin board – Publications can be made by the correct roles to inform the masses.</p></li>
        </ul>
    </div>
    <br>
    <div id="problem-definition">
        <h3>Problem Definition</h3>
        <p>
            <b><i>My UWI</i></b> is A multifaceted mobile application focusing on assisting members of the University of the West Indies’s student population via efficient information delivery and data collection & analysis.
            <br>
        </p>
            Key Features:
            <ul>
               <li>
                   <p>
                       Information Delivery - <br>
                       With the cooperation of the appropriate parties, this application will deliver relevant information to students through an alert/notification system. Some such notifications and parties are; Safety warnings issued by the Campus Police, event reminders from the Student Council and important event dates as well as class/exam relocation from Campus Administration.
                   </p>
               </li>
                <li>
                   <p>
                       Data Collection - <br>
                       My UWI will gather and store usage data. In addition to this, students will be able to submit complaints relevant to the university through the application. By analysing this crowd sourced data the application will be able to ascertain certain trends such as popular meeting areas, unsafe areas and popular parking locations for example. This data will also be passed on to the university, allowing them to make more informed decisions regarding the student body moving forward
                   </p>
                </li>
            </ul>
    </div>
    <br>
    <div id="users-and-stakeholders">
        <h3>Users and Stakeholders</h3>
        <p>
            This application will cater to students, staff  and alumni of the University of the West Indies, St. Augustine.
            Though the application’s stakeholders and users include persons along a wide age range it’s design will be focused towards its younger generation of users (will not cater for older, persons who are less comfortable with technology). This is due the fact that the bulk of the application’s target user population will be students whose average age is between 17 and 27 years old.
            The application will be easily accessible to anyone familiar with modern day smartphones, requiring no prior training. It will tackle a myriad of problems the university populace deals with daily, ranging from the inefficient delivery of announcements via emails that often go unread to the frustrating experience of dealing with any changing parking changes often missed as they are delivered in the campus newsletter.
        </p>
    </div>
    <br>
    <div id="research-methods">
        <h3>Research Methods</h3>
        <ul>
            <li><p>
                    <b>Interview:</b> Interviews provide a controlled question environment with physical interaction that allows us (the developers) to observe
                    the facial expressions, vocal tone and body language of each test user. This provides the necessary information for us to determine
                    what users want out of our system.A series of selected questions will be used to ascertain the user’s feelings towards the current
                    systems, both their successes and shortcomings, as well as how effective they believe our proposed system will be at alleviating
                    those shortcomings. The openness and flexibility of the interview also allows for user input to help us determine what features the
                    application is missing, are redundant or should be modified.
                    <br><br>
                </p>
            </li>
            <li><p>
                    <b>Self-testing:</b> As our development team consists entirely of members of our target user base, that is, students of The University of
                    the West Indies we have experience with some of the issues application aims to alleviate. Using our personal experience as a reference we
                    will create scenarios and perform set tasks based on these scenarios using our prototype. Using feedback from each member of the
                    development team, in conjunction with that of the test users a new prototype will be created. This will be repeated until a final lo-fi
                    prototype is created.
                    <br><br>
                </p>
            </li>

            <li><p>
                    <b>Controlled observation:</b> To be performed after the interview and initial review of the prototype. This will allow us to see how
                    users will interact with our proposed designs and form a clearer picture of the user’s mental model when dealing with the application.
                    This experiment will be conducted using test users and images of the application’s interface on pieces of paper. Each piece of paper
                    will have one task/activity on it and the test users will be given at a time. The user will be told to interact the the interface in
                    front of them however they see fit and based on what areas of the paper interface they choose to touch/interact with a different
                    task/activity will be given to them. This will allow us to see how users view our design and how it can potentially be used.
                    <br><br>
                </p>
            </li>
        </ul>
    </div>
@endsection
