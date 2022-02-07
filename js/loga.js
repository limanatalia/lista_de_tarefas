async function logar() {

    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

    if (email == "" || email.indexOf('@') == -1) {
        alert('Preencha o campo Usuario!');
        return;
    }
    if (senha == "" || senha.length < 5) {
        alert("Preencha o Campo senha!");
        return;
    }

}