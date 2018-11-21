@extends('content.base')
@title('Project Selection')

@section('post_body')
    <h3>Project topic Brainstorming</h3>
    <br>
    <h4><b>
            Creating mobile application
        </b>
    </h4>
    <ol style="left: 20%">
        <li><p>
                <b>Campus Food run</b> - UWI students are given the luxury of having food delivered right
                outside their classrooms. This is to help the back to back class goers or even the laziest
                students. This service will be done by the students, for the students as students are the ones
                who will both make orders and do the deliveries. The deliveries will cost $5 + the food amount.
                <br>
            </p>
        </li>
        <li>
                <p><b>International Coin Exchange</b> - Frequent travellers all have the experience of discarding or
                hoarding their coins from foreign countries. This product, International coin exchange, will be
                placed in airports all over the globe. Travellers will simply dump their coins or bills into the
                allocated machine slots and a paper print out with the coin amount and a barcode/ scannable
                for identification/security. These printouts can be placed into machines in other airports and the
                local currency will be given in return (conversion will be done).
                <br>
            </p>
        </li>
        <li>
            <p>
                <b>UWI Student App</b> - A media/ output for student queries, information and guidance.
                <br>
            </p>
        </li>
    </ol>
    <br>
    <h3>Preliminary User and Task Analysis</h3>
    <br>
    <p>
        The UWI Student App was the chosen idea as International coin exchange is already being
        implemented in
        Japan(<a href="https://asia.nikkei.com/Editor-s-Picks/Japan-Update/Don-t-take-those-coins-home-E-mon
        ey-solves-a-tourism-quandary">https://asia.nikkei.com/Editor-s-Picks/Japan-Update/Don-t-take-those-coins-home-E-mon
            ey-solves-a-tourism-quandary</a>). And Campus food run is feasible, yet less challenging as a Map
        Api, database and login is all that is needed to implement it.
    </p><br>
    <p>
        Modern technology impacts how culture is displayed and how information is retrieved. It is also
        best way for an academic institution to reach their students. The application could also allow
        customization for notifications or content displayed, which will encourage participation in
        university events, discussions and safety policies. The mobile application will also open an
        additional revenue source for the university through advertisement and sponsorships.
    </p><br>
    <p>
        Most academic institutions since the boom of the social media, the information era; have
        implemented their own unique ways in reaching the public, staff and students. The University of
        the West Indies has also been a member of the ranks; however, the method is outdated.
        Pm Weizenbaum. (1985). Creating a campus on-line news system. SIGDOC '85 Proceedings of
        the 4th annual international conference on Systems documentation, 102-107.
        <a href="https://dl.acm.org/citation.cfm?id=62641">https://dl.acm.org/citation.cfm?id=62641</a>
    </p><br>
    <p>
        There are many ways to bring the current system into the modern age, where a slow email
        system, can become a in the now for the now notification/ message. The implementation of a
        huge message board, that will constantly display changing information can be a step forward.
        But to catch up, we need to take several leaps forward.
        Glenn Zwinger. (1988). Running a campus bulletin board system. SIGUCCS '88 Proceedings of
        the 16th annual ACM SIGUCCS Conference on User Services,243-246.
        <a href="https://dl.acm.org/citation.cfm?id=62641">https://dl.acm.org/citation.cfm?id=62641</a>
    </p><br>
    <p>
        With Map API’s that are open, available, consistent, and modifiable; the university can invest in
        ways to make student lives easier. Attending classes is one of the top priority of a student, but
        not knowing the location is time lost.
        Time Hammond. (2008). Campus directions. ACM-SE 46 Proceedings of the 46th Annual
        Southeast Regional Conference on XX,172-175. <a href="//dl.acm.org/citation.cfm?id=1593149">//dl.acm.org/citation.cfm?id=1593149</a>
    </p><br>
    <p>
        Also, in this information age. Students can report and feed information to the campus. This
        information can be used to improve services. Using the reports gathered from students the
        university can know:
        <ol style="text-indent: 20px">
            <li>Most frequent paths</li>
            <li>Hot spots and preferable parking areas</li>
            <li>Campus incidents, accidents or hazards</li>
            <li>Average number of students in certain grids on campus</li>
        </ol>
        Crowdsourcing student data cuts down the need of a paper pile of complaints and demands.
        Students can share on the spot the matters affecting them, which will affect campus. Example;
        an overflowed septic tank; the average student will not know who to report it to, the faculty
        closes to it, the dean of that faculty, student services or the principle? Using the application
        students can make a report, and judging by the number of similar reports and the coordinated
        given, the proper authorities will be fully informed.
        Yun Huang, Corey White, Huichuan Xia, Yang Wang. (2015). Modeling Sharing Decision of
        Campus Safety Reports and Its Design Implications to Mobile Crowdsourcing for Safety.
        MobileHCI '15 Proceedings of the 17th International Conference on Human-Computer
        Interaction with Mobile Devices and Services,400-409.
        <a href="https://dl.acm.org/citation.cfm?id=2785889">https://dl.acm.org/citation.cfm?id=2785889</a>
    </p><br>
    <p>
        Laurie J. Fox,Andy Camidge,Kirk M. Anne.(2011).Can you hear me now?: communicating to the
        campus community. SIGUCCS '11 Proceedings of the 39th annual ACM SIGUCCS conference
        on User services, 79-82. <a href="https://dl.acm.org/citation.cfm?id=2070385">https://dl.acm.org/citation.cfm?id=2070385</a>
    </p><br>
    <p>
        A new wave of information sharing and human environment interaction through crowdsourcing
        and geo-tagging will be created. The creation of a mobile application, that will perform the task,
        delivering information to Lecturers, Alumni, Prospective students, Current Students and
        Administration; promises an efficient, cohesive way to alert, report, educate.
    </p><br>

    <h3>Project Goals</h3>
    <br>
    <ul>
        <li><p>News/bulletin board – Publications can be made by the correct roles to inform the masses.<br></p></li>
        <li><p>Safety Alerts- Campus police, Student Council and Campus Administration can make alerts about dangers or critical matters happening around campus.<br></p></li>
        <li><p>Administration Alerts- Inform students and staff of important events, dates, deadlines and changes.<br></p></li>
        <li><p>Class alerts- Alert students of class relocation or cancellations.<br></p></li>
        <li><p>Faculty alerts- news about Departments and Faculties for specific categories of students.<br></p></li>
        <li><p>Interactive Maps – Helps students locate classrooms and buildings using GPS and geotags.<br></p></li>
        <li><p>Shuttle services – Campus Police and shuttle drivers can share location, activity and
                routes currently covered to students and staff.<br></p></li>
        <li><p>Timetable – Students can build their timetable; the times are gathered from the campus
            systems. As students build calendars, class count is monitored. Changes to class locations and
                cancellations will be reflected on this feature.<br></p></li>
    </ul>
    <br>
    <h3>Scenarios</h3>
    <br>
    <ol>
        <li>
            <p>
                An emergency meeting was announced for the faculty of Food and Agriculture. All classes
                of that faculty will be cancelled, however some students will be informed that they can attend
                the later tutorials. The administration of the faculty will release a publication to the ‘news and
                bulletin board’ section of the mobile application. Lecturers will change the status of their classes
                from ‘Normal Schedule’ to ‘Cancelled’ or ‘Rescheduled’. Students will receive the notifications
                from the faculty and timetable. Time table will show the classes affected as Cancelled, or the
                alternative times given by the lecturer.
            </p><br>
        </li>
        <li>
            <p>
                At 7:50 pm, a class by the course code of Math 2550, ended. Students who live on
                campus accommodations are waiting by the designated shuttle stops around campus. The
                students, using the application’s shuttle services features, can see how many shuttles are
                currently active, and the route they will take. This allows students who are waiting in the wrong
                areas to relocate or on nights where shuttles are understaffed, campus security can notify
                students of the new routes and times.
            </p><br>
        </li>
        <li>
            <p>
                Before the university registration period, perspective students can learn more and be up to
                date on the registration requirements and schedules. Receive notifications of campus tours and
                open seminars. They can also view opportunities, such as; scholarships, grants, competitions
                and campus events.
            </p><br>
        </li>
    </ol>
    <br>
    <h3>
        Design and Development
    </h3>
    <br>
    <h4><b>
            Creating mobile application
        </b>
    </h4>
    <p>
        This application will be cross platform, Android and IOS. The use of web applications
        such as REACT will be used to create the system. Login will be mandatory to access the
        resources of this application; the user credential will be sourced from the university’s already
        existing student identification/credentials database/system. Thus, this project will be broken into
        3 parts.
    </p>
    <p>
        First, focus on the main features: News board/ bulletin; shuttle services and class alerts. A
        database will be created and used to populate the list view to display information, in the News
        board. A map API will be included in the shuttle feature; this map will be interactive and
        consistent. Class alerts will not be fully implemented; as in the timetable feature will not be in
        the first app cycle. Class alerts will only send as notifications to students who mark themselves
        as members of the current running course.
        Second, Student Journalism feature; class map. A space for students to write and share with
        other students on campus will be available. And reusing the map API in the shuttle service, we
        can create a map indicating where all UWI facilities and classes are.
        After the two cycles are implemented, other features will come out gradually. Faculty
        notifications, timetable, safety alerts etc.
    </p>
    <p>
        Thus, to build this system we will use open source and pre-existing systems. UWI’s user
        credential database/system, REACT and other web application development tools, Database :
        firebase or expansion of the universities already pre-existing system and Google maps or WAZE
        API.
    </p>
@endsection
