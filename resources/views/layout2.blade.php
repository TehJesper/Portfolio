
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
{{--<link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />--}}
{{--<link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />--}}
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>

<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="/">Jesper</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="{{Request::path() === '/' ? 'current_page_item': ''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
				<li class="{{Request::path() === 'dashboard' ? 'current_page_item': ''}}"><a href="/dashboard" accesskey="2" title="">Dashboard</a></li>
				<li class="{{Request::path() === 'about' ? 'current_page_item': ''}}"><a href="/about" accesskey="3" title="">About</a></li>
                <li class="{{Request::path() === 'articles' ? 'current_page_item': ''}}"><a href="/articles" accesskey="3" title="">Articles</a></li>
			</ul>
		</div>
	</div>
{{--	<div id="header-featured">--}}
{{--		<div id="banner-wrapper">--}}
{{--			<div id="banner" class="container">--}}
{{--                <h2>Maecenas luctus lectus</h2>--}}
{{--				<p>This is <strong>SimpleWork</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>--}}
{{--				<a href="#" class="button">Etiam posuere</a> </div>--}}
{{--		</div>--}}
{{--	</div>--}}
</div>


@yield('content')
{{--<div id="copyright" class="container">--}}
{{--	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>--}}
{{--</div>--}}
<footer class="page-footer">
    <div class="container">
{{--        <div class="links"><a href="#">About me</a><a href="#">Contact me</a><a href="#">Projects</a></div>--}}
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
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
<script src="/assets/js/theme.js"></script>
<script id="bs-live-reload" data-sseport="62587" data-lastchange="1580810188660" src="/js/livereload.js"></script>

</body>
</html>
