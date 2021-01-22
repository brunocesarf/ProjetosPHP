<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
 <title>Alunos Concluintes - MYSQLI</title>
</head>
<body class="w3-blue">
 <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-
margin">
 <h1 class="w3-center w3-blue w3-round-large w3-
margin">Alunos Concluintes</h1>
 <table class="w3-table-all w3-centered w3-text-black">
 <thead>
 <tr class="w3-center w3-blue ">
 <th>Código</th>
 <th>Nome</th>
 <th>Nota 1</th>
 <th>Nota 2</th>
 <th>Nota 3</th>
 <th>Nota 4</th>
 </tr>
 <thead>
 <?php
 $servername = "localhost";
 $username = "root";
 $password = "usbw";
 $dbname = "pwii";
 $conexao = new mysqli($servername, $username, $password, $dbname);
 if ($conexao->connect_error) {
 die("Connection failed: " . $conexao->connect_error);
 }
 $sql = "SELECT * FROM alunos" ;
 $resultado = $conexao->query($sql);
 if($resultado != null)
 foreach($resultado as $linha) {
 echo '<tr>';
 echo '<td>'.$linha['idalunos'].'</td>';
 echo '<td>'.$linha['nome'].'</td>';
 echo '<td>'.$linha['Nota 1'].'</td>';
 echo '<td>'.$linha['Nota 2'].'</td>';
 echo '<td>'.$linha['Nota 3'].'</td>';
 echo '<td>'.$linha['Nota 4'].'</td>';
 echo '</tr>';
 }
 $conexao->close();
 ?>
 </table>
</div>
</body>
</html>