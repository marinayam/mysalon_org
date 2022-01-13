@extends('layouts.front')
@section('title','おすすめメニュー')
@section('content')
<div class="container">
    <div class="choose_box">
        <div class="match-ttl">
            <p>あなたにピッタリのメニュー発見チャート</p>
        </div>
        <!-- 質問1 -->
        <div class="question">
            <p>質問1: なりたいイメージは？</p>
            <div class="d-grid gap-2">
                <ul>
                    <li><a class="btn-answer" href={{ route('perm') }}>ナチュラル</a></li>
                    <li><a class="btn-answer" href={{ route('perm') }}>パッチリ</a></li>
                    <li><a class="btn-answer" href={{ route('perm') }}>ゴージャス</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection