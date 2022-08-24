'use strict';
app.controller('add-courses-ctrl', function ($scope, $http, $rootScope) {
    $scope.url = $rootScope.baseUrl + "courses";
    $scope.tableList = [];
    $scope.currentPage = 1;
    $scope.itemsPerPage = 8;
    $scope.itemObject = {};
    $scope.searchPackage = {};
    $scope.selectedId;
    $scope.selectImg;
    $scope.btnName = "Submit";
    $scope.selectCountryId = [];
    // $rootScope.countryList = [];

    $scope.getData = function (categoryId) {
        debugger
        try {
            $rootScope.showLoader();
            var config = {
                headers: {
                    "categoryId": categoryId
                }
            };

            $http.get($scope.url + "/getData", config).then(function (response) {
                let data = response.data;
                $rootScope.hideLoader();
                if (data.status) {
                    $scope.tableList = data.datalist;
                    $scope.tableListAll = data.datalist;
                    $scope.tableObj = data.datalist[0];
                    // tinyMCE.get('textareaTinymc2').setContent($scope.tableList.description);
                    $scope.tableList = $scope.tableList.map(elem => {
                        elem.image_url = $rootScope.baseUrl + elem.image_url;
                        return elem;
                    })
                    debugger
                    setTimeout(() => {
                        $('.course-slider').slick({
                            arrows: false,
                            dots: false,
                            fade: false,
                            autoplay: true,
                            autoplaySpeed: 2000,
                            infinite: true,
                            touchThreshold: 100,
                            slidesToShow: 2,
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

    $scope.getSingleData = function (id, categoryId = "", destName) {
        debugger
        try {
            if (!id) {
                return
            }
            $rootScope.showLoader();
            var config = {
                headers: {
                    "id": id,
                    "categoryId": categoryId,
                    "destName": destName
                }
            }
            if (destName) {
                destName = destName.replaceAll(".php", "");
                $scope.destNameTemp = destName;
                config.headers.destName = destName;
            }
            $http.get($scope.url + "/getSingleData", config).then(function (response) {
                let data = response.data;
                $rootScope.hideLoader();
                if (data.status) {
                    $scope.tableList = data.datalist;
                    $scope.tableObj = data.datalist[0];
                    $scope.tableList = $scope.tableList.map(elem => {
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
    $scope.getSingleDataAdmin = function (id, categoryId = "", destName) {
        try {
            if (!id) {
                return
            }
            $rootScope.showLoader();
            var config = {
                headers: {
                    "id":id,
                    "categoryId": categoryId
                }
            };
    
            $http.get($scope.url + "/getSingleDataAdmin", config).then(function (response) {
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
    $scope.getFilterData = function (categoryId) {
        try {
            $rootScope.showLoader();
            var config = {
                headers: {
                    "categoryId": categoryId
                }
            };
            $http.get($scope.url + "/getFilterData", config).then(function (response) {
                let data = response.data;
                $rootScope.hideLoader();
                if (data.status) {
                    $scope.tableList = data.datalist;
                    $scope.tableObj = data.datalist[0];
                    $scope.tableList = $scope.tableList.map(elem => {
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
    $scope.searchInput = function(event){
        if(!event || event==''){
            $scope.tableList.location = null
        }
    }
    $scope.selectedLoaction = function(item){
        
        if(!item) return ;
        $scope.itemObject.id = item.originalObject.id;
        // $scope.countryList = item.originalObject.id;
        // $scope.getFilterHint(item.originalObject.title);
        $scope.search = item.originalObject.title;
    }

    $scope.searchClick = function (search) {
        $scope.search = search;
    }
    $scope.getFilterHint = function () {
        
        if(!$scope.search){   
            $rootScope.showSnackbar("No result Found");
            return
        }
        
        var config = {
            headers: {
                "search": $scope.search
            }
        };
        //$scope.searchPackage
        $http.get($scope.url + "/getFilterData",config).then(function (response) {
            var data = response.data;
            if(data.status){
                $scope.tableList = data.datalist;
            }
        },err=>{
            $rootScope.hideLoader();
            $rootScope.showSnackbar(err.message); 
        });
    }

    $scope.selectCountryId = function (countryId) {
        
        $http.post($scope.url + "/getFilterData",{"searchPackage":$scope.searchPackage}).then(function (response) {
            
            var data = response.data;
            if(data.status){
                $scope.tableList = $rootScope.countryList.find(elm => elm.id == countryId).tableList;
            }
        },err=>{
            $rootScope.hideLoader();
            $rootScope.showSnackbar(err.message); 
        });
    }

    $scope.searchSpecialities = function(){
        debugger
        if(!$scope.searchTreatment){   
            $rootScope.showSnackbar("No result Found");
            return
        }
      
        $scope.noRecords = false;
        $http.post($scope.url + "/searchSpecialities",{"searchTreatment":$scope.searchTreatment}).then(function (response) {
            
            var data = response.data;
            if(data.status){
                var link = data.datalist.title.toLowerCase().replaceAll(" ", "-");
                location.href = "detail/" + link
            }else{
                $scope.noRecords = true;
                $rootScope.showSnackbar("No result Found");
            }
        },err=>{
            $rootScope.hideLoader();
            $rootScope.showSnackbar(err.message);
        });
    }

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
            let description = tinyMCE.get('textareaTinymc2').getContent()
            if(!description){
                return $rootScope.showSnackbar("Description Field is Required");
            }

            if ($scope.packageFile && $scope.packageFile[0]) {
                form_data.append("packageFile", $scope.packageFile[0]);
            };
            form_data.append("categoryId", $scope.itemObject.categoryId);
            form_data.append("techId", $scope.itemObject.techId);
            form_data.append("description", description);
            if ($scope.itemObject.link) {
                form_data.append("link", $scope.itemObject.link)
            }
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
                } else {
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
        tinyMCE.get('textareaTinymc2').setContent('');
    }

    $scope.reset = function () { 
        $("#searchBar").val("");
        location.reload(true);
    }
    $scope.editItem = function (item) {
        debugger
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        tinyMCE.get('textareaTinymc2').setContent(item.description);
        $scope.tableObj.fromDate = new Date($scope.tableObj.fromDate);
        $scope.selectedId = item.id;
        $scope.selectImg =  item.image_url;
        // $scope.selectImg = $rootScope.baseUrl + item.image_url;
        $scope.btnName = "Update";
        $scope.itemObject = {
            ...item
        }
    }

    $scope.deleteModal = function (item) {
        $scope.selectedId = item.id;
        $("#deleteConfirm").modal("show");
    }

    $scope.deleteItem = function () {

        try {

            $rootScope.showLoader();
            $http.get($scope.url + "/deleteData/" + $scope.selectedId).then(function (response) {
                let data = response.data;
                if (data.status) {
                    $rootScope.hideLoader();
                    $("#deleteConfirm").modal("hide");
                    if ($scope.selectedId) {
                        let index = $scope.tableList.findIndex(elem => elem.id == $scope.selectedId);;
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