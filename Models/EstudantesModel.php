<?php

namespace Model;

use Model\VO\EstudantesVO;
use Util\Database;

final class EstudantesModel extends Model {

    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select("SELECT * FROM estudantes");

        $array = [];

        foreach($data as $row) {
            $array[] = new EstudanteVO($row['id'], $row['nome'], $row['email'], $row['cpf'], $row['rg'], $row['endereco'], $row['telefone'], $row['cidades_id'], $row['cursos_id'], $row['num_turma']);            
        }

        return $array;
    }

    public function selectOne($vo = null) {
        $db = new Database();
        $query = "SELECT * FROM estudantes WHERE id = :id";
        $binds = [":id" => $vo->getId()];
        $data = $db->select($query, $binds);
        
        if (count($data) == 0) {
            return null;
        }

        return new EstudanteVO($data[0]['id'], $data[0]['nome'], $data[0]['email'], $data[0]['cpf'], $data[0]['rg'], $data[0]['endereco'], $data[0]['telefone'], $data[0]['cidades_id'], $data[0]['cursos_id'], $data[0]['num_turma']);
    
    }

    public function insert($vo) {

        $db = new Database();
        $query = "INSERT INTO estudantes (nome,email,cpf,rg,endereco,telefone,cidades_id,cursos_id,num_turma) VALUES (:nome,:email,:cpf,:rg,:endereco,:telefone,:cidades_id,:cursos_id,:num_turma)";
        $binds = [
            ':id' => $vo->getId(),
            ':nome' => $vo->getNome(),
            ':email' => $vo->getEmail(),
            ':cpf' => $vo->getCpf(),
            ':rg' => $vo->getRg(),
            ':endereco' => $vo->getEndereco(),
            ':telefone' => $vo->getTelefone(),
            ':cidades_id' => $vo->getCidadesId(),
            ':cursos_id' => $vo->getCursosId(),
            ':num_turma' => $vo->getNumTurma()
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
        $binds = [
            ':nome' => $vo->getNome(),
            ':email' => $vo->getEmail(),
            ':cpf' => $vo->getCpf(),
            ':rg' => $vo->getRg(),
            ':endereco' => $vo->getEndereco(),
            ':telefone' => $vo->getTelefone(),
            ':cidades_id' => $vo->getCidadesId(),
            ':cursos_id' => $vo->getCursosId(),
            ':num_turma' => $vo->getNumTurma()
        ];

        $query = "UPDATE estudantes SET nome = :nome, email = :email, cpf = :cpf, rg = :rg, endereco = :endereco, telefone = :telefone, cidades_id = :cidades_id, cursos_id = :cursos_id, num_turma = :num_turma WHERE id = :id";
        $binds = [
            ':nome' => $vo->getNome(),
            ':email' => $vo->getEmail(),
            ':cpf' => $vo->getCpf(),
            ':rg' => $vo->getRg(),
            ':endereco' => $vo->getEndereco(),
            ':telefone' => $vo->getTelefone(),
            ':cidades_id' => $vo->getCidadesId(),
            ':cursos_id' => $vo->getCursosId(),
            ':num_turma' => $vo->getNumTurma()
        ];

        return $db->execute($query, $binds);

    }

    public function delete($vo) {

        $db = new Database();
        $query = "DELETE FROM estudantes WHERE id = :id";
        $binds = [
            ":id" =>  $vo->getId()
        ];

        return $db->execute($query, $binds);

    }


}