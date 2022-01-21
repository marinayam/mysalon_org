@extends('layouts.front')
@section('title','おすすめメニュー')
@section('content')
<div class="container">
    <div class="choose_box">
        <div class="match-ttl">
            <p>あなたにおすすめのメニューは</p>
        </div>
        <!-- 答え1 -->
        <div class="card-group">
                <div class="card">
                    <img src="images/perm.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">フラットラッシュ・カラー140本</h5>
                        <p class="card-text">よりナチュラルで
                        <br>
                        透明感のある目元へ</p>
                        <p class="card-text"><small class="text-muted">9,900円(税込)</small></p>
                    </div>
                </div>
                <div class="answer-option">
                    <p>or</p>
                </div>
                <div class="card">
                    <img src="images/perm.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">フラットラッシュ140本</h5>
                        <p class="card-text">自然に生える目元へ</p>
                        <p class="card-text"><small class="text-muted">8,800円(税込)</small></p>
                    </div>
                </div>
                <div class="answer-option">
                    <p>or</p>
                </div>
                <div class="card">
                    <img src="images/perm.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">ボリュームラッシュ400本</h5>
                        <p class="card-text">アイライン効果が欲しい方に
                        <br>
                        おすすめ</p>
                        <p class="card-text"><small class="text-muted">11,000円(税込)</small></p>
                    </div>
                </div>
            </div>
            <div class="appoint-btn">
                <a class="appoint" href="">予約する</a>
            </div>
            <div class="return-btn">
                <a class="return" href={{ route('match4') }}>もどる</a>
            </div>
        </div>
    </div>
@endsection