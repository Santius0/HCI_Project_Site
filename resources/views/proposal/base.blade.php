@php(
    use App\Thread;
    $users_and_stakeholders = Thread::getThread('Stakeholders and Users');
    $definition = Thread::getThread('Project Definition');
    $research_methods = Thread::getThread('Research Methods');
    $survey = Thread::getThread('Survey: Interview questions and general response');
   ;)
