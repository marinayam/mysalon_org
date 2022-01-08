@extends('layouts.front')
@section('title','おすすめメニュー')
@section('content')
<div class="container">
    <div class="choose_box">
        <div class="app-theme">
            <p>あなたにピッタリのメニュー発見チャート</p>
        </div>
        <!-- ここから５つ質問 -->
        <!-- 質問1 -->
        <div class="fit">
            <div id="q_01">
                <p>質問1: なりたいイメージは？</p>
                <ul>
                    <li><a class="btn" href="#q_02" data-value="a">ナチュラル</a></li>
                  <li><a class="btn" href="#q_02" data-value="b">パッチリ</a></li>
                  <li><a class="btn" href="#q_02" data-value="c">ゴージャス</a></li>
                </ul>
            </div>
            <!-- 質問2 -->
            <div id="q_02" style="display: none;">
                <p>質問2:　自まつ毛の量が？</p>
                <ul>
                    <li><a class="btn" href="#q_03" data-value="a">多い</a></li>
                    <li><a class="btn" href="#q_03" data-value="b">普通</a></li>
                    <li><a class="btn" href="#q_03" data-value="c">少ない</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection