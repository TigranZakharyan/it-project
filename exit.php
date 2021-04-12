<?php
session_start();
session_destroy();
unset($_SESSION['user']);
unset($_SESSION['fbuser']);
header("location:sign.php");
?>
<script type="">
FB.logout();
</script>