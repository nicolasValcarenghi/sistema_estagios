<?php

namespace Model;

use Model\VO\EmpresasVO;
use Util\Database;

final class EmpresasModel extends Model {

    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select("SELECT * FROM empresas");

        $array = [];

        foreach($data as $row) {
            $array[] = new EstudanteVO($row['id'], $row['nome'], $row['endereco'], $row['telefone'], $row['email'], $row['cnpj'], $row['representante_funcao'], $row['representante_cpf'], $row['representante_rg'], $row['cidades_id']);            
        }

        return $array;
    }

    public function selectOne($vo = null) {
        $db = new Database();
        $query = "SELECT * FROM empresas WHERE id = :id";
        $binds = [":id" => $vo->getId()];
        $data = $db->select($query, $binds);
        
        if (count($data) == 0) {
            return null;
        }

        return new EstudanteVO($data[0]['id'], $data[0]['nome'], $data[0]['endereco'], $data[0]['telefone'], $data[0]['email'], $data[0]['cnpj'], $data[0]['representante_funcao'], $data[0]['representante_cpf'], $data[0]['representante_rg'], $data[0]['cidades_id']);
    
    }

    public function insert($vo) {

        $db = new Database();
        $query = "INSERT INTO empresas 
        (id, nome, endereco, telefone, email, cnpj, representante_funcao, representante_cpf, representante_rg, cidades_id) 
        VALUES (:id, :nome, :endereco, :telefone, :email, :cnpj, :representante_funcao, :representante_cpf, :representante_rg, :cidades_id)";
        $binds = [
            ':id' => $vo->getId(),
            ':nome' => $vo->getNome(),
            ':endereco' => $vo->getEndereco(),
            ':telefone' => $vo->getTelefone(),
            ':email' => $vo->getEmail(),
            ':cnpj' => $vo->getCnpj(),
            ':representante_funcao' => $vo->getRepresentanteFuncao(),
            ':representante_cpf' => $vo->getRepresentanteCpf(),
            ':representante_rg' => $vo->getRepresentanteRg(),
            ':cidades_id' => $vo->getCidadesId()
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

        $query = "UPDATE empresas SET nome = :nome,  endereco = :endereco,  telefone = :telefone,  email = :email,  cnpj = :cnpj,  representante_funcao = :representante_funcao,  representante_cpf = :representante_cpf,  representante_rg = :representante_rg,  cidades_id = :cidades_id WHERE id = :id";
        $binds = [
            ':nome' => $vo->getNome(),
            ':endereco' => $vo->getEndereco(),
            ':telefone' => $vo->getTelefone(),
            ':email' => $vo->getEmail(),
            ':cnpj' => $vo->getCnpj(),
            ':representante_funcao' => $vo->getRepresentanteFuncao(),
            ':representante_cpf' => $vo->getRepresentanteCpf(),
            ':representante_rg' => $vo->getRepresentanteRg(),
            ':cidades_id' => $vo->getCidadesId()
        ];

        return $db->execute($query, $binds);

    }

    public function delete($vo) {

        $db = new Database();
        $query = "DELETE FROM empresas WHERE id = :id";
        $binds = [
            ":id" =>  $vo->getId()
        ];

        return $db->execute($query, $binds);

    }


}