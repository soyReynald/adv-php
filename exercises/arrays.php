<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays with PHP</title>
</head>
<body>
    <?php 
        // .. 
        $numbers = [1,3,5,7,9];

        $totalOfReferences = count(numbers);
        
        $keys = array_keys($totalOfReferences);
        
        $references = [];

        for($i = 0; $i < $size; $i++){ // == foreach
            echo $i."Reference " . $ttoalOfReferences[$keys[$i]];
        }

    ?>
</body>
</html>