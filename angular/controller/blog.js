'use strict';
app.controller('blog-ctrl', function ($scope, $http, $rootScope) {
    $scope.url = $rootScope.baseUrl + "blog";
    $scope.tableList = [];
    $scope.currentPage = 1;
    $scope.itemsPerPage = 10;
    $scope.itemObject = {};
    $scope.selectedId;
    $scope.selectImg;
    $scope.btnName = "Submit";

    $scope.getData = function () {
        debugger
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
                    $scope.tableObj = data.datalist[0];
                    // tinyMCE.get('textareaTinymc1').setContent($scope.tableList.shortDescription);
                    // tinyMCE.get('textareaTinymc2').setContent($scope.tableList.description);
                    $scope.tableList = $scope.tableList.map(elem=>{
                        elem.image_url = $rootScope.baseUrl + elem.image_url;
                        return elem;
                    })
                    setTimeout(() => {
                        $('.blog-slider').slick({
                            arrows: false,
                            dots: true,
                            fade: false,
                            autoplay: true,
                            autoplaySpeed: 2000,
                            infinite: true,
                            touchThreshold: 100,
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            speed: 2000,
                            responsive: [{
                                    breakpoint: 1024,
                                    settings: {
                                        slidesToShow: 3,
                                        slidesToScroll: 1,
                                    }
                                },
                                {
                                    breakpoint: 600,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 1
                                    }
                                },
                                {
                                    breakpoint: 480,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1
                                    }
                                }
                                // You can unslick at a given breakpoint now by adding:
                                // settings: "unslick"
                                // instead of a settings object
                            ]
                        });
                    }, 500);
                }
            });
        } catch (error) {
            $rootScope.hideLoader();
            console.log(error.message);
        }
    }

    $scope.getSingleData = function (id) {
        
        try {
            if (!id) {
                return
            }
            $rootScope.showLoader();
            var config = {
                headers: {
                    "id":id
                }
            };

            $http.get($scope.url + "/getSingleData", config).then(function (response) {
                let data = response.data;
                $rootScope.hideLoader();
                if (data.status) {
                    $scope.tableList = data.datalist;
                    $scope.tableObj = data.datalist[0];
                    $scope.tableList = $scope.tableList.map(elem=>{
                        elem.image_url = $rootScope.baseUrl + elem.image_url;
                        return elem;
                    })
                }
            });
        } catch (error) {
            $rootScope.hideLoader();
            console.log(error.message);
        }
    }

    $scope.saveData = function () {
        try {
            
            $rootScope.showLoader();
            var config = {
                transformRequest: angular.identity,
                headers: {
                    'Content-Type': undefined,
                    'Process-Data': false
                }
            };

            let form_data = new FormData();
            let  shortDescription = tinyMCE.get('textareaTinymc1').getContent();
            let  description = tinyMCE.get('textareaTinymc2').getContent()

            if ($scope.packageFile){
                form_data.append("packageFile", $scope.packageFile[0]);
            };
            form_data.append("shortDescription", shortDescription);
            form_data.append("description", description);
            form_data.append("itemObject", JSON.stringify($scope.itemObject));
            if ($scope.selectedId) {
                form_data.append("id", $scope.selectedId);
            }

            $http.post($scope.url + "/saveData", form_data, config).then(function (response) {
                let data = response.data;
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
                    $scope.cancel();
                }else{
                    $rootScope.showSnackbar(data.message);
                }
            });
        } catch (error) {
            $rootScope.hideLoader();
            console.log(error.message);
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
        tinyMCE.get('textareaTinymc1').setContent('');
        tinyMCE.get('textareaTinymc2').setContent('');
    }

    $scope.editItem = function (item) {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        tinyMCE.get('textareaTinymc1').setContent(item.shortDescription);
        tinyMCE.get('textareaTinymc2').setContent(item.description);
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
            $http.get($scope.url + "/deleteData/"+$scope.selectedId).then(function (response) {
                let data = response.data;
                if (data.status) {
                    $rootScope.hideLoader();
                    $("#deleteConfirm").modal("hide");
                    if ($scope.selectedId) {
                        let index = $scope.tableList.findIndex(elem => elem.id == $scope.selectedId);;
                        $scope.tableList.splice(index, 1);
                    }
                    $scope.cancel();
                }
            });
        } catch (error) {
            $rootScope.hideLoader();
            console.log(error.message);
        }
    }

});