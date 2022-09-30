<?php

include_once('conetar.php');

$sql = "SELECT titulo, Descricao FROM posts";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){

        $tit = $row["titulo"];
        $Descricao = $row["Descricao"];

        echo'<tr>
                <th><a href="ver_post.php?ident='.$tit.'">'.$tit.'</a></th>
                <th>'.$Descricao.'</th>        
        </tr>'; 

    }
}

