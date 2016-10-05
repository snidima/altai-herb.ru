<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <title>title</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=cyrillic-ext" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&amp;subset=cyrillic-ext" rel="stylesheet"/>
    <link href="./css/main.css" rel="stylesheet"/>
</head>
<body>
<div class="main">
    @include('blocks/header')

    @yield('content')
</div>
</body>
</html>