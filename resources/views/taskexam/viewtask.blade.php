@extends('layouts.default')
@section('content')
@foreach($item as $task)
<h3>{{ $task->task_title }}</h3>
<h4>{{$task->task_condition}}</h4>
<div>{!!$task->task_video!!}</div>
<?php break; ?>
@endforeach

@foreach($item as $code)
<p>{{ $code->task_notes }}</p>
<pre>{{ $code->task_code }}</pre>
@endforeach

@stop