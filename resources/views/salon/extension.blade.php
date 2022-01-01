@extends('layouts.front')
@section('title','Extension')
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
            <small>マツエク</small>
        </h2>
    </div>
    <section class="menu">
        <div class="inner inner--sm inner-padding--lg">
            <h3>フラットラッシュ</h3>
            <p class="recommend_ttl">
                軽い付け心地　＆　持続力
            </p>
            <div class="price">
                <ul class="table">
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    フラットラッシュ60分つけ放題（初回限定）
                                </p>
                                <p class="item_detail">所要時間：65分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">5,500
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="perm_price_item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    上まつげのみ（リピートのお客様）
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
                    <li class="perm_price_item">
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
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    上下（リピートのお客様）
                                </p>
                                <p class="item_detail">所要時間：80分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">11,000
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
</div>
@endsection