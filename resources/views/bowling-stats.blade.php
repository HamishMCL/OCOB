@extends('layout')
@section('title')
<title>OCOB - Bowling</title>
@stop

@section('nav')
	  <nav>
       <div id="area">
                <h1 style="display:inline-block; padding: 20px"><a href="/">Otaki College Old boys 2015-2016</a></h1>
            <ul>
               
         
                <li> <a href="/batting-stats">Batting Stats</a> </li>
                <li> <a href="">Bowling Stats</a> </li>
            </ul>
            </div>
    </nav>
@stop

@section('content')


<div id="most_sixes_container float-left">
 <h1 style="margin-bottom: 30px;">Otaki College Old boys 2015-2016</h1>
        <h2 style="text-align:center; display:block;margin-bottom: 20px; margin-top: 20px;">Bowling</h2>

                 <table cellspacing="0" class="test" style="width:80%; border-collapse: collapse; margin:auto;">
            <tbody >
                 <tr class="most_sixes number_one">
                    <td ><h4>Player</h4></td>
                    <td><h4>Matches</h4></td>
                    <td><h4>Innings</h4></td>
                    <td><h4>Overs</h4></td>
                    <td><h4>Maidens</h4></td>
                    <td><h4>Runs</h4></td>
                    <td> <h4>Wickets</h4></td>
                    <td><h4>BBI</h4></td>
                    <td><h4>Ave</h4></td>
                    <td><h4>Econ</h4></td>
                    <td><h4>SR</h4></td>
                    <td><h4>5w</h4></td>
                    
                    
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
                    <td>{{$bowler->most_wickets}} / {{$bowler->least_runs}}</td>
                    <td>{{$bowler->average}}</td>
                    <td>{{$bowler->econ}}</td>
                    <td>{{$bowler->sr}}</td>
                    <td>{{$bowler->fivefas}}</td>
                    


                 </tr>
                    
                 

                 @endforeach

     
       
             </tbody>
         </table>
</div>
@stop