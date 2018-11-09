@extends('content.base')
@title('Design Sketches')

@section('post_body')
    <p>
        All design sketches created by development team.
    </p>
    <div class="text-center image-box">
        <div class="row">
            <div class="flex-column">
                <img src="{{ asset('images/1st_Sketch_Design/0.jpg') }}" title='0' width="300" height="650">
                <img src="{{ asset('images/1st_Sketch_Design/1.jpg') }}" title='1' width="300" height="650">
                <img src="{{ asset('images/1st_Sketch_Design/2.jpg') }}" title='2' width="300" height="650">
            </div>
            <br>
            <div class="flex-column">
                <img src="{{ asset('images/1st_Sketch_Design/3.jpg') }}" title='3' width="300" height="650">
                <img src="{{ asset('images/1st_Sketch_Design/4.jpg') }}" title='4' width="300" height="650">
                <img src="{{ asset('images/1st_Sketch_Design/5.jpg') }}" title='5' width="300" height="650">
            </div>
            <br>
            <div class="flex-column">
                <img src="{{ asset('images/1st_Sketch_Design/6.jpg') }}" title='6' width="300" height="650">
                <img src="{{ asset('images/1st_Sketch_Design/7.jpg') }}" title='7' width="300" height="650">
                <img src="{{ asset('images/1st_Sketch_Design/8.jpg') }}" title='8' width="300" height="650">
            </div>
            <div class="flex-column">
                <img src="{{ asset('images/1st_Sketch_Design/9.jpg') }}" title='9' width="300" height="650">
                <img src="{{ asset('images/1st_Sketch_Design/10.jpg') }}" title='10' width="300" height="650">
                <img src="{{ asset('images/1st_Sketch_Design/11.jpg') }}" title='11' width="300" height="650">
            </div>
        </div>
    </div>
@endsection

