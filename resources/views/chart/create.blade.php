
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
                    <label class="col-md-5">必須　お名前（漢字）</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name01" value="{{ old('name01') }}">
                    </div>
                    <label class="example col-md-5">例:山田花子</label>
                </div>
                <div class="form-group row">
                    <label class="col-md-5">必須　お名前（ふりがな）</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name02" value="{{ old('name02') }}">
                    </div>
                    <label class="example col-md-5">例:やまだはなこ</label>
                </div>
                <div class="form-group row">
                    <label class="col-md-5">お電話番号</label>
                    <div class="col-md-10">
                        <input type="tel" class="form-control"  name="tel"  value="{{ old('tel') }}">
                    </div>
                    <label class="example col-md-5">例：090-0000-0000</label>
                </div>
                <div class="form-group row">
                    <label class="col-md-5">必須　メールアドレス</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    <label class="example col-md-5">例：example@example.com</label>
                </div>
                <div class="form-group row">
                    <label class="col-md-5">生年月日</label>
                    <div class="col-md-10">
                        <input type="date" name="birthday" value="{{ old('birthday') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-5">住所</label>
                    <div class="col-md-10">
                        <!--住所-->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="inputAddress01">郵便番号(7桁)</label>
                                <input type="text" name="zip" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref','addr01');" class="form-control" id="inputAddress01" value="{{ old('zip') }}">
                                <label class="example col-md-6">例：180-0005</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <label for="inputAddress02">都道府県</label>
                                <input type="text" name="pref" id="inputAddress02" class="form-control" value="{{ old('pref') }}">
                                <label class="example col-md-6">例：東京都</label>
                            </div>
                            <div class="col-md-7 mb-3">
                                <label for="inputAddress03">市区町村・番地</label>
                                <input type="text" name="addr01" class="form-control" id="inputAddress03"  value="{{ old('addr01') }}">
                                <label class="example col-md-7">例：武蔵野市御殿山１-６-９</label>
                            </div>
                            <div class="col-md-8 mb-3">
                                <label for="inputAddress03">建物名・その他</label>
                                <input type="text" name="addr02" class="form-control" id="inputAddress04" value="{{ old('addr02') }}">
                                <label class="example col-md-8">例：エルドラド吉祥寺304</label>
                            </div>
                        </div>
                        <!--/住所-->
                    </div>
                </div>
                <div class="form-group check">
                    <label class="col-md-6">ご来店きっかけ</label>
                    @foreach($chart_triggers as $chart_trigger)
                    <label class="col-md-6 form-check-label" for="flexCheckDefault">
                        <input class="form-check-input" type="checkbox" name="trigger[]" value="{{ $chart_trigger->id}}" id="flexCheckDefault">
                        {{$chart_trigger->trigger}}
                    </label>
                   @endforeach
                </div>
                <div class="form-group row">
                    <label class="col-md-8">過去に化粧品が合わなかった等、施術トラブル</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control"  name="trouble"  value="{{ old('trouble') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-8">お目元・眉周りのお悩み</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control"  name="concern"  value="{{ old('concern') }}">
                    </div>
                </div>
                 <div class="form-group row">
                    <label class="col-md-8">アレルギー</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control"  name="allergy"  value="{{ old('allergy') }}">
                    </div>
                </div>   
                <div class="form-group check">
                    <label class="col-md-6">過去の施術経験</label>
                    @foreach($chart_records as $chart_record)
                    <label class="col-md-8 form-check-label" for="flexCheckDefault">
                        <input class="form-check-input" type="checkbox" name="record[]" value="{{ $chart_record->id}}" id="flexCheckDefault">
                        {{$chart_record->record}}
                    </label>
                    @endforeach
                </div>
                <div class="form-group check">
                    <label class="col-md-5">気になる身体の疲れ</label>
                    @foreach($chart_body_concerns as $chart_body_concern)
                    <label class="col-md-8 form-check-label" for="flexCheckDefault">
                        <input class="form-check-input" type="checkbox" name="body_concern[]" value="{{ $chart_body_concern->id}}" id="flexCheckDefault">
                        {{$chart_body_concern->body_concern}}
                    </label>
                    @endforeach
                </div>
                <!--<div class="form-group check">-->
                <!--    <label class="col-md-2">注意事項</label>-->
                <!--    @foreach($chart_triggers as $chart_trigger)-->
                <!--    <label class="form-check-label" for="flexCheckDefault">-->
                <!--        <input class="form-check-input" type="checkbox" name="trigger[]" value="{{ $chart_trigger->id}}" id="flexCheckDefault">-->
                <!--        {{$chart_trigger->trigger}}-->
                <!--    </label>-->
                <!--    @endforeach-->
                <!--</div>-->
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
