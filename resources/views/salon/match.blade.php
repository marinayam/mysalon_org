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
        <div id="q_01" class="fit">
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
        <!-- 質問3 -->
        <div id="q_03" style="display: none;">
            <p>質問3:　まつ毛の角度は？</p>
            <ul>
                <li><a class="btn" href="#q_04" data-value="a">上向き</a></li>
                <li><a class="btn" href="#q_04" data-value="b">真っ直ぐ</a></li>
                <li><a class="btn" href="#q_04" data-value="c">下がっている</a></li>
            </ul>
        </div>
        <!-- 質問4 -->
        <div id="q_04" style="display: none;">
            <p>質問4:　普段汗を？</p>
            <ul>
                <li><a class="btn" href="#q_05" data-value="a">かきやすい</a></li>
                <li><a class="btn" href="#q_05" data-value="b">普通</a></li>
                <li><a class="btn" href="#q_05" data-value="b">かかないほう</a></li>
            </ul>
        </div>
        <!-- 質問5 -->
        <div id="q_05" style="display: none;">
            <p>質問5:　普段、マスカラを？</p>
            <ul>
                <li><a class="btn end" data-value="a">常にする</a></li>
                <li><a class="btn end" data-value="b">たまにする</a></li>
                <li><a class="btn end" data-value="c">ほとんどしない</a></li>
            </ul>
        </div>
        <!-- 回答の答え1 -->
        <div id="answer_01" class="result" style="display: none;">
            <div class="result_theme ">
                <p>あなたにおすすめメニューは</p>
            </div>
            <div class="result_type0 ">
                <h4>カラー60分 or フラット60分 or ボリュームラッシュ300本</h4>
            </div>
            <div class="result_discription0">
                <h2></h2>
                <p>
                  　
                </p>
            </div>
            <div class="return-btn">
                <a class="return" href={{ route('/') }}>もどる</a>
            </div>
        </div>
        <!-- 回答の答え2 -->
        <div id="answer_02" style="display: none;">
            <div class="result_theme ">
                <p>あなたにおすすめメニューは</p>
            </div>
            <div class="result_type1 ">
                <h4>カラー90分 or フラット90分 or ボリュームラッシュ300本　</h4>
            </div>
            <div class="result_discription1">
                <h2></h2>
                <p>
                  　
                </p>
            </div>
            <div class="return-btn">
                <a class="return" href={{ route('/') }}>もどる</a>
            </div>
        </div>
        <!-- 回答の答え3 -->
        <div id="answer_03" style="display: none;">
            <div class="result_theme ">
                <p>あなたにおすすめメニューは</p>
            </div>
            <div class="result_type2 ">
                <h4>フラット90分 or ボリュームラッシュ 400本 or バインンドロック100束</h4>
            </div>
            <div class="result_discription2">
                <h2></h2>
                <p>
                  　
                </p>
            </div>
            <div class="return-btn">
                <a class="return" href={{ route('/') }}>もどる</a>
            </div>
        </div>
     </div>
 </div>
@endsection