<?php
session_start();
session_regenerate_id();
if (!$_SESSION['PenguAdmin']) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include "include/css-url.php"; ?>
    <style>
        .mr-lf-2-per {
            margin-left: 2%;
        }

        .mr-tp-1-per {
            margin-top: 2.5%;
        }

        .mr-tp-4-per {
            margin-top: 4%;
        }

        .wd-40 {
            width: 17%;
        }
    </style>
</head>

<body ng-app="pengu" ng-controller="slider-ctrl" ng-init="getData()">

    <div id="main-wrapper">
        <?php include "include/header.php"; ?>
        <?php include "include/sidebar.php"; ?>


        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <form ng-submit="saveData()" autocomplete="off">
                    <div class="row page-titles mx-0">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label>Image (png,jpeg,jpg) (1920x800 in pixel, Max size 1MB)<sup class="mandatory">*</sup> </label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="packageFile" file-input="packageFile" onchange="angular.element(this).scope().uploadImg(this)" accept=".jpg, .jpeg, .png" ng-required="!selectedId">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="input-rounded" class="control-label">Title<sup class="mandatory">*</sup> </label>
                                <input type="Title" class="form-control" ng-model="itemObject.title" placeholder="Title" maxlength="255">
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label></label>
                            <div class="input-group mb-3  mr-tp-1-per">
                                <button type="submit" ng-disabled="submitBtn" title="Submit" class="btn btn-info">{{btnName}}</i></button>
                                <button type="button" title="Cancel" class="btn btn-danger mr-lf-2-per" ng-click="cancel()">Cancel</button>
                            </div>
                        </div>
                        <div class="col-md-4" ng-if="selectImg">
                            <img class="wd-40" id="imgPreview" src="{{selectImg}}">
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="showmargin" style="float:left;" ng-init="count='10'">
                                            <label>Show </label>
                                            <select class="entries" name="count" ng-model="itemsPerPage">
                                                <option ng-value="10" selected="selected">10</option>
                                                <option ng-value="20">20</option>
                                                <option ng-value="50">50</option>
                                                <option ng-value="70">70</option>
                                                <option ng-value="100">100</option>
                                            </select>
                                            <label for="">Entries</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 offset-6">
                                        <div class="form-group">
                                            <input type="search" class="form-control" placeholder="search..." ng-model="filterPro">
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>S.no</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th class="wd-10">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr dir-paginate="item in items=(tableList | filter:filterPro) | itemsPerPage: itemsPerPage" current-page='currentPage'>
                                                <td> {{($index + 1) + (currentPage - 1) * itemsPerPage}}</td>
                                                <td>
                                                    <img class="wd-120" src="{{item.image_url}}" alt="">
                                                </td>
                                                <td>{{item.title}}</td>
                                                <td>
                                                    <button type="button" data-toggle="tooltip" title="Edit" class="btn btn-primary  mr-1" ng-click="editItem(item)"><i class="fa fa-edit"></i></button>
                                                    <button type="button" title="Delete" class="btn btn-danger" ng-click="deleteModal(item)"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr ng-if="items && !items.length">
                                                <td class="text-center" colspan="15">
                                                    Data Not Available
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div style="margin: 10px;">
                                    <dir-pagination-controls class="pull-right pagination" max-size="8" direction-links="true" boundary-links="true"></dir-pagination-controls>
                                </div>
                                <!-- <div style="margin: 10px;">
                                    <dir-pagination-controls class="pull-right pagination" max-size="8" direction-links="true" boundary-links="true"></dir-pagination-controls>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php include "include/footer.php"; ?>


    </div>
    <?php include "include/js-url.php"; ?>
    <?php include "modals/delete-modal.php"; ?>

</body>

</html>