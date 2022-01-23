@extends('layouts.front')
@section('title','Appointment')
@section('content')
<div class="container">
    <div class="row">
        <div class ="col-md-8 mx-auto">
            <div class="content-theme">
                <h1>
                    <span>Appointment</span>
                </h1>
                <p class="content-theme-ttl">ご予約</p>
            </div>
            <form method="POST" action="{{ route('appointment.confirm')}}">
                 @if (count($errors) > 0)
                    <ul class="contact-validation">
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                @csrf
                {{-- 予約フォーム開始 --}}
                <div class="form-group row">
                    <label class="col-md-5">
                        <span class="badge badge-danger">必須</span>
                        お名前（漢字）</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name01" value="{{ old('name01') }}">
                        <label class="example col-md-5">例:山田花子</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-5">
                        <span class="badge badge-danger">必須</span>
                        お名前（ふりがな）</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name02" value="{{ old('name02') }}">
                        <label class="example col-md-5">例:やまだはなこ</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-5">
                        <span class="badge badge-danger">必須</span>
                        メールアドレス
                    </label>
                    <div class="col-md-10">
                        <input class="form-control" value="{{ old('email') }}" type="text" name="email">
                        <label class="example col-md-5">例:example@example.com</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tel"class="col-md-5">
                        <span class="badge badge-danger">必須</span>
                        電話番号
                    </label>
                    <div class="col-md-10">
                        <input class="form-control" value="{{ old('tel') }}" type="tel" name="tel">
                        <label class="example col-md-5">例:090-0000-0000</label>
                    </div>
                </div>
                {{--<div class="form-group check">
                    <label class="col-md-6">
                        <span class="badge badge-danger">必須</span>
                        メニュー</label>
                    @foreach($options as $option)
                    <label class="col-md-6 form-check-label">
                        <input class="form-check-input" type="checkbox" name="option[{{ $option->id}}]" value="{{ $option->id}}"  {{ $option->id===(int)old('option.'.$option->id) ? 'checked' : ''}}>
                        {{$option->option}}
                    </label>
                   @endforeach
                </div>--}}
                <div class="form-group row">
                    <label class="col-md-5">
                        <span class="badge badge-danger">必須</span>
                        オプション</label>
                        <div class="col-md-10">
                    @foreach($options as $option)
                    {{$option->option}}
                    <label class="col-md-10 form-check-label">
                        <select class="form-select"  name="option[{{ $option->id}}]" value="{{ $option->id}}"  {{ $option->id===(int)old('option.'.$option->id) ? 'selected' : ''}}>
                            <option></option>
                        </selected>
                        
                    </label>
                   @endforeach
                </div>
                <div class="form-group row">
                    <label class="col-md-5">
                        <span class="badge badge-danger">必須</span>
                        ご希望の日にち
                    </label>
                    <div class="col-md-10">
                        <input class="form-control" type="date" name="date" value="{{ old('date') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-5">
                        <span class="badge badge-danger">必須</span>
                        ご希望の時刻
                    </label>
                    <div class="col-md-10">
                        <select class="form-select" aria-label="Default select example" name="time">
                            <option>選択してください</option>
                            <option value="1" {{ old('time')==1 ? 'selected_time' : '' }}>9:00</option>
                            <option value="2" {{ old('time')==2 ? 'selected_time' : '' }}>9:30</option>
                            <option value="3" {{ old('time')==3 ? 'selected_time' : '' }}>10:00</option>
                            <option value="3" {{ old('time')==4 ? 'selected_time' : '' }}>10:30</option>
                            <option value="3" {{ old('time')==5 ? 'selected_time' : '' }}>11:00</option>
                            <option value="3" {{ old('time')==6 ? 'selected_time' : '' }}>11:30</option>
                            <option value="3" {{ old('time')==7 ? 'selected_time' : '' }}>12:00</option>
                            <option value="3" {{ old('time')==8 ? 'selected_time' : '' }}>12:30</option>
                            <option value="3" {{ old('time')==9 ? 'selected_time' : '' }}>13:00</option>
                            <option value="3" {{ old('time')==10 ? 'selected_time' : '' }}>13:30</option>
                            <option value="3" {{ old('time')==11 ? 'selected_time' : '' }}>14:00</option>
                            <option value="3" {{ old('time')==12 ? 'selected_time' : '' }}>14:30</option>
                            <option value="3" {{ old('time')==13 ? 'selected_time' : '' }}>15:00</option>
                            <option value="3" {{ old('time')==14 ? 'selected_time' : '' }}>15:30</option>
                            <option value="3" {{ old('time')==15 ? 'selected_time' : '' }}>16:00</option>
                            <option value="3" {{ old('time')==16 ? 'selected_time' : '' }}>16:30</option>
                            <option value="3" {{ old('time')==17 ? 'selected_time' : '' }}>17:00</option>
                            <option value="3" {{ old('time')==18 ? 'selected_time' : '' }}>17:30</option>
                            <option value="3" {{ old('time')==19 ? 'selected_time' : '' }}>18:00</option>
                            <option value="3" {{ old('time')==20? 'selected_time' : '' }}>18:30</option>
                            <option value="3" {{ old('time')==21 ? 'selected_time' : '' }}>19:00</option>
                            <option value="3" {{ old('time')==22 ? 'selected_time' : '' }}>19:30</option>
                            <option value="3" {{ old('time')==23 ? 'selected_time' : '' }}>20:00</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contact_body" class="col-md-5">
                        <span class="badge badge-danger">必須</span>
                        お問い合わせ内容
                    </label>
                    <div class="col-md-10">
                        <div class="contact-caution">
                            <p>※ご質問等がございましたらご記入お願い致します</p>
                        </div>
                        <textarea class="form-control" name="contact_body" rows="10" cols="30" minlength:10 maxlength:140>{{ old('contact_body') }}</textarea>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" name="action" value="submit" class="btn btn-outline-primary">入力内容確認</button>
                </div>
            </form>   
        </div>
    </div>
</div>
@endsection