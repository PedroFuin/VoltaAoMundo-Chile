<?php

class Usuario{
     public $id;
     public $nome;
     public $email;
     public $senha;
     public $diretiva;

public function __construct($id=false){
        if ($id){
            $this->id=$id;
            $this->carregar();
        }
    }

    public function inserir(){
        $sql="INSERT INTO usuario(nome, email, senha) VALUES(
        '".$this->nome."',
        '".$this->email."',
        '".$this->senha."' 
        )";

    include "classes/conexao.php";

    $conexao->exec($sql);
    echo "Registro gravado com sucesso!";
    }

    public function listar(){
        $sql="SELECT * FROM usuario";

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $lista=$resultado->fetchAll();

        return $lista;
    }
    
    public function excluir(){
        $sql="DELETE FROM usuario WHERE id=".$this->id;
        echo $sql;
        die();

        include "Classes/conexao.php";

        $conexao->exec($sql);
    }

    public function carregar(){
        $sql="SELECT* FROM usuario WHERE id=".$this->id;

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $linha=$resultado->fecth();

        $this->id=$linha['id'];
        $this->nome=$linha['nome'];
        $this->email=$linha['email'];
        $this->senha=$linha['senha'];
        
    }

    public function atualizar(){
        $sql="UPDATE usuario SET
                nome='$this->nome',
                email='$this->email',
                senha='$this->senha'
                
            WHERE id=$this->id";
        
        include "classes/conexao.php";
        $conexao->exec($sql);
    }
}