@extends('content.base')
@title('Design Sketches')

@section('post_body')
    <div id="sketches">
        <p>
            All design sketches created by development team.
        </p>
        <div class="text-center image-box">
            <div class="row">
                <figure id="chosen-sketches">
                    <div class="flex-column" style="border: solid">
                        <img src="{{ asset('images/1st_Sketch_Design/0.jpg') }}" title='0' width="300" height="650">
                        <img src="{{ asset('images/1st_Sketch_Design/1.jpg') }}" title='1' width="300" height="650">
                        <img src="{{ asset('images/1st_Sketch_Design/2.jpg') }}" title='2' width="300" height="650">
                    </div>
                    <figcaption>Chosen Designs</figcaption>
                </figure>
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
    </div>

    <br><hr>

    <div id="affinity_diagram">
        <h3>Affinity Diagram</h3>
        <p>
            From the selected designs the following affinity diagram was constructed.
        </p>
        <div class="flex-column">
            <img src="{{ asset('images/Affinity Diagram/3.jpg') }}">
        </div>
        <br>
        <div class="flex-column">
            <img src="{{ asset('images/Affinity Diagram/4.jpg') }}" width="232" height="450">
            <img src="{{ asset('images/Affinity Diagram/5.jpg') }}" width="232" height="450">
            <img src="{{ asset('images/Affinity Diagram/6.jpg') }}" width="232" height="450">
            <img src="{{ asset('images/Affinity Diagram/7.jpg') }}" width="232" height="450">
            <img src="{{ asset('images/Affinity Diagram/8.jpg') }}" width="232" height="450">
        </div>
    </div>
@endsection

