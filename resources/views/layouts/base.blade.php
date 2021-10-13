<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--title,description,css_file,og_type,name,js_file,content-->
        <meta charset="utf-8">
        <title>さぶイチ公式｜@yield('title')</title>
        <meta name="description" content= "@yield('description')">
        <meta http-equiv="X-UA=Compatible" content="IE=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex,nofollow">
        <link rel="icon" href={{secure_asset('subichi.ico')}}>
        <link rel="canonical" href="https://subscriptionmarket.jp/@yield('name')">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" type="text/css" href={{mix('css/app.css')}}>
        @yield('css_file')
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <meta property="og:title" content="さぶイチ公式｜@yield('title')" />
        <meta property="og:description" content="@yield('description')" />
        <!--website or article toppage::website other::article-->
        <meta property="og:type" content="@yield('og_type')" />
        <meta property="og:url" content="https://subscriptionmarket.jp/@yield('name')" />
        <meta property="og:image" content={{secure_asset('images/base/sub00.png')}} />
        <meta property="og:site_name" content="さぶイチ" />
        <meta property="og:locale" content="ja_JP"  />
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title"content="さぶイチ公式｜@yield('title')" />
        <!--<meta name="twitter:site" content="@ユーザー名" />-->
        <!--<meta property=”fb:app_id” content=”App-ID”>-->
    </head>
    <body>
        @yield('content')
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>