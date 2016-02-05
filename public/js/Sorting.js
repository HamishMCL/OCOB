 var ocob = angular.module('ocob', []);

        ocob.controller('BattingSorting', function ($scope, $http) {
         $scope.sortBy = 'runs';
          $scope.reverse = false;



          $http({
          method: 'GET',
          url: 'http://ocob.xyz/battinginfo'
        }).then(function successCallback(response) {
               $scope.batters = response.data;
          }, function errorCallback(response) {

          });


        });


          ocob.controller('BowlingSorting', function ($scope, $http) {
         $scope.sortBy = 'wickets';
          $scope.reverse = false;
            $scope.2ndsort = '';

          $http({
          method: 'GET',
          url: 'http://ocob.xyz/bowlinginfo'
        }).then(function successCallback(response) {
               $scope.bowlers = response.data;
          }, function errorCallback(response) {

          });


        });