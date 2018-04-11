<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="/css/weui.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

</head>
<body>

@yield('content')


<div class="bk_toptips"><span></span></div>
</body>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
@yield('my-js')
</html>