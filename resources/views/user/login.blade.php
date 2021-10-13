@extends('layouts.user_base')

@section('title','ログイン画面')
@section('description')
さぶイチ公式サイト。さぶイチは、動画配信から特産品の取り寄せまで種々なサブスクリプションを紹介しています。また、サブスクリプションをまとめて整理するためのツールも用意しています。自分だけのサブすくカレンダーを作って、より快適にさぶイチを使いこなそう。
@endsection
@section('css_file')
<link rel="stylesheet" type="text/css" href={{mix('css/test.css')}}>
@endsection
@section('js_file','')
@section('place','login')

@section('main')
<div id="app">
</div>
@endsection