<?php include_once("config.php") ?>

<?php 

$queryMarks = "SELECT * FROM makes ORDER BY name DESC";

function consultQuery($con, $query){
    return mysqli_query($con, $query);
}

$marks = consultQuery($con, $queryMarks);


@$item = $_GET['item'];
@$option = $_GET['option'];
if($item && $option == 'eliminar'){
    $query = "DELETE FROM makes WHERE id = $item";
    consultQuery($con, $query);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing an URL</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <table class="table">
        <thead>
            <th>Nombre</th>
        </thead>
        <tbody>
            <?php while($mark = mysqli_fetch_assoc($marks)): ?>
				<tr>
					<td><?php echo $mark['name'] ?></td>
					<td><a href="editar.php?item=<?php echo $mark['id']; ?>">Editar</a></td>
					<td><a href="?item=<?php echo $mark['id']; ?>&option=eliminar">Eliminar</a></td>
				</tr>
			<?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>