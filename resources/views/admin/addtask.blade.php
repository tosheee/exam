@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Добавяне на Задача</div>
                    <form class="form-horizontal" method="POST" action="{{url ('admin/create_task')}}" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                    <label class="col-md-4 control-label">Заглавие:</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="task_title"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                    <label class="col-md-4 control-label">Условие:</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="task_condition"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="col-md-4 control-label">Видео:</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="task_video"></textarea>
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

