<?php 

class TarefaService {

    private $conexao;
    private $tarefa;

    //Tipagem do parametro que está sendo recebido
    public function __construct(Conexao $conexao, Tarefa $tarefa){
        $this->conexao = $conexao->conectar();
        $this->tarefa = $tarefa; 
    }

    //CRUD
    public function inserir(){
        $query = "insert into tb_tarefas(tarefa)values(:tarefa)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
        $stmt->execute();

    }
    
    public function recuperar(){
        $query = "
            select 
                t.id, s.status, t.tarefa 
            FROM 
                tb_tarefas as t
            left join 
                tb_status as s on (t.id_status = s.id)";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->FetchAll(PDO::FETCH_OBJ);

    }

    public function atualizar(){

    }

    public function remover() {
        
    }

}

?>