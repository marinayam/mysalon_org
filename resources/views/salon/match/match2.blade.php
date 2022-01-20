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
            <p>質問:まつ毛が下がっている</p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a class="answer-btn" href={{ route('match3') }}>
                    <button type="button" class="btn btn-answer w-25">YES</button>
                </a>
                <a class="answer-btn" href={{ route('match3') }}>
                    <button type="button" class="btn btn-answer w-25">No</button>
                </a>
            </div>
        </div>
        <div class="return-btn">
                <a class="return" href={{ route('match') }}><u>もどる</u></a>
        </div>
    </div>
</div>
@endsection