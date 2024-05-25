<?php
class Comentario{
    public $id;
    public $nome;
    public $email;
    public $comentario;
    public $status;

    public function __construct($id = false)
	{
		if ($id){
            $this->id = $id;                
        }
	}  

    public function listarComentarios(){
        $sql="SELECT id, nome, email, comentario, status FROM comentario WHERE status = 2";

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $lista=$resultado->fetchAll();

        return $lista;
    }

    public function inserir(){
        $sql="INSERT INTO comentario (nome, email, comentario) VALUES(
            '{$this->nome}',
            '{$this->email}',
            '{$this->comentario}'
            )";
    include "Classes/conexao.php";
    $conexao->exec($sql);
    echo "Registro gravado com sucesso!";
    }


    public function atualizar(){
        $sql="UPDATE comentario SET
                nome='{$this->nome}',
                email='{$this->email}',
                comentario='{$this->comentario}'
            WHERE id={$this->id}";
        
        include "Classes/conexao.php";
        $conexao->exec($sql);
    }

    public function aprovar() {
        // Verificar se o campo "categoria" está vazio
        if (empty($this->nome) || empty($this->comentario)) {
            // Se estiver vazio, exibir um alerta e redirecionar para a página anterior
            echo "<script>alert('Preencha tanto o campo de categoria quanto o campo de resposta antes de aprovar.'); window.location.href = 'adm.php';</script>";
            exit(); // Interrompe a execução da função
        }
    
        // Se a categoria não estiver vazia, continuar com a atualização
        $sql = "UPDATE comentario SET status = 2 WHERE id=" . $this->id;
        include "classes/conexao.php";
        $conexao->exec($sql);
    }
}