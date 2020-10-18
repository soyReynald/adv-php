<?php
/*
PROBLEMA A RESOLVER
Controlar que solo se pueda subir archivos de imágenes ( gif, jpg o png ) y archivos ( pdf )
Que las imágenes suban a las carpeta ( img ) y los pdf a la carpeta ( pdf )
Que las imágenes no pasen de ( 150KB )

*/


if(isset($_FILES) && is_uploaded_file($_FILES['archivo']['tmp_name'])){
    $type =  explode('/', $_FILES['archivo']['type']);
    $permited = "gif,jpeg,png,pdf";
    $fileType = strstr($permited, $type[count($type)-1]);
    $size = $_FILES['archivo']['size'] / 1024;
    if($fileType){
        $destination;
        switch($type[1]){
            case 'gif':
            case 'jpeg':
            case 'png':
                if($size < 150){
                    $destination = 'img';
                }else{
                    exit("File is too large");
                }
            break;
            case 'pdf':
                $destination = 'pdf';
            break;
        }
        if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
            move_uploaded_file($_FILES['archivo']['tmp_name'], $destination.'/'.$_FILES['archivo']['name']);
            header('Location: index.php');
        }
    }else{
        echo "Type not allowed";
        echo $fileType;
    }
}
?>