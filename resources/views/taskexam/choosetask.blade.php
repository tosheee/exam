@extends('layouts.default')
@section('content')

@foreach($tasks as $task)
<a href="/task/{{ $task->id }}">{{ $task->task_title }}</a><br>
@endforeach
 @stop