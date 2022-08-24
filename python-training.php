<!DOCTYPE html>
<html lang="en">

<head>
    <title>Penguin Technology | python  Training</title>
    <?php include "include/css-url.php"; ?>
</head>

<body>

    <?php include "include/header.php"; ?>

    <section class="small-banner pt-80  pb-80"
        style="background-image: linear-gradient(rgba(0, 0, 0, .8),rgba(0, 0, 0, .8)),url('images/bg/sm-banner.jpg');background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column text-center">
                    <h2 class="sm-banner-title">python  Training</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">python  Training</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <div class="course-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <main>

                        <div class="cours-video mb-30">
                            <div class="video-popup2 video-popup">
                                <img src="images/courses/linux.jpg" alt="">
                            </div>
                        </div>

                        <div class="tran_card">
                            <h3 class="course-detail-title mb-10">python  Training</h3>
                            <div class="card-body">
                            <p class="para">What is linux and why linux?, About software licencing, Linux Architecture, Setup Lab environment, Linux installation, Linux GUI & CLI, Linux networking and trublshooting, Linux Boot Process, Password Recovery, Secure GRUB, Basic and advanced command, vim editors, Introduction to Bash Shell and use</p>
                            </div>
                        </div>
                        
                        <div class="curriculum-area mb-55"  ng-controller="course-menu-ctrl" ng-init="getData('<?= $id ?>')">
                            <div class="curriculum-head d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Course Curriculum</h5>
                            </div>
                            <div class="curriculum-content">
                                <!-- <p class="para mb-45"></p> -->
                                <div class="curriculum-accord accordio-style-3">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading1">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse1"
                                                    aria-expanded="false" aria-controls="collapse1">
                                                    Chapter 1: Python Programming: An Introduction
                                                </button>
                                            </h2>
                                            <div id="collapse1" class="accordion-collapse collapse"
                                                aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 1.1</p>
                                                            <p class="lecture-title">IDLE-An Interpreter for Python</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 1.2</p>
                                                            <p class="lecture-title">Python Strings</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 1.3</p>
                                                            <p class="lecture-title">Relational Operators </p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 1.4</p>
                                                            <p class="lecture-title">Logical Operators</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Chapter 1.5</p>
                                                            <p class="lecture-title">Variables</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 1.6</p>
                                                            <p class="lecture-title">Keywords</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Chapter 1.7</p>
                                                            <p class="lecture-title">Script Mode</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading2">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                    aria-expanded="false" aria-controls="collapse2">
                                                    Chapter 2: Functions
                                                </button>
                                            </h2>
                                            <div id="collapse2" class="accordion-collapse collapse"
                                                aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 2.1</p>
                                                            <p class="lecture-title">Built-in Functions</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 2.2</p>
                                                            <p class="lecture-title">Function Definition and Call</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 2.3</p>
                                                            <p class="lecture-title">Command Line Arguments</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 2.4</p>
                                                            <p class="lecture-title">Importing User Defined Module</p>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading3">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse3"
                                                    aria-expanded="false" aria-controls="collapse3">
                                                    Chapter 3:  Control Structures
                                                </button>
                                            </h2>
                                            <div id="collapse3" class="accordion-collapse collapse"
                                                aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 3.1</p>
                                                            <p class="lecture-title">if Conditional Statement</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 3.2</p>
                                                            <p class="lecture-title">If- else Conditional Statement</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 3.3</p>
                                                            <p class="lecture-title">if-else-if Conditional Statement Ladder</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 3.4</p>
                                                            <p class="lecture-title">Loops(For and While Loop)</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 3.5</p>
                                                            <p class="lecture-title">Nested Loops</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 3.6</p>
                                                            <p class="lecture-title">Break Continue and Pass Statements</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading4">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse4"
                                                    aria-expanded="false" aria-controls="collapse4">
                                                    Chapter 4: Strings
                                                </button>
                                            </h2>
                                            <div id="collapse4" class="accordion-collapse collapse"
                                                aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 4.1</p>
                                                            <p class="lecture-title">String Functions</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 4.2</p>
                                                            <p class="lecture-title">String Processing </p>
                                                        </li>
                                                        
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading5">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse5"
                                                    aria-expanded="false" aria-controls="collapse5">
                                                    Chapter 5: Mutable and Immutable Objects
                                                </button>
                                            </h2>
                                            <div id="collapse5" class="accordion-collapse collapse"
                                                aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                <h5 class="d-block">5.1Lists</h5>
                                                <h5 class="d-block">5.1.1 Summary of List Operations </h5>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                           
                                                            <p class="lecture-no">Chapter 5.1.2 </p>
                                                            <p class="lecture-title">Function list</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.1.3 </p>
                                                            <p class="lecture-title">Functions append, extend, count, remove, index,pop, and insert</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.1.4 </p>
                                                            <p class="lecture-title">Function insert</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.1.5 </p>
                                                            <p class="lecture-title">Function reverse</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.1.6 </p>
                                                            <p class="lecture-title">Functions sort</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.1.7 </p>
                                                            <p class="lecture-title">List Functions and List Comprehension</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.1.6 </p>
                                                            <p class="lecture-title">Lists as Arguments</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.1.9 </p>
                                                            <p class="lecture-title">Copying List Objects</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.1.9 </p>
                                                            <p class="lecture-title">map, reduce, and filter Operations on a Sequence</p>
                                                        </li>
                                                        <br>
                                                        <h5 class="d-block">5.2 Sets</h5>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.2.1 </p>
                                                            <p class="lecture-title">1Set Functions add, update, remove, pop, and clear Set Functions union, intersection, difference,</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.2.2 </p>
                                                            <p class="lecture-title">2Subset and Superset Test</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.2.3 </p>
                                                            <p class="lecture-title">Union and Intersection Operation on Lists</p>
                                                        </li>
                                                        <br>
                                                        <h5 class="d-block">5.3 Tuples</h5>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.3.1 </p>
                                                            <p class="lecture-title">Summary of Tuple Operations</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.3.2 </p>
                                                            <p class="lecture-title">Functions count and index</p>
                                                        </li>
                                                        <br>
                                                        <h5 class="d-block">5.4 Dictionary</h5>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.4.1 </p>
                                                            <p class="lecture-title">Dictionary Operations</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.4.2  </p>
                                                            <p class="lecture-title">Deletion</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading5">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse6"
                                                    aria-expanded="false" aria-controls="collapse5">
                                                    Chapter 6: Recursion
                                                </button>
                                            </h2>
                                            <div id="collapse6" class="accordion-collapse collapse"
                                                aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                <h5 class="d-block">6.1 Recursive Solutions for Problems on Numeric Data</h5>
                                               
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                           
                                                            <p class="lecture-no">Chapter 6.1.1  </p>
                                                            <p class="lecture-title">FactorialIterative Approach Recursive Approach</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 6.1.2  </p>
                                                            <p class="lecture-title">Fibonacci Sequence Iterative Approach</p>
                                                        </li>
                                                      
                                                        <br>
                                                        <h5 class="d-block">6.2 Recursive Solutions for Problems on Strings</h5>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 6.2.1  </p>
                                                            <p class="lecture-title">Length of a String</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 6.2.2  </p>
                                                            <p class="lecture-title">Reversing a String</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 6.2.3  </p>
                                                            <p class="lecture-title">Palindrome</p>
                                                        </li>
                                                        <br>
                                                        <h5 class="d-block">6.3 Recursive Solutions for Problems on Lists</h5>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 6.3.1  </p>
                                                            <p class="lecture-title">Flatten a List</p>
                                                        </li>
                                                      
                                           
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading5">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse7"
                                                    aria-expanded="false" aria-controls="collapse5">
                                                    Chapter 7: Classes
                                                </button>
                                            </h2>
                                            <div id="collapse7" class="accordion-collapse collapse"
                                                aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                
                                                        
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 7.1</p>
                                                            <p class="lecture-title">Classes and Object</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 7.2</p>
                                                            <p class="lecture-title">Person: An Example of Class</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 7.2.1</p>
                                                            <p class="lecture-title">Class as Abstract Data Type</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 7.3</p>
                                                            <p class="lecture-title">Date Class</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 7.4</p>
                                                            <p class="lecture-title">Polymorphism</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 7.5</p>
                                                            <p class="lecture-title">Operator Overloading and Overriding</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="accordion-item">
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
                <div class="col-lg-4">
                    <aside>
                        <!-- <div class="about-course left-widget mb-30">
                            <img class="certificate" src="images/courses/certificate.png" alt="">
                        </div> -->
                        <div class="about-course left-widget mb-30">
                            <a href="#" target="_blank" class="primary--btn w-100 mb-25"><i class="fa fa-download" aria-hidden="true"></i> Download PDF</a>
                            <table class="course-table">
                                <tr>
                                    <td><i class='bx bx-folder-open'></i>Lesson</td>
                                    <td>:&nbsp;&nbsp;16+</td>
                                </tr>
                                <tr>
                                    <td><i class="las la-globe"></i>Language</td>
                                    <td>:&nbsp;&nbsp;English/Hindi</td>
                                </tr>
                                <tr>
                                    <td><i class="las la-level-up-alt"></i>Level</td>
                                    <td>:&nbsp;&nbsp;Advanced</td>
                                </tr>
                                <tr>
                                    <td><i class="las la-calendar"></i>Duration</td>
                                    <td>:&nbsp;&nbsp;2 Month</td>
                                </tr>
                                <tr>
                                    <td><i class="las la-suitcase"></i>Job Placement</td>
                                    <td>:&nbsp;&nbsp;Yes</td>
                                </tr>
                            </table>
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