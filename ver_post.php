
<?php
                   
include_once('conetar.php');

$res = $_GET['ident'];

$sql = "SELECT titulo, Descricao, Cont FROM posts WHERE titulo = $res";
                       
$result = $conn->query($sql);

   if ($result->num_rows > 0) {
     while ($row = $result->fetch_array()){
                            
             $tit = $row["titulo"];
             $Descricao= $row["Descricao"];
             $con= $row["Cont"];
                            
            echo"<tr>
                <th>$tit</th><br>
                <th>$Descricao</th><br>        
                <th>$con</th><br><br>     
                </tr>"; 
                            
}
}   
      
