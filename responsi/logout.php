<?php
session_start();
session_destroy();
// unset($_SESSION['START']);
// session_unset();
// $_SESSION = [];

header("location:login.html");
exit();
  ?>