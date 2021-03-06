<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $page_title }}</title>

        <meta name="theme-color" content="#41924B">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <script src="{{asset('js/app.js')}}"></script> 
    </head>
    <body>
        <div class="container md-container">
            {!! $md_html !!}
        </div>
    </body>
</html>
