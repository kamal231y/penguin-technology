<?php
	session_start();
	session_regenerate_id();
	if (!$_SESSION['PenguAdmin']) {
		header("location:index.php");
	}
?>
<?php
	$id = null;
	if (isset($_GET['id'])) {
		$id  = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
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

<body ng-app="pengu" ng-controller="add-products-ctrl" ng-init="getSingleDataAdmin('<?= $id ?>')">

	<div id="main-wrapper">
		<?php include "include/header.php"; ?>
		<?php include "include/sidebar.php"; ?>


		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="head_title">
									<div class="row">
										<div class="col-md-6">
											<h2>View All Details :</h2>
										</div>
										<div class="col-md-6">
											<a href="add-products.php"><button class="btn btn-warning float-right"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back</button></a>
										</div>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table table-striped">
										<tbody>
											<tr>
												<th class="col-md-6">Image</th>
												<td class="col-md-6"><img class="col-md-6 wd-40" src="{{tableObj.image_url}}" alt=""></td>
											</tr>
											<tr>
												<th class="col-md-6">Category Id</th>
												<td class="col-md-6">{{tableObj.categoryId}}</td>
											</tr>
											<tr>
												<th class="col-md-6">Title</th>
												<td class="col-md-6">{{tableObj.title}}</td>
											</tr>
											<tr>
												<th class="col-md-6">Description</th>
												<td class="col-md-6" ng-bind-html="tableObj.description | sce"></td>
											</tr>
										</tbody>
									</table>
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

</body>

</html>