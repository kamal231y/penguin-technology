'use strict';
app.controller('markets-ctrl', function ($scope, $http, $rootScope) {
    $scope.url = $rootScope.baseUrl + "markets";
    $scope.tableList = [];
    $scope.currentPage = 1;
    $scope.itemsPerPage = 10;
    $scope.itemObject = {};
    $scope.selectedId;
    $scope.selectImg;
    $scope.btnName = "Submit";

    $scope.getData = function () {
        try {
            $rootScope.showLoader();
            var config = {
                headers: {}
            };

            $http.get($scope.url + "/getData", config).then(function (response) {
                let data = response.data;
                $rootScope.hideLoader();
                if (data.status) {
                    $scope.tableList = data.datalist;
                    $scope.tableListObj = data.datalist[0];
                    $scope.tableList = $scope.tableList.map(elem=>{
                        elem.image_url = $rootScope.baseUrl + elem.image_url;
                        return elem;
                    })
                    setTimeout(() => {
                        $('.review-silder').slick({
                            dots: false,
                            infinite: true,
                            speed: 600,
                            autoplay: true,
                            autoplaySpeed: 1500,
                            arrows: true,
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            responsive: [{
                                    breakpoint: 1024,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 2,
                                        infinite: true,
                                        dots: false,
                                    }
                                },
                                {
                                    breakpoint: 600,
                                    settings: {
                                        centerMode: false,
                                        slidesToShow: 1,
                                        slidesToScroll: 2,
                                        dots: false,
                                    }
                                },
                                {
                                    breakpoint: 480,
                                    settings: {
                                        centerMode: false,
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                        dots: false,
                                    }
                                }
                            ]
                        });
                        $("#mainSlider").fadeOut(1000);
                    }, 1500);
                }
            });
        } catch (error) {
            $rootScope.hideLoader();
            console.log(error.message);
        }
    }

    $scope.saveData = function () {
        try {
            $scope.submitBtn = true;
            $rootScope.showLoader();
            var config = {
                transformRequest: angular.identity,
                headers: {
                    'Content-Type': undefined,
                    'Process-Data': false
                }
            };

            let form_data = new FormData();

            if ($scope.packageFile && $scope.packageFile[0]){
                form_data.append("packageFile", $scope.packageFile[0]);
            };

            form_data.append("itemObject", JSON.stringify($scope.itemObject));
            if ($scope.selectedId) {
                form_data.append("id", $scope.selectedId);
            }

            $http.post($scope.url + "/saveData", form_data, config).then(function (response) {
                let data = response.data;
                $scope.submitBtn = false;
                if (data.status) {
                    $rootScope.hideLoader();
                    let object = data.datalist;
                    object.image_url = $rootScope.baseUrl + object.image_url;
                    if ($scope.selectedId) {
                        let index = $scope.tableList.findIndex(elem => elem.id == $scope.selectedId);;
                        $scope.tableList.splice(index, 1, object);
                    } else {
                        $scope.tableList.push(object);
                    }
                    $rootScope.showSnackbar(data.message);
                    $scope.cancel();
                }else{
                    $rootScope.showSnackbar(data.message);
                    $scope.submitBtn = false;
                }
            });
        } catch (error) {
            $rootScope.hideLoader();
            console.log(error.message);
            $scope.submitBtn = false;
        }
    }

    $scope.uploadImg = function (event) {
        let file = event.files[0];
        if (!file) return
        
        var FileSize = file.size / 1024;
        if (FileSize > 1000) {
            $("#packageFile").val("");
            return $rootScope.showSnackbar("Image cannot be Greater than 1MB");
        }

        var reader = new FileReader();

        reader.onload = function (event) {
            $scope.selectImg = event.target.result
            $scope.$apply()

        }
        reader.readAsDataURL(file);
    }

    $scope.cancel = function () {
        
        $scope.selectedId = null;
        $scope.selectImg = null;
        $scope.itemObject = {};
        $scope.btnName = "Submit";
        $("#packageFile").val("");
    }

    $scope.editItem = function (item) {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        $scope.selectedId = item.id;
        $scope.selectImg = item.image_url;
        $scope.btnName = "Update";
        $scope.itemObject = {...item}
    }

    $scope.deleteModal = function (item) {
        
        $scope.selectedId = item.id;
        $("#deleteConfirm").modal("show");
    }

    $scope.deleteItem = function () {
        
        try {
            
            $rootScope.showLoader();
            $http.get($scope.url + "/deleteData/"+ $scope.selectedId).then(function (response) {
                let data = response.data;
                if (data.status) {
                    $rootScope.hideLoader();
                    $("#deleteConfirm").modal("hide");
                    if ($scope.selectedId) {
                        let index = $scope.tableList.findIndex(elem => elem.id == $scope.selectedId);
                        $scope.tableList.splice(index, 1);
                    }
                    $rootScope.showSnackbar(data.message);
                    $scope.cancel();
                }
            });
        } catch (error) {
            $rootScope.hideLoader();
            console.log(error.message);
        }
    }

});