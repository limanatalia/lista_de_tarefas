<?php
session_start();
include_once('includes/conexao.php');
if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM usuarios WHERE email = '$email'";

  $result = $conn->query($sql);

  if (mysqli_num_rows($result) < 1) {

    header('Location: login.php');
    
  } else {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: cadastro.php');
  }

  $result = mysqli_query($conn, "INSERT INTO usuarios(nome, email, senha)
      VALUES ('$nome', '$email', '$senha')");
  $query->bindValue(':nome', $nome, PDO::PARAM_STR);
  $query->bindValue(':email', $email, PDO::PARAM_STR);
  $query->bindValue(':senha', $senha, PDO::PARAM_STR);
  $query->execute();
  $userCont = $query->fetch();
}
