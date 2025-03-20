 <?php
  include ('./dbConnection.php');
  include ('./mainInclude/header.php');
  ?>
 <!-- end header include -->
  
   <!-- Start Video Background-->
   <div class="container-fluid remove-vid-marg">
      <div class="vid-parent">
        <video playsinline autoplay muted loop>
          <source src="video/banvd.mp4">
        </video>
        <div class="vid-overlay"></div>
      </div>
      <div class="vid-content" >
        <h1 class="my-content">Welcome to iSchool</h1>
        <small class="my-content">Learn and Implement</small> <br>


        <?php
        if(isset($_SESSION['is_login'])){
          echo  '<a href="Student/studentProfile.php" class="btn btn-primary mt-3">My Profile</a>';
        } else {
          echo '<a href="#" class="btn btn-danger mt-3" data-bs-toggle="modal"
          data-bs-target="#stuRegModalCenter">Get Started</a>';
        }
      ?>
         
</div>  
</div>  
 <!-- Start Video Background-->

  <!-- Start Text Banner -->

 <div class="container-fluid bg-danger txt-banner">  
        <div class="row bottom-banner">
          <div class="col-sm">
            <h5> <i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
          </div>
          <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
          </div>
        </div>
    </div> <!-- End Text Banner -->


     <!-- Start Most Popular Course -->
     <div class="container-fluid mt-5">
    <h1 class="text-center">Popular Courses</h1>
    <!-- Start Most Popular Course 1st card deck -->

    <?php

    // Fetch all courses and split them dynamically into rows of 3
    $sql = "SELECT * FROM course";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $counter = 0;
        echo '<div class="row mt-4 justify-content-center">'; // Start first row

        while ($row = $result->fetch_assoc()) {
            $course_id = $row['course_id'];
            $course_img = str_replace('..', '.', $row['course_img']);

            // Open a new row every 3 cards
            if ($counter > 0 && $counter % 3 == 0) {
                echo '</div><div class="row mt-4 justify-content-center">';
            }
    ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 d-flex align-items-stretch"> 
                <a href="coursedetail.php?course_id=<?php echo $course_id; ?>" 
                class="text-decoration-none"> <!-- Make the whole card clickable -->
                    <div class="card h-100 shadow-sm" style="max-width: 18rem;"> 
                        <img src="<?php echo $course_img; ?>" class="card-img-top" 
                        alt="Course Image" style="height: 150px; object-fit: cover;"/> 
                        <div class="card-body p-2 text-center d-flex flex-column">
                            <h6 class="card-title"><?php echo $row['course_name']; ?></h6> 
                            <p class="card-text small flex-grow-1"><?php echo 
                            substr($row['course_desc'], 0, 50); ?>...</p> 
                        </div>
                        <div class="card-footer p-2 d-flex justify-content-between align-items-center">
                            <p class="card-text mb-0">
                                <small><del>&#8377 <?php echo $row['course_original_price']; ?></del></small>
                                <span class="font-weight-bolder text-success">&#8377 <?php echo 
                                $row['course_price']; ?></span>
                            </p>
                            <span class="btn btn-sm btn-primary text-white">Enroll</span>
                        </div>
                    </div>
                </a>
            </div>
    <?php 
            $counter++;
        }
        echo '</div>'; // Close last row
    } else {
        echo "<p class='text-center text-danger'>No courses available.</p>";
    }
    ?>
</div> <!-- End Container -->

 
        <!-- End Most Popular Course 2nd card deck -->

        <div class="text-center m-2">
          <a class="btn btn-danger btn-sm" href="courses.php">View All Courses</a>
        </div>
      </div>

      
      <!-- End Most Popular Course  -->


      <!--Start Contact Us-->

      <?php 
      include ('./contact.php');
      ?>
       
     <!-- End Contact Us -->


      <!-- Start Students Testimonial -->
       
      <div class="container-fluid mt-5" style="background-color: #4B7289" id="Feedback">
    <h1 class="text-center testyheading p-4">Student's Feedback</h1>
    <div class="row justify-content-center"> <!-- Center align -->
        <?php 
        $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM 
        student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $s_img = $row['stu_img'];
                $n_img = str_replace('..', '.', $s_img);
        ?>
            <div class="col-md-4 col-sm-6 mb-4"> <!-- 3 cards per row -->
                <div class="testimonial card p-3 shadow">
                    <p class="description"><?php echo $row['f_content']; ?></p>
                    <div class="pic text-center">
                        <img src="<?php echo $n_img ?>" class="rounded-circle" 
                        width="50" height="50" alt="Student Image"/>
                    </div>
                    <div class="testimonial-prof text-center mt-3">
                        <h4><?php echo $row['stu_name'] ?></h4>
                        <small><?php echo $row['stu_occ'] ?></small>
                    </div>
                </div>
            </div>
        <?php 
            }
        }
        ?>
    </div> <!-- End Row -->
</div> <!-- End Container -->

    <!-- End Students Testimonial -->

    <!-- Start Social Follow -->
    <div class="container-fluid bg-danger">
        <div class="row text-white text-center p-1">
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> WhatsApp</a>
          </div>
          <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
          </div>
        </div>
    </div> 
    <!-- End Social Follow -->

     <!-- Start About Section -->

     <div class="container-fluid p-4" style="background-color:#E9ECEF">
      <div class="container" style="background-color:#E9ECEF">
        <div class="row text-center">
          <div class="col-sm">
            <h5>About Us</h5>
              <p>iSchool provides universal access to 
              the world’s best education, partnering with top universities and organizations to offer 
              courses online.</p>
          </div>
          <div class="col-sm">
            <h5>Category</h5>
            <a class="text-dark" href="#">Web Development</a><br />
            <a class="text-dark" href="#">Web Designing</a><br />
            <a class="text-dark" href="#">Android App Dev</a><br />
            <a class="text-dark" href="#">iOS Development</a><br />
            <a class="text-dark" href="#">Data Analysis</a><br />
          </div>
          <div class="col-sm">
            <h5>Contact Us</h5>
            <p>iSchool Pvt Ltd <br> Near Police Camp II <br> Bokaro, Jharkhand <br> Ph. 000000000 </p>
          </div>
        </div>
      </div>
    </div>
    <!-- End About Section -->
    

    <!-- start footer include -->
    <?php
    include('./mainInclude/footer.php');
    ?>
     <!-- end footer include -->