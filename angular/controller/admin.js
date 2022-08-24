'use strict';
app.controller('admin-ctrl', function ($scope, $http, $rootScope, Loader) {
    $scope.url =$rootScope.baseUrl + "admin";
    $scope.admin = {};
    $scope.changeData = {};
    $scope.mailData = {};    

    // Function for login 
    $scope.login = function (){
        
        try {
            $rootScope.showLoader();
            $scope.submitBtn = true;
            $http.post($scope.url + "/login",$scope.admin).then(function (response) {
                let data = response.data;
                $scope.submitBtn = false;
                if(data.status){
                    $rootScope.hideLoader();
                    $rootScope.showSnackbar('Sign In!');
                    setTimeout(() => {
                        location.href = "session/login.php?id=true";
                    }, 1000);
                }else{
                    $rootScope.showSnackbar('Wrong Email or Password!');
                }               
            },function error(response) {
                $rootScope.showLoader();
                $scope.submitBtn = false;
                console.log(response.statusText);                                
            });
        } catch (error) {
            $rootScope.showLoader();
            $scope.submitBtn = false;
            console.log(error);
        }
    }

    // Function for login 
    $scope.changePassword = function (){
        
        try {
            $rootScope.showLoader();
            $scope.submitBtn = true;
            $http.post($scope.url + "/changePassword",$scope.admin).then(function (response) {
                let data = response.data;
                $scope.submitBtn = false;
                $rootScope.showSnackbar(data.message);
                $("#changePassword").modal("hide");
            },function error(response) {
                $rootScope.showLoader();
                $scope.submitBtn = false;
                console.log(response.statusText);                                
            });
        } catch (error) {
            $rootScope.showLoader();
            $scope.submitBtn = false;
            console.log(error);
        }
    }

    $scope.logoutUser = function(){
        location.href = "admin/session/logout.php?id=logout";
    }

});