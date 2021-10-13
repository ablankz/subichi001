@extends('layouts.base')

<!--title,dscription,css_file,place,js_file,main-->
@section('title')
    @yield('title')
@endsection

@section('description')
    @yield('description')
@endsection

@section('css_file')
    @yield('css_file')
@endsection

@section('og_type','article')

@section('name')
user/@yield('place')
@endsection

@section('js_file')
    @yield('js_file')
@endsection

@section('content')
    <header>
            <img src={{secure_asset('images/base/sub1.jpg')}} alt="さぶイチ公式ページ"></img>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        
    </footer>
@endsection