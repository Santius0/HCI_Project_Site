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
                <img src="{{ asset('images/prototypes/lofi/lofi_1.jpg') }}" title='LoFi_1' width="500", height="800">
                <img src="{{ asset('images/prototypes/lofi/lofi_2.jpg') }}" title='LoFi_2' width="500", height="800">
                <img src="{{ asset('images/prototypes/lofi/lofi_3.jpg') }}" title='LoFi_3' width="500", height="800">
                <img src="{{ asset('images/prototypes/lofi/lofi_4.jpg') }}" title='LoFi_4' width="500", height="800">
            </div>
            <div class="flex-column">
                <img src="{{ asset('images/prototypes/lofi/lofi_5.jpg') }}" title='LoFi_5' width="500", height="800">
                <img src="{{ asset('images/prototypes/lofi/lofi_6.jpg') }}" title='LoFi_6' width="500", height="800">
                <img src="{{ asset('images/prototypes/lofi/lofi_7.jpg') }}" title='LoFi_7' width="500", height="800">
            </div>
        </div>
    </div>
    <hr>
    <div class="alert alert-info">
        <p>
            Check out the full prototype on  <a href="https://share.proto.io/T4EDZF/" class="alert-link">Proto.io</a>
        </p>
    </div>
@endsection
