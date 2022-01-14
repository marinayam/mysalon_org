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
            <p>質問: 自まつ毛が多い？</p>
            <div class="d-grid gap-2">
                <ul>
                    <li><a class="btn-answer" href={{ route('match2') }}>YES</a></li>
                    <li><a class="btn-answer" href={{ route('match2') }}>NO</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection


