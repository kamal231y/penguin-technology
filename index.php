<!DOCTYPE html>
<html lang="en">

<head>
    <title>Penguin Technology | Home</title>
    <?php include "include/css-url.php"; ?>
</head>

<body ng-app="pengu" ng-controller="slider-ctrl" ng-init="getData()" ng-cloak>

    <?php include "include/header.php"; ?>

    <section>
        <div class="slider home-slider">
            <!-- <div class="slider_img">
                <img src="images/slider/slider-1.jpg" alt="">
            </div>
            <div class="slider_img">
                <img src="images/slider/slider-2.jpg" alt="">
            </div> -->
            <div class="slider_img" ng-repeat="item in tableList">
                <img src="{{item.image_url}}" alt="">
            </div>
        </div>
    </section>

    <section class="why-choose fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <p class="subtitle">Online Teaching Marketplace &amp; E-learning Platform</p>
                        <h2 class="title mb-20">Why choose Penguin Technology?</h2>
                        <p class="title-para">Upload your course tutorial &amp; become an online teacher. Earn as
                            much as you can, it's FREE! Also, Browse our course categories where you can develop
                            your skills anytime from the best professionals.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="card">
                        <div class="icon">
                            <img src="images/icon/book.png" alt="">
                        </div>
                        <h3>Classroom Training</h3>
                        <p>Lifetime access to high-quality self-paced e-learning content curated by industry experts</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="card">
                        <div class="icon">
                            <img src="images/icon/training.png" alt="">
                        </div>
                        <h3>Online Training</h3>
                        <p>Blended learning delivery model (self-paced eLearning and/or instructor-led options)</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="card">
                        <div class="icon">
                            <img src="images/icon/24-hours.png" alt="">
                        </div>
                        <h3>Corporate Training</h3>
                        <p>We have one of the best dedicated team for you to provide any sort of issue related with the transaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="courses-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <p class="subtitle">Pick a Courses to Get Started</p>
                        <h2 class="title">Our Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="course-item">
                        <div class="course-thumb">
                            <img src="images/courses/linux.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <a href="linux-training.php">
                                <h4 class="course-title">Linux Training</h4>
                                <div class="featured-desc line_limit">
                                    <p>What is linux and why linux?, About software licencing, Linux Architecture, Setup Lab environment, Linux installation</p>
                                </div>
                            </a>
                            <a href="linux-training.php" class="primary--btn course-btn">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="course-item">
                        <div class="course-thumb">
                            <img src="images/courses/c3.jpg" alt="">
                        </div>
                        <div class="course-content">
                            <a href="aws-training.php">
                                <h4 class="course-title">AWS Cloud Training</h4>
                                <div class="featured-desc line_limit">
                                    <p>AWS Cloud Training is a set of practices that combines software development (Dev) and IT operations (Ops).</p>
                                </div>
                            </a>
                            <a href="aws-training.php" class="primary--btn course-btn">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-section about-us banner-bg-shape vector-bg"
        style="background-image: url('images/bg/Ellipse.png');background-size: cover;background-position: center;">
        <img src="images/icon/faq-shap1.svg" alt="" class="shap1">
        <img src="images/icon/faq-shap2.svg" alt="" class="shap2">
        <img src="images/icon/faq-shap3.svg" alt="" class="shap3">
        <img src="images/icon/faq-shap4.svg" alt="" class="shap4">
        <img src="images/icon/faq-shap5.svg" alt="" class="shap5">
        <img src="images/icon/faq-shap6.svg" alt="" class="shap6">
        <img src="images/icon/faq-shap7.svg" alt="" class="shap7">
        <img src="images/icon/faq-shap8.svg" alt="" class="shap8">
        <img src="images/icon/faq-shap9.svg" alt="" class="shap9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="banner-content text-lg-left">
                        <p class="banner-subtitle mb-0">Welcome to Penguin Technology</p>
                        <h1 class="banner-title mb-30">Why Choose Us?</h1>
                        <p class="banner-text mb-40">Penguin Technology is one of the leading Open Source training and soutions company. We provide industrial Linux Administration training to our participant and corporate employees based on industry experince on live projects. We provide Linux training by our corporate trainer and focus to deliver in-depth coverage on Linux system fundamentals as well as advanced administration. We provide Linux training to individual who are looking to expand IT skills, taking first steps towards a new career and participant can join who completed intermediate and collage degree. After completing the course we assist our students in placement ,interview tips and technique.</p>
                        <!-- <a href="contact.php" class="primary--btn banner-btn">Sign Up</a> -->
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="banner-thumb text-center">
                        <img src="images/bg/banner-bg.png" class="img-fluid" alt="">
                    </div>
                </div> -->
            </div>
            <!-- <div class="row">
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
            </div> -->
        </div>
    </section>


    <!-- <section class="counter-section">
        <div class="container">
            <div class="counter-wrap">
                <div class="counter-item">
                    <img src="images/icon/user.svg" alt="" class="mb-10">
                    <h3 class="odometer" data-odometer-final="55">&nbsp;</h3>
                    <p>Projects Delever</p>
                </div>
                <div class="counter-item">
                    <img src="images/icon/presentation.svg" alt="" class="mb-15">
                    <h3 class="odometer" data-odometer-final="52">&nbsp;</h3>
                    <p>Happy Clients</p>
                </div>
                <div class="counter-item">
                    <img src="images/icon/course.svg" alt="" class="mb-15">
                    <h3 class="odometer" data-odometer-final="11">&nbsp;</h3>
                    <p>Serives</p>
                </div>
            </div>
        </div>
    </section>


    <section class="instructor-section pt-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <p class="subtitle">The Source Of Wisdom</p>
                        <h2 class="title">Our Expert Instructor</h2>
                    </div>
                </div>
            </div>
            <div class="row instructor-active">
                <div class="col-12">
                    <div class="instructor-item">
                        <div class="row gx-0">
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-left text-center">
                                    <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-10 col-8">
                                <div class="instructor-thumb">
                                    <img src="images/expert/exprt1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-right">
                                    <li><a href="#"><i class="lab la-tumblr"></i></a></li>
                                    <li><a href="#"><i class="lab la-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="lab la-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="instructor-details">
                                    <a href="instructor-details.html">
                                        <h4 class="instruc-name mb-0">Micheal Angelina</h4>
                                    </a>
                                    <p class="instruc-subtitle">Economic Teacher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="instructor-item">
                        <div class="row gx-0">
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-left text-center">
                                    <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-10 col-8">
                                <div class="instructor-thumb">
                                    <img src="images/expert/exprt2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-right">
                                    <li><a href="#"><i class="lab la-tumblr"></i></a></li>
                                    <li><a href="#"><i class="lab la-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="lab la-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="instructor-details">
                                    <a href="instructor-details.html">
                                        <h4 class="instruc-name mb-0">Arnold </h4>
                                    </a>
                                    <p class="instruc-subtitle">Math Teacher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="instructor-item">
                        <div class="row gx-0">
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-left text-center">
                                    <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-10 col-8">
                                <div class="instructor-thumb">
                                    <img src="images/expert/exprt3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-right">
                                    <li><a href="#"><i class="lab la-tumblr"></i></a></li>
                                    <li><a href="#"><i class="lab la-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="lab la-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="instructor-details">
                                    <a href="instructor-details.html">
                                        <h4 class="instruc-name mb-0">Brooklyn Simmons</h4>
                                    </a>
                                    <p class="instruc-subtitle">English Teacher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="instructor-item">
                        <div class="row gx-0">
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-left text-center">
                                    <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-sm-10 col-8">
                                <div class="instructor-thumb">
                                    <img src="images/expert/exprt2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-1 col-2 d-flex justify-content-center align-items-center">
                                <ul class="icons-right">
                                    <li><a href="#"><i class="lab la-tumblr"></i></a></li>
                                    <li><a href="#"><i class="lab la-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="lab la-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="instructor-details">
                                    <a href="instructor-details.html">
                                        <h4 class="instruc-name mb-0">Brooklyn Simmons</h4>
                                    </a>
                                    <p class="instruc-subtitle">IT Teacher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-section pb-110 pt-100" ng-controller="blog-ctrl" ng-init="getData()">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <p class="subtitle">Read our latest post</p>
                        <h2 class="title">Latest Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row blog-active blog-slider">
                <div class="col-4 d-flex justify-content-center" ng-repeat="item in tableList">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="{{item.image_url}}" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="meta d-flex justify-content-between mb-10">
                                <div class="author"><img src="images/icon/userr.svg" alt="">
                                    <span><a href="#">{{item.name}}</a></span>
                                </div>
                                <div class="blog-date"><img src="images/icon/calendar.svg" alt=""> {{item.created_at | date:'dd MMMM yyyy'}}</div>
                            </div>
                            <a href="blog-details.html">
                                <h4 class="blog-title">{{item.title}}</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="review-section pb-80" ng-controller="markets-ctrl" ng-init="getData()">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <p class="subtitle">See What Our Clients Said</p>
                        <h2 class="title">Clients Review</h2>
                    </div>
                </div>
            </div>
            <div class="review-active review-silder">
                <div class="col-4 mb-40 pt-5" ng-repeat="item in tableList">
                    <div class="review-item">
                        <div class="qutoe-icon">
                            <svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="1">
                                    <path
                                        d="M50 87.5C70.6781 87.5 87.5 70.6766 87.5 50C87.5 29.3234 70.6781 12.5 50 12.5C29.3234 12.5 12.5 29.3234 12.5 50C12.5 70.6766 29.3234 87.5 50 87.5ZM50 18.75C67.2313 18.75 81.25 32.7687 81.25 50C81.25 67.2313 67.2313 81.25 50 81.25C32.7687 81.25 18.75 67.2313 18.75 50C18.75 32.7687 32.7687 18.75 50 18.75Z" />
                                    <path
                                        d="M56.25 64.0625H68.75C70.475 64.0625 71.875 62.6625 71.875 60.9375V48.4375C71.875 46.7125 70.475 45.3125 68.75 45.3125H60.1219C60.7828 43.9891 61.85 42.8813 63.2375 42.1875L63.8984 41.8562C65.4422 41.0844 66.0672 39.2078 65.2953 37.6625C64.7469 36.5688 63.6438 35.9375 62.4984 35.9375C62.0281 35.9375 61.5516 36.0422 61.1016 36.2688L60.4422 36.5984C55.9281 38.8547 53.125 43.3922 53.125 48.4375V60.9375C53.125 62.6625 54.525 64.0625 56.25 64.0625ZM65.625 57.8125H59.375V51.5625H65.625V57.8125Z" />
                                    <path
                                        d="M31.25 64.0625H43.75C45.475 64.0625 46.875 62.6625 46.875 60.9375V48.4375C46.875 46.7125 45.475 45.3125 43.75 45.3125H35.1219C35.7828 43.9891 36.85 42.8812 38.2359 42.1891L38.8984 41.8578C40.4422 41.0859 41.0688 39.2094 40.2969 37.6641C39.7469 36.5687 38.6438 35.9375 37.4969 35.9375C37.0281 35.9375 36.5516 36.0422 36.1016 36.2672L35.4391 36.5984C30.9281 38.8547 28.125 43.3922 28.125 48.4375L28.125 60.9375C28.125 62.6625 29.525 64.0625 31.25 64.0625ZM40.625 57.8125H34.375V51.5625H40.625V57.8125Z" />
                                </g>
                            </svg>
                        </div>
                        <p>{{item.description}}</p>
                        <div class="reviewer">
                            <div class="reviewer-thumb">
                                <img src="{{item.image_url}}" alt="">
                            </div>
                            <div class="reviewer-text">
                                <h6>{{item.title}}</h6>
                                <p class="mb-0">{{item.subTitle}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <section class="student-forum" id="student-forum">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <p class="subtitle">Join Our Vast Community</p>
                        <h2 class="title">Query Form</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="forum-content">
                        <h3 class="mobApp-title mb-40">Join Here To Fine Your Learning Partner</h3>
                        <form>
                            <div class="form-group">
                                <i class="far fa-user"></i>
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <i class="far fa-envelope"></i>
                                <input type="email" placeholder="Your E-mail">
                            </div>
                            <div class="form-group">
                                <i class="fab fa-discourse"></i>
                                <select>
                                    <option>Course Name</option>
                                    <option>Web design</option>
                                    <option>SEO</option>
                                    <option>Web development</option>
                                </select>
                            </div>
                            <a href="#" class="primary--btn w-100 py-4">Submit</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-block d-none">
                    <div class="forum-thumb">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.881124929701!2d77.28013381440725!3d28.633324690797384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfba8f905de7d%3A0x48b7cd5894d0b879!2sHira%20Sweets!5e0!3m2!1sen!2sin!4v1656612013804!5m2!1sen!2sin" width="100%" height="420px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="teach-learn pt-110 pb-110 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="section-title2 mb-70">
                        <div class="sectionTile-img">
                            <img src="images/bg/stripe.png" alt="">
                        </div>
                        <p class="subtitle">Online Teaching Marketplace & E-learning Platform</p>
                        <h2 class="title mb-20">Teach Anything, Learn Anytime</h2>
                        <p class="title-para">Upload your course tutorial & become an online teacher. Earn as much as
                            you can, it's FREE! Also, Browse our course categories where you can develop your skills
                            anytime from the best professionals.</p>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 ms-auto col-sm-6">
                    <div class="teach-area text-center">
                        <div class="teach-icon mb-40">
                            <img src="images/icon/class.svg" alt="">
                        </div>
                        <a href="instuctor.html" class="learn--btn">Start Teaching</a>
                    </div>
                </div>
                <div class="col-lg-4 me-auto col-sm-6">
                    <div class="learn-area text-center">
                        <div class="teach-icon mb-40">
                            <img src="images/icon/learn.svg" alt="">
                        </div>
                        <a href="courses.html" class="learn--btn">Start Learning</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?php include "include/footer.php"; ?>

    <?php include "include/js-url.php"; ?>

</body>

</html>