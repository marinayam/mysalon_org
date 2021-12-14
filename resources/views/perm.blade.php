@extends('layouts.front')
@section('title','タイトル')
@section('content')
{{-- Laravel標準で用意されているCSSを読み込みます --}}
<link href="{{ asset('css/app.css') }}" rel ="stylesheet">
{{-- 作成したCSSを追記 --}}
<link href="{{ asset('css/perm.css') }}" rel="stylesheet">
<div class="perm_content">
    <div class="perm_ttl">
        <h2>
            <span>MENU & PRICE</span>
            <small>パーマ</small>
        </h2>
    </div>
    <section class="perm_content_menu">
        <div class="container">
            <div class="perm_content_price_list">
                <div class="perm_price_item">
                    <div class="perm_price_item_title">
                        <h5>ラッシュリフト</h5>
                        <div class="price_title_image">
                            <img src="images/perm-round.png">
                        </div>
                    </div>
                    <p class="recommend">根元から立ち上げすっぴんでも瞳を大きく！忙しい朝のメイク時間も短くできる♪</p>
                    <div class="perm_price_item_table">
                        <div class="color_table">
                            <div class="row">
                                <span class="col_left">上のみ(初回限定)</span>
                                <span class="col_right">¥5,500</span>
                            </div>
                            <div class="row">
                                <span class="col_left">上のみ</span>
                                <span class="col_right">¥6,600</span>
                            </div>
                            <div class="row">
                                <span class="col_left">上下(初回限定)</span>
                                <span class="col_right">¥8,800</span>
                            </div>
                            <div class="row">
                                <span class="col_left">上下</span>
                                <span class="col_right">¥11,000</span>
                            </div>
                        </div>
                    </div>
                    <div class="menu-price-item-compare">
                        <div class="compare-item">
                            <p class="normal">逆さまつ毛でお悩みの方や、まぶたが重くて瞳を大きく見せたい方におすすめ！</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection