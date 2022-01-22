@extends('layouts.front')
@section('title','Contact')
@section('content')
<div class="container">
    <div class="row">
        <div class ="col-md-8 mx-auto">
            <div class="contact-content">
                <h1 class>
                    <span class="contact-ttl">CONTACT</span>
                </h1>
                <p class="contact-subttl">確認画面</p>
            </div>
            <div class="container mt-5">
                <form method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <div class="form-group row chart-answer">
                        <label for="Name" class="col-md-5 contact-question">名前</label>
                        <u class="col-md-5">{{ $inputs['name'] }}</u>
                        <div class="col-md-10">
                            <input class="form-control" value="{{ $inputs['name'] }}" type="hidden" name="name" >
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label for="email" class="col-md-5 contact-question">メールアドレス</label>
                        <u class="col-md-5">{{ $inputs['email'] }}</u>
                        <div class="col-md-10">
                            <input class="form-control" value="{{ $inputs['email'] }}" type="hidden" name="email">
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label for="tel" class="col-md-5 contact-question">電話番号</label>
                        <u class="col-md-5">{{ $inputs['tel'] }}</u>
                        <div class="col-md-10">
                            <input class="form-control" value="{{ $inputs['tel'] }}" type="hidden" name="tel">
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label for="contact_body" class="col-md-5 contact-question">お問い合わせ内容</label>
                        {{-- <u>{!! nl2br(e($inputs['select'])) !!}</u> --}}
                        <u class="col-md-5">{!! nl2br(e($inputs['contact_body'])) !!}</u>
                        <div class="col-md-10">
                            <input name="contact_body" value="{{ $inputs['contact_body'] }}" type="hidden">
                        </div>
                    </div>
                    <div class="check-button">
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <button type="submit" name="action" value="back" class="btn btn-outline-secondary">入力内容修正</button>
                            </div>
                            <div class="btn-group ml-auto">
                                <button type="submit" name="action" value="submit" class="btn btn-outline-primary">送信する</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection