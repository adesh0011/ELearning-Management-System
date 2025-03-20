<?php
  include ('./dbConnection.php');
  include ('./mainInclude/header.php');
 ?>
  <!-- end header include -->

  <!-- Start Course Page Banner -->
  <div class="container-fluid bg-dark">
      <div class="row">
        <img src="./image/coursebanner.jpg" alt="courses" style="height:500px; 
        width:100%; object-fit:cover; box-shadow:10px;"/>
      </div> 
    </div> <!-- End Course Page Banner -->

      <!-- Start All Course -->

      <div class="container mt-5"> 
    <h1 class="text-center">All Courses</h1>

    <!-- Start All Course Row -->
     
    <div class="row mt-4">  
        <?php

        $sql = "SELECT * FROM course";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) { 
            while ($row = $result->fetch_assoc()) {
                $course_id = $row['course_id'];
                $course_img = str_replace('..', '.', $row['course_img']);
        ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 d-flex align-items-stretch"> 
                    <a href="coursedetail.php?course_id=<?php echo $course_id; ?>" 
                    class="text-decoration-none"> <!-- Full Card Clickable -->
                        <div class="card h-100 shadow-sm"> <!-- Ensuring equal height -->
                            <img src="<?php echo $course_img; ?>" class="card-img-top" 
                            alt="Course Image" style="height: 150px; object-fit: cover;"> <!-- Resized Image -->
                            <div class="card-body d-flex flex-column text-center"> <!-- Flexible Card Body -->
                                <h6 class="card-title"><?php echo $row['course_name']; ?></h6> 
                                <p class="card-text small flex-grow-1">
                                    <?php echo substr($row['course_desc'], 0, 50); ?>...
                                </p> 
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center p-2">
                                <p class="card-text mb-0">
                                    <small><del>&#8377 <?php echo $row['course_original_price']; ?></del></small>
                                    <span class="font-weight-bolder text-success">
                                        &#8377 <?php echo $row['course_price']; ?>
                                    </span>
                                </p>
                                <span class="btn btn-sm btn-primary text-white">Enroll</span>
                                 <!-- Prevents nested anchor tags -->
                            </div>
                        </div>
                    </a>
                </div>
        <?php 
            }
        } else {
            echo "<p class='text-center text-danger'>No courses available.</p>";
        }
        ?>
    </div> <!-- End All Course Row -->
</div> <!-- End Container -->

  <!--Start Contact Us-->

  <?php 
   include ('./contact.php');
  ?>
       
     <!-- End Contact Us -->


 
  <!-- start footer include -->
  <?php
    include('./mainInclude/footer.php');
    ?>
 <!-- end footer include -->