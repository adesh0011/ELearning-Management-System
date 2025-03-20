$(document).ready(function () {
  // AJAX call for checking already registered email
  $("#stuemail").on("keypress blur", function () {
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;  
    var stuemail = $("#stuemail").val().trim(); // Trim spaces
    
    // Check if the email format is valid before making an AJAX request
    if (!reg.test(stuemail)) {
      $("#statusMsg2").html('<small style="color:red;">Please enter a valid email (e.g. example@gmail.com)</small>');
      $("#signup").attr("disabled", true);
      return; // Stop further execution if email format is incorrect
    } else {
      $("#statusMsg2").html(""); // Clear message if valid email format
      $("#signup").attr("disabled", false);
    }

    // Proceed with AJAX only if the email is valid
    if (stuemail !== "") {
      $.ajax({
        url: "Student/addstudent.php",
        method: "POST",
        data: {
          checkemail: "checkmail",
          stuemail: stuemail,
        },
        success: function (data) {
          console.log(data);
          if (data.trim() != "0") {
            $("#statusMsg2").html('<small style="color:red;">Email ID Already Used!</small>');
            $("#signup").attr("disabled", true);
          } else {
            $("#statusMsg2").html('<small style="color:green;">Please Enter valid Email e.g. example@gmail.com</small>');
            $("#signup").attr("disabled", false);
          }
        },
        error: function () {
          console.log("Error in AJAX request");
        },
      });
    }
  });
});

  

// insert student



function addStu() {
var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;    
var stuname = $("#stuname").val();
var stuemail = $("#stuemail").val();
var stupass = $("#stupass").val();


// Checking form fields on form Submission
if(stuname.trim() == ""){
   $("#statusMsg1").html('<small style="color:red;">Please Enter Name !</small>');
   $("#stuname").focus();
   return false;
    
  } else if (stuemail.trim() == ""){
    $("#statusMsg2").html('<small style="color:red;">Please Enter Email !</small>');
    $("#stuemail").focus();
    return false;

  } else if (stuemail.trim() !="" && !reg.test(stuemail)){
    $("#statusMsg2").html('<small style="color:red;">Please Enter valid Email e.g. example@gmail.com</small>');
    $("#stuemail").focus();
    return false;

  } else if (stupass.trim() == ""){
    $("#statusMsg3").html('<small style="color:red;">Please Enter Password !</small>');
    $("#stupass").focus();
    return false;

   } else { 
    $.ajax({
        url:'Student/addstudent.php',
        method: 'POST',
        dataType: "json",
        data:{
         stusignup : "stusignup",
         stuname : stuname,
         stuemail : stuemail,
         stupass : stupass,
        },
        success:function(data){
         console.log(data);
         if(data == "OK"){
          $("#successMsg").html("<span class='alert alert-success'>Registration Successful !</span>");
          clearStuRegField();
        } else if(data == "Failed"){
         $("#successMsg").html("<span class='alert alert-success'>Unable to Register</span>");
        }
     
        },
     });
   }

 

}

// Empty All Fields
function clearStuRegField(){
   $("#stuRegForm").trigger("reset");
   $("#statusMsg1").html("");
   $("#statusMsg2").html("");
   $("#statusMsg3").html("");
}



// ajax call for student login verification
function checkStuLogin(){
  var stuLoginemail = $("#stuLoginemail").val();
  var stuLoginpass = $("#stuLoginpass").val();
  $.ajax({
    url: "Student/addstudent.php",
    method: "POST",
    data: {

      checkLoginemail: "checkLoginmail",
      stuLoginemail:stuLoginemail,
      stuLoginpass:stuLoginpass,
    },
    success:function(data){
      if(data == 0){
        $("#statusLogMsg").html(
          '<small class="alert alert-danger">Invalid Email ID or Password !</small>');

      } else if (data == 1) {
        $("#statusLogMsg").html(
          '<div class="spinner-border text-success" role="status"></div>'
        );
        setTimeout(()=>{
          window.location.href = "index.php";
      }, 1000);
          
      }
    },
  });
}