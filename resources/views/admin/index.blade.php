@extends('layouts.default')
@section('content')

<div id="admin-menu">
        <ul>
        @foreach($buttons as $button)
        <li><a href="{{$button->url}}">{{$button->title_button}}</a></li>
        @endforeach
        </ul>
</div>
<div class="container-fluid">

  <div class="row">
  <div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default">
  <div class="panel-heading">Добавяне на Бутон</div>
<form class="form-horizontal" method="POST" action="{{url ('admin/addbutton')}}" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <labe class="col-md-4 control-label">URL:</labe>
        <div class="col-md-6">
            <input class="form-control" type="text" name="url">
         </div>
         <br>
         <div class="form-group">
                     <labe class="col-md-4 control-label">Текст на бутона:</labe>
                 <div class="col-md-6">
                     <input class="form-control" type="text" name="title_button">
                  </div>
    <div class="form-group">
      <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">Запис</button>

    </div>
    </div>
   </div>
</form>
</div>
</div>
</div>
</div>
<a href="/addquestion/">ssss</a>


@stop