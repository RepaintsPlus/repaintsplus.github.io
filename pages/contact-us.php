<!--
=========================================================
* Material Kit 2 - v3.0.0
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!-- <?php 
if(isset($_POST['submit'])){
  $to = "repaintsplus@outlook.com"; // this is your Email address
  $from = $_POST['email']; // this is the sender's Email address
  $first_name = $_POST['first_name'];
  $subject = "Form submission";
  $subject2 = "Copy of your form submission";
  $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
  $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

  $headers = "From:" . $from;
  $headers2 = "From:" . $to;
  mail($to,$subject,$message,$headers);
  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
  echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";}
?> -->


<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="180x180" href="../Favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../Favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../Favicon/favicon-16x16.png">
<link rel="manifest" href="../Favicon/site.webmanifest">
<link rel="mask-icon" href="../Favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<title>
  RepaintsPlus - Contact Us
</title>
  <!--     Fonts and icons     -->
  <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /> -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<!-- Nucleo Icons -->
<link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<!-- CSS Files -->
<link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="contact-us">
<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
<div class="row">
  <div class="col-12">
    <nav class="navbar navbar-expand-lg  blur border-radius-xl mt-4 top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
      <div class="container-fluid px-0">
        <a class="navbar-brand font-weight-bolder ms-sm-3" href="../index.html" rel="tooltip" title="RepaintsPlus - Home" data-placement="bottom" target="_blank">
          RepaintsPlus
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon mt-2">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </span>
        </button>
        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
          <ul class="navbar-nav navbar-nav-hover ms-auto">
            <li class="nav-item dropdown dropdown-hover mx-2">
              <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                About Us
                <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
              </a>
              <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                <div class="d-none d-lg-block">
      <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
        The Company
      </h6>
      <a href="../pages/about-us.html" class="dropdown-item border-radius-md">
        <span>About Us</span>
      </a>
      <a href="../pages/author.html" class="dropdown-item border-radius-md">
        <span>Our Team</span>
      </a>
      <a href="../pages/contact-us.php" class="dropdown-item border-radius-md">
        <span>Contact Us</span>
      </a>
      <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
        Account
      </h6>
      <a href="../pages/sign-in.html" class="dropdown-item border-radius-md">
        <span>Sign In</span>
      </a>
    </div>
    
    <div class="d-lg-none">
      <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
        The Company
      </h6>
    
      <a href="../pages/about-us.html" class="dropdown-item border-radius-md">
        <span>About Us</span>
      </a>
      <a href="../pages/author.html" class="dropdown-item border-radius-md">
        <span>Our Team</span>
      </a>
      <a href="../pages/contact-us.html" class="dropdown-item border-radius-md">
        <span>Contact Us</span>
      </a>
    
      <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
        Account
      </h6>
      <a href="../pages/sign-in.html" class="dropdown-item border-radius-md">
        <span>Sign In</span>
      </a>
    
    </div>
    
              </div>
            </li>
    
            <li class="nav-item dropdown dropdown-hover mx-2">
              <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                Our Products
                <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
                <div class="d-none d-lg-block">
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="../presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Repaints</h6>
              <span class="text-sm">View All ></span>
            </div>
            <img src="../assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="../Repaints/xplane.html">
              X-Plane 11
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="../Repaints/p3d.html">
              Prepar3d
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="../Repaints/msfs.html">
              MSFS 2020
            </a>
          </div>
        </li>
    
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="../presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Sceneries</h6>
              <span class="text-sm">View All ></span>
            </div>
            <img src="../assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="../scenery/freeware.html">
            Freeware
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="../scenery/payware.html">
            Payware
          </a>
        </div>
      </li>
    
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="../presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Prepar3D v4.4+ </h6>
              <span class="text-sm">View All ></span>
            </div>
            <img src="../assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="../p3dv4>/gsx.html">
            GSX Presets
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="../p3dv4>/updates.hmtl">
            Scenery Updates
          </a>
        </div>
      </li>
    
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="../presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">X-Plane 11</h6>
              <span class="text-sm">View All ></span>
            </div>
            <img src="../assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="../xplane/GHD.html">
            GHD Presets
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="../xplane/updates.html">
            Scenery Updates
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="../xplane/BetterPush.html">
            Better Pushback Liveries
          </a>
        </div>
      </li>
    
      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="../presentation.html">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Microsoft Flight Simulator</h6>
              <span class="text-sm">View All ></span>
            </div>
            <img src="../assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
          </div>
        </a>
        <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="../msfs/additions.html">
            Cockpit Additions
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="../msfs/bushtrips.html">
            Bush Trips
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="../msfs/plugins.html">
            Plugins
          </a>
        </div>
      </li>
    </div>
    
    <div class="row d-lg-none">
      <div class="col-md-12">
        <div class="d-flex mb-2">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/page-sections/hero-sections.html">
          Page Headers
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/page-sections/features.html">
          Features
        </a>
    
        <div class="d-flex mb-2 mt-3">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-laptop text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Navigation</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/navigation/navbars.html">
          Navbars
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/navigation/nav-tabs.html">
          Nav Tabs
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/navigation/pagination.html">
          Pagination
        </a>
    
    
        <div class="d-flex mb-2 mt-3">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-badge text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Input Areas</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/input-areas/inputs.html">
          Inputs
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/input-areas/forms.html">
          Forms
        </a>
    
    
        <div class="d-flex mb-2 mt-3">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-notification-70 text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Attention Catchers</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/attention-catchers/alerts.html">
          Alerts
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/attention-catchers/modals.html">
          Modals
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/attention-catchers/tooltips-popovers.html">
          Tooltips & Popovers
        </a>
    
    
        <div class="d-flex mb-2 mt-3">
          <div class="icon h-10 me-3 d-flex mt-1">
            <i class="ni ni-app text-gradient text-primary"></i>
          </div>
          <div class="w-100 d-flex align-items-center justify-content-between">
            <div>
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Elements</h6>
            </div>
          </div>
        </div>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/avatars.html">
          Avatars
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/badges.html">
          Badges
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/breadcrumbs.html">
          Breadcrumbs
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/buttons.html">
          Buttons
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/dropdowns.html">
          Dropdowns
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/progress-bars.html">
          Progress Bars
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/toggles.html">
          Toggles
        </a>
        <a class="dropdown-item ps-3 border-radius-md mb-1" href="../sections/elements/typography.html">
          Typography
        </a>
      </div>
    </div>
    
              </ul>
            </li>
    
            <li class="nav-item dropdown dropdown-hover mx-2">
              <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="material-icons opacity-6 me-2 text-md">article</i>
                Connect
                <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                <div class="d-none d-lg-block">
      <ul class="list-group">
        <li class="nav-item list-group-item border-0 p-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="https://discord.gg/zWpwVcUVRk">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Discord</h6>
          </a>
        </li>
        <li class="nav-item list-group-item border-0 p-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.youtube.com/channel/UC-bMI37R1P3FuqWJV6x4xBA">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">YouTube</h6>
          </a>
        </li>
        <li class="nav-item list-group-item border-0 p-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="https://www.instagram.com/repaintsplus/">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Instagram</h6>
          </a>
        </li>
        <li class="nav-item list-group-item border-0 p-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit ">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Forums</h6>
          </a>
        </li>
      </ul>
    </div>
    
    <div class="row d-lg-none">
      <div class="col-md-12 g-0">
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="../pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
          <span class="text-sm">All about overview, quick start, license and contents</span>
        </a>
    
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="../pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
          <span class="text-sm">See our colors, icons and typography</span>
        </a>
    
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="../pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
          <span class="text-sm">Explore our collection of fully designed components</span>
        </a>
    
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="../pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
          <span class="text-sm">Check how you can integrate our plugins</span>
        </a>
    
        <a class="dropdown-item py-2 ps-3 border-radius-md" href="../pages/about-us.html">
          <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
          <span class="text-sm">For those who want flexibility, use our utility classes</span>
        </a>
      </div>
    </div>
              </ul>
            </li>
            <li class="nav-item my-auto ms-3 ms-lg-0">
              <a href="../pages/sign-in.html" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Sign In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
  </div>
</div>
</div>


<!-- -------- START HEADER 8 w/ card over right bg image ------- -->
<section>
  <div class="page-header min-vh-100">
    <div class="container">
      <div class="row">
        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
          <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/nzair787.png'); background-size: cover;" loading="lazy"></div>
        </div>
        <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
          <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
                <h3 class="text-white text-primary mb-0">Contact Us</h3>
              </div>
            </div>
            <div class="card-body">
              <p class="pb-3">
                Tickets submitted through this system are aimed to be answered within 48 hours of initial sending, but can be up to 96 hours.
              </p>
              <form id="contact-form" method="post" autocomplete="off" action="./contact-us.php">
                <div class="card-body p-0 my-3">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-static mb-4">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Full Name" name="first_name"><br>
                      </div>
                    </div>
                    <div class="col-md-6 ps-md-2">
                      <div class="input-group input-group-static mb-4">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Your Email Address" name="email"><br>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-0 mt-md-0 mt-4">
                    <div class="input-group input-group-static mb-4">
                      <label>How can we help you?</label>
                      <br><textarea name="message" class="form-control" id="message" rows="6" placeholder="Describe your enquiry with detail."></textarea><br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <button type="submit" name="submit" value="Submit" class="btn bg-gradient-primary mt-3 mb-0">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- -------- END HEADER 8 w/ card over right bg image ------- -->
<footer class="footer pt-5 mt-5">
  <div class="container">
    <div class=" row">
      <div class="col-md-3 mb-4 ms-auto">
        <div>
          <a href="https://www.creative-tim.com/product/material-kit">
            <img src="https://lh3.googleusercontent.com/ogw/ADea4I5Fhj57Bfv-BP-BjEUbU-CGC8FA2EkEDMbsegbt=s256-c-mo" class="mb-3 footer-logo" alt="main_logo">
          </a>
          <h6 class="font-weight-bolder mb-4">Repaints+</h6>
        </div>
        <div>
          <ul class="d-flex flex-row ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link pe-1" href="https://www.instagram.com/repaintsplus/" target="_blank">
                <i class="fab fa-instagram text-lg opacity-8"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pe-1" href="https://discord.gg/zWpwVcUVRk" target="_blank">
                <i class="fab fa-discord text-lg opacity-8"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pe-1" href="https://github.com/repaintsplus" target="_blank">
                <i class="fab fa-github text-lg opacity-8"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pe-1" href="https://www.youtube.com/channel/UC-bMI37R1P3FuqWJV6x4xBA" target="_blank">
                <i class="fab fa-youtube text-lg opacity-8"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-2 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Company</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="./about-us.html" target="_blank">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../scenery/author.html" target="_blank">
                Who are We?
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./partners.html" target="_blank">
                Partnerships
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-2 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Simulator Help</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="https://forums.x-plane.org" target="_blank">
                X-Plane Forums
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://forums.flightsimulator.com/" target="_blank">
                MSFS Forums
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.prepar3d.com/forum/" target="_blank">
                Prepar3D Forums
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-2 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Help & Support</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="./contact-us.html" target="_blank">
                Contact Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./faq.html" target="_blank">
                Frequently Asked Questions
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer" target="_blank">
                Custom Development
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
        <div>
          <h6 class="text-sm">Legal</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="../pages/tos.html" target="_blank">
                Terms & Conditions
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/privacypolicy.html" target="_blank">
                Privacy Policy
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-12">
        <div class="text-center">
          <p class="text-dark my-4 text-sm font-weight-normal">
            All rights reserved. Copyright © <script>
              document.write(new Date().getFullYear())
            </script> RepaintsPlus.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="../assets/js/plugins/parallax.min.js"></script>
<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh3rbjGTe2IFnVwdmiWDDgo6G_lJYYdcI"></script>
<script src="../assets/js/material-kit.min.js?v=3.0.0" type="text/javascript"></script>
</body>

</html>