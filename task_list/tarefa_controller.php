<?php

    require "././task_list/tarefa.php";
    require "././task_list/tarefa_service.php";
    require "././task_list/conexao.php";

    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    //$tarefaService->inserir();
    header('Location: ./nova_tarefa.php?inclusao=1');



?>