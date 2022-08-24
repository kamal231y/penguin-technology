<?php
$id = null;
if (isset($_GET['id'])) {
	$id  = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
}
$destName = null;
if (isset($_GET['destName'])) {
    $destName  = filter_var($_GET['destName'], FILTER_SANITIZE_STRING);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Penguin Technology | Details</title>
    <?php include "include/css-url.php"; ?>
</head>

<body ng-app="pengu" ng-controller="add-products-ctrl" ng-init="getSingleData('<?=$destName?>')" ng-cloak>

    <?php include "include/header.php"; ?>

    <section class="small-banner pt-80  pb-80"
        style="background-image: linear-gradient(rgba(0, 0, 0, .8),rgba(0, 0, 0, .8)),url('images/bg/sm-banner.jpg');background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column text-center">
                    <h2 class="sm-banner-title">{{tableObj.title}}</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="services.php?id={{tableObj.category.id}}">{{tableObj.category.title}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{tableObj.title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <div class="course-details pt-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <main>

                        <div class="cours-video mb-50">
                            <div class="video-popup2 video-popup">
                                <div class="video-popup2-batch">
                                    <a href="#"><i class="las la-tags"></i>Categories: {{tableObj.category.title}}</a>
                                </div>
                                <img src="{{tableObj.image_url}}" alt="">
                                <!-- <div class="video-content">
                                    <div class="play-icon">
                                        <a href="https://www.youtube.com/watch?v=IUTRRedYWgw" class="history"><i
                                                class="fas fa-play"></i></a>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                        <h3 class="course-detail-title mb-40">{{tableObj.title}}</h3>
                        <p class="para" ng-bind-html="tableObj.description | sce"></p>
                        
                    </main>
                </div>
                <div class="col-lg-4">
                    <aside>
                        <div class="about-course left-widget mb-50">
                        <h3 class="course-detail-title mb-25">Enquiry Now</h3>
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Phone">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" placeholder="Subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a href="#" class="primary--btn w-100 form-btn">Submit</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>


        </div>
    </div>


    <section class="related-course pt-80 pb-80" ng-controller="add-products-ctrl" ng-init="getData()">
        <div class="container">
            <div class="row">
                <h3 class="course-detail-title mb-30">Related Course</h3>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-slider">
                        <div class="course-item" ng-repeat="item in tableList">
                            <div class="course-thumb">
                                <img src="{{item.image_url}}" alt="">
                            </div>
                            <div class="course-content line_limit">
                                <a href="details/{{item.title|slug}}">
                                    <h4 class="course-title">{{item.title}}</h4>
                                    <div class="featured-desc line_limit">
                                        <p ng-bind-html="tableObj.description | sce"></p>
                                    </div>
                                </a>
                                <a href="details/{{item.title|slug}}" class="primary--btn course-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "include/footer.php"; ?>
    
    <?php include "include/js-url.php"; ?>
</body>

</html>