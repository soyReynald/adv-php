<!DOCTYPE html>
<html>
<head>
    <title>CMS with PHP</title>
    <meta name="charset" content="utf-8">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <!-- Project oriented to create our Own CMS with PHP -->
    <?php
        $db['DB_HOST'] = "localhost";
        $db['DB_USER'] = "root";
        $db['DB_PASSWORD'] = "";
        $db['DB_NAME'] = "cs_";
        
        foreach($db as $key => $value){
            define(strtoupper($key), $value);
        }

        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if($connection){
            echo "Connection success";
        }
    ?>
</body>
</html>