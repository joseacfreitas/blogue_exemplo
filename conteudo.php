<?php

include_once('conetar.php');

$sql = "SELECT titulo, Descricao, Cont FROM posts";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_array()){

        $tit = $row["titulo"];
        $Descricao= $row["Descricao"];
        $con= $row["Cont"];

        echo"<tr>
                <th>$tit</th>
                <th>$Descricao</th>        
                <th>$con</th>        
        </tr>"; 

    }
}