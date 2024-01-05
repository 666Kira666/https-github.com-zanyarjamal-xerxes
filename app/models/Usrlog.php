<?php

namespace models;

class Usrlog extends Model {

    protected $table = "usrlog";
    #nao esqueça da ID
    protected $fields = ["id","nome","email","tipo","senha"];

    const COMUM_USER = 1;
    const ADMIN_USER = 5;

    public static $userTypes = [Usrlog::COMUM_USER=>"Usuário comum",
                                Usrlog::ADMIN_USER=>"Admin"];
    
    public function findById($id){
        $stmt = $this->pdo->prepare("select usrlog.*, comentario.texto from {$this->table} inner join comentario
         on comentario.usrlog_id = usrlog.id  where usrlog.id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function all(){
        $stmt = $this->pdo->prepare("select * from {$this->table}");
        $stmt->execute();
        
        $list = [];

        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            array_push($list,$row);
        }

        return $list;
    }

    #sobrescreve a funcao salve da classe mae Model
    public function save($data){
        if (_v($data,"senha") != ""){
            $data["senha"] = hash("sha256", $data["senha"]);
        } else
        if (_v($data,"senha") == ""){
            #caso a senha nao seja enviada
            #remove do data, para que nao seja alterada
            #a senha anterior que já está salva
            unset($data["senha"]);
        }
        #chama a funcao save original da classe mae
        return parent::save($data);
    }


    public function update($id, $data){
        if (_v($data,"senha") != ""){
            $data["senha"] = hash("sha256", $data["senha"]);
        } else
        if (_v($data,"senha") == ""){
            unset($data["senha"]);
        }
        return parent::update($id, $data);
    }
    
    

    #novo método para autenticação

    public function findByEmailAndSenha($email, $senha){
        $sql = "SELECT * FROM {$this->table} "
                ." WHERE email = :email and senha = :senha";
        $stmt = $this->pdo->prepare($sql);
        $data = [':email' => $email, ":senha"=>hash("sha256", $senha)];
        $stmt->execute($data);
        if ($stmt == false){
            $this->showError($sql,$data);
        }
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    

    public function delete($id){
        $stmt = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
        return $stmt->execute(["id"=>$id]);
    }
    
}

