@extends('layout')
@section('title')
<title>OCOB - Batting</title>
@stop

@section('nav')
	  <nav>
       <div id="area">
                <h1 style="display:inline-block; padding: 20px"><a href="/">Otaki College Old boys 2015-2016</a></h1>
            <ul>
         
                <li> <a href="">Batting Stats</a> </li>
                <li> <a href="/bowling-stats">Bowling Stats</a> </li>
            </ul>
            </div>
    </nav>
@stop

@section('content')
<div id="most_sixes_container float-left">
   <h1 style="margin-bottom: 30px; ;">Otaki College Old boys 2015-2016</h1>
          <h2 style="text-align:center; display: block; margin-bottom: 20px; margin-top: 20px;">Batting</h2>
         <table cellspacing="0" class="test" style="width:80%; border-collapse: collapse; margin:auto;">
            <tbody >
                 <tr class="most_sixes number_one" >
                    <td ><h4>Player</h4></td>
                    <td><h4>Matches</h4></td>
                    <td><h4>Innings</h4></td>
                    <td><h4>NO</h4></td>
                    <td><h4>Average</h4></td>
                    <td><h4>Runs</h4></td>
                    <td> <h4>Highest Score</h4></td>
                    <td><h4>100s</h4></td>
                    <td><h4>50s</h4></td>
                    <td><h4>0s</h4></td>
                    <td><h4>4's</h4></td>
                    <td><h4>6's</h4></td>
                    <td><h4>Outs</h4></td>
                    
                 </tr>
            
                 @foreach ($batters  as $batter )
                 <tr class="most_sixes">
                    <td>{{$batter->player}}</td>
                    <td>{{$batter->matches}}</td>
                    <td>{{$batter->innings}}</td>
                    <td>{{$batter->no}}</td>
                    <td>{{ $batter->average}}</td>
                    <td>{{$batter->runs  }}</td>
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
       </div> 
        
@stop