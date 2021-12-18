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
        
        <!-- Fonts-->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600"
        rel="stlesheet" type="text/css">
        
        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ asset('css/app.css') }}" rel ="stylesheet">
        {{-- 作成したCSSを追記 --}}
        <link href="{{ asset('css/chart.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
        <header class="sticky-top">
            <ul class="navbar-nav ml-auto" style=background-color: #e3f2fd;">
                <!-- ヘッダーのロゴ -->
                <li><a class="navbar-brand" href={{ route('/') }}><img class="img-fluid" src="images/logo.png" width="180px"></a></li>
                {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
                @else
                <div class="text-right">
                <button type="button" class="btn btn-outline-info">
                    <a  href="{{ route('logout') }}"onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </button>
                </div>
                <!--</div>-->
                <!--</li>-->
                @endguest
            </ul>
        </header>
    </body>
    <main class="py-4">
            {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
            @yield('content')
    </main>
    <footer>
            <div class="fixedcontainer">
                <div class="footer_in1">
                    <div class="footer-menu">
                        <p class="footer-title">ABOUT</p>
                        <ul class="footer-list">
                            <li><a href="#">About Us</a>
                            </li>
                            <li><a href="#">Menu</a>
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
            </div>
        </footer>
    </div>
</html>