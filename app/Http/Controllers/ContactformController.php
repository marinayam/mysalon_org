<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
    }

    public function confirm(Request $request)
    {
    }

    public function send(Request $request)
    {
    }
}
?>
//   session_start();
//   $mode = 'input';
//   $errmessage = array();
//   if( isset($_POST['back']) && $_POST['back'] ){
//     // 何もしない
//   } else if( isset($_POST['confirm']) && $_POST['confirm'] ){
//       // 確認画面
//     if( !$_POST['fullname'] ) {
//         $errmessage[] = "名前を入力してください";
//     } else if( mb_strlen($_POST['fullname']) > 50 ){
//         $errmessage[] = "名前は50文字以内にしてください";
//     }
//       $_SESSION['fullname'] = htmlspecialchars($_POST['fullname'], ENT_QUOTES);

//       if( !$_POST['email'] ) {
//           $errmessage[] = "Eメールを入力してください";
//       } else if( mb_strlen($_POST['email']) > 100 ){
//           $errmessage[] = "Eメールは100文字以内にしてください";
//     } else if( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
//         $errmessage[] = "メールアドレスが不正です";
//       }
//       $_SESSION['email']    = htmlspecialchars($_POST['email'], ENT_QUOTES);

//       if( !$_POST['message'] ){
//           $errmessage[] = "お問い合わせ内容を入力してください";
//       } else if( mb_strlen($_POST['message']) > 500 ){
//           $errmessage[] = "お問い合わせ内容は500文字以内にしてください";
//       }
//       $_SESSION['message'] = htmlspecialchars($_POST['message'], ENT_QUOTES);

//       if( $errmessage ){
//         $mode = 'input';
//     } else {
//         $mode = 'confirm';
//     }
//   } else if( isset($_POST['send']) && $_POST['send'] ){
//     // 送信ボタンを押したとき
//     $message  = "お問い合わせを受け付けました \r\n"
//               . "名前: " . $_SESSION['fullname'] . "\r\n"
//               . "email: " . $_SESSION['email'] . "\r\n"
//               . "お問い合わせ内容:\r\n"
//               . preg_replace("/\r\n|\r|\n/", "\r\n", $_SESSION['message']);
//       mail($_SESSION['email'],'お問い合わせありがとうございます',$message);
//     mail('hoge@hoge.com','お問い合わせありがとうございます',$message);
//     $_SESSION = array();
//     $mode = 'send';
//   } else {
//     $_SESSION['fullname'] = "";
//     $_SESSION['email']    = "";
//     $_SESSION['message']  = "";
//   }

<!DOCTYPE html>
@extends('layouts.front')
@section('title','タイトル')
@section('content')
{{-- Laravel標準で用意されているCSSを読み込みます --}}
<link href="{{ asset('css/app.css') }}" rel ="stylesheet">
{{-- 作成したCSSを追記 --}}
<link href="{{ asset('css/contact.css') }}" rel="stylesheet">

    <!--ページタイトル-->
    <div class="content">
    <h1 class>
        <span class="content-ttl">CONTACT</span>
    </h1>
    <p class="content-subttl">お問い合わせ</p>
    </div>
    <!--ページタイトル-->
    <div class="container mt-5">
        <form class="needs-validation" action="" method="post" novalidate>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">
                        <span class="badge bg-danger">必須</span>
                        名
                    </label>
                    <input class="form-control" type="text" name="customer[first_name]" id="firstName" placeholder="First name" autocomplete="given-name" required>
                    
                    <p class="invalid-feedback">名を入力して下さい</p>
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">
                        <span class="badge bg-danger">必須</span>
                        姓
                    </label>
                    <input class="form-control" type="text" name="customer[last_name]" id="lastName" placeholder="Last name" autocomplete="family-name" required>
                    <p class="invalid-feedback">姓を入力して下さい</p>
                </div>
            </div>
            <div class="form-group">
                <label for="email">
                    <span class="badge bg-danger">必須</span>
                    メールアドレス
                </label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Email" autocomplete="email" autocomplete="email"required>
                <p class="invalid-feedback">メールアドレスを入力して下さい</p>
            </div>
            <div class="form-group">
                <label for="tel">電話番号</label>
                <input class="form-control" type="tel" name="tel" id="tel" placeholder="000-0000-0000" autocomplete="tel">
            </div>
            <div class="form-group">
                <label for="comment">
                    <span class="badge bg-danger">必須</span>
                    お問い合わせ内容
                </label>
                <textarea class="form-control" type="text" name="comment" id="comment"rows="10" cols="30" minlength:10 maxlength:140 required></textarea>
                <p class="invalid-feedback">お問い合わせ内容を入力して下さい</p>
            </div>
            <button type="submit" class="btn btn-dark btn-lg">送信</button>
        </form>   
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
    </script>
@endsection
</html>