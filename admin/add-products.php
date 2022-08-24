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

<body ng-app="pengu" ng-controller="add-products-ctrl" ng-init="getData()" ng-cloak>

	<div id="main-wrapper">
		<?php include "include/header.php"; ?>
		<?php include "include/sidebar.php"; ?>


		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<form ng-submit="saveData()" autocomplete="off">
					<div class="row page-titles mx-0">
						<div class="col-md-3 col-sm-5">
                            <div class="form-group" ng-controller="category-ctrl" ng-init="getData()">
                                <label for="input-rounded" class="control-label">Category<sup class="mandatory">*</sup></label>
                                <select class="form-control" ng-model="$parent.itemObject.categoryId" required
								ng-options="data.id as data.title for data in tableList">
                                    <option value="" selected disabled>Select Category</option>
                                    <!-- <option value="{{data.id}}" ng-repeat="data in tableList">{{data.title}}</option> -->
                                </select>
                            </div>
                        </div>
						<div class="form-group col-md-5">
							<label>Image (png,jpeg,jpg) (1920x800 in pixel, Max size 1MB)</label>
							<div class="input-group mb-3">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="packageFile" file-input="packageFile" onchange="angular.element(this).scope().uploadImg(this)" accept=".jpg, .jpeg, .png" ng-required="!selectedId">
									<label class="custom-file-label">Choose file</label>
								</div>
							</div>
							<div class="col-md-4" ng-if="selectImg">
								<img  class="wd-40 mr-tp-4-per" id="imgPreview" src="{{selectImg}}">
							</div>
						</div>
						<div class="form-group col-md-4">
							<label>Title <sup class="mandatory">*</sup> </label>
							<input type="text" class="form-control" ng-model="itemObject.title" placeholder="Enter Title" required>
						</div>
						<div class="form-group col-md-12">
							<label>Description <sup class="mandatory">*</sup> </label>
							<!-- <input type="text" class="form-control" ng-model="itemObject.description" placeholder="Enter Description" required> -->
							<textarea id="textareaTinymc2" class="form-control" rows="5" placeholder="Description" spellcheck="false" data-gramm="false" ng-model="itemObject.description"></textarea>
						</div>
						<div class="form-group col-md-3">
							<div class="input-group mr-tp-1-per">
								<button type="submit" ng-disabled="submitBtn" title="Submit" class="btn btn-info"><i class='fa fa-spinner fa-spin' ng-show="showLoader()"></i> {{btnName}}</i></button>
								<button type="button" title="Cancel" class="btn btn-danger mr-lf-2-per" ng-click="cancel()">Cancel</button>
							</div>
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
												<th scope="col"  class="action_width">Action</th>
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
												<td>
													{{item.title}}
												</td>
												<td>
													<a type="button" data-toggle="tooltip" title="View" class="btn btn-warning  mr-1" href="view-tour-detail.php?id={{item.id}}"><i class="fa fa-eye"></i></a>
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
	<script>
        tinymce.init({
            selector: "textarea",
            height: 150,
            theme: "modern",
            plugins: "print preview  paste searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount spellchecker imagetools contextmenu colorpicker textpattern ",
            toolbar1: "formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat",
            image_advtab: true,
            templates: [{
                    title: "Test template 1",
                    content: "Test 1"
                },
                {
                    title: "Test template 2",
                    content: "Test 2"
                }
            ],
            content_css: [
                // "//fonts.googleapis.com/css?family=Lato:300,300i,400,400i",
                // "//www.tinymce.com/css/codepen.min.css"
            ]
        });
    </script>
</body>

</html>