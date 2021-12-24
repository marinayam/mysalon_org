
@extends('layouts.chart')
@section('title','タイトル')
@section('content')
<body>
<div class ="container">
    <div class="row">
        <div class ="col-md-8 mx-auto">
            <h2>カルテ記入</h2>
            <form action="{{ action('ChartController@create') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                {{-- カルテ項目開始 --}}
                
                <div class="form-group row">
                    <label class="col-md-2">姓（漢字）</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">名（漢字）</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">姓（カタカナ）</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">名（カタカナ）</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">メールアドレス</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">電話番号</label>
                    <div class="col-md-10">
                        <input type="tel" class="form-control"  name="tel"  placeholder="000-0000-0000" value="{{ old('tel') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">生年月日</label>
                    <div class="col-md-10">
                        <input type="date" name="birthday" value="{{ old('birthday') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">住所</label>
                    <div class="col-md-10">
                        <!--住所-->
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="inputAddress01">郵便番号(7桁)</label>
                                <input type="text" name="zip01" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" class="form-control" id="inputAddress01" placeholder="1030013" value="{{ old('address') }}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="inputAddress02">市区町村・番地</label>
                                <input type="text" name="pref01" id="inputAddress02" class="form-control" placeholder="東京都"value="{{ old('address') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputAddress03">建物名など</label>
                                <input type="text" name="addr01" class="form-control" id="inputAddress03" placeholder="中央区日本橋人形町" value="{{ old('address') }}">
                            </div>
                        </div>
                        <!--/住所-->
                    </div>
                </div>
                <div class="form-group check">
                    <label class="col-md-2">ご来店きっかけ</label>
                    @foreach($chart_triggers as $chart_trigger)
                    <label class="form-check-label" for="flexCheckDefault">
                        <input class="form-check-input" type="checkbox" name="trigger[]" value="{{ $chart_trigger->id}}" id="flexCheckDefault">
                        {{$chart_trigger->trigger}}
                    </label>
                   @endforeach
                </div>
                <div class="form-group row">
                    <label class="col-md-2">過去に化粧品が合わなかった等、施術トラブル</label>
                    <div class="col-md-10">
                        <input type="tel" class="form-control"  name="tel"  value="{{ old('tel') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">お目元・眉周りのお悩み</label>
                    <div class="col-md-10">
                        <input type="tel" class="form-control"  name="tel"  value="{{ old('tel') }}">
                    </div>
                </div>
                 <div class="form-group row">
                    <label class="col-md-2">アレルギー</label>
                    <div class="col-md-10">
                        <input type="tel" class="form-control"  name="tel"  value="{{ old('tel') }}">
                    </div>
                </div>   
                <div class="form-group check">
                    <label class="col-md-2">過去の施術経験</label>
                    @foreach($chart_records as $chart_record)
                    <label class="form-check-label" for="flexCheckDefault">
                        <input class="form-check-input" type="checkbox" name="record[]" value="{{ $chart_record->id}}" id="flexCheckDefault">
                        {{$chart_record->record}}
                    </label>
                    @endforeach
                </div>
                <div class="form-group check">
                    <label class="col-md-2">気になる身体の疲れ</label>
                    @foreach($chart_body_concerns as $chart_body_concern)
                    <label class="form-check-label" for="flexCheckDefault">
                        <input class="form-check-input" type="checkbox" name="body_concern[]" value="{{ $chart_body_concern->id}}" id="flexCheckDefault">
                        {{$chart_body_concern->body_concern}}
                    </label>
                    @endforeach
                </div>
                <div class="form-group check">
                    <label class="col-md-2">注意事項</label>
                    @foreach($chart_triggers as $chart_trigger)
                    <label class="form-check-label" for="flexCheckDefault">
                        <input class="form-check-input" type="checkbox" name="trigger[]" value="{{ $chart_trigger->id}}" id="flexCheckDefault">
                        {{$chart_trigger->trigger}}
                    </label>
                    @endforeach
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="登録">
            </form>
        </div>
        <!-- 郵便番号から住所自動入力 -->
        <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    </div>
</div>
</body> 
@endsection
