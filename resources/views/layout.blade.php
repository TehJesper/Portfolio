<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Portfolio Jesper van Berlo</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">

</head>

<body>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
    <div class="container"><a class="navbar-brand logo" href="/">Homepage</a><button
            data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="/">Home</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/dashboard">Dashboard</a>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/about">About</a>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/articles">Articles</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<footer class="page-footer">
    <div class="container">
        <div class="social-icons">
            <a href="https://github.com/TehJesper">
                <i class="icon ion-social-github"></i>
            </a>
            <a href="#">
                <i class="icon ion-steam"></i>
            </a>
        </div>
    </div>
</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>
</html>
