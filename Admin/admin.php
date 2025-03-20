<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbConnection.php');

// admin login verification
if(!isset($_SESSION['is_admin_login'])){
   if(isset($_POST['checkLoginemail']) && isset($_POST['adminLoginemail']) 
    && isset($_POST['adminLoginpass'])){
    $adminLoginemail = $_POST['adminLoginemail'];
    $adminLoginpass = $_POST['adminLoginpass'];

    $sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email =
    '".$adminLoginemail."' AND admin_pass='".$adminLoginpass."'";

    $result = $conn->query($sql);

    $row = $result->num_rows;
    if($row === 1){
        $_SESSION['is_admin_login'] = true;
        $_SESSION['adminLoginemail'] = $adminLoginemail;
        echo json_encode($row);
        
    } else if($row === 0){
        echo json_encode($row);
      }
     } 
    }
?>