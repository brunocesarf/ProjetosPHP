<?php
$nome = $_POST['txtNome'];
$sobrenome = $_POST['txtSobrenome'];
$email = $_POST['txtEmail'];
$formacao = $_POST['txtFormacao'];
$emprego = $_POST['txtEmprego'];
echo "Cadastro Confirmado com Sucesso!<br>";
echo "Nome: $nome.<br>";
echo "Sobrenome: $sobrenome.<br>";
echo "email: $email.<br>";
echo "Formação: $formacao.<br>";
echo "Descrição Último Emprego: $emprego.<br>";
?>
