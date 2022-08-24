<footer class="footer-section">
    <div class="container">
        <div class="row pt-80">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <a href="index.php" class="logo">
                        <img src="images/icon/foot-logo.png" alt="" class="mb-20">
                    </a>
                    <p class="footer-text">Penguin Technology is one of the leading Open Source training and solutions company based in Delhi. We provide industrial IT Services and Training.</p>
                    <!-- <h5 class="footer-title text-white mb-15">Newsletter</h5>
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="Put your email here">
                            <a href="#" class="newslttr-btn">Subscribe</a>
                        </div>
                    </form> -->
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="footer-item">
                    <h5 class="footer-title">Quick Links</h5>
                    <ul class="footer-list">
                        <li><a href="courses.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="blog.php">Our Blogs</a></li>
                        <li class="mb-0"><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" ng-controller="add-courses-ctrl" ng-init="getData()">
                <div class="footer-item">
                    <h5 class="footer-title">Course</h5>
                    <ul class="footer-list">
                        <!-- <li ng-repeat="item in tableList | limitTo: 4"><a href="course-details.php?id={{item.id}}" >{{item.title}}</a></li> -->
                        <li><a href="linux-training.php">Linux Training</a></li>
                        <li><a href="devops-training.php">DevOps Training</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-item mb-0">
                    <h5 class="footer-title">Get In Touch</h5>
                    <ul class="contact-list">
                        <li>
                            <a href="#" class="contact-link">
                                <div class="contact-icon">
                                    <img src="images/icon/foot-locat.png" alt="">
                                </div>
                                <div class="contact-numbr">
                                    <p>R-53, 1st Floor, Main Vikas Marg, <br> Near Shakarpur Bus Stand, <br> Laxmi Nagar, Opp Hira Sweets, <br> Shakarpur, New Delhi - 110092</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+91-8588982487" class="contact-link">
                                <div class="contact-icon">
                                    <img src="images/icon/foot-call.png" alt="">
                                </div>
                                <div class="contact-numbr">
                                    <p>+91-8588982487</p>
                                </div>
                            </a>
                        </li>
                        <li class="mb-0">
                            <a href="mailto:info@penguintechnology.in" class="contact-link">
                                <div class="contact-icon">
                                    <img src="images/icon/foot-mail.png" alt="">
                                </div>
                                <div class="contact-numbr">
                                    <p><span class="__cf_email__">info@penguintechnology.in</span></p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row border--bottom">
            <div class="col-md-12">
                <div class="tags_sec">
                    <ul>
                        <li><a href="#">Linux Training in Delhi</a></li>
                        <li><a href="#">Linux Course in Delhi</a></li>
                        <li><a href="#">AWS Training in Delhi</a></li>
                        <li><a href="#">Azure Training in Delhi</a></li>
                        <li><a href="#">GCP Training in Delhi</a></li>
                        <li><a href="#">DevOps Training in Delhi</a></li>
                        <li><a href="#">Terraform Course in Delhi</a></li>
                        <li><a href="#">DevOps Course in Delhi</a></li>
                        <li><a href="#">Python Training in Delhi</a></li>
                        <li><a href="#">Data Science Training in Delhi</a></li>
                        <li><a href="#">Shell Scripting Course in Delhi </a></li>
                        <li><a href="#">Web Developer Training in Delhi</a></li>
                        <li><a href="#">NodeJs Training in Delhi</a></li>
                        <li><a href="#">MongoDB Training in Delhi</a></li>
                        <li><a href="#">Zimbra Training in Delhi</a></li>
                        <li><a href="#">VMware Training in Delhi</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer-bottom">
                <ul class="social-icon">
                    <li><a href="#" class="social-link"><i class="lab la-facebook-f"></i></a></li>
                    <li><a href="#" class="social-link"><i class="lab la-twitter"></i></a></li>
                    <li><a href="#" class="social-link"><i class="lab la-instagram"></i></a></li>
                    <li><a href="#" class="social-link"><i class="lab la-linkedin"></i></a></li>
                </ul>
                <div class="copyright">
                    <span>&copy; 2022 <a href="penguin-technology.com">Penguin Technology</a>. All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="whatsapp-icon">
    <a href="https://api.whatsapp.com/send?phone=8588982487&text=Hi..." target="_blank">
        <i class="lab la-whatsapp" aria-hidden="true"></i>
    </a>
</div>
<div class="enquiry-button">
    <button type="button" data-bs-toggle="modal" data-bs-target="#enquiryModal">
        <i class="las la-comment-dots" aria-hidden="true"></i>
    </button>
</div>
<!-- The Modal -->
<div class="modal" id="enquiryModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Feel free to contact !</h4>
          <button type="button" class="close close-btn" data-bs-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
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
                        <a href="#" class="primary--btn form-btn btn-block">Submit</a>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>