<!-- start header include -->

<?php
  include ('./dbConnection.php');
  include ('./mainInclude/header.php');
 ?>
  <!-- end header include -->

 <!-- Start Course Page Banner -->

 <div class="container-fluid bg-dark">  
      <div class="row">
        <img src="./image/coursebanner.jpg" alt="courses" 
        style="height:500px; width:100%; object-fit:cover; box-shadow:10px;"/>
      </div> 
    </div>
    <!-- End Course Page Banner -->

    <!-- Start Main Content -->

    <div class="container mt-5">
        <?php
          if(isset($_GET['course_id'])){
          $course_id = $_GET['course_id'];
          $_SESSION['course_id'] = $course_id;
          $sql = "SELECT * FROM course WHERE course_id = '$course_id'";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          }
          ?>

    <div class="row align-items-center">  <!-- Align items vertically -->
        <!-- Image Section -->
        <div class="col-md-4">
            <img src="<?php echo str_replace('..', '.', $row['course_img'])?>" class="img-fluid" alt="Python"/>
        </div>

        <!-- Course Details -->
        <div class="col-md-8">
            <h5 class="card-title">Course Name: <?php echo $row['course_name'] ?></h5>
            <p class="card-text"><strong>Description:</strong> <?php echo $row['course_desc'] ?></p>
            <p class="card-text"><strong>Duration:</strong><?php echo $row['course_duration'] ?></p>
            <form action="checkout.php" method="post">
                <p class="card-text">
                    <strong>Price:</strong> 
                    <small><del>&#8377; <?php echo $row['course_original_price'] ?></del></small>
                    <span class="font-weight-bolder text-danger">&#8377; <?php echo $row['course_price'] ?></span>
                </p>
                <input type="hidden" name="id" value="<?php echo $row['course_price'] ?>">
                <button type="submit" class="btn btn-primary text-white font-weight-bolder" 
                name="buy">Buy Now</button>
            </form>
        </div>
    </div>
</div>

<!-- Table Section -->
<div class="container mt-4">
    <div class="row">
     <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Lesson No.</th>
                        <th scope="col">Lesson Name</th>
                    </tr>
                </thead>
                <tbody>

        <?php 
        $sql = "SELECT * FROM lesson";
        $result = $conn->query($sql);
        if($result->num_rows > 0 ){
            $num = 0;
            while($row = $result->fetch_assoc()){
                if($course_id == $row['course_id']){
                    $num++;
              echo  '<tr>
                <th scope="row">' .$num.'</</th>
                <td>' .$row['lesson_name'].'</td>
            </tr>';
            }
        }
    }
        ?>
                </tbody>
            </table>';
        </div>
    </div>
 



  <!-- End Main Content -->


<!-- start footer include -->
<?php
include('./mainInclude/footer.php');
?>
<!-- end footer include -->