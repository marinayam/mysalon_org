@extends('layouts.front')
@section('title','Contact')
@section('content')
<div class="content">
    <h1 class>
        <span class="content-ttl">CONTACT</span>
    </h1>
    <p class="content-subttl">お問い合わせ</p>
</div>
<!--ページタイトル-->
<div class="container mt-5">
    <form method="POST" action="{{ route('contact.send') }}">
        @csrf
        <div class="form-group">
            <label for="Name">名前</label>
            {{ $inputs['name'] }}
            <input class="form-control" value="{{ $inputs['name'] }}" type="hidden" name="name" >
        </div>
        <div class="form-group">
            <label for="email">メールアドレス
            </label>
            {{ $inputs['email'] }}
            <input class="form-control" value="{{ $inputs['email'] }}" type="hidden" name="email">
        </div>   
        <div class="form-group">
            <label for="tel">電話番号</label>
            {{ $inputs['tel'] }}
            <input class="form-control" value="{{ $inputs['tel'] }}" type="hidden" name="tel">
        </div>
        <div class="form-group">
            <label for="body">お問い合わせ内容</label>
            {!! nl2br(e($inputs['body'])) !!}
            <input name="body" value="{{ $inputs['body'] }}" type="hidden">
        </div>
        <button type="submit" name="action" value="back">
            入力内容修正
        </button>
        <button type="submit" name="action" value="submit">
            送信する
        </button>
    </form>
</div>
@endsection