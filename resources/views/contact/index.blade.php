@extends('layouts.contact')
@section('title','Contact')
@section('content')
<!--ページタイトル-->
<div class="content">
    <h1 class>
        <span class="content-ttl">CONTACT</span>
    </h1>
    <p class="content-subttl">お問い合わせ</p>
</div>
    <!--ページタイトル-->
    <div class="container mt-5">
        <form method="POST" action="{{ route('contact.confirm') }}">
            @csrf
            <div class="form-group">
                <label for="Name">
                    <span class="badge bg-danger">必須</span>
                    名前
                </label>
                <input class="form-control" value="{{ old('name') }}" type="text" name="name" placeholder="山田花子" >
                @if ($errors->has('name'))
                    <p class="error-message">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="email">
                    <span class="badge bg-danger">必須</span>
                    メールアドレス
                </label>
                <input class="form-control" value="{{ old('email') }}" type="text" name="email" placeholder="example@example.com" >
                @if ($errors->has('email'))
                    <p class="error-message">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="tel">電話番号</label>
                <input class="form-control" value="{{ old('tel') }}" type="tel" name="tel" placeholder="090-0000-0000">
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected>選択してください</option>
                <option value="1">予約について</option>
                <option value="2">サロンについて</option>
                <option value="3">その他</option>
            </select>
            <div>
                <p>※予約の際は、第3希望までご連絡頂けますとスムーズです。</p>
            </div>
            <div class="form-group">
                <label for="body">
                    <span class="badge bg-danger">必須</span>
                    お問い合わせ内容
                </label>
                <textarea class="form-control" name="body" rows="10" cols="30" minlength:10 maxlength:140 required>{{ old('body') }}</textarea>
                @if ($errors->has('body'))
                    <p class="error-message">{{ $errors->first('body') }}</p>
                @endif
            </div>
            <button type="submit" class="btn btn-dark">入力内容確認</button>
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