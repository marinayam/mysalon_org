@extends('layouts.front')
@section('title','タイトル')
@section('content')
{{-- Laravel標準で用意されているCSSを読み込みます --}}
<link href="{{ asset('css/app.css') }}" rel ="stylesheet">
{{-- 作成したCSSを追記 --}}
<link href="{{ asset('css/contact.css') }}" rel="stylesheet">
<div class="container">
    <!--ページタイトル-->
    <div class="content">
    <h1 class>
        <span class="content-ttl">CONTACT</span>
    </h1>
    <p class="content-subttl">お問い合わせ</p>
    </div>
    <!--ページタイトル-->
    <div class="contact-form">
        <section class="section">
            <p class="contact-alert">
                <small>
                    <span class="asterisk">※</span>
                    は入力必須項目です。
                </small>
            </p>
            <form action="./contactform.php" method="post">
                <table class="contact-table">
                    <tbody>
                        <tr>
                            <th>お名前
                            <span class="asterisk">※</span>
                            </th>
                            <td>
                                <span class="wpcf7-form-control-wrap text-name">
                                    <input type="text" name="text-name" value size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"aria-invalid="false">
                                 </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </section>
    </div>
</div>
@endsection