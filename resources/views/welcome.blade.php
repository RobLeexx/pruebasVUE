<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>vue1</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
        
        </style>

        <!-- import Vue.js -->
        <script src="//vuejs.org/js/vue.min.js"></script>
        <!-- import stylesheet -->
        <link rel="stylesheet" href="//unpkg.com/view-design/dist/styles/iview.css">
        <!-- import iView -->
        <script src="//unpkg.com/view-design/dist/iview.min.js"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="/css/all.css">

    </head>
    <body>
        <div id ="app">
            <mainapp></mainapp>
        </div>
    </body>
    <script src="{{mix('/js/app.js')}}"></script>
</html>
