<?php

require 'pdo.php';

$id = $_GET['id'];

$query = "SELECT * FROM articles WHERE id = :id";

$stmt = $pdo->prepare($query);

$stmt->bindParam(':id', $id);

$stmt->execute() or die(implode(' >> ', $stmt->errorInfo()));

if($stmt->rowCount() > 0){

    $article = $stmt->fetch(PDO::FETCH_OBJ);

} else {
    exit('No article selected');
}

$doc = file_get_contents('doc.html');

header('Content-type:application/vnd.ms-word');
header('Content-Disposition:attachment;filename=doc_file.doc');

$search = array('{title}', '{image}', '{content}');
$replace = array("<h1>$article->title</h1>", '<img src="http://localhost/docs/img/' . $article->img . '"', $article->content);

$newDoc = str_replace($search, $replace, $doc);

echo $newDoc;

?>