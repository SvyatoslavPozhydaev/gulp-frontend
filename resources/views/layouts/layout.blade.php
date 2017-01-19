<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />

    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Project</title>

    <link rel="shortcut icon" href="/images/favicon/favicon-16.png" type="image/png">
    <link rel="shortcut icon" sizes="16x16" href="/images/favicon/favicon-16.png" type="image/png">
    <link rel="shortcut icon" sizes="28x28" href="/images/favicon/favicon-28.png" type="image/png">
    <link rel="shortcut icon" sizes="32x32" href="/images/favicon/favicon-32.png" type="image/png">
    <link rel="shortcut icon" sizes="48x48" href="/images/favicon/favicon-48.png" type="image/png">
    <link rel="shortcut icon" sizes="64x64" href="/images/favicon/favicon-64.png" type="image/png">

    <link rel="apple-touch-icon" sizes="64x64" href="/images/favicon//favicon-64.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon//touch-icon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon//touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon//touch-icon-ipad-pro.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon//touch-icon-iphone6-pluse.png">

    <link rel="stylesheet" href="{{elixir('css/vendor.css')}}">
    <link rel="stylesheet" href="{{elixir('css/application.css')}}">
</head>
<body>
    <div class="wrapper" id="wrapper">
        <div id="container">
            @yield('content')
        </div>
    </div>
    <div class="wrapper">
        Footer
    </div>
</body>
<script type="text/javascript" src="{{elixir('js/vendor.js')}}"></script>
<script type="text/javascript" src="{{elixir('js/application.js')}}"></script>
<script>new (require('Application').default);</script>
</html>
