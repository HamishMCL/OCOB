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
                    <td class="one"  ><h4>Player</h4></td>
                    <td class="one" ><h4>Mat</h4></td>
                    <td class="one" ><h4>Inn</h4></td>
                    <td class="one" ><h4>Overs</h4></td>
                    <td class="one" ><h4>Mdns</h4></td>
                    <td class="one" ><h4>Runs</h4></td>
                    <td class="one" > <h4>Wickets</h4></td>
                    <td class="one" ><h4>BBI</h4></td>
                    <td class="one" ><h4>Ave</h4></td>
                    <td class="one" ><h4>Econ</h4></td>
                    <td class="one" ><h4>SR</h4></td>
                    <td class="one" ><h4>5w</h4></td>
                    
                    
                 </tr>
                   @foreach ($bowlers  as $bowler )
                 <tr class="most_sixes">
                    <td class="one" >{{$bowler->player}}</td>
                    <td class="matches">{{$bowler->matches}}</td>
                    <td class="innings">{{$bowler->innings}}</td>
                    <td class="no">{{$bowler->overs}}</td>
                    <td class="runs">{{$bowler->maidens}}</td>
                    <td class="average">{{$bowler->runs}}</td>
                    <td class="highest_score">{{$bowler->wickets}}</td>
                    <td class="hunds">{{$bowler->most_wickets}} / {{$bowler->least_runs}}</td>
                    <td class="fiftys">{{$bowler->average}}</td>
                    <td class="ducks">{{$bowler->econ}}</td>
                    <td class="fours">{{$bowler->sr}}</td>
                    <td class="sixs">{{$bowler->fivefas}}</td>
                    


                 </tr>
                    
                 

                 @endforeach

     
       
             </tbody>
         </table>
</div>

<script src="/js/table_cross_hair.js"> </script>
@stop