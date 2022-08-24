<!DOCTYPE html>
<html lang="en">

<head>
    <title>Penguin Technology | DevOps Training</title>
    <?php include "include/css-url.php"; ?>
</head>

<body>

    <?php include "include/header.php"; ?>

    <section class="small-banner pt-80  pb-80"
        style="background-image: linear-gradient(rgba(0, 0, 0, .8),rgba(0, 0, 0, .8)),url('images/bg/sm-banner.jpg');background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="smbanner-text d-flex justify-content-center align-items-center flex-column text-center">
                    <h2 class="sm-banner-title">DevOps Industrial Training</h2>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DevOps Industrial Training</li>
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
                                <!-- <div class="video-content" ng-if="tableObj.link">
                                    <div class="play-icon">
                                        <a href="{{tableObj.link}}" class="history" target="_blank"><i
                                                class="fas fa-play"></i></a>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                        <div class="tran_card">
                            <h3 class="course-detail-title mb-10">DevOps Industrial Training</h3>
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
                                                    LINUX INITIALIZATION:
                                                </button>
                                            </h2>
                                            <div id="collapse1" class="accordion-collapse collapse"
                                                aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>What is linux and why linux?, About software licencing, Linux Architecture, Setup Lab environment, Linux installation, Linux GUI & CLI, Linux networking and trublshooting, Linux Boot Process, Password Recovery, Secure GRUB, Basic and advanced command, vim editors, Introduction to Bash Shell and use</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading2">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                    aria-expanded="false" aria-controls="collapse2">
                                                    USER ADMINISTRATION:
                                                </button>
                                            </h2>
                                            <div id="collapse2" class="accordion-collapse collapse"
                                                aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Adding User Account, Adding Group, Modifying / Deleting User Accounts, Group Administration, Password Aging Policies, Switching Accounts, Sudo access, Linux Permissions on file and directory, Permission concept, SUID, SGID, Sticky Bit, Changing file ownership, Changing file group ownership, Access Control Lists (ACLs), Linux File system explain</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading3">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse3"
                                                    aria-expanded="false" aria-controls="collapse3">
                                                    PACKAGE MANAGEMENT:
                                                </button>
                                            </h2>
                                            <div id="collapse3" class="accordion-collapse collapse"
                                                aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>RPM Package Manager, Installing and Removing , queries,  verify, rpm help, YUM explain , Local and Remote repository, mount ISO media, yum command install, remove, list, info, package dependency, Pacakge upgrade and downgrade, </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading4">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse4"
                                                    aria-expanded="false" aria-controls="collapse4">
                                                    SYSTEM SERVICES:
                                                </button>
                                            </h2>
                                            <div id="collapse4" class="accordion-collapse collapse"
                                                aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Network Time Protocol, Virtual Network Computing(VNC) server, Services and Daemon, Windows to Linux remote access, Linux to Linux remote access, Linux to windows remote access, SSH(Secure Shell) server,allow deny system access for user, Passwordless SSH connection, Key based authentication,  transer file remotely, rsync, SCP, winscp, Explain Cron Jobs, Schedule tasks using Cron, DHCP Server implementation</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading5">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse5"
                                                    aria-expanded="false" aria-controls="collapse5">
                                                    DISK MANAGEMENT:
                                                </button>
                                            </h2>
                                            <div id="collapse5" class="accordion-collapse collapse"
                                                aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Partition concepts, Creating and managing partition, Filesystem types, command knowledge(fdisk, mkfs, df, mount, e2fsck, stat, lsblk), /etc/fstab file explain, Swap partition, Share Windows drive in Linux,  Logical Volume Manager(LVM),  NFS server, Inode, Softlink & Hardlink, RAID concept explain</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading6">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse6"
                                                    aria-expanded="false" aria-controls="collapse6">
                                                    LINUX FILE SERVER:
                                                </button>
                                            </h2>
                                            <div id="collapse6" class="accordion-collapse collapse"
                                                aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>File Server Concepts, Samba installation, Share Directory using Samba, Directory user wise, Common direcotry share, Access samba share from windows and Linux, Implement ACL permission in Samba, Samba Security, Install Webmin and Usermin tool, Manage Samba from web, Create Samba backup</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading7">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse7"
                                                    aria-expanded="false" aria-controls="collapse7">
                                                    WEBSERVER IMPLEMENTATION:
                                                </button>
                                            </h2>
                                            <div id="collapse7" class="accordion-collapse collapse"
                                                aria-labelledby="heading7" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>DNS Concepts, Installation and configuration of DNS Service, Live Understanding of Registrar and DNS Hosting Techniques, DNS Caching server, DNS Troublshooting, DNS Security, Explain about webserver and how it works, Live Webserver hosting technique, Install Apache HTTP server, Apache configuration understanding, Apache Name Base and IP base VirtualHosting, Apache Indexing, understanding of htaccess file,  SSL implementing, Apache Security and tuning</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading8">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse8"
                                                    aria-expanded="false" aria-controls="collapse8">
                                                    LAMP & DATABASE ADMINISTRATION:
                                                </button>
                                            </h2>
                                            <div id="collapse8" class="accordion-collapse collapse"
                                                aria-labelledby="heading8" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Database concepts, MariaDB installation, creating database, important database queries, Backup & restore operations, Phpmyadmin installation, How to use database using Phpmyadmin, securing Phpmyadmin, database security, LAMP(Linux, Apache, MariaDB, PHP) Installation, php.ini file understanding</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading9">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse9"
                                                    aria-expanded="false" aria-controls="collapse9">
                                                    PROXY SERVER IMPLEMENTATION:
                                                </button>
                                            </h2>
                                            <div id="collapse9" class="accordion-collapse collapse"
                                                aria-labelledby="heading9" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Squid Proxy server implementation based on industrial pattern, Install and configure proxy server, allow & deny webside netwok wise, URL rediection, proxy authentication, internet monitoring, implementation of Sarg tool, Use Linux as a router, Proxy as a caching server for fast internet surfing</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading10">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse10"
                                                    aria-expanded="false" aria-controls="collapse10">
                                                    MAIL SERVER IMPLEMENTATION:
                                                </button>
                                            </h2>
                                            <div id="collapse10" class="accordion-collapse collapse"
                                                aria-labelledby="heading10" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Mailing system Concept based on industrial implement, implementing postfix MTA, Sending email on local mailbox and on public domain, Understanding Emaiil Queue, Email Header, Email Forwarding, Alias, Transport rule, Posfix SMART Host authentication,  Implementing of Antivius in Postfix, Email server security understanding RBL/PBL, SPF, DKIM, DMARC</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading11">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse11"
                                                    aria-expanded="false" aria-controls="collapse11">
                                                    SHELL SCRIPT & BACKUP UTILITY:
                                                </button>
                                            </h2>
                                            <div id="collapse11" class="accordion-collapse collapse"
                                                aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Important command for shell script use (Awk, Sed, grep, wc, cut, paste, uniq, sort, diff, head, tail, less more, nc etc.), Input/Output redirectioin and regular expression, Shell script loop if, if else, for, while and nesteding loop, Archive, compress, unpack and uncompress files using tar, zip, gzip etc, Data backup using tar, zip and cron implementation</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading12">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse12"
                                                    aria-expanded="false" aria-controls="collapse12">
                                                    LINUX FIREWALL & SECURITY:
                                                </button>
                                            </h2>
                                            <div id="collapse12" class="accordion-collapse collapse"
                                                aria-labelledby="heading12" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Firewall Concepts, Implenting iptables firewall, Implementing firewalld, how to use firewall command, Securing Server using firewall, Securing port and services, Allowing denying network, Pfsense firewall implentation, Pfsense fiewall use as a gateway device in production environment</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading13">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse13"
                                                    aria-expanded="false" aria-controls="collapse13">
                                                    LINUX VIRTULIZATION:
                                                </button>
                                            </h2>
                                            <div id="collapse13" class="accordion-collapse collapse"
                                                aria-labelledby="heading13" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Datacenter Implementation and Virtulization Concept, Installing and configuration of KVM virtulization, Create Virtual Maching, Adding Disk in Virtual Mahine, Backup and restore, Implementing of Vmware Vsphare</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading14">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse14"
                                                    aria-expanded="false" aria-controls="collapse14">
                                                    EXAM & INTERVIEW PREPRATION:
                                                </button>
                                            </h2>
                                            <div id="collapse14" class="accordion-collapse collapse"
                                                aria-labelledby="heading14" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Course rivision, test after finishing course, Extra class for Interview preapration, Resume Preapration, Help in Placement.</p>
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
                                    <td>:&nbsp;&nbsp;25+</td>
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