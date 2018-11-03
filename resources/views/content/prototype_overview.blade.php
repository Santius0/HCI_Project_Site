@extends('content.base')
@title('Reflection and LoFi Prototype')

@section('post_body')
    {!! $reflection_thread->body() !!}
    <br>
    <br>
    <h1>Final LoFi Prototype</h1>
    <hr>
    {{--<div class="jumbotron text-center">--}}
    <div class="text-center">
        <div class="row">
            <div class="flex-column">
                <img src="{{ asset('images/lofi_1.jpg') }}" title='LoFi_1'>
                <img src="{{ asset('images/lofi2.jpg') }}" title='LoFi_2'>
                <img src="{{ asset('images/lofi3.jpg') }}" title='LoFi_3'>
                <img src="{{ asset('images/lofi4.jpg') }}" title='LoFi_4'>
            </div>
            <div class="flex-column">
                <img src="{{ asset('images/prototypes/lofi/lofi5.jpg') }}" title='LoFi_5'>
                <img src="{{ asset('images/prototypes/lofi/lofi6.jpg') }}" title='LoFi_6'>
                <img src="{{ asset('images/prototypes/lofi/lofi7.jpg') }}" title='LoFi_7'>
            </div>
        </div>
    </div>
@endsection
