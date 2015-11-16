<html>
<head>
	<title>OCOB - Admin</title>
	 <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" type="text/css" href="{{ asset('css/ocob.css') }}">

</head>
<body>
   <nav>
          <div id="area">
                <h1 style="display:inline-block; padding: 15px; float: left;"><a href="/admin">Admin</a></h1>
           	<ul>
           		<li> <a href="/createNewPlayer">Create New Player</a> </li>
           		<li> <a href="">Create New Bowling Innings</a> </li>
           		
           	</ul>
            </div>
        
        </nav>
        <div style="height: 30px; width:100%;">
        </div>

        <div id="area">

   		
   		<h1 style="margin-top: 50px;">Batting</h1>
   		<hr style="text-decoration: ridge;">
   		
   		<form   method="POST" action="/admin">
	   		<h2>Player</h2>
	   		<select name="id">
				  <option value="1">Hamish</option>
				  <option value="2">John</option>
				  <option value="3">Conrad</option>
				  <option value="4">Joel</option>
			</select>
			
	      	<h2>Runs</h2>
	      	<input type="number" name="runs"/>
	      	<h2>6's</h2>
	      	<input type="number" name="sixs"/>
	      	<h2>4's</h2>
	      	<input type="number" name="fours"/>
	      	<h2>Out</h2>
	      	<h6>Yes</h6><input style="display: block;"type="radio" name="out" value="1"/>

	      	<button type="submit">Submit</button>
	      	<input type="hidden" name="_token" value="{{Session::token() }}"></input>
     	</form>

   		</div>

</body>
</html>