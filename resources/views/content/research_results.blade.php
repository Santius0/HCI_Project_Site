@extends('content.base')
@title('Research Results')

@section('post_body')
    <h3>Interview</h3>
    <br>
    <h4>Interview With An Average User</h4>
    <p><b>This interview was conducted with someone with no prior knowledge of, or experience in the areas of Computer Science, Software Development or Application Design.</b></p>
    <p>
        Q: Do you follow UWI social media?
        A: Yes I follow UWI on some social media.
    </p>
    <p>
        Q: Do you get notifications, emails or any form of information digitally from UWI?
        A: Yes, sometimes.
    </p>
    <p>
        Q: How reliable is it?<br>
        A: Not very reliable.
    </p>
    <p>
        Q: Do you think the UWI news email system is effective?
        A: No, not really.
    </p>
    <p>
        Q: How often do you read them?
        A: Every other week.
    </p>
    <p>
        Q: Would you prefer a more cohesive platform?
        A: Yes.
    </p>
    <p>
        Q: If yes, what kind?
        A: A social media app.
    </p>
    <p>
        Q: (describe app features), would you download this app?
        A: Yes I would.
    </p>
    <p>
        Q: What are your favourite features, what would you remove, what would you add?
        A: The notifications are my favourite feature. I would not remove any of the existing features but I would like the ability to add classmates as friends
    </p>
    <p>
        Q: Any questions, suggestions?
        A: Make the app as attractive and easy to use.
    </p>
    <br><br>

    <h4>Interview With An Application Design Expert</h4>
    <p><b>This interview was conducted with someone who has a sufficient technical background in Computer Science and Application Design.</b></p>
    <p>
        Q: Do you follow UWI social media?
        A: Yes I do.
    </p>
    <p>
        Q: Do you get notifications, emails or any form of information digitally from UWI?
        A: Not really.
    </p>
    <p>
        Q: Do you think the UWI news email system is effective?
        A: No, not really.
    </p>
    <p>
        Q: How often do you read them?
        A: Once every month.
    </p>
    <p>
        Q: Would you prefer a more cohesive platform?
        A: Yes, I would prefer a social media application.
    </p>
    <p>
        Q: (describe app features), would you download this app?
        A: Yes I would download this app.
    </p>
    <p>
        Q: What are your favourite features, what would you remove, what would you add?
        A: The danger alert feature is my favourite. I would not remove any of the features, but it would make sense to have the application compatible and synchronized across multiple devices.
    </p>
    <p>
        Q: Any questions, suggestions?
        A: Make the app as simple as possible for the user by making it intuitive for them.
    </p>
    <br><hr><br>
    <h3>Self Testing</h3>
    <p>After conducting the interview and getting feedback from the users. We created a simple image prototype  and had each member try to explain how to navigate the application according to the scenarios we created. If the explanation caused confusion or seemed convoluted modifications were made to the design.</p>
    <br>
    <p><b>The scenarios were as follows:</b></p>
    <br>
    <ol>
        <li>
            <p>
                An emergency meeting was announced for the faculty of Food and Agriculture. All classes of that faculty will be canceled, some students will
                also be informed that they can attend the later tutorial. The administration of the faculty will release a publication to the ‘news and bulletin
                board’ section of the mobile application. Lecturers will change the status of their classes from ‘Normal Schedule’ to ‘Cancelled’ or
                ‘Rescheduled’. Students will receive notifications from the faculty and timetable. Timetable will show the classes affected as Cancelled or
                the alternative times given by the lecturer.<br>
                Users: Administration, Lecturers, and Students.
            </p>
        </li>
        <li>
            <p>
                At 7:50 pm, a class by the course code of Math 2550, ended. Students who live on campus accommodations are waiting by the designated shuttle
                stops around campus. The students, using the application’s shuttle services features, can see how many shuttles are currently active, and the
                route they will take. This allows students who are waiting in the wrong areas to relocate or on nights where shuttles are understaffed, campus
                security can notify students of the new routes and times.<br>
                Users: Campus police, Shuttle service drivers and Students(lecturers included).
            </p>
        </li>
        <li>
            <p>
                Before the university Graduation period, Past students (alumni) can learn more and be up to date on the Awards requirements  and schedule.
                Receive notifications of campus parking areas and additional information. They can also view other campus related things, such as;
                scholarships donation needs, grants and scholarships available for postgraduates, competitions and campus events.<br>
            </p>
        </li>
        <li>
            <p>
                A student is rushing to print an assignment as soon as possible and needs to find the closest printer that they can use to be able to hand in
                on time. Accessing the app, the student can determine which labs has printing as well as which labs are free of classes.<br>
            </p>
        </li>
    </ol>
    <br><hr><br>
    <h3>Controlled Observation</h3>
    <p>
        The Same scenarios provided in the self testing section were used during the controlled observation experiment, however only from just the student’s
        perspective. The final design obtained from the self testing experiment was converted into multiple images representing the prototype user interface.
        During the controlled observation experiment we observed how long each task took to complete, how confidently the users performed each task and how
        many attempts a user had to make before completing each task. We calculated the average for each of these and will use those values as our benchmarks
        going forward.
    </p>
    <br>
    <h5><b>Scenarios (TASK EXAMPLES):</b></h5>
    <div>
        <p>
            You received from the App a notification from your faculty that classes were cancelled but tutorials were rescheduled.<br>
            Tasks expected:
        </p>
        <ul>
            <li>View the news item</li>
            <li>Check your classes</li>
        </ul>
    </div>
    <div>
        <p>
            It’s late and you are waiting on Student Shuttles. It’s has been over 30 minutes.<br>
            Tasks expected:
        </p>
        <ul>
            <li>Check Student Shuttle Status</li>
            <li>Check your classes</li>
        </ul>
    </div>
    <div>
        <p>
            The shuttle Status is “No shuttles available”.<br>
            Tasks expected:
        </p>
        <ul>
            <li>Check Student Shuttle Status and Alerts</li>
        </ul>
    </div>
    <div>
        <p>
            It’s registration time, but my.uwi.edu had been down for 2 days.<br>
            Tasks expected:
        </p>
        <ul>
            <li>Check noticeboard/campus News</li>
            <li>Optional : filter by Department Registration</li>
        </ul>
    </div>
    <div>
        <p>
            It’s a new semester and your first class of the day is in a building you never knew existed on campus.<br>
            Tasks expected:
        </p>
        <ul>
            <li>Open Campus map and search by classroom name or code</li>
        </ul>
    </div>
    <br>
    <h4><b>Results:</b></h4>
    <h4><b>Observation 1</b></h4>
    <h4><b>Random Scenario: </b></h4>
    <table style="border: 1px solid black; border-collapse: collapse;">
        <tr>
            <th>Task #</th>
            <th>Duration</th>
            <th>Observations</th>
            <th>Comments</th>
        </tr>
        <tr>
            <td>1</td>
            <td>1 minute</td>
            <td>Performed tasks expected. Additional Tasks performed were : Checking Alerts and Timetable</td>
            <td>User hesitated but understood the layout right away.</td>
        </tr>
        <tr>
            <td>2</td>
            <td>1 minute</td>
            <td>Performed task expected</td>
            <td>User hesitated and reviewed the scenario statement again. However task was completed and they showed signs of knowing the task was completed before handing over the next task as a sign of completion.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>30 seconds</td>
            <td>Swiftly perform task as layout was fully grasped. User went to Campus Status and UWI maps. Showing that they understood the functionality of both.</td>
            <td>User is becoming confident in actions.</td>
        </tr>
        <tr>
            <td>(Randomly added scenario)</td>
            <td>40 seconds</td>
            <td>The user went to Campus status to view available parking and also used the map stating that they can use it to locate that car park.</td>
            <td>User confidence is high. Has full understanding of app Activities and features.</td>
        </tr>
        <tr>
            <td>4</td>
            <td>1 mintute</td>
            <td>The user went to Campus status to view available parking and also used the map stating that they can use it to locate that car park.</td>
            <td>User’s reaction to this task means that this Screen objective is unclear. Review is needed so the user knows to view the NewsFeed for this category of information.</td>
        </tr>
        <tr>
            <td>5</td>
            <td>20 seconds</td>
            <td>User immediately went to campus Maps.</td>
            <td></td>
        </tr>
    </table>
    <br><br>
    <h4><b>Observation 2</b></h4>
    <h4><b>Random Scenario: In the last lecture, you remembered the lecturer saying classes would be held in another venue.</b></h4>
    <table style="border: 1px solid black; border-collapse: collapse;">
        <tr>
            <th>Task #</th>
            <th>Duration</th>
            <th>Observations</th>
            <th>Comments</th>
        </tr>
        <tr>
            <td>1</td>
            <td>1 minute</td>
            <td>Performed tasks expected. Additional Tasks performed were : Checking Alerts and Timetable</td>
            <td>User hesitated but understood the layout right away.</td>
        </tr>
        <tr>
            <td>2</td>
            <td>1 minute</td>
            <td>Performed task expected</td>
            <td>User hesitated and reviewed the scenario statement again. However task was completed and they showed signs of knowing the task was completed before handing over the next task as a sign of completion.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>30 seconds</td>
            <td>Swiftly perform task as layout was fully grasped. User went to Campus Status and UWI maps. Showing that they understood the functionality of both.</td>
            <td>User is becoming confident in actions.</td>
        </tr>
        <tr>
            <td>(Randomly added scenario)</td>
            <td>40 seconds</td>
            <td>The user went to Campus status to view available parking and also used the map stating that they can use it to locate that car park.</td>
            <td>User confidence is high. Has full understanding of app Activities and features.</td>
        </tr>
        <tr>
            <td>4</td>
            <td>1 mintute</td>
            <td>The user went to Campus status to view available parking and also used the map stating that they can use it to locate that car park.</td>
            <td>User’s reaction to this task means that this Screen objective is unclear. Review is needed so the user knows to view the NewsFeed for this category of information.</td>
        </tr>
        <tr>
            <td>5</td>
            <td>20 seconds</td>
            <td>User immediately went to campus Maps.</td>
            <td></td>
        </tr>
    </table>
@endsection
