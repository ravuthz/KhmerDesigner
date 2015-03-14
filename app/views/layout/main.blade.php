<?php
/**
 * Created by PhpStorm.
 * User: Ravuthz
 * Date: 3/14/2015
 * Time: 11:20 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    @include('layout.menu')
    @yield('content')
</body>
</html>