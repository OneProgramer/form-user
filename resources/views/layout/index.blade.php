<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{ env('APP_URL') }}css/styles.css">
    <title>@yield('title')</title>

    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css" />
</head>
<style>
    * {

        font-family: 'DroidArabicKufiRegular';
        font-weight: normal;
        font-style: normal;
    }
</style>

<body onload="initWork()">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid text-center ">
                <a class="navbar-brand" href="">@yield('page')</a>
            </div>

        </nav>
    </div>
    @yield('body')
</body>

<script src="https://cdn.jsdelivr.net/gh/xsoh/Hijri.js/Hijri.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
{{-- <script src="{{ asset('js/date.js') }}"></script> --}}
{{-- <script src={{ asset('js/validate.js') }}></script> --}}
<script src="{{ env('APP_URL') }}js/date.js"></script>
<script src="{{ env('APP_URL') }}js/validate.js"></script>

</html>
