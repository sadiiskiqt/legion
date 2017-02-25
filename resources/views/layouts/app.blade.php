<!DOCTYPE html>
<html>
<title>MMaLegion.Com</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

{{--<link rel="stylesheet" href="../../public/css/app.css">--}}
<link rel="stylesheet" href="{{ URL::asset('public/css/app.css') }}">
<link rel="stylesheet" href="{{ URL::asset('public/css/form.css') }}">

{{--<link rel="stylesheet" href="/lib/w3-theme-blue-grey.css">--}}
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
</script>
<body class="w3-theme-l5">

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/bg_BG/sdk.js#xfbml=1&version=v2.8&appId=178103802558791";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


@yield('content')


</body>
</html>
