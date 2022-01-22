@extends('layouts.front')
@section('title','Contact')
@section('content')
<!--ページタイトル-->
<div class="container">
    <div class="row">
        <div class ="col-md-8 mx-auto">
            <div class="contact-content">
                <h1>
                    <span>CONTACT</span>
                </h1>
                <p class="contact-subttl">お問い合わせ</p>
            </div>
            <form method="POST" action="{{ route('contact.confirm') }}">
                 @if (count($errors) > 0)
                    <ul class="contact-validation">
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                @csrf
                <div class="form-group row">
                    <label for="Name" class="col-md-5">
                        <span class="badge bg-danger">必須</span>
                        名前
                    </label>
                    <div class="col-md-10">
                        <input class="form-control" value="{{ old('name') }}" type="text" name="name">
                        <label class="example col-md-5">例:山田花子</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-5">
                        <span class="badge bg-danger">必須</span>
                        メールアドレス
                    </label>
                    <div class="col-md-10">
                        <input class="form-control" value="{{ old('email') }}" type="text" name="email">
                        <label class="example col-md-5">例:example@example.com</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tel"class="col-md-5">電話番号</label>
                    <div class="col-md-10">
                        <input class="form-control" value="{{ old('tel') }}" type="tel" name="tel">
                        <label class="example col-md-5">例:090-0000-0000</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contact_body" class="col-md-5">
                        <span class="badge bg-danger">必須</span>
                        お問い合わせ内容
                    </label>
                    <div class="col-md-10">
                        <select class="form-select" aria-label="Default select example" value="{{ old('select') }}" name"select">
                            <option selected>選択してください</option>
                            <option value="1">予約について</option>
                            <option value="2">サロンについて</option>
                            <option value="3">その他</option>
                        </select>
                        <div class="contact-caution">
                            <p>※ご予約の際は、第3希望までご連絡頂けますとスムーズです。</p>
                        </div>
                        <textarea class="form-control" name="contact_body" rows="10" cols="30" minlength:10 maxlength:140>{{ old('contact_body') }}</textarea>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" name="action" value="submit" class="btn btn-outline-primary">入力内容確認</button>
                </div>
            </form>   
        </div>
    </div>
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