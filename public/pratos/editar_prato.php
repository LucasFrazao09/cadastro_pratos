<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM pratos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql );

$prato =mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Restaurante</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>CRUD - Restaurante</h1>
    </header>
    <main>
        <h2>Editando o prato <?php echo $prato["nome"]?>!</h2>
        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id["id"]?>">

            <label for="nome">nome:</label>
            <input type="text" name="nome" value="<?php echo $nome["nome"]?>">
            <br>
            <label for="categoria">categoria:</label>
            <input type="text" name="categoria" value="<?php echo $categoria["categoria"]?>">
            <br>
            <label for="preco">preço:</label>
            <input type="number" name="preco" value="<?php echo $preço["preco"]?>" step="0.01">
            <br>
            <br>
            <label for="descrição">descrição:</label>
            <input type="text" name="descrição" value="<?php echo $descrição["descrição"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
    <footer>

    </footer>


</body>

</html>