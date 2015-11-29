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
          <h2 class="batting_heading" style="text-align:center; display: block; margin-bottom: 20px; margin-top: 20px;">Batting</h2>
         <table cellspacing="0" class="test" style="width:100%; border-collapse: collapse; margin:auto;">
            <tbody >
                 <tr class="most_sixes number_one" >
                    <td class="one" style="width: 1%;"><h4  >Player</h4></td>
                    <td  class="one" style="width: 1%;"><h4>Mat</h4></td>
                    <td class="one" style="width: 1%;"><h4>Inn</h4></td>
                    <td class="one" style="width: 1%;"><h4>NO</h4></td>
                    <td class="one" style="width: 1%;"><h4>Ave</h4></td>
                    <td class="one" style="width: 1%;"><h4>Runs</h4></td>
                    <td class="one" style="width: 1%;"> <h4>HS</h4></td>
                    <td class="one" style="width: 1%;"><h4>100s</h4></td>
                    <td class="one" style="width: 1%;"><h4>50s</h4></td>
                    <td class="one" style="width: 1%;"><h4>0s</h4></td>
                    <td class="one" style="width: 1%;"><h4>4's</h4></td>
                    <td class="one" style="width: 1%;"><h4>6's</h4></td>
                    <td class="one" style="width: 1%;"><h4>Outs</h4></td>
                    
                 </tr>
            
                 @foreach ($batters  as $batter )
                 <tr class="most_sixes">
                    <td >{{$batter->player}}</td>
                    <td class="matches">{{$batter->matches}}</td>
                    <td class="innings">{{$batter->innings}}</td>
                    <td class="no">{{$batter->no}}</td>
                    <td class="average">{{ $batter->average}}</td>
                    <td class="runs">{{$batter->runs  }}</td>
                    <td class="highest_score">{{$batter->highest_score}}</td>
                    <td class="hunds">{{$batter->hunds}}</td>
                    <td class="fiftys">{{$batter->fiftys}}</td>
                    <td class="ducks">{{$batter->ducks}}</td>
                    <td class="fours">{{$batter->fours}}</td>
                    <td class="sixs">{{$batter->sixs}}</td>
                    <td class="outs">{{$batter->outs}}</td>

                 </tr>
                    
                 

                 @endforeach
     
       
             </tbody>
         </table>  
       </div> 

       <script src="/js/table_cross_hair.js"> </script>
        
@stop