<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lys.kichijoji</title>
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
    <!--ヘッダー-->
    <div class="container">
        <!--サイトロゴ-->
        <div id="logo">
               <a href ="https:トップページ"><img src ="images/logo.png" width="160px">
               </a>
        </div>
        <!--ヘッダーのメニューバー-->
        <div id="drawer_toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!--ヘッダーのメニューバー-->
        <input id="menu" type="checkbox" />
        <label for ="menu" class="open"> </label>
        <label for ="menu" class="back"></label>
        <!--ヘッダーのメニューバー-->
        <aside>
            <label for="menu" class="close">x</label>
        </aside>
        <!--ヘッダーのメニューバー-->
        <nav>
           <ul class = "hidden-menu"> 
                <li>
                    <a href = "">ABOUT US</a>
                </li>
                <li>
                    <a href = "">ログイン</a>
                </li>
                <li>
                    <a href = "">メニュー</a>
                </li>
                <li>
                    <a href = "">Instagram</a>
                </li>
                <li>
                    <a href = "">ブログ</a>
                </li>
                <li>
                    <a href = "">スタッフの紹介</a>
                </li>
                <li>
                    <a href = "">お問い合わせ</a>
                </li>
                <li>
                    <a href = "">Location</a>
                </li>
            </ul>
        </nav>
        <div>
            side footer
        </div>
        <!--ヘッダー左端の予約部分-->
        <div id="appointment">
        <a href ="https::予約ページ" class="appointment-btn"><img src="images/appointment.png" width"24px">
            <span>予約</span>
        </a>
        </div>
    </div>
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