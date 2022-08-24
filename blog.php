<!DOCTYPE html>
<html lang="en">

<head>
    <title>Penguin Technology | Blog</title>
    <?php include "include/css-url.php"; ?>
</head>

<body ng-app="pengu" ng-controller="blog-ctrl" ng-init="getData()" ng-cloak>

    <?php include "include/header.php"; ?>

    <section class="small-banner pt-80  pb-80"
        style="background-image: linear-gradient(rgba(0, 0, 0, .8),rgba(0, 0, 0, .8)),url('images/bg/sm-banner.jpg');background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column  text-center">
                    <h2 class="sm-banner-title">Blog</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <div class="blog-section pt-110 pb-110">
        <div class="container">
            <div class="row mb-70">
                <div class="col-lg-8">
                    <main>
                        <div class="row g-4">
                            <div class="col-md-6" ng-repeat="item in tableList">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="{{item.image_url}}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <div class="meta d-flex justify-content-between mb-10">
                                            <div class="author"><img src="images/icon/userr.svg" alt=""><span><a
                                                        href="#">{{item.name}}</a></span></div>
                                            <div class="blog-date"><img src="images/icon/calendar.svg" alt=""> {{item.created_at | date:'dd MMM yyyy'}}</div>
                                        </div>
                                        <a href="blog-details.php?id={{item.id}}">
                                            <h4 class="blog-title font-20">{{item.title}}</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <div class="col-lg-4">
                    <aside class="widget-area">

                        <!-- <div class="search-blog mb-30">
                            <form>
                                <input type="text" placeholder="search here">
                            </form>
                            <div class="search-btn">
                                <i class='bx bx-search-alt'></i>
                            </div>
                        </div> -->

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

                        <div class="widget mb-30">
                            <h4 class="widget-title">Recent Blog</h4>
                            <ul class="recent-blog">
                                <li class="recent-item d-flex justify-content-start align-items-center"  ng-repeat="item in tableList">
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

                        <!-- <div class="widget">
                            <h4 class="widget-title">Popular Tag</h4>
                            <div class="tag-wrap">
                                <a href="#" class="tag-item">Agency</a>
                                <a href="#" class="tag-item">Template</a>
                                <a href="#" class="tag-item">Development</a>
                                <a href="#" class="tag-item">Live Class</a>
                                <a href="#" class="tag-item">Education</a>
                                <a href="#" class="tag-item">Portfolio</a>
                            </div>
                        </div> -->
                    </aside>
                </div>
            </div>

            <!-- <div class="row">
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
            </div> -->
        </div>
    </div>

    <?php include "include/footer.php"; ?>
    
    <?php include "include/js-url.php"; ?>
</body>

</html>