<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & JavaScript together</title>
</head>
<body>
<?php $name="Reynald";?>
<script>
    alert("<?php echo $name;?>");
</script>
</body>
</html>