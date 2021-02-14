<?php

require '../models/user.php';
openSession();

unset($_SESSION['user']);

session_destroy();

header('Location: ../index.php');

?>