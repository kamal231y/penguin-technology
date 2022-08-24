'use strict';
app.controller('gallery-ctrl', function ($scope, $http, $rootScope) {
    $scope.url = $rootScope.baseUrl + "gallery";
    $scope.tableList = [];
    $scope.currentPage = 1;
    $scope.itemsPerPage = 10;
    $scope.itemObject = {};
    $scope.selectedId;
    $scope.selectImg;
    $scope.btnName = "Submit";



    $scope.getData = function (id) {
        try {

            $rootScope.showLoader();
            var config = {
                headers: {
                    "id":id
                }
            };

            $http.get($scope.url + "/getData", config).then(function (response) {
                let data = response.data;
                $rootScope.hideLoader();
                if (data.status) {
                    $scope.tableList = data.datalist;
                    $scope.tableList = $scope.tableList.map(elem=>{
                        elem.image_url = $rootScope.baseUrl + elem.image_url;
                        return elem;
                    })
                    setTimeout(() => {
                        $('.proj_slider').slick({
                            arrows: true,
                            dots: false,
                            fade: false,
                            autoplay: true,
                            autoplaySpeed: 2000,
                            infinite: true,
                            touchThreshold: 100,
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            speed: 2000,
                            responsive: [{
                                    breakpoint: 1024,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 1,
                                        infinite: true,
                                        dots: true,
                                    }
                                },
                                {
                                    breakpoint: 600,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 2
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

    // $scope.getSingleData = function () {
    //     
        
    //     try {
    //         $http.get($scope.url + "/getData", config).then(function (response) {
    //             let data = response.data;
    //             $rootScope.hideLoader();
    //             if (data.status) {
    //                 $scope.tableList = data.datalist;
    //                 $scope.tableList = $scope.tableList.map(elem=>{
    //                     elem.image_url = $rootScope.baseUrl + elem.image_url;
    //                     return elem;
    //                 })
    //                 setTimeout(function () {
    //                     $('.galler_images_ul').lightGallery();
    //                 }, 300);
    //             }
    //         });
    //     } catch (error) {
    //         $rootScope.hideLoader();
    //         console.log(error.message);
    //     }
    // }

    $scope.saveData = function () {
        debugger
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

            form_data.append("categoryId", $scope.itemObject.categoryId); 
            form_data.append("title", $scope.itemObject.title); 
            form_data.append("description", $scope.itemObject.description);
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
                        $rootScope.showSnackbar(data.message);
                    } else {
                        $scope.tableList.push(object);
                    }
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
        $scope.getData();
        $scope.selectedId = null;
        $scope.selectImg = null;
        $scope.itemObject = {};
        $scope.btnName = "Submit";
        $("#packageFile").val("");
    }

    $scope.editItem = function (item) {
        debugger
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