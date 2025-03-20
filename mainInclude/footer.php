 <!-- Start Footer -->
 <footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2019 || Designed By E-Learning
    || <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter">Admin Login</a></small>
    </footer>
    <!-- End Footer -->


    
    <!-- Start Student Registration Modal -->
     <!-- Modal -->
     <div class="modal fade" id="stuRegModalCenter" tabindex="-1" 
     role="dialog" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Start Registration Form -->
        <?php
        include('./studentRegistration.php');
        ?>
        <!-- End Registration Form -->
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="button" class="btn btn-secondary" 
        data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"
        onclick="addStu()" id="signup">Sign Up</button>
      </div>
    </div>
  </div>
</div>

<!-- End Student Registration Modal -->

<!-- Start Student login Modal -->
     <!-- Modal -->
     <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" 
     role="dialog" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Start Student Login Form -->
        <form id="stuLoginForm">
          <div class="form-group">
            <label for="stuLoginemail" class="d-block font-weight-bold">
              <i class="fas fa-envelope"></i> Email
            </label>
            <input type="email" class="form-control mt-2" placeholder="Enter Email" 
                   name="stuLoginemail" id="stuLoginemail">
          </div>
          <div class="form-group mt-3">
            <label for="stuLoginpass" class="d-block font-weight-bold">
              <i class="fas fa-key"></i> Password
            </label>
            <input type="password" class="form-control mt-2" placeholder="Enter Password" 
                   name="stuLoginpass" id="stuLoginpass">
          </div>
        </form>
        <!-- End Student Login Form -->
      </div>
      <div class="modal-footer">
        <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
      </div>
    </div>
  </div>
</div>

<!-- End Student login Modal -->

<!-- Start admin login Modal -->
     <!-- Modal -->
     <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" 
     role="dialog" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Start admin login Form -->
        <form id="adminLoginForm">
          <div class="form-group">
            <label for="adminLoginemail" class="d-block font-weight-bold">
              <i class="fas fa-envelope"></i> Email
            </label>
            <input type="email" class="form-control mt-2" placeholder="Enter Email" 
                   name="adminLoginemail" id="adminLoginemail">
          </div>
          <div class="form-group mt-3">
            <label for="adminLoginpass" class="d-block font-weight-bold">
              <i class="fas fa-key"></i> Password
            </label>
            <input type="password" class="form-control mt-2" placeholder="Enter Password" 
                   name="adminLoginpass" id="adminLoginpass">
          </div>
        </form>
        <!-- End admin login Form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
      </div>
    </div>
  </div>
</div>

<!-- End admin login Modal -->






        
<!-- jquery and bootstrap javascript -->

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- font awesome js -->

<script src="js/all.min.js"></script>

 <!-- Students Testimonial javascript -->

 <script type="text/javascript" src="js/owl.carousel.min.js"></script>
 <script type="text/javascript" src="js/testyslider.js"></script>
  

<!--student ajax call js --> 
 <script type="text/javascript" src="js/ajaxrequest.js"></script>

 <!--admin ajax call js --> 

 <script type="text/javascript" src="js/adminajaxrequest.js"></script>
</body>
</html>