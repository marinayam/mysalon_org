@extends('layouts.front')
@section('title','おすすめメニュー')
@section('content')
<div class="container">
    <div class="choose_box">
        <div class="match-ttl">
            <p>あなたにピッタリのメニュー発見チャート</p>
        </div>
        <!-- 質問 -->
        <div class="question">
            <p>質問1: なりたいイメージは？</p>
            <div class="d-grid gap-2">
                <ul>
                    <li><a class="btn-answer" href={{ route('answer1') }}>ナチュラル</a></li>
                    <li><a class="btn-answer" href={{ route('answer2') }}>パッチリ</a></li>
                    <li><a class="btn-answer" href={{ route('answer3') }}>ゴージャス</a></li>
                    <li><a class="btn-answer" href={{ route('answer3') }}>エレガント</a></li>
                </ul>
            </div>
        </div>
        <div class="return-btn">
                <a class="return" href={{ route('match3') }}>もどる</a>
        </div>
    </div>
</div>
@endsection