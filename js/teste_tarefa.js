var inputNovaTarefa = document.querySelector('#inputNovaTarefa');
var btnAddTarefa = document.querySelector('#btnAddTarefa');
var listaTarefas = document.querySelector('#listaTarefas');
var janelaEdicao = document.querySelector('#janelaEdicao');
var janelaEdicaoFundo = document.querySelector('#janelaEdicaoFundo');
var janelaEdicaoBtnFechar = document.querySelector('#janelaEdicaoBtnFechar');
var btnAtualizarTarefa = document.querySelector('#btnAtualizarTarefa');
var idTarefaEdicao = document.querySelector('#idTarefaEdicao');
var inputTarefaNomeEdicao = document.querySelector('#inputTarefaNomeEdicao');

janelaEdicaoBtnFechar.addEventListener('click', (e) => {
    alternarJanelaEdicao();
});

btnAddTarefa.addEventListener('click', (e) => {

    var tarefa = {
        nome: inputNovaTarefa.value,
        id: gerarId(),
    }
    adicionarTarefa(tarefa);
});

btnAtualizarTarefa.addEventListener('click', (e) => {
    e.preventDefault();

    var idTarefa = idTarefaEdicao.innerHTML.replace('#', '');

    var tarefa = {
        nome: inputTarefaNomeEdicao.value,
        id: idTarefa
    }

    var tarefaAtual = document.getElementById('' + idTarefa + '');

    if (tarefaAtual) {
        var li = criarTagLI(tarefa);
        listaTarefas.replaceChild(li, tarefaAtual);
        alternarJanelaEdicao();
    } else {
        alert('Elemento HTML não encontrado!');
    }
});

function gerarId() {
    return Math.floor(Math.random() * 3000);
}

function adicionarTarefa(tarefa) {
    var li = criarTagLI(tarefa);
    listaTarefas.appendChild(li);
    inputNovaTarefa.value = '';
}

function criarTagLI(tarefa) {

    var li = document.createElement('li');
    li.id = tarefa.id;

    var span = document.createElement('span');
    span.classList.add('textoTarefa');
    span.innerHTML = tarefa.nome;

    var div = document.createElement('div');

    var btnEditar = document.createElement('button');
    btnEditar.classList.add('btnAcao');
    btnEditar.innerHTML = '<i class="fa fa-pencil"></i>';
    btnEditar.setAttribute('onclick', 'editar(' + tarefa.id + ')');

    var btnExcluir = document.createElement('button');
    btnExcluir.classList.add('btnAcao');
    btnExcluir.innerHTML = '<i class="fa fa-trash"></i>';
    btnExcluir.setAttribute('onclick', 'excluir(' + tarefa.id + ')');

    div.appendChild(btnEditar);
    div.appendChild(btnExcluir);

    li.appendChild(span);
    li.appendChild(div);
    return li;
}

function editar(idTarefa) {
    var li = document.getElementById('' + idTarefa + '');
    if (li) {
        idTarefaEdicao.innerHTML = '#' + idTarefa;
        inputTarefaNomeEdicao.value = li.innerText;
        alternarJanelaEdicao();
    } else {
        alert('Elemento HTML não encontrado!');
    }
}

function excluir(idTarefa) {
    var confirmacao = window.confirm('Tem certeza que deseja excluir? ');
    if (confirmacao) {
        var li = document.getElementById('' + idTarefa + '');
        if (li) {
            listaTarefas.removeChild(li);
        } else {
            alert('Elemento HTML não encontrado!');
        }
    }
}

function alternarJanelaEdicao() {
    janelaEdicao.classList.toggle('abrir');
    janelaEdicaoFundo.classList.toggle('abrir');
}