@extends('layout')
@section('title')
<title>OCOB - Batting</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<script  src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-rc.0/angular.min.js"></script>
@stop

@section('nav')
	  <nav>
       <div id="area">
                <h1 style="display:inline-block; margin-left: 15px; float: left"><a href="/">Otaki College Old boys 2015-2016</a></h1>
            <ul>
         
                <li> <a href="">Batting Stats</a> </li>
                <li> <a href="/bowling-stats">Bowling Stats</a> </li>
            </ul>
            </div>
    </nav>

   
  
@stop

@section('content')
    <script src="/js/table_cross_hair.js"> </script>
       <script src="/js/Sorting.js" > </script>
       
<div id="stats" ng-controller="BattingSorting">
      <div style="height: 50px; width:100%;">
        </div>

          <h2 class="batting_heading" style="text-align:center; display: block; margin-bottom: 20px; margin-top: 20px;">Batting</h2>
   

          <input class="form-control" style="width: 50%; margin:auto;"type="text" placeholder="Search Player" ng-model="searchPlayer">
          <h4> <span style="color:green; ">Note:</span> Click headers to sort table from lowest - highest.</h4>
         <table cellspacing="0" class="test" style="width:100%; border-collapse: collapse; margin-top:20px;">
            <tbody >
          
                 <tr class="most_sixes number_one" >
                    <td class="one" style="width: 1%;"><a href="#" ng-click="sortBy = 'name';  reverse = !reverse ">Player</a></td>
                    <td  class="one" style="width: 1%;"><a href="#" ng-click="sortBy = 'matches';  reverse = !reverse ">Mat</a></td>
                    <td class="one" style="width: 1%;"><a href="#" ng-click="sortBy = 'innings';  reverse = !reverse ">Inn</a></td>
                    <td class="one" style="width: 1%;"><a href="#" ng-click="sortBy = 'no';  reverse = !reverse ">NO</a></td>
                    <td class="one" style="width: 1%;"><a href="#" ng-click="sortBy = 'average'; reverse = !reverse">Ave</a></td>
                    <td class="one" style="width: 1%;"><a href="#" ng-click="sortBy = 'runs'; reverse = !reverse">Runs</a></td>
                    <td class="one" style="width: 1%;"> <a href="#" ng-click="sortBy = 'highest_score';  reverse = !reverse ">HS</a></td>
                    <td class="one" style="width: 1%;"><a href="#" ng-click="sortBy = 'hunds';  reverse = !reverse ">100s</a></td>
                    <td class="one" style="width: 1%;"><a href="#" ng-click="sortBy = 'fiftys';  reverse = !reverse ">50s</a></td>
                    <td class="one" style="width: 1%;"><a href="#" ng-click="sortBy = 'ducks';  reverse = !reverse ">0s</a></td>
                    <td class="one" style="width: 1%;"><a href="#" ng-click="sortBy = 'fours';  reverse = !reverse ">4's</a></td>
                    <td class="one" style="width: 1%;"><a href="#" ng-click="sortBy = 'sixs';  reverse = !reverse ">6's</a></td>
                    <td class="one" style="width: 1%;"><a href="#" ng-click="sortBy = 'outs';  reverse = !reverse ">Outs</a></td>
                    
                 </tr>
            
              
                 <tr class="most_sixes" ng-repeat="batter in batters | orderBy:sortBy:reverse | filter:searchPlayer">
                    <td >@{{batter.player}}</td>
                    <td class="matches">@{{batter.matches}}</td>
                    <td class="innings">@{{batter.innings}}</td>
                    <td class="no">@{{batter.no}}</td>
                    <td class="average">@{{ batter.average}}</td>
                    <td class="runs">@{{batter.runs  }}</td>
                    <td class="highest_score">@{{batter.highest_score}}</td>
                    <td class="hunds">@{{batter.hunds}}</td>
                    <td class="fiftys">@{{batter.fiftys}}</td>
                    <td class="ducks">@{{batter.ducks}}</td>
                    <td class="fours">@{{batter.fours}}</td>
                    <td class="sixs">@{{batter.sixs}}</td>
                    <td class="outs">@{{batter.outs}}</td>

                 </tr>
                    
                 

     
       
             </tbody>
         </table>  
     

   
        

  </div>      
@stop