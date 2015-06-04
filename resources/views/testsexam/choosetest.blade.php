@extends('layouts.default')
@section('content')

@foreach($tests as $test)
<div class="imgHolder">
<a href="/tests/{{ $test->id }}">
<img  src="{{ asset('img\gown.png') }}">
<div id="caption">{{ $test->test_title }}</div></a>
</div>
@endforeach
 @stop