<?php

include_once('conetar.php');

$campo1=$_GET['titF'];
$campo2=$_GET['DescF'];
$campo3=$_GET['ContF'];

$blogs = $conn->query("INSERT INTO Blogue.posts(titulo, Descricao, Cont) VALUES ('$campo1', '$campo2','$campo3')");

header("Location:index.html");

?>