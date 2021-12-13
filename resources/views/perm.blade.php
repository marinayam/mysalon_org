@extends('layouts.front')
@section('title','タイトル')
@section('content')
{{-- Laravel標準で用意されているCSSを読み込みます --}}
<link href="{{ asset('css/app.css') }}" rel ="stylesheet">
{{-- 作成したCSSを追記 --}}
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<div class="main-content">
    <section class="page-head">
        <img src="images/perm.png">
    </section>
</div>


@endsection