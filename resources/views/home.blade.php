@extends('layouts.base', ['bodyClass' => 'home'])

@section('body')
    <div class="container">
        @include('layouts._alerts')
    </div>

    <div class="jumbotron text-center">
        <div class="logo"><img src="{{ asset('images/My_UWI_Owl.png') }}" title={{ env('APP_NAME') }}>
            <h2>
                A multifaceted mobile application focusing on assisting members of the University of the West Indies’s
                student population via efficient information delivery and data collection & analysis.
            </h2>
        </div>
    </div>
@endsection
