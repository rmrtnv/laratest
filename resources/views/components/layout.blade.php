<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
        <style>
            .container { width: 100%; }
            .flex { display: flex; }
            .justify-center { justify-content: center; }
            .justify-right { justify-content: right; }
            .justify-right { justify-content: left; }
            .header {
            width: 100%;
            padding: 20px;
            //border-bottom: 1px solid grey;
            }
            .header a {
            margin-left: 30px;
            margin-right: 30px;
            color: rgb(9, 56, 25);
            padding: 5px;
            border-radius: 5px;
            border: 1px solid grey;
            }
            .content {
            margin-top: 40px;
            margin-bottom: 40px;
            margin-left: 20px;
            margin-right: 20px;
            flex-direction: column;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="header flex justify-center" style="">
                <a href="/">/</a>   
                <a href="{{ route('view') }}">View page</a>
                <a href="{{ route('upload') }}">Upload page</a>
            </div>
            <div class="container content flex justify-center" style="">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
