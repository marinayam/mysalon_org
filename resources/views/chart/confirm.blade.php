@extends('layouts.chart')
@section('title','カルテ記入')
@section('content')
<!--メッセージ-->
<div class="container">
    <div class="row">
        <div class ="col-md-8 mx-auto chart">
            <h2>カルテ確認画面</h2>
            <form method="POST" action="{{ route('chart.send') }}">
                @csrf
                <div class="form-group row">
                    <label class="col-md-5">お名前（漢字）</label>
                    {{ $inputs['name01'] }}
                    <div class="col-md-10">
                        <input type="hidden" class="form-control" name="name01" value="{{ $inputs['name01'] }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-5">お名前（ふりがな）</label>
                    {{ $inputs['name02'] }}
                    <div class="col-md-10">
                        <input type="hidden" class="form-control" name="name02" value="{{ $inputs['name02'] }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-5">お電話番号</label>
                    {{ $inputs['tel'] }}
                    <div class="col-md-10">
                        <input type="hidden" class="form-control" name="tel" value="{{ $inputs['tel'] }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-5">メールアドレス</label>
                    {{ $inputs['email'] }}
                    <div class="col-md-10">
                        <input type="hidden" class="form-control" name="email" value="{{ $inputs['email'] }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-5">生年月日</label>
                    {{ $inputs['birthday'] }}
                    <div class="col-md-10">
                        <input type="hidden" class="form-control" name="birthday" value="{{ $inputs['birthday'] }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-10">
                        <!--住所　開始-->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="inputAddress01">郵便番号(7桁)</label>
                                {{ $inputs['zip'] }}
                                <input type="hidden" name="zip" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref','addr01');" class="form-control" id="inputAddress01" value="{{ $inputs['zip'] }}" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <label for="inputAddress02">都道府県</label>
                                
                                <input type="hidden" name="pref" id="inputAddress02" class="form-control" value="{{ $inputs['pref'] }}" >
                            </div>
                            <div class="col-md-7 mb-3">
                                <label for="inputAddress03">市区町村・番地</label>
                                
                                <input type="hidden" name="addr01" class="form-control" id="inputAddress03"  value="{{ $inputs['addr01'] }}" >
                            </div>
                            <div class="col-md-8 mb-3">
                                <label for="inputAddress03">建物名・その他</label>
                                {{ $inputs['addr02'] }}
                                <input type="hidden" name="addr02" class="form-control" id="inputAddress04" value="{{ $inputs['addr02'] }}" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group check">
                    <label class="col-md-6">ご来店きっかけ</label>
                    @foreach($triggers as $trigger)
                    <label class="col-md-6 form-check-label" >
                        <input type="hidden" class="form-check-input"  name="trigger[]" value="{{ $trigger->id }}">
                        {{$trigger->trigger}}
                    </label>
                   @endforeach
                </div>
                <div class="form-group row">
                    <label>過去に化粧品が合わなかった等、施術トラブル</label>
                </div>
                <div class="form-group row">
                    <p>{{ $inputs['trouble'] }}</p>
                    <div>
                        <input type="hidden" class="form-control"  name="trouble"  value="{{ $inputs['trouble'] }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-8">お目元・眉周りのお悩み</label>
                    {{ $inputs['concern'] }}
                    <div class="col-md-10">
                        <input type="hidden" class="form-control"  name="concern"  value="{{ $inputs['concern'] }}">
                    </div>
                </div>
                 <div class="form-group row">
                    <label class="col-md-8">アレルギー</label>
                    {{ $inputs['allergy'] }}
                    <div class="col-md-10">
                        <input type="hidden" class="form-control"  name="allergy"  value="{{ $inputs['allergy'] }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-8">過去の施術経験</label>
                    {{ $inputs['record'] }}
                    <div class="col-md-10">
                        <input type="hidden" class="form-control"  name="record"  value="{{ $inputs['record'] }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-8">気になる身体の疲れ</label>
                    {{ $inputs['body_concern'] }}
                    <div class="col-md-10">
                        <input type="hidden" class="form-control"  name="body_concern"  value="{{ $inputs['body_concern'] }}">
                    </div>
                </div>
                <button type="submit" name="action" value="back">
                    入力内容修正
                </button>
                <button type="submit" name="action" value="submit">
                    送信する
                </button>
            </form>
@endsection