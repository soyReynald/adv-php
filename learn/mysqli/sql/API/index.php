<?php

$queryMazda = "SELECT make_years.year AS year, makes.name AS name, models.name AS model FROM makes, make_years, models 
WHERE models.makeyear_id = make_years.id 
	AND makes.name = 'MAZDA' 
	AND make_years.year BETWEEN 2014 AND 2016";

$queryModelsByYears = "SELECT DISTINCT models.name, make_years.year FROM models, make_years WHERE make_years.year BETWEEN 2004 AND 2006";

$queryMarks = "SELECT * FROM makes ORDER BY id DESC";

function consultQuery($con, $query){
    return mysqli_query($con, $query);
}

$mazda = consultQuery($con, $queryMazda);

if(!$mazda){
    echo "Error en la consulta:";
}

$years = consultQuery($con, $queryModelsByYears);

$marks = consultQuery($con, $queryMarks);

if(!$marks){
    echo "Error en la consulta:";
}


@$item = $_GET['item'];
@$option = $_GET['option'];

if($item && $option == 'eliminar'){
    $query = "DELETE FROM makes WHERE id = $item";
    consultQuery($con, $query);
    header("Location: index.php");
}

if($item && $option == 'editar'){
    $name = $_POST['name'];
    $query = "UPDATE makes SET name = '$name' WHERE id = $item";
    consultQuery($con, $query);
    header("Location: index.php");
}

?>