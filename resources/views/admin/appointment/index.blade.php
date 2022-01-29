@extends('layouts.admin')
@section('title', 'appointment')
@section('content')
<div class="container">
        <div class="row">
            <h2>予約一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\AppointmentController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_name" value="{{ $cond_name }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="1%">ID</th>
                                <th width="10%">名前</th>
                                <th width="12%">なまえ</th>
                                <th width="10%">tel</th>
                                <th width="10%">email</th>
                                <th width="10%">日にち</th>
                                <th width="50%">時間</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $appointment)
                                <tr>
                                    <th>{{ $appointment->id }}</th>
                                    <td>{{ \Str::limit($appointment->name01, 100) }}</td>
                                    <td>{{ \Str::limit($appointment->name02, 100) }}</td>
                                    <td>{{ \Str::limit($appointment->tel, 100) }}</td>
                                    <td>{{ \Str::limit($appointment->email, 100) }}</td>
                                    <td>{{ \Str::limit($appointment->date, 100) }}</td>
                                    <td>{{ \Str::limit($appointment->time, 100) }}</td>
                                    <td>
                                      @foreach($appointment->perms as $perm)
                                        <div>{{$perm->perm}}</div>
                                      @endforeach
                                    </td>
                                    <td>
                                      @foreach($appointment->extensions as $extension)
                                        <div>{{$extension->extension}}</div>
                                      @endforeach
                                    </td>
                                    <td>
                                      @foreach($appointment->eyebrows as $eyebrow)
                                        <div>{{$eyebrow->eyebrow}}</div>
                                      @endforeach
                                    </td>
                                    <td>
                                      @foreach($appointment->options as $option)
                                        <div>{{$option->option}}</div>
                                      @endforeach
                                    </td>
                                    <td>{{ \Str::limit($appointment->comment, 500) }}</td>
                                    <td>
                                        <div>
                                            <a class="btn btn-primary" href="{{ action('Admin\AppointmentController@edit', ['id' => $appointment->id]) }}">編集</a>
                                        </div>
                                        <br>
                                        <div>
                                            <a class="btn btn-secondary" href="{{ action('Admin\AppointmentController@detail', ['id' => $appointment->id]) }}">詳細</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
