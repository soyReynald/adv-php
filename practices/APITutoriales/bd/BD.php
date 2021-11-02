<?php
// I will accomplish this with classes 

$pdo = null;
$host = "localhost";
$user = "root";
$password = "";
$bd = "tutoriales";

function conectar(){
    try{
        $GLOBALS['pdo'] = new PDO("mysql:host=".$GLOBALS['host']."; dbname=".$GLOBALS['bd']."", $GLOBALS['user'], $GLOBALS['password']);
        $GLOBALS['pdo']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        print "Error!: No se pudo conectar a la bd ".$GLOBALS['bd']."<br/>";
        print "\n Error!: ".$e."<br/>";
    }
}


function desconectar() {
    $GLOBALS['pdo'] = null;
}

function metodoGet($query) {
    try{
        conectar();
        $sentence = $GLOBALS['pdo']->prepare($query);
        $sentence->setFetchMode(PDO::FETCH_ASSOC);
        $sentence->execute();
        desconectar();
        return $sentence;
    } catch (Exception $e){
        die("Error: ". $e);
    }
}

function metodoPost($query, $queryAutoIncrement) {
    try{
        conectar();
        $sentence = $GLOBALS['pdo']->prepare($query);
        $sentence->execute();
        $idAutoIncrement = metodoGet($queryAutoIncrement)->fetch(PDO::FETCH_ASSOC);
        $result = array_merge($idAutoIncrement, $_POST);
        $sentence->closeCursor();
        desconectar();
        return $result;
    } catch (Exception $e){
        die("Error: ". $e);
    }
}


function metodoPut($query) {
    try{
        conectar();
        $sentence = $GLOBALS['pdo']->prepare($query);
        $sentence->execute();
        $result = array_merge($_GET, $_POST);
        $sentence->closeCursor();
        desconectar();
        return $result;
    } catch (Exception $e){
        die("Error: ". $e);
    }
}

function metodoDelete($query) {
    try{
        conectar();
        $sentence = $GLOBALS['pdo']->prepare($query);
        $sentence->execute();
        $sentence->closeCursor();
        desconectar();
        return $_GET['id'];
    } catch (Exception $e){
        die("Error: ". $e);
    }
}

?>