<html>
<head>
	<title>OCOB - Individual</title>
	 <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" type="text/css" href="{{ asset('css/ocob.css') }}">

</head>
<body>
   <nav>
          <div id="area">
                <h1 style="display:inline-block; padding: 15px"><a href="/">Otaki College Old boys 2015-2016</a></h1>
            <ul>
                <li> <a href="/results">Results</a></li>
                <li> <a href="">Individual Stats</a> </li>
            </ul>
            </div>
        
        </nav>

            <div id="area">
          <h1 style="margin-bottom: 30px;">Otaki College Old boys 2015-2016</h1>

         <table cellspacing="0" style="width: 100%; border-collapse: collapse;">
            <tbody >
                 <tr class="most_sixes number_one">
                    <td >Player</td>
                    <td>Matches</td>
                    <td>Innings</td>
                    <td>NO</td>
                    <td>Runs</td>
                    <td>Average</td>
                    <td>Highest Score</td>
                    <td>100s</td>
                    <td>50s</td>
                    <td>0s</td>
                    <td>4s</td>
                    <td>6s</td>
                    
                 </tr>
            
                 @foreach ($players  as $player )
                 <tr class="most_sixes">
                    <td>{{$player->player}}</td>
                    <td>{{$player->matches}}</td>
                    <td>{{$player->innings}}</td>
                    <td>{{$player->no}}</td>
                    <td>{{$player->runs}}</td>
                    <td>{{$player->average}}</td>
                    <td>{{$player->highest_score}}</td>
                    <td>{{$player->hunds}}</td>
                    <td>{{$player->fiftys}}</td>
                    <td>{{$player->ducks}}</td>
                    <td>{{$player->fours}}</td>
                    <td>{{$player->sixs}}</td>

                 </tr>
                    
                 

                 @endforeach
     
       
             </tbody>
         </table>   


    </div>
</body>
</html>