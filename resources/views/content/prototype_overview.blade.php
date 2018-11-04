@extends('content.base')
@title('Reflection and LoFi Prototype')

@section('post_body')
    <p>
        In our initial design we placed a large focus on being innovative, and as a result our designs usability suffered. Despite its visual appeal its navigation was cumbersome. We switched focus from visual creativity to functionality; the gulf of evaluation and execution for all tasks showed a significant decrease.
    </p><br>
    <div class="text-center image-box">
        <div class="row">
            <div class="flex-column">
                <img src="{{ asset('images/Design_Sketch/1.jpeg') }}" title='1' width="300" height="650">
                <img src="{{ asset('images/Design_Sketch/2.jpeg') }}" title='2' width="300" height="650">
                <img src="{{ asset('images/Design_Sketch/3.jpeg') }}" title='3' width="300" height="650">
            </div>
            <div class="flex-column">
                <img src="{{ asset('images/Design_Sketch/4.jpeg') }}" title='4' width="300" height="650">
                <img src="{{ asset('images/Design_Sketch/5.jpeg') }}" title='5' width="300" height="650">
                <img src="{{ asset('images/Design_Sketch/6.jpeg') }}" title='6' width="300" height="650">
            </div>
            <div class="flex-column">
                <img src="{{ asset('images/Design_Sketch/7.jpeg') }}" title='7' width="300" height="650">
                <img src="{{ asset('images/Design_Sketch/8.jpeg') }}" title='8' width="300" height="650">
                <img src="{{ asset('images/Design_Sketch/9.jpeg') }}" title='9' width="300" height="650">
            </div>

        </div>
    </div>
    <br><hr>
    <p>
        The  ‘final’ design obtained from self testing  was much more fluid and user friendly. Each team member could easily explain how the application flowed and how to navigate when given a random task by another teammate.
        <br>
        This design also fared well in the controlled observation, all problems faced by the users were documented and the design was modified appropriately.
    </p>
    <br>
    <div class="text-center image-box">
        <div class="row">
            <div class="flex-column">
                <img src="{{ asset('images/mockup_1/1.jpg') }}" title='1' width="300" height="650">
                <img src="{{ asset('images/mockup_1/2.jpg') }}" title='2' width="300" height="650">
                <img src="{{ asset('images/mockup_1/3.jpg') }}" title='3' width="300" height="650">
            </div>
            <div class="flex-column">
                <img src="{{ asset('images/mockup_1/4.jpg') }}" title='4' width="300" height="650">
                <img src="{{ asset('images/mockup_1/5.jpg') }}" title='5' width="300" height="650">
                <img src="{{ asset('images/mockup_1/6.jpg') }}" title='6' width="300" height="650">
            </div>
            <div class="flex-column">
                <<img src="{{ asset('images/mockup_1/7.jpg') }}" title='7' width="300" height="650">
                <img src="{{ asset('images/mockup_1/8.jpg') }}" title='8' width="300" height="650">
            </div>

        </div>
    </div>
    <br>
    <hr>
    <p>
        Our new design was then put through the controlled observation experiment again, to determine if the previous problems mentioned had been fixed and to ensure no new ones had become apparent.
    </p>
    <br>
    <h1>Final LoFi Prototype</h1>
    <hr>
    <div class="text-center image-box">
        <div class="row">
            <div class="flex-column">
                <img src="{{ asset('images/prototypes/lofi/lofi_1.jpg') }}" title='LoFi_1' width="500" height="800">
                <img src="{{ asset('images/prototypes/lofi/lofi_2.jpg') }}" title='LoFi_2' width="500" height="800">
                <img src="{{ asset('images/prototypes/lofi/lofi_3.jpg') }}" title='LoFi_3' width="500" height="800">
                <img src="{{ asset('images/prototypes/lofi/lofi_4.jpg') }}" title='LoFi_4' width="500" height="800">
            </div>
            <div class="flex-column">
                <img src="{{ asset('images/prototypes/lofi/lofi_5.jpg') }}" title='LoFi_5' width="500" height="800">
                <img src="{{ asset('images/prototypes/lofi/lofi_6.jpg') }}" title='LoFi_6' width="500" height="800">
                <img src="{{ asset('images/prototypes/lofi/lofi_7.jpg') }}" title='LoFi_7' width="500" height="800">
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
