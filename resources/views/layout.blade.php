<html>
<head>
	  @yield('title')
		<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/ocob.css') }}">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="/js/ocob.js"></script>


</head>
<body>
     
            @yield('nav')
        
   

		@yield('content')

</body>
</html>