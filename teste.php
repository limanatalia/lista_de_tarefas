<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/teste_css.css">
</head>

<body>
        <div class="content">
            <h1>Lista de Tarefas</h1>
            <div class="conteudo">
                <div class="topo">
                    <input type="text" name="tarefa" id="inputNovaTarefa" placeholder="Nova Tarefa...">
                    <button id="btnAddTarefa">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>

                <ul id="listaTarefas">
                </ul>
            </div>

            <div id="janelaEdicao">
                <button id="janelaEdicaoBtnFechar">
                    <i class="fa fa-remove fa-2x"></i>
                </button>
                <h2 id="idTarefaEdicao">#1021</h2>
                <hr>
                <form>
                    <div class="frm-linha">
                        <label for="nome">editando tarefa</label>
                        <input type="text" id="inputTarefaNomeEdicao">
                    </div>
                    <div class="frm-linha">
                        <button id="btnAtualizarTarefa">Salvar</button>
                    </div>
                </form>
            </div>
            <div id="janelaEdicaoFundo"></div>
        </div>
    <script src="js/teste_tarefa.js"></script>
</body>

</html>