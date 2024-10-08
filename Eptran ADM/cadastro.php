<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    
<h1>Cadastro Cliente</h1> <br> <br> <br>

<form action="processamento.php" method="post">

    <label for="id">Código</label>
    <input type="number" name="id" placeholder="Digite o código do Cliente"> <br>

    <label for="nome">Nome</label>
    <input type="text" name="nome" placeholder="Digite o nome do Cliente"> <br>

    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" placeholder="Digite o usuario do Cliente"> <br>
   
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Digite o email do Cliente"> <br>
   
    <label for="senha">Senha</label>
    <input type="password" name="senha" placeholder="Digite a senha do Cliente"> <br>

    <input type="submit" name="enviar" value="gravar">
    <input type="submit" name="enviar" value="atualizar">
    <input type="submit" name="enviar" value="excluir">

</form>

<?php
    include('conexao.php');

    // if(isset($_POST['listar'])){

        $select = "SELECT id, nome, usuario, email FROM cadastro";
        $executar_select = $conn->query($select);

        echo"<h2>Lista do usuario<h2>";

        echo"<table border='1'>
        <tr>
        
            <th>Código</th>
            <th>Nome</th>
            <th>usuario</th>
            <th>Email</th>
        </tr>";

        if($executar_select->num_rows > 0){
            while($row = $executar_select->fetch_assoc()){
                echo"<tr>
                <td>" . $row['id']."</td>
                <td>" . $row['nome']."</td>
                <td>" . $row['usuario']."</td>
                <td>" . $row['email']."</td>
                 </tr>";
            }
        }
    // }
?>


</body>
</html>