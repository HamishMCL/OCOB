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
                <h1 style="display:inline-block; padding: 15px; float: left;"><a href="">Admin</a></h1>
            <ul>
              <li> <a href="">Create New Player</a> </li>
              <li> <a href="">Create New Bowling Innings</a> </li>
              
            </ul>
            </div>
        
        </nav>
        <div style="height: 30px; width:100%;">
        </div>

        <div id="area">

      
      <h1 style="margin-top: 50px;">Create New Player</h1>
      <hr style="text-decoration: ridge;">
      
      <form   method="POST" action="{{ '/createNewPlayer' }}">

      
          <h2>Player name</h2>
          <input type="text" name="player_name"/>


          <button type="submit">Submit</button>
          <input type="hidden" name="_token" value="{{Session::token() }}"></input>
      </form>

      </div>

</body>
</html>