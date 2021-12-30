@extends('layouts.admin')
@section('title', '顧客情報一覧')
@section('content')
<div class="container">
        <div class="row">
            <h2>顧客情報一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\SalonController@index') }}" method="get">
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
                                <th width="2%">名前（漢字）</th>
                                <th width="3%">名前（ふりがな）</th>
                                <th width="4%">電話番号</th>
                                <th width="5%">メールアドレス</th>
                                <th width="5%">生年月日</th>
                                <th width="5%">郵便番号</th>
                                <th width="5%">都道府県</th>
                                <th width="5%">市区町村・番地</th>
                                <th width="5%">建物名</th>
                                <th width="5%">過去に化粧品が合わなかった等、施術トラブル</th>
                                <th width="5%">お目元・眉周りのお悩み</th>
                                <th width="5%">アレルギー</th>
                                <th width="5%">過去の施術経験</th>
                                <th width="5%">気になる身体の疲れ</th>
                                <th width="5%">来店きっかけ</th>
                                <th width="30%">コメント</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $chart)
                                <tr>
                                    <th>{{ $chart->id }}</th>
                                    <td>{{ \Str::limit($chart->name01, 100) }}</td>
                                    <td>{{ \Str::limit($chart->name02, 100) }}</td>
                                    <td>{{ \Str::limit($chart->tel, 100) }}</td>
                                    <td>{{ \Str::limit($chart->email, 100) }}</td>
                                    <td>{{ \Str::limit($chart->birthday, 100) }}</td>
                                    <td>{{ \Str::limit($chart->zip, 100) }}</td>
                                    <td>{{ \Str::limit($chart->pref, 100) }}</td>
                                    <td>{{ \Str::limit($chart->addr01, 100) }}</td>
                                    <td>{{ \Str::limit($chart->addr02, 100) }}</td>
                                    <td>{{ \Str::limit($chart->trouble, 100) }}</td>
                                    <td>{{ \Str::limit($chart->concern, 100) }}</td>
                                    <td>{{ \Str::limit($chart->allergy, 100) }}</td>
                                    <td>{{ \Str::limit($chart->record, 100) }}</td>
                                    <td>{{ \Str::limit($chart->body_concern, 100) }}</td>
                                    <td>
                                      @foreach($chart->triggers as $trigger)
                                        <div>{{$trigger->trigger}}</div>
                                      @endforeach
                                    </td>
                                    <td>{{ \Str::limit($chart->comment, 500) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\SalonController@edit', ['id' => $chart->id]) }}">編集</a>
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
