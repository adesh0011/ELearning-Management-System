<?php
if(!isset($_SESSION)){ 
  session_start(); 
}
define('TITLE', 'Feedback');
define('PAGE', 'feedback');
include('./adminInclude/header.php'); 
include('../dbConnection.php');

 if(isset($_SESSION['is_admin_login'])){
  $adminEmail = $_SESSION['adminLoginemail'];
 } else {
  echo "<script> location.href='../index.php'; </script>";
 }
?>
   <div class="col-sm-9 mt-5 mb-5"> <!-- Added mb-5 for spacing -->
    <!--Table-->
    <p class="bg-dark text-white p-2 mt-4">List of Feedbacks</p> <!-- Added mt-4 -->
    <?php
      $sql = "SELECT * FROM feedback";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
       echo '<table class="table mt-3"> <!-- Added mt-3 for spacing -->
       <thead>
        <tr>
         <th scope="col">Feedback ID</th>
         <th scope="col">Content</th>
         <th scope="col">Student ID</th>
         <th scope="col">Action</th>
        </tr>
       </thead>
       <tbody>';
        while($row = $result->fetch_assoc()){
          echo '<tr>';
          echo '<th scope="row">'.$row["f_id"].'</th>';
          echo '<td>'. $row["f_content"].'</td>';
          echo '<td>'.$row["stu_id"].'</td>';
          echo '<td>
                  <form action="" method="POST" class="d-inline">
                    <input type="hidden" name="id" value='. $row["f_id"] .'>
                    <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                      <i class="far fa-trash-alt"></i>
                    </button>
                  </form>
                </td>
         </tr>';
        }

        echo '</tbody>
        </table>';
      } else {
        echo "<p class='mt-3'>0 Result</p>"; // Added mt-3 for spacing
      }
      if(isset($_REQUEST['delete'])){
       $sql = "DELETE FROM feedback WHERE f_id = {$_REQUEST['id']}";
       if($conn->query($sql) === TRUE){
         echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
         } else {
           echo "Unable to Delete Data";
         }
      }
     ?>
</div>

<?php
include('./adminInclude/footer.php'); 
?>