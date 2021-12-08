@extends('layouts.front')
@section('title','タイトル')
@section('content')
{{-- Laravel標準で用意されているCSSを読み込みます --}}
<link href="{{ asset('css/app.css') }}" rel ="stylesheet">
{{-- 作成したCSSを追記 --}}
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<!--Sliders----------------------------------->
<div class="carousel slide" id="sliders" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#sliders" data-slide-to="0" class="active"></li>
    <li data-target="#sliders" data-slide-to="1"></li>
    <li data-target="#sliders" data-slide-to="2"></li>
    <li data-target="#sliders" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="images/perm.png" class="d-block w-100">
        <div class="carousel-caption d-none d-sm-block">
            <div class="aboutSlider-titleGroup">
                <h1 class="aboutSlider-h1 title">パーマ</h1>
                <div class="aboutSlider-information">
                    <p>【大人気のまつ毛パーマ】ラッシュリフト
                    <br>
                    根元から立ち上げ！一重まぶたや逆さまつ毛などのお悩み解決
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel-item"><img src="images/extension.png" class="d-block w-100">
        <div class="carousel-caption d-none d-sm-block">
            <div class="aboutSlider-titleGroup">
                <h1 class="aboutSlider-h1 title">マツエク</h1>
                <div class="aboutSlider-information">
                    <p>【流行りのカラーエクステ】フラッシュリフト
                    <br>
                    肌馴染みのいいロイッシュカラー導入店！抜け感のある目元に
                    <br>
                    肌の色に合わせて全5色からセレクト可能
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel-item"><img src="images/eyebrow.png" class="d-block w-100">
        <div class="carousel-caption d-none d-sm-block">
            <div class="aboutSlider-titleGroup">
                <h1 class="aboutSlider-h1 title">アイブロウ</h1>
                <div class="aboutSlider-information">
                    <p>【韓国（オルチャン）眉毛を叶えるサロン】アイブロウWax
                    <br>
                    カウンセリングにより最適な美眉をご提案
                    <br>
                    お一人お一人の輪郭・骨格・印象に合わせて似合わせ美眉へ
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel-item"><img src="images/goods.png" class="d-block w-100">
        <div class="carousel-caption d-none d-sm-block">
            <div class="aboutSlider-titleGroup">
                <h1 class="aboutSlider-h1 title">おすすめ商品</h1>
                <div class="aboutSlider-information">
                    <p>話題になっている商品や人気な商品を一緒にいかがですか
                    <br>
                    実際に使用しておすすめできる商品のみ取り扱い！
                    </p>
                </div>
            </div>
        </div>
    </div>
  </div>
  <a href="#sliders" class="carousel-control-prev" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="sr-only">前の画像へ</span>
  </a>
  <a href="#sliders" class="carousel-control-next" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="sr-only">次の画像へ</span>
  </a>
</div>
<!--LoCAION--------------------------------->
<div class="location">
    <h3>LOCATION</h3>
    <h4>STORE INFORMATION</h4>
    <div class="location-mapArea">
        <a href="https::" target="_brank">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.948129464338!2d139.57338941520095!3d35.70289403639105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ef66b826b691%3A0x559cc192cb003bd3!2z44Ki44Kk44Op44OD44K344Ol77yG44OY44OD44OJ44K544ORIEx5cy4g5ZCJ56Wl5a-6IOOAkOODquODvOOCueOAkQ!5e0!3m2!1sen!2sjp!4v1638548357176!5m2!1sen!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </a>
    </div>
</div>
@endsection