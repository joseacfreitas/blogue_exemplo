<?php 

//Criaçao da ligaçao à BD.
$servername = "localhost";
$username = "root";
$password = "";
$bd= "Blogue";


$conn = new mysqli($servername, $username, $password, $bd );

if($conn->connect_errno == true){ //Teste á ligaçao. 

    //echo "Error conetar!";
}
else
{
    //echo "Ligaçao obtida";
}

?>