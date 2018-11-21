@extends('content.base')
@title('Project Selection')

@section('post_body')
    <h3>Project topic Brainstorming</h3><br>
    <h5>Ideas</h5>
    <ol style="text-indent: 20px">
        <li>Campus Food run: UWI students are given the luxury of having food delivered right
            outside their classrooms. This is to help the back to back class goers or even the laziest
            students. This service will be done by the students, for the students as students are the ones
            who will both make orders and do the deliveries. The deliveries will cost $5 + the food amount.
        </li>
        <li>
            International coin exchange: Frequent travellers all have the experience of discarding or
            hoarding their coins from foreign countries. This product, International coin exchange, will be
            placed in airports all over the globe. Travellers will simply dump their coins or bills into the
            allocated machine slots and a paper print out with the coin amount and a barcode/ scannable
            for identification/security. These printouts can be placed into machines in other airports and the
            local currency will be given in return (conversion will be done).
        </li>
        <li>
            UWI Student App- A media/ output for student queries, information and guidance.
        </li>
    </ol>
    <br>
    <h3>Preliminary User and Task Analysis</h3>
    <p>
        The UWI Student App was the chosen idea as International coin exchange is already being
        implemented in
        Japan(https://asia.nikkei.com/Editor-s-Picks/Japan-Update/Don-t-take-those-coins-home-E-mon
        ey-solves-a-tourism-quandary). And Campus food run is feasible, yet less challenging as a Map
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
        https://dl.acm.org/citation.cfm?id=10580
    </p><br>
    <p>
        There are many ways to bring the current system into the modern age, where a slow email
        system, can become a in the now for the now notification/ message. The implementation of a
        huge message board, that will constantly display changing information can be a step forward.
        But to catch up, we need to take several leaps forward.
        Glenn Zwinger. (1988). Running a campus bulletin board system. SIGUCCS '88 Proceedings of
        the 16th annual ACM SIGUCCS Conference on User Services,243-246.
        https://dl.acm.org/citation.cfm?id=62641
    </p><br>
    <p>
        With Map API’s that are open, available, consistent, and modifiable; the university can invest in
        ways to make student lives easier. Attending classes is one of the top priority of a student, but
        not knowing the location is time lost.
        Time Hammond. (2008). Campus directions. ACM-SE 46 Proceedings of the 46th Annual
        Southeast Regional Conference on XX,172-175. https://dl.acm.org/citation.cfm?id=1593149
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
        https://dl.acm.org/citation.cfm?id=2785889
    </p><br>
    <p>
        Laurie J. Fox,Andy Camidge,Kirk M. Anne.(2011).Can you hear me now?: communicating to the
        campus community. SIGUCCS '11 Proceedings of the 39th annual ACM SIGUCCS conference
        on User services, 79-82. https://dl.acm.org/citation.cfm?id=2070385
    </p><br>
    <p>
        A new wave of information sharing and human environment interaction through crowdsourcing
        and geo-tagging will be created. The creation of a mobile application, that will perform the task,
        delivering information to Lecturers, Alumni, Prospective students, Current Students and
        Administration; promises an efficient, cohesive way to alert, report, educate.
    </p><br>
@endsection
