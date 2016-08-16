<html>
<head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/ocob.css') }}">
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <title>OCOB</title>

</head>
<body ng-app="ocob" ng-controller="GetPlayers">

      <nav>
       
        <div style="display:inline-block; padding: 20px; font-weight: 400">
            <a href="/">Otaki College Old Boys</a>
        </div>
      
        
    </nav>

        <div id="Content">

             <div style="width:100%; height:60px; " >
             </div>

            <div id="Left-Side" >
                    <div class="Title-Bar">
                        <h1 style="font-size: 40px;font-weight:500;" >All Players Stats</h1>
                        <h2>2015-2016</h2>
                    </div>
                
            <div style=" width: 100%;  height: 60px; ">

                <div class="tabs selectedtab" >
                     <h1>Batting</h1>
                </div>

                 <div class="tabs unselectedtab" >
                     <h1>Bowling</h1>
                </div>
            
            </div>

            <table  class="allplayers" style="">

                <tbody >
                  
                    
  
                <tr >
                    <td >PLAYER</td> 
                    <td>MTCHS</td> 
                    <td>INN</td> 
                    <td>NO</td> 
                    <td>RUNS</td> 
                    <td>AVE</td> 
                    <td>HS</td> 
                    <td>100's</td> 
                    <td>50's</td> 
                    <td>0's</td> 
                    <td>6's</td> 
                    <td>4's</td> 
             
              
                </tr>

                <tr   style="border-bottom: 1px solid black;"  ng-repeat="p in players">
      
                            <td>@{{p.player}}</td>
                            <td>@{{p.matches}}</td>
                            <td>@{{p.innings}}</td>
                            <td>@{{p.no}}</td>
                            <td>@{{p.runs}}</td>
                            <td>@{{p.average}}</td>
                            <td>@{{p.highest_score}}</td>
                            <td>@{{p.hunds}}</td>
                            <td>@{{p.fiftys}}</td>
                            <td>@{{p.ducks}}</td>
                            <td>@{{p.fours}}</td>
                            <td>@{{p.sixs}}</td>
                            </tr>
              
                 </tbody>
             </table>     

            </div>

            <div id="Right-Side">
                 <div class="Title-Bar">
                        <h1 style="font-size: 40px;font-weight:500;" >Top Performing</h1>
                        <h2 style="color:">2015-2016</h2>
                    </div>
              <table cellspacing="0" class="quickstats"  >
                <tbody >
                  
                    <th> <td><h2 style="text-align:center;display:inline;">Top 6 Hitters<h2></td></th>

                    <tr class="most_sixes  ">
                        <td > <span >1st</span></td>
                        <td  > <h3 >{{$sixes[1]->player}} </h3></td>
                        <td > <h4>{{$sixes[0]->sixs}}</h4><h5>Sixes</h5></td>
                        
                     </tr>
                    <tr >
                        <td > <span>2nd</span></td>
                        <td  > <h3 >{{$sixes[1]->player}} </h3></td>
                        <td > <h4>{{$sixes[1]->sixs}}</h4><h5>Sixes</h5></td>
                      
                     </tr>
                    <tr >
                        <td > <span>3rd</span></td>
                        <td  > <h3 >{{$sixes[2]->player}}</h3></td>
                        <td> <h4>{{$sixes[2]->sixs}}</h4><h5>Sixes</h5></td>
                     
                     </tr>
                 
           
      
           
                 </tbody>
             </table>     


       
        
              <table cellspacing="0" class="quickstats" >
                <tbody >
                    <th> <td><span style="text-align:center;display:inline;">Highest Run Scorers</span></td></th>

                    <tr class="most_sixes number_one ">
                        <td > <span >1st</span></td>
                        <td  > <span >{{$runs[0]->player}}</span></td>
                        <td > <span>{{$runs[0]->runs}}</h4></td>
                        
                     </tr>
                    <tr class="most_sixes ">
                        <td > <span>2nd</span></td>
                        <td  > <h3 >{{$runs[1]->player}} </h3></td>
                        <td > <h4>{{$runs[1]->runs}}</h4><h5>Runs</h5></td>
                      
                     </tr>
                    <tr class="most_sixes border">
                        <td > <span>3rd</span></td>
                        <td  > <h3 >{{$runs[2]->player}}</h3></td>
                        <td> <h4>{{$runs[2]->runs}}</h4><h5>Runs</h5></td>
                     
                     </tr>
                 
           
      
           
                 </tbody>
             </table>   
     


              <table cellspacing="0" class="quickstats" >


                <tbody >
                      <th> <td><h2 style="text-align:center;display:inline;">Highest Wicket Takers</h2></td></th>

                        <tr class="most_sixes ">
                        <td > <span >1st</span></td>
                        <td  > <h3>{{$wickets[0]->player}}</h3></td>
                        <td > <h4>{{$wickets[0]->wickets}}</h4><h5>Wkts</h5></td>
                        
                     </tr>
                    <tr class="most_sixes ">
                        <td > <span>2nd</span></td>
                        <td  > <h3>{{$wickets[1]->player}} </h3></td>
                        <td > <h4>{{$wickets[1]->wickets}}</h4><h5>Wkts</h5></td>
                      
                     </tr>
                    <tr class="most_sixes ">
                        <td > <span>3rd</span></td>
                        <td  > <h3>{{$wickets[2]->player}}</h3></td>
                        <td> <h4>{{$wickets[2]->wickets}}</h4><h5>Wkts</h5></td>
                     
                     </tr>
             
           
      
           
                 </tbody>
             </table>   
      

 
              <table cellspacing="0" class="quickstats"  >

                <tbody >
                     <th> <td><h2 style="text-align:center;display:inline;">Highest Average</h2></td></th>

                        <tr class="most_sixes n">
                        <td > <span >1st</span></td>
                        <td  > <h3>{{$average[0]->player}}</h3></td>
                        <td > <h4>{{$average[0]->average}}</h4><h5>Ave</h5></td>
                        
                     </tr>
                    <tr class="most_sixes ">
                        <td > <span>2nd</span></td>
                        <td  > <h3>{{$average[1]->player}} </h3></td>
                        <td > <h4>{{$average[1]->average}}</h4><h5>Ave</h5></td>
                      
                     </tr>
                    <tr class="most_sixes ">
                        <td > <span>3rd</span></td>
                        <td  > <h3>{{$average[2]->player}}</h3></td>
                        <td> <h4>{{$average[2]->average}}</h4><h5>Ave</h5></td>
                     
                     </tr>
                 
           
      
           
                 </tbody>
             </table>        
            
           
              <table cellspacing="0" class="quickstats" >
                <tbody >

                     <th> <td><h2 style="text-align:center;display:inline;">Highest Score </h2></td></th>

                        <tr class="most_sixes number_one ">
                        <td > <span >1st</span></td>
                        <td  > <h3>{{$highestscore[0]->player}}</h3></td>
                        <td > <h4>{{$highestscore[0]->highest_score}}</h4><h5>Runs</h5></td>
                        
                     </tr>
                    <tr class="most_sixes ">
                        <td > <span>2nd</span></td>
                        <td  > <h3>{{$highestscore[1]->player}} </h3></td>
                        <td > <h4>{{$highestscore[1]->highest_score}}</h4><h5>Runs</h5></td>
                      
                     </tr>
                    <tr class="most_sixes border">
                        <td > <span>3rd</span></td>
                        <td  > <h4>{{$highestscore[2]->player}}</h4></td>
                        <td> <h4>{{$highestscore[2]->highest_score}}</h4> <h5>Runs</h5></td>
                     
                     </tr>
                  
           
      
           
                 </tbody>
             </table> 
             </div>   
       </div>
</div>
    <script> 

var app = angular.module('ocob', []);
app.controller('GetPlayers', function($scope, $http) {
    $http({
        method : "GET",
        url : "http://localhost:8000/Players"
    }).then(function mySucces(response) {
        $scope.players = response.data;
    }, function myError(response) {
        $scope.myWelcome = response.statusText;
    });
});
</script>

</body>
</html>






  



