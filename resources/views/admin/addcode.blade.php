@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Добавяне на Въпроси</div>
                    <form class="form-horizontal" method="POST" action="{{url ('admin/create_code')}}" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group">
                                <label class="col-md-4 control-label">Избери задача:</label>
                                  <div class="col-md-6">
                                     <select class="form-control" name="taskexam_id">
                                     @foreach($oldTask as $task)
                                     <option value="{{$task->id}}">{{$task->task_title}}</option>
                                     @endforeach
                                     </select>
                                  </div>
                            </div>
                            <div class="form-group">
                                    <label class="col-md-4 control-label">Бележка:</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="task_notes"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                    <label class="col-md-4 control-label">Код:</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="task_code"></textarea>
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

