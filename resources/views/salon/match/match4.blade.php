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
            <div class=".d-md-inline-flex">
                <a class="answer-btn" href={{ route('answer1') }}>
                    <button type="button" class="btn btn-answer w-25 col-12">ナチュラル</button>
                </a>
                <a class="answer-btn" href={{ route('answer2') }}>
                    <button type="button" class="btn btn-answer w-25 col-12">パッチリ</button>
                </a>
                <a class="answer-btn" href={{ route('answer3') }}>
                    <button type="button" class="btn btn-answer w-25 col-12">ゴージャス</button>
                </a>
                <a class="answer-btn" href={{ route('answer3') }}>
                    <button type="button" class="btn btn-answer w-25 col-">エレガント</button>
                </a>
            </div>
        </div>
        <div class="return-btn">
                <a class="return" href={{ route('match') }}><u>もどる</u></a>
        </div>
    </div>
</div>
@endsection