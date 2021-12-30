@extends('layouts.chart')
@section('title','カルテ記入完了')
@section('content')
{{-- Laravel標準で用意されているCSSを読み込みます --}}
<link href="{{ asset('css/app.css') }}" rel ="stylesheet">
{{-- 作成したCSSを追記 --}}
<link href="{{ asset('css/front.css') }}" rel="stylesheet">
<!--メッセージ-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">カルテ記入完了</div>
                    <div class="card-body">
                    <br>
                    ご記入ありがとうございました。
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection