@extends('/layouts.layout')
@section('content')
<div class="flex-center postion-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        <p>{{ $name }}</p>
        <p>{{ $age }}</p>
        
        <!--@for($i=0;$i< count($pizzas); $i++)
        <p>{{$pizzas[$i]['type']}}</p>

        @endfor -->

        @foreach($pizzas as $pizza)
        <div>
            {{$loop->index}} {{$pizza['type']}} - {{$pizza['base']}}
        </div>
        @endforeach

    </div>
</div>
@endsection


