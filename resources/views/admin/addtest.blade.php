@extends('layouts.default')
@section('content')
<div class="container-fluid">

  <div class="row">
  <div class="col-md-8 col-md-offset-2">
  <div class="panel panel-default">
  <div class="panel-heading">Добавяне на Тест</div>
<form class="form-horizontal" method="POST" action="{{url ('admin/addtest')}}" role="form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <labe class="col-md-4 control-label">Заглавие на теста:</labe>
        <div class="col-md-6">
            <input class="form-control" type="text" name="test_title">
         </div>
         <br>
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