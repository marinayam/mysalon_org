@extends('layouts.chart')
@section('title','カルテ記入')
@section('content')
<!--メッセージ-->
<div class="container">
    <div class="row">
        <div class ="col-md-8 mx-auto chart">
            <h2>カルテ確認画面</h2>
            {{-- <form method="POST" action="{{ route('chart.send') }}"> --}}
            <form action="{{ action('ChartController@create') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                @csrf
                <div class="form-group row chart-answer">
                    <label class="col-md-5">お名前（漢字）</label>
                    <u>{{ $inputs['name01'] }}</u>
                    <div class="col-md-10">
                        <input type="hidden" class="form-control" name="name01" value="{{ $inputs['name01'] }}">
                    </div>
                </div>
                <div class="form-group row chart-answer">
                    <label class="col-md-5">お名前（ふりがな）</label>
                    <u>{{ $inputs['name02'] }}</u>
                    <div class="col-md-10">
                        <input type="hidden" class="form-control" name="name02" value="{{ $inputs['name02'] }}">
                    </div>
                </div>
                <div class="form-group row chart-answer">
                    <label class="col-md-5">お電話番号</label>
                    <u>{{ $inputs['tel'] }}</u>
                    <div class="col-md-10">
                        <input type="hidden" class="form-control" name="tel" value="{{ $inputs['tel'] }}">
                    </div>
                </div>
                <div class="form-group row chart-answer">
                    <label class="col-md-5">メールアドレス</label>
                    <u>{{ $inputs['email'] }}</u>
                    <div class="col-md-10">
                        <input type="hidden" class="form-control" name="email" value="{{ $inputs['email'] }}">
                    </div>
                </div>
                <div class="form-group row chart-answer">
                    <label class="col-md-5">生年月日</label>
                    <u>{{ $inputs['birthday'] }}</u>
                    <div class="col-md-10">
                        <input type="hidden" class="form-control" name="birthday" value="{{ $inputs['birthday'] }}">
                    </div>
                </div>
                <div class="form-group row chart-answer">
                    <label for="inputAddress01" class="col-md-5">郵便番号(7桁)</label>
                    <u>{{ $inputs['zip'] }}</u>
                    <div class="col-md-10">
                        <input type="hidden" name="zip" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref','addr01');" class="form-control" id="inputAddress01" value="{{ $inputs['zip'] }}" >
                    </div>
                </div>
                <div class="form-group row chart-answer">
                    <label for="inputAddress02"class="col-md-5">都道府県</label>
                    <u>{{ $inputs['pref'] }}</u>
                    <div class="col-md-10">
                        <input type="hidden" name="pref" id="inputAddress02" class="form-control" value="{{ $inputs['pref'] }}" >
                    </div>
                </div>
                <div class="form-group row chart-answer">
                    <label for="inputAddress03" class="col-md-5">市区町村・番地</label>
                    <u>{{ $inputs['addr01'] }}</u>
                    <div class="col-md-10">
                        <input type="hidden" name="addr01" class="form-control" id="inputAddress03"  value="{{ $inputs['addr01'] }}" >
                    </div>
                </div>
                <div class="form-group row chart-answer">
                    <label for="inputAddress03" class="col-md-5">建物名・その他</label>
                    <u>{{ $inputs['addr02'] }}</u>
                    <div class="col-md-10">
                        <input type="hidden" name="addr02" class="form-control" id="inputAddress04" value="{{ $inputs['addr02'] }}" >
                    </div>
                </div>
                <div class="form-group row chart-answer">
                    <label class="col-md-5">ご来店きっかけ</label>
                    <u>
                        @foreach($triggers as $trigger)
                        {{$trigger->trigger}}
                        <div class="col-md-10">
                            <input type="hidden" class="form-check-input"  name="trigger[{{ $trigger->id }}]" value="{{ $trigger->id }}">
                        </div>
                        @endforeach
                    </u>
                </div>
                <div class="form-group row chart-answer">
                    <label class="col-md-5">施術トラブルのご経験</label>
                    <u>{{ $inputs['trouble'] }}</u>
                    <div class="col-md-10">
                        <input type="hidden" class="form-control"  name="trouble"  value="{{ $inputs['trouble'] }}">
                    </div>
                </div>
                <div class="form-group row chart-answer">
                    <label class="col-md-5">お目元・眉周りのお悩み</label>
                    <u>{{ $inputs['concern'] }}</u>
                    <div class="col-md-10">
                        <input type="hidden" class="form-control"  name="concern"  value="{{ $inputs['concern'] }}">
                    </div>
                </div>
                 <div class="form-group row chart-answer">
                    <label class="col-md-5">アレルギー</label>
                    <u>{{ $inputs['allergy'] }}</u>
                    <div class="col-md-10">
                        <input type="hidden" class="form-control"  name="allergy"  value="{{ $inputs['allergy'] }}">
                    </div>
                </div>
                <div class="form-group row chart-answer">
                    <label class="col-md-5">過去の施術経験</label>
                    <u>{{ $inputs['record'] }}</u>
                    <div class="col-md-10">
                        <input type="hidden" class="form-control"  name="record"  value="{{ $inputs['record'] }}">
                    </div>
                </div>
                <div class="form-group row chart-answer">
                    <label class="col-md-5">気になる身体の疲れ</label>
                    <u>{{ $inputs['body_concern'] }}</u>
                    <div class="col-md-10">
                        <input type="hidden" class="form-control"  name="body_concern"  value="{{ $inputs['body_concern'] }}">
                    </div>
                </div>
                <div class="check-button">
                    <div class="btn-toolbar">
                        <div class="btn-group">
                            <button type="submit" name="action" value="back" class="btn btn-outline-secondary">入力内容修正</button>
                        </div>
                        <div class="btn-group ml-auto">
                            <button type="submit" name="action" value="submit" class="btn btn-outline-primary">登録する</button>
                        </div>
                    </div>
                </div>
                
            </form>
@endsection