<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <header>
        <i class="fa-solid fa-bars" id="bar" onclick="collapse()"></i>          
        <img src="images/epitrones.png" id="logo-eptran">
        <i class="fa-solid fa-user"></i>
    </header>
    <main>

		<h1>Gestão de Administradores</h1>
		<h3>Lista de administradores:</h3>


		<?php
        include('conexao.php');
  
        $select = "SELECT id, email FROM cadastro";
        $executar_select = $conn->query($select);
    
    
        echo"<table border='1'>
          <tr>
           <th>ID</th>
           <th>Email</th>
          </tr>";
    
          if($executar_select->num_rows > 0){
            while($row = $executar_select->fetch_assoc()){
              echo"<tr>
                   	  <td>" . $row['id']."</td>
                   	 <td>" . $row['email']."</td>
                   </tr>";
                }
            }

		?>


		<h4>Informe o email do novo administrador para que ele receba um codigo de verificação:</h4>


    </main>
</body>
</html>