<?php

$queryMazda = "SELECT make_years.year AS year, makes.name AS name, models.name AS model FROM makes, make_years, models 
WHERE models.makeyear_id = make_years.id 
	AND makes.name = 'MAZDA' 
	AND make_years.year BETWEEN 2014 AND 2016";

$queryModelsByYears = "SELECT DISTINCT models.name, make_years.year FROM models, make_years WHERE make_years.year BETWEEN 2004 AND 2006";

function consultQuery($con, $query){
    return mysqli_query($con, $query);
}

$mazda = consultQuery($con, $queryMazda);

if(!$mazda){
    echo "Error en la consulta:";
}

$years = consultQuery($con, $queryModelsByYears);

?>