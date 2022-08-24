<?php
    $id = null;
    if (isset($_GET['id'])) {
        $id  = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Penguin Technology | Blog Details</title>
    <?php include "include/css-url.php"; ?>
</head>

<body ng-app="pengu" ng-controller="blog-ctrl" ng-init="getSingleData('<?= $id ?>')" ng-cloak>

    <?php include "include/header.php"; ?>

    <section class="small-banner pt-80  pb-80"
        style="background-image: linear-gradient(rgba(0, 0, 0, .8),rgba(0, 0, 0, .8)),url('images/bg/sm-banner.jpg');background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column  text-center">
                    <h2 class="sm-banner-title">Blog Details</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <div class="blog-section pt-110 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <main class="post-details fix">
                        <div class="blogd-thumb">
                            <img src="{{tableObj.image_url}}" alt="">
                        </div>
                        <div class="blogd-content">
                            <div class="meta-header d-flex justify-content-between">
                                <div class="author d-flex align-items-center">
                                    <img src="images/icon/userr.svg" alt="">
                                    <span><a href="#">{{tableObj.name}}</a></span>
                                </div>
                                <div class="blog-date d-flex align-items-center">
                                    <img src="images/icon/calendar.svg" alt="">
                                    <span class="date">{{tableObj.created_at | date:'dd MMM yyyy'}}</span>
                                </div>
                            </div>
                            <h3 class="main-title">{{tableObj.title}}</h3>
                            <p class="blogd-text" ng-bind-html="tableObj.description | sce"></p>
                            <!-- <p class="blogd-text mb-32">Deserunt ullamco Amet minim mollitAmet minim mollit non deserunt
                                ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit
                                mollit.</p> -->
                            <blockquote class="blockquote mb-32">
                                <i class="las la-quote-left"></i>
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia
                                consequat duis enim velit mollit.
                                <div class="blog-athor pt-18">
                                    <h6>Savannah Nguyen</h6>
                                </div>
                            </blockquote>
                        </div>
                    </main>

                </div>
                <div class="col-lg-4">
                    <aside class="widget-area">

                        <div class="search-blog mb-30">
                            <form>
                                <input type="text" placeholder="search here">
                            </form>
                            <div class="search-btn">
                                <i class='bx bx-search-alt'></i>
                            </div>
                        </div>

                        <!-- <div class="widget mb-30">
                            <h4 class="widget-title">Category</h4>
                            <ul class="category">
                                <li class="cat-item"><a href="#">Web Development&nbsp;&nbsp;(22)</a></li>
                                <li class="cat-item"><a href="#">Applied Physice&nbsp;&nbsp;(15)</a></li>
                                <li class="cat-item"><a href="#">Backend Development&nbsp;&nbsp;(25)</a></li>
                                <li class="cat-item"><a href="#">Space Science&nbsp;&nbsp;(12)</a></li>
                                <li class="cat-item"><a href="#">General Education&nbsp;&nbsp;(15)</a></li>
                                <li class="cat-item"><a href="#">Natarul Photography&nbsp;&nbsp;(15)</a></li>
                                <li class="cat-item"><a href="#">Modern Technology&nbsp;&nbsp;(15)</a></li>
                            </ul>
                        </div> -->

                        <div class="widget mb-30" ng-controller="blog-ctrl" ng-init="getData()">
                            <h4 class="widget-title">Recent Blog</h4>
                            <ul class="recent-blog">
                                <li class="recent-item d-flex justify-content-start align-items-center" ng-repeat="item in tableList">
                                    <div class="recent-thumb">
                                        <img src="{{item.image_url}}" alt="">
                                    </div>
                                    <div class="recent-content d-flex flex-column">
                                        <a href="blog-details.php?id={{item.id}}" class="recent-title">{{item.title}}</a>
                                        <span class="recent-date">{{item.created_at | date:'dd MMM yyyy'}}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <?php include "include/footer.php"; ?>
    
    <?php include "include/js-url.php"; ?>
</body>

</html>