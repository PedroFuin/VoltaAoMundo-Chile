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

    public function listarComentariosAprovados(){
        $sql="SELECT id, nome, email, comentario, status FROM comentario WHERE status = 2";

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $lista=$resultado->fetchAll();

        return $lista;
    }

    public function listarComentarios(){
        $sql="SELECT id, nome, email, comentario, status FROM comentario WHERE status = 1";

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $lista=$resultado->fetchAll();

        return $lista;
    }

    public function listarComentariosUsuario(){
        $sql="SELECT id, nome, email, comentario, status FROM comentario WHERE status = 1";

        include "Classes/conexao.php";

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
    header("refresh:0.8; URL=usuario.php");
    }

    public function importar(){
        $sql="INSERT INTO comentario (nome, email, comentario) VALUES(
            '{$this->nome}',
            '{$this->email}',
            '{$this->comentario}'
            )";
    include "Classes/conexao.php";
    $conexao->exec($sql);
    header("refresh:0.8; URL=adm.php");
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
        $sql = "UPDATE comentario SET status = 2 WHERE id=" . $this->id;
        include "classes/conexao.php";
        $conexao->exec($sql);
    }

    public function excluir(){
        $sql="DELETE FROM comentario WHERE id=".$this->id;
        include "classes/conexao.php";
        $conexao->exec($sql);
    }
}