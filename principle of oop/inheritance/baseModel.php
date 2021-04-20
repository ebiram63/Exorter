<?php

class baseModel
{
    protected $db;
    protected $table;
    protected $prmaryKey = 'id';


    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:dbname=7todo;host=localhost", "root", "");
            
        } catch (PDOException $e) {
            die("Could not connect to DB" . $e->getMessage());
        }
    }

    public function find($id){
        $sql = "SELECT * from {$this->table} WHERE {$this->primaryKey} = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public  function update($data){
        $sql = "UPDATE  users SET data=:date WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':data' =>$data]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public  function create($data){

    }

    public  function delete($id){
        $sql = "DELETE  from {$this->table} WHERE {$this->primaryKey} = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->rowCount();
    }
}


// $user = new User();
// var_dump($user->find(15));