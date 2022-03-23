<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>we</title>
    <meta name="description" content="This is an example of a meta description.">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
      <ul class="flex items-center">
        <li>
          <a href="" class="p-3">Home</a>
        </li>
        <li>
          <a href="" class="p-3">Dashboard</a>
        </li>
        <li>
          <a href=""class="p-3">Post</a>
        </li>
      </ul>
      <ul class="flex items-center">
        <li>
          <a href="" class="p-3">Conrad We</a>
        </li>
        <li>
          <a href="" class="p-3">Login</a>
        </li>
        <li>
          <a href=" {{ route('register') }} " class="p-3">Register</a>
        </li>
        <li>
          <a href=""class="p-3">Logout</a>
        </li>
      </ul>

    </nav>
        @yield('content')

  </body>
</html>