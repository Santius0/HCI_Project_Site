@extends('content.base')
@title('Heuristic Evaluation')
@php($heuristics = [])
@section('post_body')
    <div id="evaluation">
        @foreach($heuristics as $heuristic)
        <div class="timeline-panel">
            <div class="timeline-heading">
                <h4>{{ $heuristic['title'] }}</h4>
            </div>
            <div class="timeline-body">
                <p> {{ $heuristic['description'] }}</p>
                <br>
            </div>
            <div class="timeline-footer">
            </div>
        </div>
            <div class="container">
                <p>
                    <label for="new-task">Add Item</label><input id="new-task" type="text"><button>Add</button>
                </p>

                <h3>Todo</h3>
                <ul id="incomplete-tasks">
                    <li><input type="checkbox"><label>Pay Bills</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
                    <li class="editMode"><input type="checkbox"><label>Go Shopping</label><input type="text" value="Go Shopping"><button class="edit">Edit</button><button class="delete">Delete</button></li>

                </ul>

                <h3>Completed</h3>
                <ul id="completed-tasks">
                    <li><input type="checkbox" checked><label>See the Doctor</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
                </ul>
            </div>
        @endforeach
    </div>
    <div>
        Results
    </div>
   <br>
    <div>
        Evaluation Analysis
    </div>
@endsection