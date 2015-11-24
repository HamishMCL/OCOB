@extends('layout')
@section('title' )
<title>OCOB - Stats</title>
@stop
@section('nav')
    <nav>
       <div id="area">
                <h1 style="display:inline-block; padding: 20px"><a href="/">Otaki College Old boys 2015-2016</a></h1>
            <ul>
               
                <li> <a href="/individual">Individual Stats</a> </li>
            </ul>
            </div>
        </nav>
@stop


@section('content')
            
          <h1 style="margin-bottom: 30px;">Otaki College Old boys 2015-2016</h1>
          <h3 style="text-align:center;">Batting</h3>
         <table cellspacing="0" style="width: 35%; border-collapse: collapse;margin-top: 20px; margin-bottom: 20px;">
            <tbody >
                 <tr class="most_sixes number_one" >
                    <td style="height: 3px;">Player</td>
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
                    <td>Outs</td>
                    
                 </tr>
            
                 @foreach ($batters  as $batter )
                 <tr class="most_sixes">
                    <td>{{$batter->player}}</td>
                    <td>{{$batter->matches}}</td>
                    <td>{{$batter->innings}}</td>
                    <td>{{$batter->no}}</td>
                    <td>{{$batter->runs}}</td>
                    <td>{{$batter->average  }}</td>
                    <td>{{$batter->highest_score}}</td>
                    <td>{{$batter->hunds}}</td>
                    <td>{{$batter->fiftys}}</td>
                    <td>{{$batter->ducks}}</td>
                    <td>{{$batter->fours}}</td>
                    <td>{{$batter->sixs}}</td>
                    <td>{{$batter->outs}}</td>

                 </tr>
                    
                 

                 @endforeach
     
       
             </tbody>
         </table>   

         <h3 style="text-align:center;">Bowling</h3>

                 <table cellspacing="0" style="width:10%; border-collapse: collapse;margin-top: 20px; margin-bottom: 20px;">
            <tbody >
                 <tr class="most_sixes number_one head">
                    <td >Player</td>
                    <td>Matches</td>
                    <td>Innings</td>
                    <td>Overs</td>
                    <td>Maidens</td>
                    <td>Runs</td>
                    <td> Wickets</td>
                    <td>BBI</td>
                    <td>Average</td>
                    <td>Economy</td>
                    <td>SR</td>
                    <td>5</td>
                    
                    
                 </tr>
                   @foreach ($bowlers  as $bowler )
                 <tr class="most_sixes">
                    <td>{{$bowler->player}}</td>
                    <td>{{$bowler->matches}}</td>
                    <td>{{$bowler->innings}}</td>
                    <td>{{$bowler->overs}}</td>
                    <td>{{$bowler->maidens}}</td>
                    <td>{{$bowler->runs}}</td>
                    <td>{{$bowler->wickets}}</td>
                    <td>{{$bowler->bbi}}</td>
                    <td>{{$bowler->average}}</td>
                    <td>{{$bowler->econ}}</td>
                    <td>{{$bowler->sr}}</td>
                    <td>{{$bowler->fivefas}}</td>
                    


                 </tr>
                    
                 

                 @endforeach

     
       
             </tbody>
         </table>


@stop