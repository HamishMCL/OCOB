

<html >
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<style>
table, th , td  {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd) {
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
</head>


<body ng-app="myApp" ng-controller="myCtrl">
     <h1 style="margin: 20px;">Batting Stats 2015-16</h1>
<input style="width: 200px;margin: 20px;" class="form-control" type="text" ng-model="searchPlayer" placeholder="Search Player">
<p> <span style="color:red; margin-left: 20px;">Note:</span>Click headers to sort table from lowest - highest</p>
    <table style="margin: 20px;">
        <tr>
            <td> <a href="" ng-click="sortBy = 'name';  reverse = !reverse ">Player</a></td>
            <td> <a href="" ng-click="sortBy = 'runs'; reverse = !reverse">Runs</a></td>
            <td> <a href="" ng-click="sortBy = 'wickets'; reverse = !reverse">Wickets</a></td>
            <td> <a href="" ng-click="sortBy = 'average'; reverse = !reverse">Average</a></td>
        </tr>
        <tr  ng-repeat="p in players">
      
            <td>@{{p.player}}</td>
        </tr>


    </table>


<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
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