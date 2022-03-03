<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prajwal Poudyal</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="text-gray-600">
<div>
    <div>
        @include('front.layouts.navigation')
        <main class="">
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
