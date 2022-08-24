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

<body ng-app="pengu" ng-controller="blog-ctrl" ng-init="getSingleData('<?= $id ?>')">

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
											<a href="blog.php"><button class="btn btn-warning float-right"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back</button></a>
										</div>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table table-striped">
										<tbody>
											<tr>
												<th>Image</th>
                                                <td><img style="width:100px" src="{{tableObj.image_url}}" alt=""></td>
											</tr>
											<tr>
												<th>Name</th>
                                                <td>{{tableObj.name}}</td>
											</tr>
											<tr>
												<th>Title</th>
                                                <td>{{tableObj.title}}</td>
											</tr>
											<tr>
												<th>Date</th>
                                                <td>{{tableObj.created_at | date:'dd-MMM-yyyy'}}</td>
											</tr>
											<tr>
												<th>Sub-Category</th>
                                                <td>{{tableObj.shortDescription}}</td>
											</tr>
											<tr>
												<th>Description</th>
                                                <td ng-bind-html="tableObj.description | sce"></td>
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