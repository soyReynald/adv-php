<?php require_once('conexion.php'); ?>
 <?php   
    if(isset($_GET["usuario"]) && $_GET['usuario'] == "soyReynald"){
        $query = "SELECT * FROM cliente";
        $result = mysqli_query($connection, $query);

        $arreglo = array();

        while( $mostrar = mysqli_fetch_array($result) ){
            array_push($arreglo, $mostrar);
        }
        echo( json_encode($arreglo) );
    }
?>
<?php require_once('desconectar.php'); ?>