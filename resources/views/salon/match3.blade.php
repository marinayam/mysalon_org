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
            <p>質問:汗をかきやすい？</p>
            <div class="d-grid gap-2">
                <ul>
                    <li><a class="btn-answer" href={{ route('match4') }}>YES</a></li>
                    <li><a class="btn-answer" href={{ route('match4') }}>NO</a></li>
                </ul>
            </div>
        </div>
        <div class="return-btn">
                <a class="return" href={{ route('match2') }}>もどる</a>
        </div>
    </div>
</div>
@endsection