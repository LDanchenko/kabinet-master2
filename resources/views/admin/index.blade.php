@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Adminpanel</div>

                    <div class="panel-body">

                    <div><a href="admin/groups/">Группы</a></div>
                        <div><a href="admin/teachers/">Преподаватели</a></div>
                        <div><a href="admin/timetable">Рассписание</a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
