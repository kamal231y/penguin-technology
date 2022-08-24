<!DOCTYPE html>
<html lang="en">

<head>
    <title>Penguin Technology | Courses</title>
    <?php include "include/css-url.php"; ?>
</head>

<body ng-app="pengu" ng-controller="add-courses-ctrl" ng-init="getData()" ng-cloak>

    <?php include "include/header.php"; ?>

    <section class="small-banner pt-80  pb-80"
        style="background-image: linear-gradient(rgba(0, 0, 0, .8),rgba(0, 0, 0, .8)),url('images/bg/sm-banner.jpg');background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column text-center">
                    <h2 class="sm-banner-title">Courses</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <section class="courses-section pt-110 pb-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <p class="subtitle">Pick a Course to Get Started</p>
                        <h2 class="title">Featured Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6 col-sm-6" ng-repeat="item in tableList">
                    <div class="course-item">
                        <span class="badge featured">Featured</span>
                        <div class="course-thumb">
                            <img src="{{item.image_url}}" alt="">
                        </div>
                        <div class="course-content">
                            <!-- <div class="meta d-flex justify-content-between mb--5">
                                <div class="author">
                                    <img src="images/courses/a1.png" alt="">
                                    <span class="author-name">{{item.title}}</span>
                                </div>
                                <div class="price">
                                    <h5>$250</h5>
                                </div>
                            </div> -->
                            <a class="" href="course-details.php">
                                <h4 class="course-title">{{item.title}}</h4>
                                <div class="featured-desc line_limit">
                                    <p ng-bind-html="tableObj.description | sce"></p>
                                <div>
                            </a>
                            <a href="course-details.php?id={{item.id}}" class="primary--btn course-btn">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="subject-section pt-80 pb-80"
        style="background-image: linear-gradient(rgba(0, 43, 70, .85),rgba(0, 43, 70, .85)),url('images/courses/subjct-bg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="subject-slider">
                        <div class="subject-item">
                            <div class="icon-box mb-20">
                                <img src="images/courses/sub-img.png" alt="">
                                <div class="icon-overly">
                                    <i class="las la-palette"></i>
                                </div>
                            </div>
                            <div class="sub-content">
                                <h5 class="mb--5">Art & Design</h5>
                                <p class="mb-0">Total 16 Course</p>
                            </div>
                        </div>
                        <div class="subject-item">
                            <div class="icon-box mb-20">
                                <img src="images/courses/sub-img.png" alt="">
                                <div class="icon-overly">
                                    <i class="las la-laptop-code"></i>
                                </div>
                            </div>
                            <div class="sub-content">
                                <h5 class="mb--5">Programing</h5>
                                <p class="mb-0">Total 16 Course</p>
                            </div>
                        </div>
                        <div class="subject-item">
                            <div class="icon-box mb-20">
                                <img src="images/courses/sub-img.png" alt="">
                                <div class="icon-overly">
                                    <i class="las la-temperature-low"></i>
                                </div>
                            </div>
                            <div class="sub-content">
                                <h5 class="mb--5">Applied Physics</h5>
                                <p class="mb-0">Total 16 Course</p>
                            </div>
                        </div>
                        <div class="subject-item">
                            <div class="icon-box mb-20">
                                <img src="images/courses/sub-img.png" alt="">
                                <div class="icon-overly">
                                    <i class="las la-drafting-compass"></i>
                                </div>
                            </div>
                            <div class="sub-content">
                                <h5 class="mb--5">Architecture</h5>
                                <p class="mb-0">Total 16 Course</p>
                            </div>
                        </div>
                        <div class="subject-item">
                            <div class="icon-box mb-20">
                                <img src="images/courses/sub-img.png" alt="">
                                <div class="icon-overly">
                                    <i class="las la-palette"></i>
                                </div>
                            </div>
                            <div class="sub-content">
                                <h5 class="mb--5">Art & Design</h5>
                                <p class="mb-0">Total 16 Course</p>
                            </div>
                        </div>
                        <div class="subject-item">
                            <div class="icon-box mb-20">
                                <img src="images/courses/sub-img.png" alt="">
                                <div class="icon-overly">
                                    <i class="las la-drafting-compass"></i>
                                </div>
                            </div>
                            <div class="sub-content">
                                <h5 class="mb--5">Architecture</h5>
                                <p class="mb-0">Total 16 Course</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <div class="courses-section pt-110 mb-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <p class="subtitle">Explore according to your needs</p>
                        <h2 class="title">All Courses</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-70">
                <div class="filter-area">
                    <div class="filter-icon">
                        <img src="images/icon/Group.png" alt="">
                        <h4 class="mb-0">Filters</h4>
                    </div>
                    <div class="select-box">
                        <form>
                            <select>
                                <option>All Categories</option>
                                <option>Categorie 01</option>
                                <option>Categorie 02</option>
                                <option>Categorie 03</option>
                            </select>
                            <select>
                                <option>All Language</option>
                                <option>English</option>
                                <option>German</option>
                                <option>Spanish</option>
                            </select>
                            <select>
                                <option>Price</option>
                                <option>500$</option>
                                <option>1000$</option>
                                <option>450$</option>
                            </select>
                            <select>
                                <option>Level</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4 mb-70">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item">
                        <div class="course-icons">
                            <i class="las la-heart"></i>
                            <i class="lar la-share-square"></i>
                        </div>
                        <div class="course-thumb">
                            <img src="images/courses/c1.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <div class="meta d-flex justify-content-between mb--5">
                                <div class="author">
                                    <img src="images/courses/a1.png" alt="">
                                    <span class="author-name">Albert Flores</span>
                                </div>
                                <div class="price">
                                    <h5>$250</h5>
                                </div>
                            </div>
                            <a href="course-details.php">
                                <h4 class="course-title">SEO - A Complete Guideline</h4>
                            </a>
                            <div class="review mb-15">
                                <span><i class="las la-star"></i><i class="las la-star"></i><i
                                        class="las la-star"></i><i class="lar la-star"></i><i
                                        class="lar la-star"></i></span>
                                <span>(1.2K Review)</span>
                            </div>
                            <a href="course-details.php" class="primary--btn course-btn">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item">
                        <div class="course-icons">
                            <i class="las la-heart"></i>
                            <i class="lar la-share-square"></i>
                        </div>
                        <div class="course-thumb">
                            <img src="images/courses/c2.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <div class="meta d-flex justify-content-between mb--5">
                                <div class="author">
                                    <img src="images/courses/a2.png" alt="">
                                    <span class="author-name">Jane Cooper</span>
                                </div>
                                <div class="price">
                                    <h5>$250</h5>
                                </div>
                            </div>
                            <a href="course-details.php">
                                <h4 class="course-title">Start Your Journey With Ux</h4>
                            </a>
                            <div class="review mb-15">
                                <span><i class="las la-star"></i><i class="las la-star"></i><i
                                        class="las la-star"></i><i class="lar la-star"></i><i
                                        class="lar la-star"></i></span>
                                <span>(1.2K Review)</span>
                            </div>
                            <a href="course-details.php" class="primary--btn course-btn">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item">
                        <div class="course-icons">
                            <i class="las la-heart"></i>
                            <i class="lar la-share-square"></i>
                        </div>
                        <div class="course-thumb">
                            <img src="images/courses/c3.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <div class="meta d-flex justify-content-between mb--5">
                                <div class="author">
                                    <img src="images/courses/a3.png" alt="">
                                    <span class="author-name">Esther Howard</span>
                                </div>
                                <div class="price">
                                    <h5>$250</h5>
                                </div>
                            </div>
                            <a href="course-details.php">
                                <h4 class="course-title">Laravel - A Complete Guideline</h4>
                            </a>
                            <div class="review mb-15">
                                <span><i class="las la-star"></i><i class="las la-star"></i><i
                                        class="las la-star"></i><i class="lar la-star"></i><i
                                        class="lar la-star"></i></span>
                                <span>(1.2K Review)</span>
                            </div>
                            <a href="course-details.php" class="primary--btn course-btn">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item">
                        <div class="course-icons">
                            <i class="las la-heart"></i>
                            <i class="lar la-share-square"></i>
                        </div>
                        <div class="course-thumb">
                            <img src="images/courses/c4.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <div class="meta d-flex justify-content-between mb--5">
                                <div class="author">
                                    <img src="images/courses/a4.png" alt="">
                                    <span class="author-name">Jenny Wilson</span>
                                </div>
                                <div class="price">
                                    <h5>$250</h5>
                                </div>
                            </div>
                            <a href="course-details.php">
                                <h4 class="course-title">Digital Marketing Pro</h4>
                            </a>
                            <div class="review mb-15">
                                <span><i class="las la-star"></i><i class="las la-star"></i><i
                                        class="las la-star"></i><i class="lar la-star"></i><i
                                        class="lar la-star"></i></span>
                                <span>(1.2K Review)</span>
                            </div>
                            <a href="course-details.php" class="primary--btn course-btn">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item">
                        <div class="course-icons">
                            <i class="las la-heart"></i>
                            <i class="lar la-share-square"></i>
                        </div>
                        <div class="course-thumb">
                            <img src="images/courses/c5.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <div class="meta d-flex justify-content-between mb--5">
                                <div class="author">
                                    <img src="images/courses/a5.png" alt="">
                                    <span class="author-name">Guy Hawkins</span>
                                </div>
                                <div class="price">
                                    <h5>$250</h5>
                                </div>
                            </div>
                            <a href="course-details.php">
                                <h4 class="course-title">Start Your Journey With Guitar</h4>
                            </a>
                            <div class="review mb-15">
                                <span><i class="las la-star"></i><i class="las la-star"></i><i
                                        class="las la-star"></i><i class="lar la-star"></i><i
                                        class="lar la-star"></i></span>
                                <span>(1.2K Review)</span>
                            </div>
                            <a href="course-details.php" class="primary--btn course-btn">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item">
                        <div class="course-icons">
                            <i class="las la-heart"></i>
                            <i class="lar la-share-square"></i>
                        </div>
                        <div class="course-thumb">
                            <img src="images/courses/c6.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <div class="meta d-flex justify-content-between mb--5">
                                <div class="author">
                                    <img src="images/courses/a6.png" alt="">
                                    <span class="author-name">Cody Fisher</span>
                                </div>
                                <div class="price">
                                    <h5>$250</h5>
                                </div>
                            </div>
                            <a href="course-details.php">
                                <h4 class="course-title">Shopify - A Complete Guideline</h4>
                            </a>
                            <div class="review mb-15">
                                <span><i class="las la-star"></i><i class="las la-star"></i><i
                                        class="las la-star"></i><i class="lar la-star"></i><i
                                        class="lar la-star"></i></span>
                                <span>(1.2K Review)</span>
                            </div>
                            <a href="course-details.php" class="primary--btn course-btn">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination d-flex flex-wrap justify-content-center">
                            <li class="page-item"><a class="page-link fweight-600" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                            <li class="page-item"><a class="page-link" href="#">.....</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#">11</a></li>
                            <li class="page-item"><a class="page-link fweight-600" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div> -->

    <?php include "include/footer.php"; ?>
    
    <?php include "include/js-url.php"; ?>
</body>

</html>