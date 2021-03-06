<?php
session_start();
// Checking if the user is authorized to view the page
require 'classes/guards.php';
$guards = new Guards();
if (!$guards->authCheck()) { header("location:index.php"); }

// Loading the UI Element for the app
require 'classes/layouts.php';
$layout = new Layouts('Create Tax Payer');
$layout->header();
?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Create Tax Payer</h1>
            </div>
            <form class="user">
              Tax Payers Details
              <hr class="sidebar-divider">
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="tpin" placeholder="TPIN">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="cbn" placeholder="Business Certificate Number">
              </div>                
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="trn" placeholder="Trading Name">
              </div>
              Bussines registration date
              <!-- <hr class="sidebar-divider"> -->
              <div class="form-group">
                <input type="date" class="form-control form-control-user" id="brd" placeholder="BusinessRegistrationDate">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="phone" placeholder="MobileNumber e.g 0995900000">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="location" placeholder="Physical Location">
              </div>
              <hr class="sidebar-divider">
              <div class="form-group">
                <input type="button" class="btn btn-primary btn-user btn-block" id="rgbtn" value="Register Company ">
              </div>
              <hr>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<?php
$layout->footer();
?>

<script type="text/javascript" src="js/taxpayer_register.js"></script>