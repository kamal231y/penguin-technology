<!DOCTYPE html>
<html lang="en">

<head>
    <title>Penguin Technology | Php Training</title>
    <?php include "include/css-url.php"; ?>
</head>

<body>

    <?php include "include/header.php"; ?>

    <section class="small-banner pt-80  pb-80"
        style="background-image: linear-gradient(rgba(0, 0, 0, .8),rgba(0, 0, 0, .8)),url('images/bg/sm-banner.jpg');background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column text-center">
                    <h2 class="sm-banner-title">php Training</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">php Training</li>
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
                            <h3 class="course-detail-title mb-10">AWS Cloud Training</h3>
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
                                                    Chapter 1: AN INTRODUCTION TO PHP
                                                </button>
                                            </h2>
                                            <div id="collapse1" class="accordion-collapse collapse"
                                                aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 1.1</p>
                                                            <p class="lecture-title">History</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 1.2</p>
                                                            <p class="lecture-title">Versions and Differences between them Practicality</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 1.3</p>
                                                            <p class="lecture-title">Power</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 1.4</p>
                                                            <p class="lecture-title">Installation and configuring Apache and PHP</p>
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
                                                    Chapter 2: PHP BASICS
                                                </button>
                                            </h2>
                                            <div id="collapse2" class="accordion-collapse collapse"
                                                aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 2.1</p>
                                                            <p class="lecture-title">Default syntax</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 2.2</p>
                                                            <p class="lecture-title">Styles of PHP tags</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 2.3</p>
                                                            <p class="lecture-title">Comments in PHP</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 2.4</p>
                                                            <p class="lecture-title">Output functions in PHP</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Chapter 2.5</p>
                                                            <p class="lecture-title">Data types in PHP</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Chapter 2.6</p>
                                                            <p class="lecture-title">Configuration Settings</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Chapter 2.7</p>
                                                            <p class="lecture-title">Error Types</p>
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
                                                    Chapter 3: VARIABLES IN PHP
                                                </button>
                                            </h2>
                                            <div id="collapse3" class="accordion-collapse collapse"
                                                aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 3.1</p>
                                                            <p class="lecture-title">Variable Declarations</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 3.2</p>
                                                            <p class="lecture-title">Variable Scope</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 3.3</p>
                                                            <p class="lecture-title">PHP’s Super global Variables</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 3.4</p>
                                                            <p class="lecture-title">Variable Variables</p>
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
                                                    Chapter 4: CONSTANTS IN PHP
                                                </button>
                                            </h2>
                                            <div id="collapse4" class="accordion-collapse collapse"
                                                aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 4.1</p>
                                                            <p class="lecture-title">Magic Constants</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 4.2</p>
                                                            <p class="lecture-title">Standard Pre-defined Constants</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 4.3</p>
                                                            <p class="lecture-title">Core Pre-defined Languages</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 4.4</p>
                                                            <p class="lecture-title">User defined Constants</p>
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
                                                    Chapter 5: CONTROL STRUCTURES
                                                </button>
                                            </h2>
                                            <div id="collapse5" class="accordion-collapse collapse"
                                                aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.1</p>
                                                            <p class="lecture-title">Execution Control Statements</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.2</p>
                                                            <p class="lecture-title">Conditional Statements</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.3</p>
                                                            <p class="lecture-title">Looping Statements with Real-time Examples</p>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading6">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse6"
                                                    aria-expanded="false" aria-controls="collapse6">
                                                    Chapter 6: FUNCTIONS
                                                </button>
                                            </h2>
                                            <div id="collapse6" class="accordion-collapse collapse"
                                                aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 6.1</p>
                                                            <p class="lecture-title">Creating Functions</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 6.2</p>
                                                            <p class="lecture-title">Passing Arguments by Value</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 6.3</p>
                                                            <p class="lecture-title">Passing Arguments by Reference</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 6.4</p>
                                                            <p class="lecture-title">Recursive Functions</p>
                                                        </li>
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading7">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse7"
                                                    aria-expanded="false" aria-controls="collapse7">
                                                    Chapter 7: ARRAYS
                                                </button>
                                            </h2>
                                            <div id="collapse7" class="accordion-collapse collapse"
                                                aria-labelledby="heading7" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 7.1</p>
                                                            <p class="lecture-title">What is an Array?</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 7.2</p>
                                                            <p class="lecture-title">How to create an Array</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 7.3</p>
                                                            <p class="lecture-title">Array Functions</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 7.4</p>
                                                            <p class="lecture-title">Traversing Arrays</p>
                                                        </li>
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading8">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse8"
                                                    aria-expanded="false" aria-controls="collapse8">
                                                    Chapter 8: INCLUDE FUNCTIONS
                                                </button>
                                            </h2>
                                            <div id="collapse8" class="accordion-collapse collapse"
                                                aria-labelledby="heading8" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 8.1</p>
                                                            <p class="lecture-title">Include, Include_once</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 8.2</p>
                                                            <p class="lecture-title">Require, Require_once</p>
                                                        </li>
                                                     
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading9">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse9"
                                                    aria-expanded="false" aria-controls="collapse9">
                                                    Chapter 9: REGULAR EXPRESSIONS
                                                </button>
                                            </h2>
                                            <div id="collapse9" class="accordion-collapse collapse"
                                                aria-labelledby="heading9" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 9.1</p>
                                                            <p class="lecture-title">Validating Textboxes, Emails, Phone Number Etc</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 9.2</p>
                                                            <p class="lecture-title">Creating Custom Regular Expressions</p>
                                                        </li>
                                                      
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading10">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse10"
                                                    aria-expanded="false" aria-controls="collapse10">
                                                    Chapter 10: OBJECT-ORIENTED PROGRAMMING IN PHP
                                                </button>
                                            </h2>
                                            <div id="collapse10" class="accordion-collapse collapse"
                                                aria-labelledby="heading10" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.1</p>
                                                            <p class="lecture-title">Classes, Objects, Fields, Properties, _set(),</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.2</p>
                                                            <p class="lecture-title">Constants, Methods</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.3</p>
                                                            <p class="lecture-title">Encapsulation</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.4</p>
                                                            <p class="lecture-title">Inheritance and types</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.5</p>
                                                            <p class="lecture-title">Polymorphism</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.6</p>
                                                            <p class="lecture-title">Constructor and Destructor</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.7</p>
                                                            <p class="lecture-title">Static Class Members, Instance of Keyword,</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.8</p>
                                                            <p class="lecture-title">Helper Functions</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.9</p>
                                                            <p class="lecture-title">Object Cloning and Copy</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.10</p>
                                                            <p class="lecture-title">Reflections</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading11">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse11"
                                                    aria-expanded="false" aria-controls="collapse11">
                                                    Chapter 11: PHP WITH MYSQL
                                                </button>
                                            </h2>
                                            <div id="collapse11" class="accordion-collapse collapse"
                                                aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 11.1</p>
                                                            <p class="lecture-title">What is MySQL</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 11.2</p>
                                                            <p class="lecture-title">Integration with MySQL</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 11.3</p>
                                                            <p class="lecture-title">MySQL Functions</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 11.4</p>
                                                            <p class="lecture-title">Gmail Data Grid options</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 11.5</p>
                                                            <p class="lecture-title">SQL Injection</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 11.6</p>
                                                            <p class="lecture-title">Uploading and downloading images in Database</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 11.7</p>
                                                            <p class="lecture-title">Registration and Login forms with validations</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 11.8</p>
                                                            <p class="lecture-title">Paging, Sorting…</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading12">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse12"
                                                    aria-expanded="false" aria-controls="collapse12">
                                                    Chapter 12: STRINGS AND REGULAR EXPRESSIONS
                                                </button>
                                            </h2>
                                            <div id="collapse12" class="accordion-collapse collapse"
                                                aria-labelledby="heading12" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 12.1</p>
                                                            <p class="lecture-title">Declarations styles of String Variables</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 12.2</p>
                                                            <p class="lecture-title">String Functions</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 12.3</p>
                                                            <p class="lecture-title">Regular Expression Syntax(POSIX)</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 12.4</p>
                                                            <p class="lecture-title">PHP’s Regular Expression Functions(POSIX Extended)</p>
                                                        </li>
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading13">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse13"
                                                    aria-expanded="false" aria-controls="collapse13">
                                                    Chapter 13: WORKING WITH THE FILES AND OPERATING SYSTEM
                                                </button>
                                            </h2>
                                            <div id="collapse13" class="accordion-collapse collapse"
                                                aria-labelledby="heading13" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 13.1</p>
                                                            <p class="lecture-title">File Functions</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 13.2</p>
                                                            <p class="lecture-title">Open, Create and Delete files</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 13.3</p>
                                                            <p class="lecture-title">Create Directories and Manipulate them</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 13.4</p>
                                                            <p class="lecture-title">Directory Functions</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 13.5</p>
                                                            <p class="lecture-title">Calculating File,  and Directory</p>
                                                        </li>
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading14">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse14"
                                                    aria-expanded="false" aria-controls="collapse14">
                                                    Chapter 14:ERROR AND EXCEPTION HANDLING
                                                </button>
                                            </h2>
                                            <div id="collapse14" class="accordion-collapse collapse"
                                                aria-labelledby="heading14" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 14.1</p>
                                                            <p class="lecture-title">Error Logging</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 14.2</p>
                                                            <p class="lecture-title">Configuration Directives</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 14.3</p>
                                                            <p class="lecture-title">PHP’s Exception Class</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 14.4</p>
                                                            <p class="lecture-title">Throw New Exception</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 14.5</p>
                                                            <p class="lecture-title">Custom Exceptions</p>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading15">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse15"
                                                    aria-expanded="false" aria-controls="collapse14">
                                                    Chapter 15: DATE AND TIME FUNCTIONS
                                                </button>
                                            </h2>
                                            <div id="collapse15" class="accordion-collapse collapse"
                                                aria-labelledby="heading14" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 15.1</p>
                                                            <p class="lecture-title">Date and Time Functions</p>
                                                        </li>
                                                        
             
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading16">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse16"
                                                    aria-expanded="false" aria-controls="collapse14">
                                                    Chapter 16: AUTHENTICATION
                                                </button>
                                            </h2>
                                            <div id="collapse16" class="accordion-collapse collapse"
                                                aria-labelledby="heading16" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 16.1</p>
                                                            <p class="lecture-title">HTTP Authentication</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 16.2</p>
                                                            <p class="lecture-title">PHP Authentication</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 16.3</p>
                                                            <p class="lecture-title">Authentication Methodologies</p>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading16">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse17"
                                                    aria-expanded="false" aria-controls="collapse14">
                                                    Chapter 17: COOKIES
                                                </button>
                                            </h2>
                                            <div id="collapse17" class="accordion-collapse collapse"
                                                aria-labelledby="heading16" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 17.1</p>
                                                            <p class="lecture-title">Why Cookies?</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 17.2</p>
                                                            <p class="lecture-title">Types of Cookies</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 17.3</p>
                                                            <p class="lecture-title">How to Create and Access Cookies</p>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading16">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse18"
                                                    aria-expanded="false" aria-controls="collapse14">
                                                    Chapter 18: SESSIONS
                                                </button>
                                            </h2>
                                            <div id="collapse18" class="accordion-collapse collapse"
                                                aria-labelledby="heading16" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 18.1</p>
                                                            <p class="lecture-title">Session Variables</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 18.2</p>
                                                            <p class="lecture-title">Creating and Destroying a Session</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 18.3</p>
                                                            <p class="lecture-title">Retrieving and Setting the Session ID</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 18.4</p>
                                                            <p class="lecture-title">Encoding and Decoding Session Data</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 18.5</p>
                                                            <p class="lecture-title">Auto-Login</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 18.6</p>
                                                            <p class="lecture-title">Recently Viewed Document Index</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading19">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse19"
                                                    aria-expanded="false" aria-controls="collapse14">
                                                    Chapter 19: WEB SERVICES
                                                </button>
                                            </h2>
                                            <div id="collapse19" class="accordion-collapse collapse"
                                                aria-labelledby="heading16" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 19.1</p>
                                                            <p class="lecture-title">Why Web Services</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 19.2</p>
                                                            <p class="lecture-title">RSS Syntax</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 19.3</p>
                                                            <p class="lecture-title">SOAP</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 19.4</p>
                                                            <p class="lecture-title">How to Access Web Services</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading20">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse20"
                                                    aria-expanded="false" aria-controls="collapse14">
                                                    Chapter 20: XML INTEGRATION
                                                </button>
                                            </h2>
                                            <div id="collapse20" class="accordion-collapse collapse"
                                                aria-labelledby="heading16" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 20.1</p>
                                                            <p class="lecture-title">What is XML</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 20.2</p>
                                                            <p class="lecture-title">Create a XML file from PHP with Database records</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 20.3</p>
                                                            <p class="lecture-title">Reading Information from XML File</p>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading21">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse21"
                                                    aria-expanded="false" aria-controls="collapse14">
                                                    Chapter 21: MYSQL CONCEPTS
                                                </button>
                                            </h2>
                                            <div id="collapse21" class="accordion-collapse collapse"
                                                aria-labelledby="heading16" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.1</p>
                                                            <p class="lecture-title">Introduction</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.2</p>
                                                            <p class="lecture-title">Storage Engines</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.3</p>
                                                            <p class="lecture-title">Functions</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.4</p>
                                                            <p class="lecture-title">Operators</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.5</p>
                                                            <p class="lecture-title">Constraints</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.6</p>
                                                            <p class="lecture-title">DDL commands</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.7</p>
                                                            <p class="lecture-title">DML Commands</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.8</p>
                                                            <p class="lecture-title">DCL Command</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.9</p>
                                                            <p class="lecture-title">TCL Commands</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.10</p>
                                                            <p class="lecture-title">Views</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.11</p>
                                                            <p class="lecture-title">Joins</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.12</p>
                                                            <p class="lecture-title">Cursors</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.13</p>
                                                            <p class="lecture-title">Indexing</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.14</p>
                                                            <p class="lecture-title">Stored Procedures</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.15</p>
                                                            <p class="lecture-title">Mysql with PHP Programming</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 21.16</p>
                                                            <p class="lecture-title">Mysql with SQL Server (Optional)</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading22">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse22"
                                                    aria-expanded="false" aria-controls="collapse14">
                                                    Chapter 22: SPECIAL DELIVERY
                                                </button>
                                            </h2>
                                            <div id="collapse22" class="accordion-collapse collapse"
                                                aria-labelledby="heading16" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 22.1</p>
                                                            <p class="lecture-title">Protocols</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 22.2</p>
                                                            <p class="lecture-title">HTTP Headers and types</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 22.3</p>
                                                            <p class="lecture-title">Sending Mails using PHP</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 22.4</p>
                                                            <p class="lecture-title">Email with Attachment</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 22.5</p>
                                                            <p class="lecture-title">File Uploading and Downloading using Headers</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 22.6</p>
                                                            <p class="lecture-title">SMS Gateways and sending SMS to Mobiles</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 22.7</p>
                                                            <p class="lecture-title">Payments gateways and How to Integrate them

</p>
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