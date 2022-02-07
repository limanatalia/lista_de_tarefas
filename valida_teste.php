<?php
session_start();
  include_once ('includes/conexao.php');
  
  if (isset($_POST['submit'])) {
    $tarefa = $_POST['tarefa'];  

      $result = mysqli_query($conn, "INSERT INTO tarefas(tarefa)
      VALUES ('$tarefa')");
      $query->bindValue(':tarefa', $tarefa, PDO::PARAM_STR);
      $query->execute();
      $userCont = $query->fetch(); 
}