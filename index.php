<?php

include "infra/conexao.php";
$pratos = mysqli_query($conexao, "SELECT * FROM pratos");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>CRUD - Restaurante</h1>
    </header>

    <main>
         <h2>Cadastre os Usuarios!</h2>
        <form action="public/pratos/cadastrar_usuario.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">
            <br>
            <label for="email">Email:</label>
            <input type="text" name="email">
            <br>
        <h2>Cadastre os pratos!</h2>
        <form action="public/pratos/cadastrar_prato.php" method="POST">
            <label for="nome">Nome do prato:</label>
            <input type="text" name="nome">
            <br>
            <label for="preco">Preço:</label>
            <input type="number" name="preco">
            <br>
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria">
            <br>
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao">
            <button type="submit">Cadastrar</button>
        </form>
    </main>
    
</body>
</html>