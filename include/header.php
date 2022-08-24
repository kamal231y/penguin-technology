<div class="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<header>
    <div class="header-top">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="top-left">
                <div class="contact-area">
                    <span class="mr-35"><i class="las la-phone-volume"></i> <a href="tel:+91-8588982487">+91-8588982487</a></span>
                    <span><i class="las la-envelope"></i> 
                    <a href="mailto:info@penguintechnology.in"><span class="__cf_email__">info@penguintechnology.in </span></a></span>
                </div>
            </div>
            <div class="top-right">
                <!-- <div class="search-area">
                    <form>
                        <input type="text" placeholder="search here">
                        <div class="search-btn"><i class="fas fa-search"></i></div>
                    </form>
                </div> -->
                <ul class="social-icon">
                    <li><a href="#" class="social-link"><i class="lab la-facebook-f"></i></a></li>
                    <li><a href="#" class="social-link"><i class="lab la-twitter"></i></a></li>
                    <li><a href="#" class="social-link"><i class="lab la-instagram"></i></a></li>
                    <li><a href="#" class="social-link"><i class="lab la-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="header-section bg-transparent sticky-xs">
        <div class="container-lg container-fluid d-flex justify-content-xl-between justify-content-start align-items-center">
            <div class="mobileMenu-icon">
                <i class="las la-bars"></i>
            </div>
            <a href="index.php" class="header-logo">
                <img src="images/icon/logo.png" alt="">
            </a>
            <ul class="main-menu d-flex align-items-center m-0 p-0">
                <li class="menu-item"><a href="index.php" class="menu-link">Home</a></li>
                <li class="menu-item"><a href="about.php" class="menu-link">About Us</a></li>
                <!-- <li class="menu-item"><a href="#" class="drop-down menu-link">Services&nbsp;<i
                            class="las la-angle-down"></i></a>
                    <ul class="submenu" ng-controller="category-ctrl" ng-init="getData()">
                        <li ng-repeat="item in tableList"><a href="services.php?id={{item.id}}">{{item.title}}</a></li>
                    </ul>
                </li> -->
                <!-- <li class="menu-item"><a href="courses.php" class="drop-down menu-link">Courses&nbsp;<i class="las la-angle-down"></i></a>
                    <ul class="submenu" ng-controller="add-courses-ctrl" ng-init="getData()">
                        <li ng-repeat="item in tableList"><a href="course-details.php?id={{item.id}}">{{item.title}}</a></li>
                    </ul>
                </li> -->
                <li class="menu-item"><a href="courses.php" class="drop-down menu-link">Courses&nbsp;<i class="las la-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="linux-training.php">Linux Training</a></li>
                        <li><a href="aws-training.php">AWS Cloud Training</a></li>
                    </ul>
                </li>
                <!-- <li class="menu-item"><a href="courses.php" class="menu-link">Corporate Training</a></li> -->
                <li class="menu-item"><a href="blog.php" class="menu-link">Blog</a></li>
                <li class="menu-item"><a href="contact.php" class="menu-link">Contact Us</a></li>
                <!-- <li class="menu-item"><a href="#" class="drop-down menu-link">Blog&nbsp;<i
                            class="las la-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li> -->
                <!-- <li class="menu-item"><a href="#" class="drop-down menu-link">Event&nbsp;<i
                            class="las la-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="event.html">Event</a></li>
                        <li><a href="single-evnt.html">Single Event</a></li>
                    </ul>
                </li> -->
                <!-- <li class="menu-item"><a href="#" class="drop-down menu-link">Pages&nbsp;<i
                            class="las la-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="instuctor.html">Instructor</a></li>
                        <li><a href="instructor-details.html">Instructor Details</a></li>
                        <li><a href="courses.html">Courses</a></li>
                        <li><a href="course-details.html">Course Details</a></li>
                        <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                        <li><a href="event.html">Event</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="single-evnt.html">Single Event</a></li>
                        <li><a href="error.html">404</a></li>
                    </ul>
                </li> -->
            </ul>
            <!-- <div class="sign-up">
                <a href="contact.php" class="primary--btn">Sign Up</a>
            </div> -->
        </div>
    </div>
    <div class="mobile-menu">
        <div class="close-btn">
            <i class="las la-times"></i>
        </div>
        <ul class="m-0 p-0">
            <!-- <li class="moblie-item"><a href="index-2.html" class="moblie-link">Home</a></li> -->
            <li class="moblie-item"><a href="index.php" class="moblie-link">Home</a></li>
            <li class="moblie-item"><a href="about.php" class="moblie-link">About</a></li>
            <!-- <li class="moblie-item"><a href="#" class="drop-down moblie-link">Services&nbsp;<i
                        class="las la-angle-down"></i></a>
                <ul class="mob-submenu" ng-controller="category-ctrl" ng-init="getData()">
                    <li ng-repeat="item in tableList"><a href="services.php?id={{item.id}}">{{item.title}}</a></li>
                </ul>
            </li> -->
            <li class="moblie-item"><a href="" class="drop-down moblie-link">Courses&nbsp;<i class="las la-angle-down"></i></a>
                <ul class="mob-submenu" ng-controller="add-courses-ctrl" ng-init="getData()">
                    <li ng-repeat="item in tableList"><a href="course-details.php?id={{item.id}}">{{item.title}}</a></li>
                </ul>
            </li>
            <li class="moblie-item"><a href="blog.php" class="moblie-link">Blog</a></li>
            <li class="moblie-item"><a href="contact.php" class="moblie-link">Contact Us</a></li>
            <!-- <li class="moblie-item">
                <a href="#" class="drop-down moblie-link">Coursess&nbsp;<i class="las la-angle-down dropd-icon"></i></a>
                <ul class="mob-submenu">
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="course-details.html">Course Details</a></li>
                </ul>
            </li>
            <li class="moblie-item">
                <a href="#" class="drop-down moblie-link">Instructors&nbsp;<i
                        class="las la-angle-down dropd-icon"></i></a>
                <ul class="mob-submenu">
                    <li><a href="instuctor.html">Instructor</a></li>
                    <li><a href="instructor-details.html">Instructor Details</a></li>
                </ul>
            </li>
            <li class="moblie-item">
                <a href="#" class="drop-down moblie-link">Blog&nbsp;<i class="las la-angle-down dropd-icon"></i></a>
                <ul class="mob-submenu">
                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li class="moblie-item">
                <a href="#" class="drop-down moblie-link">Event&nbsp;<i class="las la-angle-down dropd-icon"></i></a>
                <ul class="mob-submenu">
                    <li><a href="event.html">Event</a></li>
                    <li><a href="single-evnt.html">Single Event</a></li>
                </ul>
            </li>
            <li class="moblie-item">
                <a href="#" class="drop-down moblie-link">Pages&nbsp;<i class="las la-angle-down dropd-icon"></i></a>
                <ul class="mob-submenu">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="instuctor.html">Instructor</a></li>
                    <li><a href="instructor-details.html">Instructor Details</a></li>
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="course-details.html">Course Details</a></li>
                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                    <li><a href="event.html">Event</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="single-evnt.html">Single Event</a></li>
                    <li><a href="error.html">404</a></li>
                </ul>
            </li> -->
        </ul>
    </div>
</header>