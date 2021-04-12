<?php
  include("header.php");
  if(isset($_SESSION['user'])){
?>
<script type="text/javascript">
  window.location = "account.php";
</script>
<?php
die();
}
?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Login / Registration</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Login / Registration</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="main_heading text_align_center">
                <h2>Login</h2>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 appointment_form">
              <div class="form_section">
                <form class="form_contant" action="login.php" method="post">
                  <div class="errorBox">
                    <?php
                  if(isset($_SESSION['log_error'])){
                        echo "Username and/or password is incorrect!";
                        unset($_SESSION['log_error']);
                  }
                  ?>
                  </div>
                  <fieldset class="row">
                  <!-- fb button -->
                  <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Your Email*" type="text" name="email">
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Password" type="password" name="password">
                    </div>
                    <div class="center">
                      <button class="btn main_bt">Sign in</button>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="main_heading text_align_center">
                <h2>Registration</h2>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 appointment_form">
              <div class="form_section">
                <form class="form_contant" action="registration.php" method="post">

                  <div class="errorBox">
                    <?php
                      if(isset($_SESSION['reg_error_1'])){
                        echo "first name is invalid(2-20symbol)<br>";
                        unset($_SESSION['reg_error_1']);
                      }
                      if(isset($_SESSION['reg_error_2'])){
                        echo "last name is invalid(2-20symbol)<br>";
                        unset($_SESSION['reg_error_2']);
                      }
                      if(isset($_SESSION['reg_error_3'])){
                        echo "email is invalid<br>";
                        unset($_SESSION['reg_error_3']);
                      }
                      if(isset($_SESSION['reg_error_4'])){
                        echo "password is invalid(6-16symbol)<br>";
                        unset($_SESSION['reg_error_4']);
                      }
                      if(isset($_SESSION['reg_error_5'])){
                        echo "b_day is invalid<br>";
                        unset($_SESSION['reg_error_5']);
                      }
                      if(isset($_SESSION['reg_error_6'])){
                        echo "gender is not selected<br>";
                        unset($_SESSION['reg_error_6']);
                      }
                     ?>
                  </div>

                  <fieldset class="row">
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="First Name*" type="text" name="fn">
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Last Name" type="text" name="ln">
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Your Email" type="email" name="email">
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" type="password" placeholder="password" name="password" id="pass">
                      <img src="images/eye.png" alt="" id="showPass">
                      <script src="js/jquery.min.js"></script>
                      <script>
                        let x = 1;
                        $('#showPass').click(function () {
                          if (x == 1) {
                            $("#pass").attr("type", "text");
                            x = 0;
                          } else {
                            $("#pass").attr("type", "password");
                            x = 1;
                          }
                        });
                      </script>
                    </div>
                    <div class="field col-lg-3 col-md-3 col-sm-12 col-xs-12">
                      <select class="form-control" name="year">
                        <option disabled selected>Year</option>
                        <?php
                        for($year=date("Y");$year>1950;$year--){
                          echo "<option>$year</option>";
                        }
                      ?>
                      </select>
                    </div>
                    <div class="field col-lg-3 col-md-3 col-sm-12 col-xs-12">
                      <select class="form-control" name="month">
                        <option disabled selected>Month</option>
                        <?php
                        $months = array(
                          "",
                          "January",
                          "February",
                          "March",
                          "April",
                          "May",
                          "June",
                          "Jule",
                          "August",
                          "September",
                          "October",
                          "Novermber",
                          "December"
                      );
                        for($month=1;$month<=12;$month++){
                          echo "<option value='$month'>$months[$month]</option>";
                        }
                      ?>
                      </select>
                    </div>
                    <div class="field col-lg-3 col-md-3 col-sm-12 col-xs-12">
                      <select class="form-control" name="day">
                        <option disabled selected>Day</option>
                        <?php
                        for($day=1;$day<=31;$day++){
                          echo "<option>$day</option>";
                        }
                      ?>
                      </select>
                    </div>
                    <div class="field col-lg-3 col-md-3 col-sm-12 col-xs-12">
                      <select class="form-control" name="gender">
                        <option selected disabledg>Select Gender</option>
                        <option value="1">Male</option>
                        <option value="0">Female</option>
                      </select>
                    </div>
                    <div class="center">
                      <button class="btn main_bt">Sign up</button>
                      <script>
                        $("#showPass").attr("type", "password");
                      </script>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  include("footer.php");
?>