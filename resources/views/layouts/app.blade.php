<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @if(config('app.env') != 'local')
            @include('layouts.analytics')
        @endif
        
        @section('meta')
            <meta name="keywords" content="Statistics, Stats4SD, Statistics for Sustainable Development, Stats, Research Methods, Research Methods Support, RMS, Statistics Guides, Statistics teaching resources, Statistics learning resources, stats help, CCRP, CRFS, farmer research, participatory research, statistician, sustainability">
            <meta name="description" content="Statistics for Sustainable Development (Stats4SD) is a not-for-profit, social enterprise. We promote better use of statistical methods for decision-making to benefit society and the environment.">
            <meta name="author" content="Statistics for Sustainable Development">

            <title>{{ config('app.name', 'Laravel') }}</title>
        @endsection

        @yield('meta')

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css'])
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body>
        @include('header')

        @yield('content')

        @include('footer')
    </body>
</html>