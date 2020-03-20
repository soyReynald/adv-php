<?php
    session_start();
    if(isset($_SESSION['USER'])){
        echo "Welcome " . $_SESSION['USER'];
        echo "<br/>";
        echo "<a href='logout.php?logout'>Logout</a>";
    }

?>