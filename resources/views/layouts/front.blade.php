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
        <input id="menu" type="checkbox" />
        <label for ="menu" class="open"></label>
        <div class="header_links">
            <ul class = "hidden-sp">
                <!--ロゴクリックでトップページへ-->
                <li>
                    <a href="https:"><img src ="https:" width="120px">
                    </a>
                </li>
                <!--右端メニューバーのリスト-->
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
            <!--ヘッダー左端の予約部分-->
            <div id="appointment">
            <a href ="https::予約ページ" class="appointment-btn"><img src="images/appointment.png" width"24px">
                <span>予約</span>
            </a>
            </div>
            <!--ロゴクリックでトップページへ-->
            <a href ="" class="sp-logo"><img src=""width"120px">
            </a>
        </div>
    </div>
    <nav class="g-nav visible-sp">
        <ul class="list">
            <li>
                <a href = "">ABOUT US</a>
            </li>
            <li>
                <a href="">ログイン</a>
            </li>
            <li>
                <a href = "">Menu</a>
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
    </header>
    <main class="py-4">
        {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
        @yield('content')
    </main>
    <footer>
        {{-- お店の住所と電話番号と営業時間 --}}
        <!--Location-->
        <div class="hgroup">
            <h1>LOCATION</h1>
            <h2 class="subttl">STORE INFORMATION</h2>
        </div>
        <div id="locotion" class="shop">
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
                    <a href="https//goo.gl" target="_blank">Google Mapで見る</a>
                </dd>
            </dl>
            {{-- お店のGoogle map--}}
            <div class="map_area">
                <a href="https//goo.gl" target="_brank">
                <iframe src="https://www.google.com/maps/" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen>
                #documet
                <html jstcache="0">
                    <head>
                        <style>
                            .gm-control-active>img{box-sizing:content-box;display:none;left:50%;pointer-events:none;position:absolute;top:50%;transform:translate(-50%,-50%)}.gm-control-active>img:nth-child(1){display:block}.gm-control-active:hover>img:nth-child(1),.gm-control-active:active>img:nth-child(1),.gm-control-active:disabled>img:nth-child(1){display:none}.gm-control-active:hover>img:nth-child(2),.gm-control-active:active>img:nth-child(3),.gm-control-active:disabled>img:nth-child(4){display:block}
                        </style>
                        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans_old:400,500,700|Google+Sans+Text:400">
                        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans+Text:400&text=%E2%86%90%E2%86%92%E2%86%91%E2%86%93">
                        <style>.gm-ui-hover-effect{opacity:.6}.gm-ui-hover-effect:hover{opacity:1}</style>
                        <style>.gm-style .gm-style-cc a,.gm-style .gm-style-cc button,.gm-style .gm-style-cc span,.gm-style .gm-style-mtc div{font-size:10px;box-sizing:border-box}.gm-style .gm-style-cc a,.gm-style .gm-style-cc button,.gm-style .gm-style-cc span{outline-offset:3px}</style>
                        <style>@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style>
                        <style>.gm-style-moc{background-color:rgba(0,0,0,0.45);pointer-events:none;text-align:center;transition:opacity ease-in-out}.gm-style-mot{color:white;font-family:Roboto,Arial,sans-serif;font-size:22px;margin:0;position:relative;top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}</style>
                        <style>.gm-style img{max-width: none;}.gm-style {font: 400 11px Roboto, Arial, sans-serif; text-decoration: none;}</style>
                        <style type="text/css">
                            .gm-inset{display:inline-block}.gm-inset-map{border-radius:3px;border-style:solid;border-width:2px;box-shadow:0 2px 6px rgba(0,0,0,.3);-webkit-box-sizing:border-box;box-sizing:border-box;overflow:hidden;position:relative;cursor:pointer}.gm-inset-hover-enabled:hover .gm-inset-map{border-width:4px;margin:-2px}.gm-inset-hover-enabled:hover .gm-inset-map.gm-inset-map-small{width:46px}.gm-inset-hover-enabled:hover .gm-inset-map.gm-inset-map-large{width:83px}.gm-inset-map-label{position:absolute;z-index:0;bottom:0;left:0;padding:12px 0 6px;height:15px;width:75px;text-indent:6px;font-size:11px;color:white;background-image:-webkit-linear-gradient(to bottom,transparent,rgba(0,0,0,0.6));background-image:-moz-linear-gradient(to bottom,transparent,rgba(0,0,0,0.6));background-image:linear-gradient(to bottom,transparent,rgba(0,0,0,0.6))}.gm-inset-dark{background-color:#222;border-color:#222}.gm-inset-light{background-color:white;border-color:white}
                        </style>
                        <style type="text/css">
                            html, body, #mapDiv {
                            height: 100%;
                            margin: 0;
                            padding: 0;
                            }
                        </style>
                        <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/47/1/intl/ja_ALL/common.js" nonce>
                        </script>
                        <style>.gm-style .icon{background-image:url(https://maps.gstatic.com/mapfiles/embed/images/entity11.png);background-size:70px 210px}@media (-webkit-min-device-pixel-ratio:1.2),(min-resolution:1.2dppx),(min-resolution:116dpi){.gm-style .icon{background-image:url(https://maps.gstatic.com/mapfiles/embed/images/entity11_hdpi.png);background-size:70px 210px}}.gm-style .experiment-icon{background-image:url(https://maps.gstatic.com/mapfiles/embed/images/exp2.png);background-size:109px 276px}@media (-webkit-min-device-pixel-ratio:1.2),(min-resolution:1.2dppx),(min-resolution:116dpi){.gm-style .experiment-icon{background-image:url(https://maps.gstatic.com/mapfiles/embed/images/exp2_hdpi.png);background-size:109px 276px}}div.login-control{font-family:Roboto,Arial;font-size:11px;color:white;margin-top:10px;margin-right:10px;font-weight:500;box-shadow:rgba(0,0,0,0.298039) 0px 1px 4px -1px}div.login{border-radius:2px;background-color:#5f84f2;padding:4px 8px;cursor:pointer}.gm-style .login-control .tooltip-anchor{color:#5B5B5B;display:none;font-family:Roboto,Arial;font-size:12px;font-weight:normal;-moz-user-select:text;-webkit-user-select:text;-ms-user-select:text;user-select:text;width:50%}.gm-style .login-control:hover .tooltip-anchor{display:inline}.gm-style .login-control .tooltip-content{background-color:white;font-weight:normal;left:-150px;width:150px}html[dir="rtl"] .gm-style .login-control .tooltip-content{right:-20px}div.login a:link{text-decoration:none;color:inherit}div.login a:visited{color:inherit}div.login a:hover{text-decoration:underline}div.email-account-learn{float:left}div.email{font-weight:500;font-size:12px;padding:6px}div.profile-photo{border-radius:2px;width:28px;height:28px;overflow:hidden}div.profile-photo-light{background-color:white}div.profile-photo-light div{color:black}div.profile-photo-dark{background-color:black}div.profile-photo-dark:hover{background-color:white;color:black}div.profile-photo:hover{width:auto}div.profile-email:hover{height:52px}a.profile-photo-link-float{float:left}div.profile-photo a{margin-right:8px;margin-left:8px;margin-top:6px;height:24px;overflow:hidden}div.profile-photo a{text-decoration:none;color:#3a84df}div.profile-photo a:hover{text-decoration:underline}div.profile-photo img{float:right;padding-top:2px;padding-right:2px;padding-left:2px;width:24px}.gm-style .g-logo{background-position:-21px -138px;display:inline-block;height:12px;padding-right:6px;vertical-align:middle;width:8px}
                        </style>
                        <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/47/1/intl/ja_ALL/overlay.js" nonce>
                        </script>
                    </head>
                </html>
                </iframe>
                <div id="map" class="map">
                </div>
                </a>
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