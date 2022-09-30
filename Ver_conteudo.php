<!DOCTYPE html>

<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/listar_os_posts.css">

    <title>Document</title>

</head>

<body>

    <a class="home" href="index.html"> HOME </a>

    <h1>Lista de Posts completos</h1>

    <div>
        <table class="table">
           
            <thead>
                <tr>
                    <th><b>Titulo<b></th>
                    <th><b>Descrição<b></th>
                    <th><b>Conteúdo<b></th>
                </tr>
            </thead>

            <?php
            include_once "conteudo.php"; 
            ?>

        </table>
    </div>


</body>

</html>