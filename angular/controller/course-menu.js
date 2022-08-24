'use strict';
app.controller('course-menu-ctrl', function ($scope, $http, $rootScope) {
    $scope.url = $rootScope.baseUrl + "course-menu";
    $scope.tableList = [];
    $scope.currentPage = 1;
    $scope.itemsPerPage = 10;
    $scope.itemObject = {};
    $scope.selectedId;
    $scope.selectImg;
    $scope.btnName = "Submit";

    $scope.getData = function (courseId) {
        debugger
        try {
            // if (!courseId) {
            //     return
            // }
            $rootScope.showLoader();
            var config = {
                headers: {
                    "courseId": courseId,
                }
            };

            $http.get($scope.url + "/getData", config).then(function (response) {
                let data = response.data;
                $rootScope.hideLoader();
                if (data.status) {
                    $scope.tableList = data.datalist;
                    $scope.tableListObj = data.datalist[0];
                    setTimeout(() => {
                        $('.service_silder').slick({
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

            form_data.append("courseId", $scope.itemObject.courseId);
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