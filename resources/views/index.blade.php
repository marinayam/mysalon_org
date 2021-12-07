@extends('layouts.front')
@section('title','タイトル')
@section('content')
{{-- Laravel標準で用意されているCSSを読み込みます --}}
<link href="{{ asset('css/app.css') }}" rel ="stylesheet">
{{-- 作成したCSSを追記 --}}
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<div class="location">
    <h3>LOCATION</h3>
    <h4>STORE INFORMATION</h4>
    <div class="location-mapArea">
        <a href="https::" target="_brank">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.948129464338!2d139.57338941520095!3d35.70289403639105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ef66b826b691%3A0x559cc192cb003bd3!2z44Ki44Kk44Op44OD44K344Ol77yG44OY44OD44OJ44K544ORIEx5cy4g5ZCJ56Wl5a-6IOOAkOODquODvOOCueOAkQ!5e0!3m2!1sen!2sjp!4v1638548357176!5m2!1sen!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </a>
    </div>
</div>
@endsection