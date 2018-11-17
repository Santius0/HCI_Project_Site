@extends('content.base')
@title('Heuristic Evaluation')

@section('post_body')
   <div id="evaluation">
       <div class="w3-container inline" id="docs-list">
           <ul id="myUL" class="w3-margin-top w3-margin-bottom">
               @foreach($tasks as $task)
                   <li><p><b> {{ $task }}</b></p></li>
               @endforeach
           </ul>
       </div>
       <div class="inline" style="width: 33%; height: 900px;">
           <div class="protoio-embed-prototype" data-code="GZTL1G" data-show-sidebuttons="0" style="width: 100%; height: 800px;"></div>
           <script async src="https://static.proto.io/api/widget-embed.js"></script>
       </div>
       <div class="w3-container inline" id="docs-list">
           <ul id="myUL" class="w3-margin-top w3-margin-bottom">
               @foreach($tasks as $task)
                   <li><p><b> {{ $task }}</b></p></li>
               @endforeach
           </ul>
       </div>
   </div>
   <br>
    <div>
        Results
    </div>
   <br>
    <div>
        Evaluation Analysis
    </div>
@endsection