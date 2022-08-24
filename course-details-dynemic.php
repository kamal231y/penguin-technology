<?php
	$id = null;
	if (isset($_GET['id'])) {
		$id  = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Penguin Technology | Courses Details</title>
    <?php include "include/css-url.php"; ?>
</head>

<body ng-app="pengu" ng-controller="add-courses-ctrl" ng-init="getSingleDataAdmin('<?= $id ?>')" ng-cloak>

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
                <div class="col-lg-12">
                    <main>

                        <div class="cours-video mb-50">
                            <div class="video-popup2 video-popup">
                                <img src="{{tableObj.image_url}}" alt="">
                                <div class="video-content" ng-if="tableObj.link">
                                    <div class="play-icon">
                                        <a href="{{tableObj.link}}" class="history" target="_blank"><i
                                                class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="course-detail-title mb-40">{{tableObj.title}}</h3>
                        <p class="para" ng-bind-html="tableObj.description | sce"></p>
                        
                        <div class="curriculum-area mb-55"  ng-controller="course-menu-ctrl" ng-init="getData('<?= $id ?>')">
                            <div class="curriculum-head d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Course Curriculum</h5>
                            </div>
                            <div class="curriculum-content">
                                <!-- <p class="para mb-45"></p> -->
                                <div class="curriculum-accord accordio-style-3">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item" ng-repeat="item in tableList">
                                            <h2 class="accordion-header" id="{{item.id}}">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne{{item.id}}" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    {{item.title}}
                                                </button>
                                            </h2>
                                            <div id="collapseOne{{item.id}}" class="accordion-collapse collapse"
                                                aria-labelledby="{{item.id}}" data-bs-parent="#{{item.id}}">
                                                <!-- ng-class="{'active show': item.id==tableList[0].id}" -->
                                                <div class="accordion-body">
                                                    <p ng-bind-html="item.description | sce"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="accordion-item mb-40">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Section-2
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Lecture 1.1</p>
                                                            <p class="lecture-title">Design Principles - Some Important
                                                                Facts (part 01)</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Lecture 1.1</p>
                                                            <p class="lecture-title">Example of Redesign an Old Site to
                                                                New (Part 01)</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Lecture 1.1</p>
                                                            <p class="lecture-title">Example of Redesign an Old Site to
                                                                New (Part 02)</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="accordion-item mb-40">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Section-3
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Lecture 1.1</p>
                                                            <p class="lecture-title">Design Principles - Some Important
                                                                Facts (part 01)</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Lecture 1.1</p>
                                                            <p class="lecture-title">Example of Redesign an Old Site to
                                                                New (Part 01)</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Lecture 1.1</p>
                                                            <p class="lecture-title">Example of Redesign an Old Site to
                                                                New (Part 02)</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Section-4
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Lecture 1.1</p>
                                                            <p class="lecture-title">Design Principles - Some Important
                                                                Facts (part 01)</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Lecture 1.1</p>
                                                            <p class="lecture-title">Example of Redesign an Old Site to
                                                                New (Part 01)</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Lecture 1.1</p>
                                                            <p class="lecture-title">Example of Redesign an Old Site to
                                                                New (Part 02)</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <h3 class="course-detail-title mb-40">Requirements</h3>
                        <ul class="course-list">
                            <li><a href="#">Lorem Ipsum is simply dummy text of the printing</a></li>
                            <li><a href="#">Lorem has been the industry’s standard dummy text ever</a></li>
                            <li><a href="#">Take a look at our round up of the best shows</a></li>
                            <li><a href="#">Printer took a galley of type make a type specimen book</a></li>
                        </ul> -->

                    </main>
                </div>
                <!-- <div class="col-lg-4">
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
                </div> -->
            </div>


        </div>
    </div>


    <section class="related-course pt-110 pb-110">
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
                            <div class="course-content">
                                <!-- <div class="meta d-flex justify-content-between mb--5">
                                    <div class="author">
                                        <img src="images/courses/a1.png" alt="">
                                        <span class="author-name">Albert Flores</span>
                                    </div>
                                    <div class="price">
                                        <h5>$250</h5>
                                    </div>
                                </div> -->
                                <a href="course-details.php?id={{item.id}}">
                                    <h4 class="course-title">{{item.title}}</h4>
                                    <div class="featured-desc line_limit">
                                        <p ng-bind-html="tableObj.description | sce"></p>
                                    </div>
                                </a>
                                <!-- <div class="review mb-15">
                                    <span><i class="las la-star"></i><i class="las la-star"></i><i
                                            class="las la-star"></i><i class="lar la-star"></i><i
                                            class="lar la-star"></i></span>
                                    <span>(1.2K Review)</span>
                                </div> -->
                                <a href="course-details.php?id={{item.id}}" class="primary--btn course-btn">More Details</a>
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