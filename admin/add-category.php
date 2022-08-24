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
			margin-top: 1.5%;
		}

		.mr-tp-4-per {
			margin-top: 4%;
		}

		.wd-40 {
			width: 40%;
		}
	</style>
</head>

<body ng-app="pengu" ng-controller="category-ctrl" ng-init="getData()">

	<div id="main-wrapper">
		<?php include "include/header.php"; ?>
		<?php include "include/sidebar.php"; ?>

		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<form ng-submit="saveData()">
				<!-- ng-show="tableList.length=='0' || tableList.length=='1' || itemObject.id" -->
					<div class="row page-titles mx-0">
						<div class="form-group col-md-3">
							<label>Title <sup class="mandatory">*</sup> </label>
							<input type="text" class="form-control" ng-model="itemObject.title" placeholder="Enter Title" required>
						</div>
						<div class="form-group col-md-5">
							<label>Image (png,jpeg,jpg) (1920x650 in pixel, Max size 1MB)</label>
							<div class="input-group mb-3">
								<div class="custom-file">
								<!-- file-input="hospitalFile" -->
									<input type="file" class="custom-file-input" id="bannerImg" file-input="bannerFile" onchange="angular.element(this).scope().uploadImg(this)"  accept=".jpg, .jpeg, .png" ng-required="!selectedId">
									<label class="custom-file-label">Choose file</label>
								</div>
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
							<img  class="wd-40 mr-tp-4-per" id="imgPreview" src="{{selectImg}}">
						</div>
					</div>
				</form>
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<thead>
											<tr>
												<th scope="col">S.no</th>
												<th scope="col">Image</th>
												<th scope="col">Title</th>
												<th scope="col" class="wd-10">Action</th>
											</tr>
										</thead>
										<tbody>
											<!-- <tr ng-repeat="item in tableList track by $index"> -->
											<tr dir-paginate="item in tableList|itemsPerPage: itemsPerPage"
                                                current-page='currentPage'>
												<td>
													{{($index + 1) + (currentPage - 1) * itemsPerPage}}
												</td>
												<td>
													<img class="wd-120" src="{{item.image_url}}" alt="">
												</td>
												<td>{{item.title}}</td>
												<td>
													<button type="button" data-toggle="tooltip" title="Edit" class="btn btn-primary  mr-1" ng-click="editItem(item)"><i class="fa fa-edit"></i></button>

													<button type="button" title="Delete" class="btn btn-danger" ng-click="deleteModal(item)"><i class="fa fa-trash"></i></button>
												</td>
											</tr>
											<tr ng-if="tableList && !tableList.length">
												<td class="text-center" colspan="10">
													No Data
												</td>
											</tr>
										</tbody>
									</table>
								</div>
                                <div style="margin: 10px;">
                                    <dir-pagination-controls class="pull-right pagination" max-size="8"
                                        direction-links="true" boundary-links="true"></dir-pagination-controls>
                                </div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<?php include "include/footer.php"; ?>


	</div>
	<?php include "include/js-url.php"; ?>
	<?php include "modals/add-banner-modal.php"; ?>

</body>

</html>