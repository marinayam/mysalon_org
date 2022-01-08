<!DOCTYPE html>
<html lang="{{ app ()->getLocale() }}">
    <head>
        <meta charset ="utf-8">
        <meta http-equiv="X-UA-Compatible" content = "IE = edge">
        <meta name ="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name = "csrf-token" content="{{ csrf_token() }}">
        
        {{--各ページごとにtitleタグを入れるために@yieldで空けておきます。--}}
        <title>@yield('title')</title>
        
        <!-- Scripts -->
        {{--Laravel標準で用意されているJavascriptを読み込みます--}}
        <script src ="{{ secure_asset('js/app.js') }}" defer></script>
        <script src ="{{ secure_asset('js/index.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="index.js"></script>
        
        
        <!-- Fonts-->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600"
        rel="stlesheet" type="text/css">
        
        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ asset('css/app.css') }}" rel ="stylesheet">
        {{-- 作成したCSSを追記 --}}
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <link href="{{ asset('css/match.css') }}" rel="stylesheet">
        <link href="{{ asset('css/service.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <div class="app">
        <header class="sticky-top">
            <!-- ヘッダー -->
            <div class="container-fluid">
                <!-- ナビゲーション -->
                <nav class="navbar navbar-expand-lg navbar-light" style=background-color: #e3f2fd;">
                    <!-- ヘッダーのロゴ -->
                    <a class="navbar-brand" href={{ route('/') }}><img class="img-fluid" src="images/logo.png" width="180px"></a>
                    <!-- メニューバーアイコン -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <!-- 左に表示させるメニュー -->
                        <ul class="navbar-nav mr-auto">　
                            <li class="nav-item">
                                <a class="nav-link-appoint" href="#">ご予約</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link-karte" href={{ route('chart/create') }}>カルテ記入</a>
                            </li>
                        </ul>
                        
                        <!-- 右に表示させるメニュー -->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Menu
                                </a>
                                <!-- ドロップメニュー -->
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href={{ route('perm') }}>パーマ</a>
                                    <a class="dropdown-item" href={{ route('extension') }}>マツエク</a>
                                    <a class="dropdown-item" href={{ route('eyebrow') }}>眉デザイン</a>
                                </div>
                            <!-- ナビゲーション -->
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href={{ route('service') }}>初めての方へ</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Instagram</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Staff</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href={{ route('contact.index') }}>Contact</a>
                            </li>
                          </ul>
                    </div>
                </nav>
            </div>
        </header>
        <main class="py-4">
            {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
            @yield('content')
        </main>
        <footer>
            <div class="fixedcontainer">
                <div class="footer_in1">
                    <div class="footer-menu">
                        <p class="footer-title">ABOUT</p>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Menu
                                </a>
                                <!-- ドロップメニュー -->
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href={{ route('perm') }}>パーマ</a>
                                    <a class="dropdown-item" href={{ route('extension') }}>マツエク</a>
                                    <a class="dropdown-item" href={{ route('eyebrow') }}>眉デザイン</a>
                                </div>
                            <li><a href="#">About Us</a>
                            </li>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href={{ route('perm') }}>パーマ</a>
                                    <a class="dropdown-item" href={{ route('extension') }}>マツエク</a>
                                    <a class="dropdown-item" href={{ route('eyebrow') }}>眉デザイン</a>
                                </div>
                            </li>
                            <li><a href="#">Staff</a>
                            </li>
                        </ul>
                   </div>
                    <div class="footer-menu">
                        <p class="footer-title">CONTACT</p>
                        <ul>
                           <li>
                               郵便番号
                               <br>
                               東京都武蔵野市御殿山1-6-9
                               <br>
                               エルドラド吉祥寺304
                               <br>
                               Email: xxx@gmail.com
                               <br>
                               LINE: @xxx
                            </li>
                            <li class="footer_contact_btn">
                                <a href="#">お問い合わせフォーム</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-menu">
                        <p class="footer-title">FOLLOW US</p>
                        <ul>
                            <li>
                                <a href="#" target="_brank">
                                    <img src="images/instagram.png" width="24px">
                                    Instagram
                                </a>
                            </li>
                            <li>
                                <a href="#">ブログへ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer_in2">
                    <div class="fixedcontainer">
                        <p>©︎ Lys. Company Inc.</p>
                    </div>
                </div>
            </footer>
            </div>
        </body>
    </html>