@extends('content.base')

@title('User Testing')
@php(
    $interview_questions = \App\Thread::where('title','Survey: Interview questions and general response')->first();
    $scenarios = \App\Thread::where('title','Scenarios')->first()

)

@section('post_body')
    <br>
    <h2>Interview Process</h2>
    <br>
    <p>
        <b>Interviews were carried out with multiple users of varying technical expertise and their responses recorded.</b>
        <br>
        {!! $interview_questions->title() !!}
        {!! $interview_questions ->body() !!}
    </p>
    <br>
    <div class="text-center">
        <div class="row">
            <div class="flex-column">
                <img src="{{ asset('images/Users/interview/1.jpg') }}" title='interview_1' width="500" height="800">
                <img src="{{ asset('images/Users/interview/2.jpg') }}" title='interview_2' width="500" height="800">
                <img src="{{ asset('images/Users/interview/3.jpg') }}" title='interview_3' width="500" height="800">
                <img src="{{ asset('images/Users/interview/4.jpg') }}" title='interview_4' width="500" height="800">
            </div>
        </div>
    </div>
    <hr><br>
    <h2>Self Assessment</h2>
    <br>
    <p>
        <b>Scenarios were invented and each member of the development team assessed their ability to navigate our design using these scenarios</b>
        <br>
    {!! $scenarios->title() !!}
    {!! $scenarios->body() !!}
    </p>
    <br><hr>
    <h2>Controller Observation</h2>
    <br>
    <p>
        <b>Users were provided with a prototype and asked to attempt to navigate to the nest of their abilities. How long each task took to complete, how confidently the users performed each task and how many attempts a user had to make before completing each task was recorded.</b>
        <br>
    </p>
    <div class="text-center">
        <div class="row">
            <div class="flex-column">
                <img src="{{ asset('images/Users/observation1.jpg') }}" title='observation_1' width="500" height="800">
                <img src="{{ asset('images/Users/observation2.jpg') }}" title='observation_2' width="500" height="800">
                <img src="{{ asset('images/Users/observation3.jpg') }}" title='observation_3' width="500" height="800">
                <img src="{{ asset('images/Users/observation4.jpg') }}" title='observation_4' width="500" height="800">
                <img src="{{ asset('images/Users/observation5.jpg') }}" title='observation_5' width="500" height="800">
            </div>
        </div>
    </div>
    <br><hr>
@endsection

