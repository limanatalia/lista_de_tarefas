<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">

    <title>Cadastro Rapido</title>
</head>

<body>


    <div class="main-login">
        <div class="left-login">
            <h1>Cadastre-se em nosso Site</h1>
        </div>
        <div class="right-login">
            <form action="valida_cad.php" method="POST">
                <div class="card-login">
                    <h1>CADASTRO</h1>

                    <div class="textfield">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" maxlength="110" placeholder="Nome">
                    </div>

                    <div class="textfield">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" maxlength="220" placeholder="Email">
                    </div>

                    <div class="textfield">
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" maxlength="5" placeholder="Senha">
                    </div>

                    <input type="submit" name="submit" id="submit" onclick="cadastrar()" class="btn-login" value="Cadastrar">

                    <div class="termos">
                        <input type="checkbox" class="checkbox"><label>Li e concordo com os <a href="#">Termos de Uso</a> e com a <a href="#">Política de privacidade</a></label>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <script src="js/cadastrar.js"></script>
</body>

</html>