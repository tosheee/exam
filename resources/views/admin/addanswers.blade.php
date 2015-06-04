@extends('layouts.default')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Добавяне на отговори</div>
                    <form class="form-horizontal" method="POST" action="{{url ('/admin/createanswers')}}" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                               <div class="form-group">
                                    <label class="col-md-4 control-label">Избери тест:</label>
                                    <div class="col-md-6">
                                         <select class="form-control" name="test_id">
                                         @foreach($oldTest as $test)
                                        <option value="{{$test->id}}">{{$test->test_title}}</option>
                                        @endforeach
                                     </select>
                                  </div>
                            </div>
                            <div class="form-group">
                                    <label class="col-md-4 control-label">Въведи:</label>
                                  <div class="col-md-6">
                                    <input type="text" class="form-control" name="answer"></textarea>
                                </div>
                              </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Запис</button>
                                </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

