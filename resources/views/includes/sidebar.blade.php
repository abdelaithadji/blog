<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        <!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('includes.sidebar')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-8">
            @yield('content')
        </div>

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
