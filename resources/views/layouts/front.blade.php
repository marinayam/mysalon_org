<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- front用のCSSを読み込む --}}
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
    </head>
    <body>
    <header>
    <!--ヘッダーの上部-->
    <div class="header_in">
        <!--サイトロゴでトップページへ-->
        <div class="logo hidden-sp">
            <a href ="https:トップページ"><img src ="images/logo.png" width="160px"></a>
        </div>
        <!--ヘッダー範囲-->
        <div class="header_links">
            <!--右端のメニューバー-->
            <ul class="hidden-sp">
                <!--サイトロゴでトップページへ-->
                <li>
                    <a href="https:トップページ">
                        <img src="images/logo.png" width="120px">
                    </a>
                </li>
                <!--ABOUT USページへ-->
                <li>
                    <a href = "">ABOUT US</a>
                </li>
                <!--ログインページへ-->
                <li>
                    <a href = "">ログイン</a>
                </li>
                <!--メニューページへ-->
                <li>
                    <a href = "">メニュー</a>
                </li>
                <!--Instagramページへ-->
                <li>
                    <a href = "">Instagram</a>
                </li>
                <!-- ブログページへ-->
                <li>
                    <a href = "">ブログ</a>
                </li>
                <!--スタッフ紹介ページへ-->
                <li>
                    <a href = "">スタッフの紹介</a>
                </li>
                <!--お問い合わせページへ-->
                <li>
                    <a href = "">お問い合わせ</a>
                </li>
                <!--Location＆Informationページへ-->
                <li>
                    <a href = "">LOCATION & INFORMATION</a>
                </li>
            </ul>
            <!--左端予約部分-->
            <a href="https:予約ページ"　class="appointment-btn visible-sp">
                <img src="images/appointment.png" width="24px">
                <span>予約</span>
            </a>
            <!--中央ロゴ-->
            <a href="https:トップページ" class="sp-logo">
                <img src="images/logo.png" width="120px">
            </a>
            <!--右端メニューバーのデザイン-->
            <a class="menu-trigger visible-sp">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
    <!--ナビゲーション-->
    <nav class="g-nav visible-sp" style="display: none;">
        <ul class="list">
            <li>
                <a href = "">ABOUT US</a>
            </li>
            <!--ログインページへ-->
            <li>
                <a href = "">ログイン</a>
            </li>
            <!--メニューページへ-->
            <li>
                <a href = "">メニュー</a>
            </li>
            <!--Instagramページへ-->
            <li>
                <a href = "" target="_brank">
                    <img src="images/instagram-icon.png" width="24px">
                    " Instagram"
                </a>
            </li>
            <!-- ブログページへ-->
            <li>
                <a href = "">ブログ</a>
            </li>
            <!--スタッフ紹介ページへ-->
            <li>
                <a href = "">スタッフの紹介</a>
            </li>
            <!--お問い合わせページへ-->
            <li>
                <a href = "">お問い合わせ</a>
            </li>
            <!--Location＆Informationページへ-->
            <li>
                <a href = "">LOCATION & INFORMATION</a>
            </li>
        </ul>
    </nav>
    </header>
    <main class="py-4">
        {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
        @yield('content')
    </main>
    <footer>
        <!--LOCATION & INFORMATION-->
        <div class="info">
            <h1>LOCATION & INFORMATION</h1>
        </div>
        <div id="info">
            <dl>
                <dt>Lys.kichijoji</dt>
                <dd>
                    "住所番号"
                    <br>
                    "住所"
                </dd>
                <dd>TEL : </dd>
                <dd>営業時間  </dd>
                <dd>
                    <a href="https::">Google Mapで見る</a>
                </dd>
            </dl>
            {{-- お店のGoogle map--}}
            <div class="map_area">
                <a href="https::"></a>
            </div>
        </div>    
        <nav id="footer_nav">
            <ul>
                 {{-- お店情報 --}}
                <li>
                    <a href="aboutus/">ABOUT US</a>
                </li>
                 {{-- Instagram --}}
                <li>
                    <a href="https::" target="_blank"><img src="common/images/instagram.png" eidth="17" height="17">
                    </a>
                </li>
                  {{-- 予約 --}}
                <li>
                    <a href="appointment/">予約</a>
                </li>
            </ul>
        </nav>
        {{-- お店のロゴ --}}
        <div class="logo">
            <img src="common/images/logo.png" alt="Lys.kichijoji ロゴ" wigth="85">
        </div>
    </footer>        
    </div>
    </body>
</html>