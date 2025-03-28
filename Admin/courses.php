<?php
  if(!isset($_SESSION)){
      session_start();
  }
   include('./admininclude/header.php');
   include('../dbConnection.php');

   if(isset($_SESSION['is_admin_login'])){
     $adminLoginemail = $_SESSION['adminLoginemail'];
   } else {
    echo "<script> location.href='../index.php'; </script>";
   }

?>


<div class="col-sm-9 mt-5 mb-5"> <!-- Added mb-5 for more space -->
    <!-- table-->
    <p class="bg-dark text-white p-2 mt-4">List of Courses</p> <!-- Added mt-4 -->
    <?php
     $sql = "SELECT * FROM course";
     $result = $conn->query($sql);
     if($result->num_rows > 0){
    ?>

    <table class="table mt-3"> <!-- Added mt-3 -->
        <thead>
            <tr>
                <th scope="col">Course ID</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php while($row = $result->fetch_assoc()){
            echo '<tr>';
               echo '<th scope="row">'.$row['course_id'].'</th>';
               echo '<td>'.$row['course_name'].'</td>';
                echo '<td>'.$row['course_author'].'</td>';
                echo'<td>';
                  echo  '
                    <form action="editcourse.php" method="POST" class="d-inline">
                    <input type="hidden" name="id" value='.$row["course_id"].'>
                    <button
                        type="submit"
                        class="btn btn-info mr-3"
                        name="view"
                        value="View"
                        >
                        <i class="fas fa-pen"></i>
                    </button>
                    </form>

                    <form action="" method="POST" class="d-inline">
                     <input type="hidden" name="id" value='.$row["course_id"].'>
                    <button
                    type="submit"
                    class="btn btn-secondary"
                    name="delete"
                    value="Delete"
                    >
                    <i class="far fa-trash-alt"></i>
                    </button>
                  </form>
                </td>
            </tr>';
            } ?>
        </tbody>
    </table>
    <?php } else {
        echo "<p class='mt-3'>0 Result</p>";  // Added mt-3 to push text down
     } 
     
     if(isset($_REQUEST['delete'])){
        $sql = "DELETE FROM course WHERE course_id = {$_REQUEST['id']}";
        if($conn->query($sql) == TRUE){
            echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
        } else {
            echo "Unable to Delete Data";
        }
     }
     ?>
</div>

<!-- Space before add button -->
<div class="mt-5">
    <a class="btn btn-danger box" href="./addCourse.php">
        <i class="fas fa-plus fa-2x"></i>
    </a>
</div>

<!-- div container-fluid close from header-->



<?php
   include('./admininclude/footer.php');
?>