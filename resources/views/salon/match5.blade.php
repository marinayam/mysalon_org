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
            <p>質問:マスカラをいつもする？</p>
            <div class="d-grid gap-2">
                <ul>
                    <li><a class="btn-answer" href={{ route('answer1') }}>YES</a></li>
                    <li><a class="btn-answer" href={{ route('answer2') }}>NO</a></li>
                </ul>
            </div>
        </div>
        <div class="return-btn">
                <a class="return" href={{ route('match4') }}>もどる</a>
        </div>
    </div>
</div>
@endsection