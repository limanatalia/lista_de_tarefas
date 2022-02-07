<?php
session_start();
  include_once ('includes/conexao.php');
  
  if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
  

      $result = mysqli_query($conn, "INSERT INTO usuarios(nome, email, senha)
      VALUES ('$nome', '$email', '$senha')");
      $query->bindValue(':nome', $nome, PDO::PARAM_STR);
      $query->bindValue(':email', $email, PDO::PARAM_STR);
      $query->bindValue(':senha', $senha, PDO::PARAM_STR);
      $query->execute();
      $userCont = $query->fetch(); 
    

        $response['status'] = '200';
        $response['message'] = 'Cadastro Feito!';
        $response['Usuario'] = $userCont;
        
        echo json_encode($response);
    
}