'use strict';
app.controller('enquiry-ctrl', function ($scope, $http, $rootScope) {
    $scope.url = $rootScope.baseUrl;
    $scope.itemObject = {};
    
    $scope.sendEnquiry = function (type=null) {
        try {
            $rootScope.showLoader();
            var config = {
                headers: {}
            };
            
            var extension = window.iti.getSelectedCountryData();

            if(type){
                extension = window.iti2.getSelectedCountryData();
            }

            $scope.itemObject.extension = extension.dialCode
            $scope.btnDisabled = true;
            $http.post($scope.url + "/sendEmail",$scope.itemObject ,config).then(function (response) {
                let data = response.data;
                if (data.status) {
                    $scope.btnDisabled = false;
                    $scope.itemObject = {};
                    if(type){
                        $(".successMsg").show().fadeOut(7000);
                    }else{
                        $("#successMsg").show().fadeOut(7000);
                    }
                    // $rootScope.hideLoader();
                }
            });
        } catch (error) {
            console.log(error.message);
        }
    }

});