<?php
  session_start();
  session_destroy();
  session_unset();
  header("location: ../member-login.php?success=signedout")
?>