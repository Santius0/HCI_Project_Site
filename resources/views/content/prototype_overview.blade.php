@extends('content.base')
@title('Reflection and LoFi Prototype')

@section('post_body')
    {!! $reflection_thread->body() !!}
    <br>
    <br>
    <h1>Final LoFi Prototype</h1>
    <hr>
    <div class="row">
        <div class="flex-column">
            <img src="{{ asset('images/My_UWI_Owl.png') }}" title={{ env('APP_NAME') }}>
            <img src="{{ asset('images/My_UWI_Owl.png') }}" title={{ env('APP_NAME') }}>
            <img src="{{ asset('images/My_UWI_Owl.png') }}" title={{ env('APP_NAME') }}>
            <img src="{{ asset('images/My_UWI_Owl.png') }}" title={{ env('APP_NAME') }}>
        </div>
        <div class="flex-column">
            <img src="{{ asset('images/My_UWI_Owl.png') }}" title={{ env('APP_NAME') }}>
            <img src="{{ asset('images/My_UWI_Owl.png') }}" title={{ env('APP_NAME') }}>
            <img src="{{ asset('images/My_UWI_Owl.png') }}" title={{ env('APP_NAME') }}>
        </div>
    </div>
@endsection
