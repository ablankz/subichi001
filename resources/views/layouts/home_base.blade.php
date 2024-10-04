@extends('layouts.base')

<!--title,dscription,css_file,place,js_file,main-->
@section('title')
@yield('title')
@endsection

@section('description')
@yield('description')
@endsection

@section('css_file')
<link rel="stylesheet" type="text/css" href={{mix('css/test.css')}}>
@yield('cssFile')
@endsection

@section('og_type','website')

@section('name')
@yield('place')
@endsection

@section('js_file')
@yield('js_file')
@endsection

@section('content')
    <header>
        <div class="header">
            <div class="title">
                <a href='{{ route('guest.pageTop')}}'><img src='{{asset('images/base/sub2.png')}}'></a>
            </div>
            <div class="b_print">

            </div>
        </div>
        <div id="route"></div>
        <div class="tab" id="default_tab">

        </div>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        <br>
        <!--<div id='carender_package'></div>-->
        <br>
        <div style="width:100%;display:flex;flex-wrap:wrap;justify-content:space-around;">
            @for($i=0;$i<5;++$i)
            <div class="card" style="width:18%;">
            <img src={{asset('images/subsc/amazon.jpg')}} class="bd-placeholder-img card-img-top"  width="100%" height="180" />
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            @endfor
         </div>
        <br>
        <br>
        <div id='footer'></div>
    </footer>
@endsection
