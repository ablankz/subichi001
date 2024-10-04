@extends('layouts.home_base')

@section('title','ホームページ')
@section('description')
さぶイチ公式サイト。さぶイチは、動画配信から特産品の取り寄せまで種々なサブスクリプションを紹介しています。また、サブスクリプションをまとめて整理するためのツールも用意しています。自分だけのサブすくカレンダーを作って、より快適にさぶイチを使いこなそう。
@endsection
@section('cssFile')
<link rel="stylesheet" type="text/css" href={{mix('css/home.css')}}>
@endsection
@section('js_file','')
@section('place','')

@section('main')
    <div id="slide"></div>
    <br>

<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
    <br>
    <div class="article">
        <div id="menu_list"></div>
        <div id="items"></div>
    </div>
   <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-top:1rem">Block level button</button>
    @for($i=0;$i<3;++$i)
    @if($i===0)
    <div style="margin-top:2rem"></div>
    @endif
        <div class="card mb-3">
  <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
    @endfor
@endsection
