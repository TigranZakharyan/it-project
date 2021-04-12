<?php
  session_start();
  include("header.php");
  if(!isset($_SESSION['user'])){
?>s
<script type="text/javascript">
  window.location="sign.php";
</script>
<?php
die();
}
$fbuid=$_SESSION['fbuser'];
$uid = $_SESSION['user'];
$query = $DB -> query("SELECT * FROM users WHERE id='$uid'");
$arr = mysqli_fetch_assoc($query);

if(isset($_SESSION['fbuser'])){
  $query2 = $DB -> query("SELECT * FROM fblogin WHERE fbid='$fbuid'");
  $arr2=mysqli_fetch_assoc($query2);
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
              <?php
                if(isset($_SESSION['fbuser'])){
                  echo "<img src='https://graph.facebook.com/v9.0/".$_SESSION['fbuser']."/picture' style='float: left;margin: 0 35px;'>";
                }
              ?>
              <h1 class="page-title">
                <?php
                  echo $arr['first_name']." ".$arr['last_name'];
                  if (isset($_SESSION['fbuser'])) {
                    echo "<br>FB: ".$arr2['name'];
                  }
                  include("fb2.php"); 
                ?>
              </h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Account</li>
              </ol>
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