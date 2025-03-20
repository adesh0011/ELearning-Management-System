// ajax call for admin login verification
function checkAdminLogin(){
    var  adminLoginemail = $("#adminLoginemail").val();
    var  adminLoginpass = $("#adminLoginpass").val();
    $.ajax({
      url: "Admin/admin.php",
      method: "POST",
      data: {
  
        checkLoginemail: "checkLoginmail",
         adminLoginemail: adminLoginemail,
         adminLoginpass: adminLoginpass,
      },
      success:function(data){
        if(data == 0){
          $("#statusAdminLogMsg").html(
            '<small class="alert alert-danger">Invalid Email ID or Password !</small>');
  
        } else if (data == 1) {
          $("#statusAdminLogMsg").html(
             '<small class="alert alert-success">Success Loading...</small>'
          );
          setTimeout(()=>{
            window.location.href = "Admin/adminDashboard.php";
        }, 1000);
            
        }
      },
    });
  }