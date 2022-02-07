<?php 
session_start();

include_once ('includes/conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
   

$cmd = $query -> prepare($conexao, "SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
  $query->BindValue(':email', $email, PDO::PARAM_STR);
  $query->BindValue(':senha', $senha, PDO::PARAM_STR);
  $query->execute();
  $userCont = $query->fetchAll();
      
  if($userCont == 0){
    $response['status'] = '404';
    $response['message'] = 'Usuario ou Senha não Encontrado!';
        
    echo json_encode($response);
  }else{
    $response['status'] = '200';
    $response['message'] = 'Deu certo!';
    $response['Usuario'] = $userCont;
        
    echo json_encode($response);
  }
?>
