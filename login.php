<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
   <div class="main-login">
       <div class="left-login">
           <h1>Faça Login<br>E entre no nosso Site</h1>
       </div>
       <div class="right-login">
           <div class="card-login">
               <h1>LOGIN</h1>
               <div class="textfield">
                   <label for="usuario">Usuario</label>
                   <input type="text" name="usuario" placeholder="Usuario">
               </div>
               <div class="textfield">
               <label for="senha">Senha</label>
                   <input type="password" name="senha" placeholder="Senha">
               </div>
               <button class="btn-login">Login</button>

               <p>Ainda não tem uma conta? <a href="cadastro.php">Criar conta</a></p>
           </div>
       </div>
   </div>
</body>

</html>