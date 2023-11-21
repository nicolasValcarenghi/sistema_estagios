<?php

namespace Model;

use Model\VO\ProfessoresVO;
use Util\Database;

final class ProfessoresModel extends Model {

    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select("SELECT * FROM professores");

        $array = [];

        foreach($data as $row) {
            $array[] = new ProfessoresVO($row['id'], $row['nome'], $row['email'], $row['area_id']);            
        }

        return $array;
    }

    public function selectOne($vo = null) {
        $db = new Database();
        $query = "SELECT * FROM professores WHERE id = :id";
        $binds = [":id" => $vo->getId()];
        $data = $db->select($query, $binds);
        
        if (count($data) == 0) {
            return null;
        }
    
        return new ProfessoresVO($data[0]['id'], $data[0]['nome'], $data[0]['email'], $data[0]['area_id']);
    
    }   

    public function insert($vo) {

        $db = new Database();
        $query = "INSERT INTO professores (id, nome, email, area_id) VALUES (:id, :nome, :email, :area_id,)";
        $binds = [
            ':id' => $vo->getId(),
            ':nome' => $vo->getNome(),
            ':email' => $vo->getEmail(),
            ':area_id' => $vo->getAreaId()
        ];

        $sucess = $db->execute($query, $binds);

        if ($sucess) {
            return $db->getLastInsertedId();
        } else {
            return null;
        }

    }

    public function update($vo) {

        $db = new Database();
        $query = "UPDATE professores SET nome = :nome, email = :email, area_id = :area_id WHERE id = :id";
        $binds = [
            ':nome' => $vo->getNome(),
            ':email' => $vo->getEmail(),
            ':area_id' => $vo->getAreaId()
        ];

        return $db->execute($query, $binds);

    }

    public function delete($vo) {

        $db = new Database();
        $query = "DELETE FROM professores WHERE id = :id";
        $binds = [
            ":id" =>  $vo->getId()
        ];

        return $db->execute($query, $binds);

    }

}
