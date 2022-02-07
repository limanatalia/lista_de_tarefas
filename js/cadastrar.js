async function cadastrar() {
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;


    if (nome == "") {
        alert("Campo Nome inválido!");
        return;
    }
    if (email == "" || email.indexOf('@') == -1) {
        alert('Preencha o campo E-mail.');
        //formuser.email.focus();
        return;
    }
    if (senha == "" || senha.length < 5) {
        alert("Preencha o Campo senha!");
        return;
    }
    window.location = "login.php";
}