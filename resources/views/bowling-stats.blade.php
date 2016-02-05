@extends('layout')
@section('title')
<title>OCOB - Bowling</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<script  src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-rc.0/angular.min.js"></script>
@stop

@section('nav')
	  <nav>
       <div id="area">
                <h1  style="display:inline-block; margin-left: 15px; float: left"><a href="/">Otaki College Old boys 2015-2016</a></h1>
            <ul>
               
         
                <li> <a href="/batting-stats">Batting Stats</a> </li>
                <li> <a href="">Bowling Stats</a> </li>
            </ul>
            </div>
    </nav>
@stop

@section('content')
<script src="/js/table_cross_hair.js"> </script>
 <script src="/js/Sorting.js"></script>
<div id="stats"  ng-controller="BowlingSorting">
 <div style="height: 50px; width:100%;">
        </div>
        <h2 style="text-align:center; display:block;margin-bottom: 20px; margin-top: 20px;">Bowling</h2>
            <input class="form-control" style="width: 50%; margin:auto;"type="text" placeholder="Search Player" ng-model="searchPlayer">
              <h4> <span style="color:green; ">Note:</span> Click headers to sort table from lowest - highest.</h4>
                 <table cellspacing="0" class="test" style="width:100%; border-collapse: collapse; margin-top:15px;">
            <tbody >
                 <tr class="most_sixes number_one">
                    <td class="one" style="width: 1%;" ><a href="" ng-click="sortBy = 'player';  reverse = !reverse ">Player</a></td>
                    <td class="one" style="width: 1%;"><a href="" ng-click="sortBy = 'matches';  reverse = !reverse ">Mat</a></td>
                    <td class="one" style="width: 1%;"><a href="" ng-click="sortBy = 'innings';  reverse = !reverse ">Inn</a></td>
                    <td class="one" style="width: 1%;"><a href="" ng-click="sortBy = 'overs';  reverse = !reverse ">Overs</a></td>
                    <td class="one" style="width: 1%;"><a href="" ng-click="sortBy = 'maidens';  reverse = !reverse ">Mdns</a></td>
                    <td class="one" style="width: 1%;"><a href="" ng-click="sortBy = 'runs';  reverse = !reverse ">Runs</a></td>
                    <td class="one" style="width: 1%;"><a href="" ng-click="sortBy = 'wickets';  reverse = !reverse ">Wickets</a></td>
                    <td class="one" style="width: 1%;"><a href="" ng-click="sortBy = 'most_wickets';   reverse = !reverse ">BBI</a></td>
                    <td class="one" style="width: 1%;"><a href="" ng-click="sortBy = 'average';  reverse = !reverse ">Ave</a></td>
                    <td class="one" style="width: 1%;"><a href="" ng-click="sortBy = 'econ';  reverse = !reverse ">Econ</a></td>
                    <td class="one" style="width: 1%;"><a href="" ng-click="sortBy = 'sr';  reverse = !reverse ">SR</a></td>
                    <td class="one" style="width: 1%;"> <a href="" ng-click="sortBy = 'fivefas';  reverse = !reverse ">5w</a></td>
                
                    
                    
                 </tr>
                  
                 <tr class="most_sixes" ng-repeat="bowler in bowlers | orderBy:sortBy:reverse | filter:searchPlayer">
                    <td >@{{bowler.player}}</td>
                    <td class="matches">@{{bowler.matches}}</td>
                    <td class="innings">@{{bowler.innings}}</td>
                    <td class="no">@{{bowler.overs}}</td>
                    <td class="runs">@{{bowler.maidens}}</td>
                    <td class="average">@{{bowler.runs}}</td>
                    <td class="highest_score">@{{bowler.wickets}}</td>
                    <td class="hunds">@{{bowler.most_wickets}} / @{{bowler.least_runs}} </td>
                    <td class="fiftys">@{{bowler.average}}</td>
                    <td class="ducks">@{{bowler.econ}}</td>
                    <td class="fours">@{{bowler.sr}}</td>
                    <td class="sixs">@{{bowler.fivefas}}</td>
                    


                 </tr>
                    
                 

           
     
       
             </tbody>
         </table>
          



</div>
@stop