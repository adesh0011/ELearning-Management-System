<?php 
include('./dbConnection.php');
session_start();
 if(!isset($_SESSION['stuLoginemail'])) {
  echo "<script> location.href='loginorsignup.php'; </script>";
 } else {
  header("Pragma: no-cache");
  header("Cache-Control: no-cache");
  header("Expires: 0"); 
  $stuLoginemail = $_SESSION['stuLoginemail'];
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
   <meta charset="UTF-8">
   <meta name="GENERATOR" content="Evrsoft First Page">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <title>Checkout</title>
    <style>
        body {
            background-color: #e3f2fd; /* Light Blue Background */
        }
        .jumbotron {
            background-color: #ffffff; /* White Background for Form */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 1.5rem; /* Increased Spacing Between Fields */
        }
        .btn-container {
            margin-top: 20px; /* Increased space between buttons and fields */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 jumbotron">
            <h3 class="mb-4 text-center">Welcome to E-Learning Payment Page</h3>
            <form method="post" action="./PaytmKit/pgRedirect.php">
                <div class="form-group row">
                    <label for="ORDER_ID" class="col-sm-4 col-form-label">Order ID</label>
                    <div class="col-sm-8">
                        <input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20" name="ORDER_ID" 
                        autocomplete="off" value="<?php echo 'ORDS' . rand(10000,99999999); ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label>
                    <div class="col-sm-8">
                        <input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12" name="CUST_ID" 
                        autocomplete="off" value="<?php if(isset($stuLoginemail)){echo $stuLoginemail; }?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
                    <div class="col-sm-8">
                        <input title="TXN_AMOUNT" class="form-control" tabindex="10"
                        type="text" name="TXN_AMOUNT" value="<?php if(isset($_POST['id']))
                        {echo $_POST['id']; }?>" readonly>
                    </div>
                </div>

                <input type="hidden" id="INDUSTRY_TYPE_ID" name="INDUSTRY_TYPE_ID" value="Retail" readonly>
                <input type="hidden" id="CHANNEL_ID" name="CHANNEL_ID" value="WEB" readonly>

                <div class="text-center btn-container">
                    <input value="Checkout" type="submit" class="btn btn-primary px-4">
                    <a href="./courses.php" class="btn btn-secondary px-4">Cancel</a>
                </div>
            </form>
            <small class="form-text text-muted text-center mt-3">
                Note: Complete Payment by Clicking Checkout Button
            </small>
        </div>
    </div>
</div>

</body>
</html>


    <!-- Jquery and Boostrap JavaScript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <script type="text/javascript" src="js/all.min.js"></script>

    <!-- Custom JavaScript -->
    <script type="text/javascript" src="js/custom.js"></script>

  </body>
  </html>
 <?php } ?>