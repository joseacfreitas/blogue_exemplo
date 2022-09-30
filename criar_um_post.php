<!DOCTYPE html>

<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/criar_post.css">

    <tite></tite>

</head>

<body>

    <a class="home" href="index.html"> HOME </a>

    <h1>Insira o seu Post</h1>

    <form action="GravarNovoPost.php" method="get">

        <input type="text" name="titF" placeholder="Titulo:" required><br>

        <input type="text" name="DescF" placeholder="Descricão:" required><br>

        <textarea name=ContF rows="8" cols="140" placeholder="Conteudo: " required></textarea><br>

        <input class="btn" type="submit">

    </form>


</body>

</html>