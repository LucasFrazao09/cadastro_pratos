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
        <div>
            <h2>Usuarios cadastrados:</h2>
            <ul>
                <?php while ($usuario = mysqli_fetch_assoc($usuarios)) { ?>
                    <li>
                        <strong>Nome:</strong> <?php echo $usuario['nome']; ?> |
                        <strong>Email:</strong> <?php echo $usuario['email']; ?>
                    </li>
                <?php } ?>

        </div>
            <div>
                <h2>Pratos cadastrados:</h2>
                <ul>
                    <?php while ($prato = mysqli_fetch_assoc($pratos)) { ?>
                        <li>
                            <strong>Nome:</strong> <?php echo $prato['nome']; ?> |
                            <strong>Preço:</strong> <?php echo $prato['preco']; ?> |
                            <strong>Categoria:</strong> <?php echo $prato['categoria']; ?> |
                            <strong>Descrição:</strong> <?php echo $prato['descricao']; ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <h2>Cadastre os pedidos!</h2>
        <form action="public/pedidos/cadastrar_pedido.php" method="POST">
            <label for="nome_cliente">Nome do cliente:</label>
            <input type="text" name="nome_cliente">
            <br>
            <label for="prato_id">ID do prato:</label>
            <input type="number" name="prato_id">
            <br>
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade">
            <br>
            <button type="submit">Cadastrar</button>
        </form>
    </main>
    
</body>
</html>