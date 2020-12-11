<?php
session_start();
unset($_SESSION['verified']);
unset($_SESSION['user']);
header("Location: ../login.php?logout=true");
?>