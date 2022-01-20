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
            <p>質問: まつ毛が多い？</p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a class="answer-btn" href={{ route('match2') }}>
                    <button type="button" class="btn btn-answer w-25">YES</button>
                </a>
                <a class="answer-btn" href={{ route('match2') }}>
                    <button type="button" class="btn btn-answer w-25">No</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection


