<!DOCTYPE html>
<html lang="en">

<head>
    <title>Penguin Technology | AWS Cloud Training</title>
    <?php include "include/css-url.php"; ?>
</head>

<body>

    <?php include "include/header.php"; ?>

    <section class="small-banner pt-80  pb-80"
        style="background-image: linear-gradient(rgba(0, 0, 0, .8),rgba(0, 0, 0, .8)),url('images/bg/sm-banner.jpg');background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column text-center">
                    <h2 class="sm-banner-title">AWS Cloud Training</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">AWS Cloud Training</li>
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
                                                    Chapter 1: Fundamentals of Cloud Computing
                                                </button>
                                            </h2>
                                            <div id="collapse1" class="accordion-collapse collapse"
                                                aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 1.1</p>
                                                            <p class="lecture-title">Cloud Computing Introduction</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 1.2</p>
                                                            <p class="lecture-title">Cloud Computing Models</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 1.3</p>
                                                            <p class="lecture-title">Introduction of AWS</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 1.4</p>
                                                            <p class="lecture-title">AWS Regions and Availability Zones</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Chapter 1.5</p>
                                                            <p class="lecture-title">AWS Marketplace</p>
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
                                                    Chapter 2: Elastic Compute Cloud (EC2)
                                                </button>
                                            </h2>
                                            <div id="collapse2" class="accordion-collapse collapse"
                                                aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 2.1</p>
                                                            <p class="lecture-title">Launch an EC2 instance</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 2.2</p>
                                                            <p class="lecture-title">Instance Types</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 2.3</p>
                                                            <p class="lecture-title">Amazon Machine Images (AMI)</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 2.4</p>
                                                            <p class="lecture-title">Finding the right AMI</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Chapter 2.5</p>
                                                            <p class="lecture-title">Security Key Pairs</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Chapter 2.6</p>
                                                            <p class="lecture-title">Creating and Managing Security Group</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Chapter 2.7</p>
                                                            <p class="lecture-title">Logging into the instance</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Chapter 2.8</p>
                                                            <p class="lecture-title">AWS Public & Private IP Address</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Chapter 2.9</p>
                                                            <p class="lecture-title">Assigning Elastic IP to Instance</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Chapter 2.10</p>
                                                            <p class="lecture-title">Creating Amazon Machine Image(AMI)</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Chapter 2.11</p>
                                                            <p class="lecture-title">Launch Ec2 instance from AMI</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center">
                                                            <p class="lecture-no">Chapter 2.12</p>
                                                            <p class="lecture-title">Starting, Stopping and Terminating instance</p>
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
                                                    Chapter 3:  Amazon Elastic Block Store (EBS):
                                                </button>
                                            </h2>
                                            <div id="collapse3" class="accordion-collapse collapse"
                                                aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 3.1</p>
                                                            <p class="lecture-title">Creating and deleting volumes</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 3.2</p>
                                                            <p class="lecture-title">Attaching and detaching volumes</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 3.3</p>
                                                            <p class="lecture-title">Mounting and Unmounting the attached volume</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 3.4</p>
                                                            <p class="lecture-title">Creating EBS snapshots</p>
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
                                                    Chapter 4: Simple Storage Service (S3)
                                                </button>
                                            </h2>
                                            <div id="collapse4" class="accordion-collapse collapse"
                                                aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 4.1</p>
                                                            <p class="lecture-title">Creating and deleting buckets</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 4.2</p>
                                                            <p class="lecture-title">Adding objects to buckets</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 4.3</p>
                                                            <p class="lecture-title">Deleting objects</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 4.4</p>
                                                            <p class="lecture-title">Bucket Permissions / Versioning</p>
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
                                                    Chapter 5: Cloud Watch Monitoring Service
                                                </button>
                                            </h2>
                                            <div id="collapse5" class="accordion-collapse collapse"
                                                aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.1</p>
                                                            <p class="lecture-title">Monitoring the AWS Service Health Dashboard</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.2</p>
                                                            <p class="lecture-title">Using Cloud watch for Monitoring</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.3</p>
                                                            <p class="lecture-title">Setting up your metrics</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.4</p>
                                                            <p class="lecture-title">Setting up notifications</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 5.5</p>
                                                            <p class="lecture-title">Creating Alarms/ Events</p>
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
                                                    Chapter 6: Elastic Load Balancer (ELB)
                                                </button>
                                            </h2>
                                            <div id="collapse6" class="accordion-collapse collapse"
                                                aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 6.1</p>
                                                            <p class="lecture-title">Creating the ELB</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 6.2</p>
                                                            <p class="lecture-title">Health Checks</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 6.3</p>
                                                            <p class="lecture-title">Installing the SSL</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 6.4</p>
                                                            <p class="lecture-title">Load Balancing with EC2</p>
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
                                                    Chapter 7: Identity and Access Management (IAM)
                                                </button>
                                            </h2>
                                            <div id="collapse7" class="accordion-collapse collapse"
                                                aria-labelledby="heading7" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 7.1</p>
                                                            <p class="lecture-title">IAM Console and Sign in</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 7.2</p>
                                                            <p class="lecture-title">Identities ( User, Group, Roles)</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 7.3</p>
                                                            <p class="lecture-title">Security Credentials</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 7.4</p>
                                                            <p class="lecture-title">Permissions and policies</p>
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
                                                    Chapter 8: Relational Database Service (RDS)
                                                </button>
                                            </h2>
                                            <div id="collapse8" class="accordion-collapse collapse"
                                                aria-labelledby="heading8" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 8.1</p>
                                                            <p class="lecture-title">Selecting the Engine</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 8.2</p>
                                                            <p class="lecture-title">Configuring the Database Engine</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 8.3</p>
                                                            <p class="lecture-title">Creating your Database</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 8.4</p>
                                                            <p class="lecture-title">Setting up automatic backups</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 8.5</p>
                                                            <p class="lecture-title">Authorizing the access to the DB via DB Security Groups</p>
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
                                                    Chapter 9: Virtual Private Cloud (VPC)
                                                </button>
                                            </h2>
                                            <div id="collapse9" class="accordion-collapse collapse"
                                                aria-labelledby="heading9" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 9.1</p>
                                                            <p class="lecture-title">VPC Wizard Scenarios for Amazon VPC</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 9.2</p>
                                                            <p class="lecture-title">Your VPC and Subnets</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 9.3</p>
                                                            <p class="lecture-title">Your Default VPC and Subnets</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 9.4</p>
                                                            <p class="lecture-title">Security in Your VPC</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 9.5</p>
                                                            <p class="lecture-title">Networking in Your VPC</p>
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
                                                    Chapter 10: AWS Auto Scaling
                                                </button>
                                            </h2>
                                            <div id="collapse10" class="accordion-collapse collapse"
                                                aria-labelledby="heading10" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.1</p>
                                                            <p class="lecture-title">Get Set Up With Auto Scaling Interfaces</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.2</p>
                                                            <p class="lecture-title">Get Started with Auto Scaling Using the Console</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.3</p>
                                                            <p class="lecture-title">Maintain a Fixed Number of Running EC2 Instances</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.4</p>
                                                            <p class="lecture-title">Dynamic Scaling</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 10.5</p>
                                                            <p class="lecture-title">Scheduled Scaling</p>
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
                                                    Chapter 11: Amazon Cloud Front
                                                </button>
                                            </h2>
                                            <div id="collapse11" class="accordion-collapse collapse"
                                                aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 11.1</p>
                                                            <p class="lecture-title">How Cloud Front Delivers Content</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 11.2</p>
                                                            <p class="lecture-title">Locations and the IP Address Ranges of Cloud Front Edge Servers</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 11.3</p>
                                                            <p class="lecture-title">Working with Distributions</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 11.4</p>
                                                            <p class="lecture-title">Working with Objects</p>
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
                                                    Chapter 12: Simple Email Services
                                                </button>
                                            </h2>
                                            <div id="collapse12" class="accordion-collapse collapse"
                                                aria-labelledby="heading12" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 12.1</p>
                                                            <p class="lecture-title">Setting up Amazon SES</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 12.2</p>
                                                            <p class="lecture-title">Verifying Email Addresses and Domains</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 12.3</p>
                                                            <p class="lecture-title">Authorizing Amazon SES Sending From Your Domain</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 12.4</p>
                                                            <p class="lecture-title">Requesting Production Access</p>
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
                                                    Chapter 13: AWS Security Management
                                                </button>
                                            </h2>
                                            <div id="collapse13" class="accordion-collapse collapse"
                                                aria-labelledby="heading13" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 13.1</p>
                                                            <p class="lecture-title">Cloud Trail</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 13.2</p>
                                                            <p class="lecture-title">Trust advisor</p>
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
                                                    Chapter 14: Route 53
                                                </button>
                                            </h2>
                                            <div id="collapse14" class="accordion-collapse collapse"
                                                aria-labelledby="heading14" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 14.1</p>
                                                            <p class="lecture-title">Registering Domain Names</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 14.2</p>
                                                            <p class="lecture-title">Configuring Amazon Route 53 as Your DNS Service</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 14.3</p>
                                                            <p class="lecture-title">Working with Public/Private Hosted Zones</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 14.4</p>
                                                            <p class="lecture-title">Working with Resource Record Sets</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 14.5</p>
                                                            <p class="lecture-title">Using Traffic Flow to Route DNS Traffic</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 14.6</p>
                                                            <p class="lecture-title">Health Checks and DNS Failover</p>
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
                                                    Chapter 15: Cloud Formation
                                                </button>
                                            </h2>
                                            <div id="collapse15" class="accordion-collapse collapse"
                                                aria-labelledby="heading14" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 15.1</p>
                                                            <p class="lecture-title">stack</p>
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
                                                    Chapter 16: Others
                                                </button>
                                            </h2>
                                            <div id="collapse16" class="accordion-collapse collapse"
                                                aria-labelledby="heading16" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                <ul class="lecture-list">
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 16.1</p>
                                                            <p class="lecture-title">Simple Notification Service (SNS) Notifications</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 16.2</p>
                                                            <p class="lecture-title">Simple Queue Service (SQS) Queue</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 16.3</p>
                                                            <p class="lecture-title">Kinesis data streaming</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 16.4</p>
                                                            <p class="lecture-title">Dead letter Queues setup</p>
                                                        </li>
                                                        <li
                                                            class="d-flex flex-wrap justify-content-start align-items-center border-bottom3">
                                                            <p class="lecture-no">Chapter 16.5</p>
                                                            <p class="lecture-title">AWS Pricing & structure (scoping assistance)</p>
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