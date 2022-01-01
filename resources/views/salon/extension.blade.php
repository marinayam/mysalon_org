@extends('layouts.front')
@section('title','Extension')
@section('content')
{{-- Laravel標準で用意されているCSSを読み込みます --}}
<link href="{{ asset('css/app.css') }}" rel ="stylesheet">
{{-- 作成したCSSを追記 --}}
<link href="{{ asset('css/menu.css') }}" rel="stylesheet">
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
            <h3>シングルラッシュ
            <br>(3種類の毛質)</h3>
            <p class="recommend_ttl">
                ①フラットラッシュ
            </p>
            <div class="price">
                <ul class="table">
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    60分つけ放題　120本まで（初回限定）
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
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    90分つけ放題　160本まで（初回限定）
                                </p>
                                <p class="item_detail">所要時間：95分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">7,700
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    60本
                                </p>
                                <p class="item_detail">所要時間：30分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">4,400
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    80本
                                </p>
                                <p class="item_detail">所要時間：60分</p>
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
                                    100本
                                </p>
                                <p class="item_detail">所要時間：60分</p>
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
                                    120本(人気No.1)
                                </p>
                                <p class="item_detail">所要時間：60分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">7,700
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    140本
                                </p>
                                <p class="item_detail">所要時間：90分</p>
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
                                    160本
                                </p>
                                <p class="item_detail">所要時間：90分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">9,900
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    ~200本
                                </p>
                                <p class="item_detail">所要時間：110分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">12,100
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div> 
            <div class="menu-price-item-recommend">
                <ul class="recommend-point">
                    <li>
                        ○軽い付け心地がお好きな方
                    </li>
                    <li>
                        ○持続力を重視する方
                    </li>
                    <li>
                        ○カラー変更可！＋1,100円(税込)
                    </li>
                    <li>
                        ○カールの種類：J/JC/C/CC　○太さ：0.15mm　○長さ：7mm～14mm
                    </li>
                    <br>
                    <li>
                        ※初回＆前回から1ヶ月以内：オフ無料　※前回から1ヶ月以上：＋1,100円(税込)　※他店オフ：＋2,200円(税込)
                    </li>
                    <li>
                        ※前回のご来店から2ヶ月以上経ってのご来店はメニューの金額から＋1,100円(税込)頂きます。
                    </li>
                 </ul>
            </div>
             <p class="recommend_ttl">
                ②セーブル
            </p>
            <div class="price">
                <ul class="table">
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    60本
                                </p>
                                <p class="item_detail">所要時間：30分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">3,300
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    80本
                                </p>
                                <p class="item_detail">所要時間：60分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">4,400
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    100本
                                </p>
                                <p class="item_detail">所要時間：60分</p>
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
                                    120本(人気No.1)
                                </p>
                                <p class="item_detail">所要時間：60分</p>
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
                                    140本
                                </p>
                                <p class="item_detail">所要時間：90分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">7,700
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    160本
                                </p>
                                <p class="item_detail">所要時間：90分</p>
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
                                    ~200本
                                </p>
                                <p class="item_detail">所要時間：110分</p>
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
            <div class="menu-price-item-recommend">
                <ul class="recommend-point">
                    <li>
                        ○ナチュラルに見せたい方
                    </li>
                    <li>
                        ○ご予算を抑えたい方
                    </li>
                    <li>
                        ○カラー変更可！＋1,100円(税込)
                    </li>
                    <li>
                        ○カールの種類：J/JC/C/CC　○太さ：0.15mm　○長さ：7mm～14mm
                    </li>
                    <br>
                    <li>
                        ※初回＆前回から1ヶ月以内：オフ無料　※前回から1ヶ月以上：＋1,100円(税込)　※他店オフ：＋2,200円(税込)
                    </li>
                    <li>
                        ※前回のご来店から2ヶ月以上経ってのご来店はメニューの金額から＋1,100円(税込)頂きます。
                    </li>
                 </ul>
            </div>
            <p class="recommend_ttl">
                ③ミンク
            </p>
            <div class="price">
                <ul class="table">
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    60本
                                </p>
                                <p class="item_detail">所要時間：30分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">3,300
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    80本
                                </p>
                                <p class="item_detail">所要時間：60分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">4,400
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    100本
                                </p>
                                <p class="item_detail">所要時間：60分</p>
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
                                    120本(人気No.1)
                                </p>
                                <p class="item_detail">所要時間：60分</p>
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
                                    140本
                                </p>
                                <p class="item_detail">所要時間：90分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">7,700
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    160本
                                </p>
                                <p class="item_detail">所要時間：90分</p>
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
                                    ~200本
                                </p>
                                <p class="item_detail">所要時間：110分</p>
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
            <div class="menu-price-item-recommend">
                <ul class="recommend-point">
                    <li>
                        ○カールをキープしたい方
                    </li>
                    <li>
                        ○ご予算を抑えたい方
                    </li>
                    <li>
                        ○カラー変更可！＋1,100円(税込)
                    </li>
                    <li>
                        ○カールの種類：J/JC/C/CC　○太さ：0.15mm　○長さ：7mm～14mm
                    </li>
                    <br>
                    <li>
                        ※初回＆前回から1ヶ月以内：オフ無料　※前回から1ヶ月以上：＋1,100円(税込)　※他店オフ：＋2,200円(税込)
                    </li>
                    <li>
                        ※前回のご来店から2ヶ月以上経ってのご来店はメニューの金額から＋1,100円(税込)頂きます。
                    </li>
                 </ul>
            </div>
        </div>
        <div class="inner inner--sm inner-padding--lg">
        <h3>ボリュームラッシュ</h3>
        <p class="recommend_ttl_2">
            負担軽減＆ボリューム
        </p>
        <div class="price">
            <ul class="table">
                <li class="item">
                    <div class="c_flex_column_half">
                        <div class="left c_flex_column__item">
                            <p class="item_name">
                                300本まで（初回限定）
                            </p>
                            <p class="item_detail">所要時間：85分</p>
                        </div>
                        <div class="right c_flex_column__item">
                            <p class="item_price">7,700
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c_flex_column_half">
                        <div class="left c_flex_column__item">
                            <p class="item_name">
                                400本まで（初回限定）
                            </p>
                            <p class="item_detail">所要時間：85分</p>
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
                                500本まで（初回限定）
                            </p>
                            <p class="item_detail">所要時間：90分</p>
                        </div>
                        <div class="right c_flex_column__item">
                            <p class="item_price">9,900
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c_flex_column_half">
                        <div class="left c_flex_column__item">
                            <p class="item_name">
                                60本
                            </p>
                            <p class="item_detail">所要時間：30分</p>
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
                                80本
                            </p>
                            <p class="item_detail">所要時間：60分</p>
                        </div>
                        <div class="right c_flex_column__item">
                            <p class="item_price">7,700
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c_flex_column_half">
                        <div class="left c_flex_column__item">
                            <p class="item_name">
                                100本
                            </p>
                            <p class="item_detail">所要時間：60分</p>
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
                                120本(人気No.1)
                            </p>
                            <p class="item_detail">所要時間：60分</p>
                        </div>
                        <div class="right c_flex_column__item">
                            <p class="item_price">9,900
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c_flex_column_half">
                        <div class="left c_flex_column__item">
                            <p class="item_name">
                                140本
                            </p>
                            <p class="item_detail">所要時間：90分</p>
                        </div>
                        <div class="right c_flex_column__item">
                            <p class="item_price">11,000
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c_flex_column_half">
                        <div class="left c_flex_column__item">
                            <p class="item_name">
                                160本
                            </p>
                            <p class="item_detail">所要時間：90分</p>
                        </div>
                        <div class="right c_flex_column__item">
                            <p class="item_price">12,100
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c_flex_column_half">
                        <div class="left c_flex_column__item">
                            <p class="item_name">
                                ~200本
                            </p>
                            <p class="item_detail">所要時間：110分</p>
                        </div>
                        <div class="right c_flex_column__item">
                            <p class="item_price">14,300
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div> 
        <div class="menu-price-item-recommend">
            <ul class="recommend-point">
                <li>
                    ○まつ毛への負担を軽減したい方
                </li>
                <li>
                    ○ボリュームを出したい方
                </li>
                <li>
                    ○カラー変更可！＋1,100円(税込)
                </li>
                <li>
                    ○カールの種類：J/JC/C/CC　○太さ：0.15mm　○長さ：7mm～14mm
                </li>
                <br>
                <li>
                    ※初回＆前回から1ヶ月以内：オフ無料　※前回から1ヶ月以上：＋1,100円(税込)　※他店オフ：＋2,200円(税込)
                </li>
                <li>
                    ※前回のご来店から2ヶ月以上経ってのご来店はメニューの金額から＋1,100円(税込)頂きます。
                </li>
             </ul>
        </div>
        <div class="inner inner--sm inner-padding--lg">
        <h3>バインドロック</h3>
        <p class="recommend_ttl_2">
            持続力＆ボリューム
        </p>
        <div class="price">
            <ul class="table">
                <li class="item">
                    <div class="c_flex_column_half">
                        <div class="left c_flex_column__item">
                            <p class="item_name">
                                60本
                            </p>
                            <p class="item_detail">所要時間：30分</p>
                        </div>
                        <div class="right c_flex_column__item">
                            <p class="item_price">9,900
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c_flex_column_half">
                        <div class="left c_flex_column__item">
                            <p class="item_name">
                                80本
                            </p>
                            <p class="item_detail">所要時間：60分</p>
                        </div>
                        <div class="right c_flex_column__item">
                            <p class="item_price">11,000
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c_flex_column_half">
                        <div class="left c_flex_column__item">
                            <p class="item_name">
                                100本
                            </p>
                            <p class="item_detail">所要時間：60分</p>
                        </div>
                        <div class="right c_flex_column__item">
                            <p class="item_price">12,100
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c_flex_column_half">
                        <div class="left c_flex_column__item">
                            <p class="item_name">
                                120本(人気No.1)
                            </p>
                            <p class="item_detail">所要時間：60分</p>
                        </div>
                        <div class="right c_flex_column__item">
                            <p class="item_price">13,200
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c_flex_column_half">
                        <div class="left c_flex_column__item">
                            <p class="item_name">
                                140本
                            </p>
                            <p class="item_detail">所要時間：90分</p>
                        </div>
                        <div class="right c_flex_column__item">
                            <p class="item_price">14,300
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c_flex_column_half">
                        <div class="left c_flex_column__item">
                            <p class="item_name">
                                160本
                            </p>
                            <p class="item_detail">所要時間：90分</p>
                        </div>
                        <div class="right c_flex_column__item">
                            <p class="item_price">15,400
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c_flex_column_half">
                        <div class="left c_flex_column__item">
                            <p class="item_name">
                                ~200本
                            </p>
                            <p class="item_detail">所要時間：110分</p>
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
        <div class="menu-price-item-recommend">
            <ul class="recommend-point">
                <li>
                    ○マツエクを長持ちさせたい方
                </li>
                <li>
                    ○ボリュームを出したい方
                </li>
                <li>
                    ○カラー変更可！＋1,100円(税込)
                </li>
                <li>
                    ○カールの種類：J/JC/C/CC　○太さ：0.15mm　○長さ：7mm～14mm
                </li>
                <br>
                <li>
                    ※初回＆前回から1ヶ月以内：オフ無料　※前回から1ヶ月以上：＋1,100円(税込)　※他店オフ：＋2,200円(税込)
                </li>
                <li>
                    ※前回のご来店から2ヶ月以上経ってのご来店はメニューの金額から＋1,100円(税込)頂きます。
                </li>
             </ul>
        </div>
    </section>
    <section class="menu">
        <div class="inner inner--sm inner-padding--lg">
            <h3>セットメニュー</h3>
            <p class="recommend_ttl_2">
                お得なおすすめセット
            </p>
            <div class="price">
                <ul class="table">
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    フラットラッシュ60分つけ放題＋
                                    <br>
                                    ボリュームラッシュ100本
                                </p>
                                <p class="item_detail">所要時間：60分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">11,000
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    フラットラッシュ60分つけ放題＋
                                    <br>
                                    ボリュームラッシュ200本
                                </p>
                                <p class="item_detail">所要時間：60分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">12,100
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    フラットラッシュ60分つけ放題＋
                                    <br>
                                    ボリュームラッシュ300本
                                </p>
                                <p class="item_detail">所要時間：60分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">13,200
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="menu">
        <div class="inner inner--sm inner-padding--lg">
            <h3>オプションメニュー</h3>
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
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    アップワード
                                </p>
                                <p class="item_detail">所要時間：5分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">2,200
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    オフ(前回から１ヶ月以上)
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
                    <li class="item">
                        <div class="c_flex_column_half">
                            <div class="left c_flex_column__item">
                                <p class="item_name">
                                    オフ(他店)
                                </p>
                                <p class="item_detail">所要時間：5分</p>
                            </div>
                            <div class="right c_flex_column__item">
                                <p class="item_price">2,200
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
                    ○まつ毛ケア：持続力を高めたい　＆　まつ毛ダニ予防をしたい方
                </li>
                <li>
                    ○アップワード：まつ毛をパッチリ上げたい方
                </l>
            </ul>
        </div>
    </section>
</div>
@endsection