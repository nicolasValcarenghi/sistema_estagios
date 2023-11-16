<?php

namespace Model;

use Model\VO\DocumentosVO;
use Util\Database;

final class DocumentosModel extends Model {

    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select("SELECT * FROM documentos");

        $array = [];

        foreach($data as $row) {
            $array[] = new DocumentosVO($row['id'], $row['estagios_id'], $row['termo_de_compromisso'], $row['plano_de_atividade'], $row['ficha_autoavaliacao'], $row['ficha_autoavaliacao_empresa'], $row['relatorio_final']);            
        }

        return $array;
    }

    public function selectOne($vo = null) {
        $db = new Database();
        $query = "SELECT * FROM documentos WHERE id = :id";
        $binds = [":id" => $vo->getId()];
        $data = $db->select($query, $binds);
        
        if (count($data) == 0) {
            return null;
        }
    
        return new DocumentosVO($data[0]['id'], $data[0]['estagios_id'], $data[0]['termo_de_compromisso'], $data[0]['plano_de_atividade'], $data[0]['ficha_autoavaliacao'], $data[0]['ficha_autoavaliacao_empresa'], $data[0]['relatorio_final']);
    }   

    public function insert($vo) {

        $db = new Database();
        $query = "INSERT INTO documentos (id, estagios_id, termo_de_compromisso, plano_de_atividade, ficha_autoavaliacao, ficha_autoavaliacao_empresa, relatorio_final)
        VALUES (:id, :estagios_id, :termo_de_compromisso, :plano_de_atividade, :ficha_autoavaliacao, :ficha_autoavaliacao_empresa, :relatorio_final)";
        $binds = [
            'id',
            'estagios_id',
            'termo_de_compromisso',
            'plano_de_atividade',
            'ficha_autoavaliacao',
            'ficha_autoavaliacao_empresa',
            'relatorio_final'
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
        $query = "UPDATE documentos SET estagios_id = :estagios_id, 
        termo_de_compromisso = :termo_de_compromisso, plano_de_atividade = :plano_de_atividade,
        ficha_autoavaliacao = :ficha_autoavaliacao, ficha_autoavaliacao_empresa = :ficha_autoavaliacao_empresa, relatorio_final = :relatorio_final
        WHERE id = :id";
        $binds = [
            ':id',
            ':estagios_id',
            ':termo_de_compromisso',
            ':plano_de_atividade',
            ':ficha_autoavaliacao',
            ':ficha_autoavaliacao_empresa'
        ];

        return $db->execute($query, $binds);

    }

    public function delete($vo) {

        $db = new Database();
        $query = "DELETE FROM documentos WHERE id = :id";
        $binds = [
            ":id" =>  $vo->getId()
        ];

        return $db->execute($query, $binds);

    }

}
