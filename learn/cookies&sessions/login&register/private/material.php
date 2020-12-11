<?php
session_start();
if(isset($_SESSION['verified'])){
    echo "Aquí se encuentra su material privado <br/>";
    echo "<a href='../API/logout.php'>Cerrar sesion</a>";
}
else{
    header("Location: ../login.php?error=NotRights");
}
?>