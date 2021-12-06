<!DOCTYPE html>
<html lang="{{ app ()->getLocale() }}">
    <head>
        <meta charset ="utf-8">
        <meta http-equiv="X-UA-Compatible" content = "IE = edge">
        <meta name ="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
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
        <link href="{{ secure_asset('css/app.css') }}" rel ="stylesheet">
        {{-- ホームCSSを読み込みます --}}
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <header class="sticky-top">
            <!-- ヘッダー -->
            <div class="container-fluid">
                <!-- ナビゲーション -->
                <nav class="navbar navbar-expand-lg navbar-light" style=background-color: #e3f2fd;">
                    <!-- ヘッダーのロゴ -->
                    <a class="navbar-brand" href="#"><img class="img-fluid" src="images/logo.png" width="180px"></a>
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
                        </ul>
                        <!-- 右に表示させるメニュー -->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <!-- ドロップメニュー -->
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">パーマ</a>
                                    <a class="dropdown-item" href="#">マツエク</a>
                                    <a class="dropdown-item" href="#">眉毛</a>
                                </div>
                            <!-- ナビゲーション -->
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">About Us</a>
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
                              <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Information</a>
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
        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 footer-about wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <h3>ABOUT</h3>
                            <p>
                                <a href="#">About Us</a>
                            </p>
                            <p>
                                <a href="#">MENU</a>
                            </p>
                            <p>
                                <a href="#">Staff</a>
                            </p>
                            <p>©︎ Lys. Company Inc.</p>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                        <h3>Contact</h3>
                        <p>
                            <i class="fas fa-map-marker-alt">
                                ::before
                            </i>
                            "東京都吉祥寺"
                        </p>
                        <p>
                           <i class="fas fa-phone">
                               ::before
                           </i>
                           "Phone:080"
                        </p>
                        <p>
                            <i class="fas fa-envelope">
                                ::before
                            </i>
                            "Email: "
                            <a href="mailto:xxx@gmail.com">xxx@gmail.com</a>
                        </p>
                        <p>
                            <i class="fab fa-line">
                                ::before
                            </i>
                            "LINE: xxx"
                        </p>
                        <p>
                            <a href="#">お問い合わせ</a>
                        </p>
                    </div>
                    <div class="col-md-4 footer-links wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="row">
                            <div class="col">
                                <h3>FOLLOW US</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    <a href="#">Instagram</a>
                                </p>
                                <p>
                                    <a href="#">Blog</a>
                                </p>        
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </body>
    </html>
