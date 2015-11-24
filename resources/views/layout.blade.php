<html>
<head>
	  @yield('title')
		<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/ocob.css') }}">
        <link src="{{ asset('js/ocob.js') }}">

 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	    

</head>
<body>
     
            @yield('nav')
        
   

		@yield('content')

</body>
</html>