<?php

namespace Model;

use Model\VO\EstagiosVO;
use Util\Database;

final class EstagiosModel extends Model {
            
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select("SELECT * FROM estagios");

        $array = [];

        foreach($data as $row) {
            $array[] = new EstagiosVO($row['id'], $row['carga_horaria'], $row['empresas_id'], $row['estudantes_matricula']
            , $row['orientadores_id'] , $row['area_id'] , $row['supervisores_id'] , $row['data_inicio'] ,
             $row['previsao_fim'] , $row['data_fim'], $row['coorientadores_matricula']);            
        }

        return $array;
    }

    public function selectOne($vo = null) {
        $db = new Database();
        $query = "SELECT * FROM estagios WHERE id = :id";
        $binds = [":id" => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) == 0) {
            return null;
        }

        return new EstagiosVO($data[0]['id'], $data[0]['carga_horaria'], $data[0]['empresas_id'], $data[0]['estudantes_matricula']
        , $data[0]['orientadores_id'] , $data[0]['area_id'] , $data[0]['supervisores_id'] , $data[0]['data_inicio'] 
        , $data[0]['previsao_fim'] , $data[0]['data_fim'] , $data[0]['coorientadores_matricula']);
    
    }

    public function insert($vo) {

        $db = new Database();
        $query = "INSERT INTO estagios (carga_horaria,empresas_id,estudantes_matricula,orientadores_id,area_id,supervisores_id,
        data_inicio,previsao_fim,data_fim,coorientadores_matricula) 
        VALUES (:carga_horaria, :empresas_id, :estudantes_matricula,:orientadores_id,:area_id,:supervisores_id,
        :data_inicio,:previsao_fim,:data_fim,:coorientadores_matricula)";
        $binds = [
            ':carga_horaria' => $vo->getCargaHoraria(),
            ':empresas_id' => $vo->getEmpresasID(),
            ':estudantes_matricula' => $vo->getEstudantesMatricula(),
            ':orientadores_id' => $vo->getOrientadores_ID(),
            ':area_id' => $vo->getArea_ID(),
            ':supervisores_id' => $vo->getSupervisores_ID(),
            ':data_inicio' => $vo->getData_inicio(),
            ':previsao_fim' => $vo->getPrevisao_fim(),
            ':data_fim' => $vo->getData_fim(),
            ':coorientadores_matricula' => $vo->getCoorientadores_matricula()
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
    
        $query = "UPDATE estagios SET carga_horaria = :carga_horaria,empresas_id = 
        :empresas_id,estudantes_matricula = :estudantes_matricula, orientadores_id = :orientadores_id,
        area_id = :area_id,supervisores_id = :supervisores_id,data_inicio = :data_inicio,previsao_fim = :
        previsao_fim,data_fim = :data_fim,coorientadores_matricula = :coorientadores_matricula WHERE id = :id";

        $binds = [
            ':carga_horaria' => $vo->getCargaHoraria(),
            ':empresas_id' => $vo->getEmpresasId(),
            ':estudantes_matricula' => $vo->getEstudantesMatricula(),
            ':orientadores_id' => $vo->getOrientadoresId(),
            ':area_id' => $vo->getAreaId(),
            ':supervisores_id' => $vo->getSupervisoresId(),
            ':data_inicio' => $vo->getDataInicio(),
            ':previsao_fim' => $vo->getPrevisaoFim(),
            ':data_fim' => $vo->getDataFim(),
            ':coorientadores_matricula' => $vo->getCoorientadoresMatricula(),
            ":id" => $vo->getId()
        ];

        return $db->execute($query, $binds);

    }

    public function delete($vo) {

        $db = new Database();
        $query = "DELETE FROM estagios WHERE id = :id";
        $binds = [
            ":id" =>  $vo->getId()
        ];

        return $db->execute($query, $binds);

    }
    
}