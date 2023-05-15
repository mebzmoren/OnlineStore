<?php
  session_start();
  session_destroy();
  session_unset();
  header("location: ../seller-login.php?success=signedout")
?>