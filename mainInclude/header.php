<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,
 initial-scale=1.0">

 <!-- bootstrap CSS-->
 <link rel="stylesheet" href="css/bootstrap.min.css">

 <!-- font awesome CSS-->

 <link rel="stylesheet" href="css/all.min.css">

 
 <!-- Google Font -->
 <link href="https://fonts.googleapis.com/css2?
 family=Ubuntu:weight@700&display=swap" rel="stylesheet">

  <!-- Students Testimonial owl CSS -->


 <link rel="stylesheet" type="text/css" src="css/owl.carousel.min.css">
 <link rel="stylesheet" type="text/css" src="css/owl.theme.default.min.css">
 <link rel="stylesheet" type="text/css" src="css/testyslider.css">

   
 <!-- Custom Style CSS -->

 <link rel="stylesheet" href="css/style.css">


 <title>iSchool</title>
</head>
<body>

     <!-- Start Nagigation -->
     <nav class="navbar navbar-expand-sm navbar-dark fixed-top px-5">
    <a class="navbar-brand mr-3" href="index.php">iSchool</a>
    <span class="navbar-text px-3">Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link pl-3">Home</a></li>
            <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link pl-3">Courses</a></li>
            <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link pl-3">Payment Status</a>
            </li>
            <?php
             session_start();
             if(isset($_SESSION['is_login'])){
             echo '<li class="nav-item custom-nav-item"><a href="Student/studentProfile.php" 
             class="nav-link pl-3">My Profile</a></li>
             <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link pl-3">Logout</a></li>';

            } else {
            echo  '<li class="nav-item custom-nav-item"><a href="#login" class="nav-link pl-3" data-bs-toggle="modal"
            data-bs-target="#stuLoginModalCenter">Login</a></li>
            <li class="nav-item custom-nav-item"><a href="#signup" class="nav-link pl-3" data-bs-toggle="modal"
            data-bs-target="#stuRegModalCenter">Signup</a></li>';
            }
            ?>
           
            <li class="nav-item custom-nav-item"><a href="#Feedback" class="nav-link pl-3">Feedback</a></li>
            <li class="nav-item custom-nav-item"><a href="#Contact" class="nav-link pl-3">Contact</a></li>
        </ul>
    </div>
</nav>

 <!-- End Navigation -->
