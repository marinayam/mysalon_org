@extends('layouts.front')
@section('title','Perm')
@section('content')
{{-- Laravel標準で用意されているCSSを読み込みます --}}
<link href="{{ asset('css/app.css') }}" rel ="stylesheet">
{{-- 作成したCSSを追記 --}}
<link href="{{ asset('css/perm.css') }}" rel="stylesheet">
<div class="container">
    <div class="menu_page_head">
        <img src="images/perm.png" class="d-block w-100">
        <h2>
            <span>MENU & PRICE</span>
            <small>パーマ</small>
        </h2>
    </div>
    <section class="menu">
        <div class="inner inner--sm inner-padding--lg">
            <h3>ラッシュリフト</h3>
            <p class="recommend_ttl">
                根元から立ち上げでナチュラルに瞳を大きく
            </p>
            <div class="price">
                <ul class="table">
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    上まつげのみ(初回限定)
                                </p>
                                <p class="item_detail">所要時間：45分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">5,500
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    上まつげのみ（リピートのお客様）
                                </p>
                                <p class="item_detail">所要時間：45分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">6,600
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    上下（初回限定）
                                </p>
                                <p class="item_detail">所要時間：80分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">8,800
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="tem">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    上下（リピートのお客様）
                                </p>
                                <p class="item_detail">所要時間：80分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">9,900
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div> 
        </div>
        <div class="menu-price-item-recommend">
            <ul class="recommend-point">
                <li>
                    ○逆さまつ毛でお悩みの方
                </li>
                <li>
                    ○まぶたが重くて瞳を大きく見せたい方
                </l>
                <li>
                    ○メンテナンスが簡単
                </l>
            </ul>
        </div>
    </section>
    <section class="menu">
        <div class="inner inner--sm inner-padding--lg">
            <h3>セットメニュー</h3>
            <p class="recommend_ttl">
                お得なおすすめセット
            </p>
            <div class="price">
                <ul class="table">
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    (初回限定)
                                    <br>
                                    ラッシュリフト＋眉WAX（1回）
                                    <br>
                                    ブロウラミネーション（眉毛パーマ）
                                    <br>
                                </p>
                                <p class="item_detail">所要時間：120分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">12,480
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    ラッシュリフト＋眉WAX（1回）
                                    <br>
                                    ブロウラミネーション（眉毛パーマ）
                                    <br>
                                </p>
                                <p class="item_detail">所要時間：120分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">16,500
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="menu-price-item-recommend">
            <ul class="recommend-point">
                <li>
                    ○眉毛のお手入れを簡単にしたい方
                </li>
                <li>
                    ○自分の骨格に合った眉毛を手に入れたい方
                </l>
            </ul>
        </div>
    </section>
    <section class="menu">
        <div class="inner inner--sm inner-padding--lg">
            <h3>オプションメニュー</h3>
            <p class="recommend_ttl">
                お目元ケア
            </p>
            <div class="option">
                <ul class="table">
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    シャンプー、トリートメント、ケア
                                </p>
                                <p class="item_detail">所要時間：5分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">1,100
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="menu-price-item-recommend">
            <ul class="recommend-point">
                <li>
                    ○マツエクやまつ毛パーマの持続力を高めたい方
                </li>
                <li>
                    ○まつ毛ダニ予防をしたい方
                </l>
            </ul>
        </div>
    </section>

@endsection