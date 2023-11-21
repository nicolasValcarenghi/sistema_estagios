<?php

namespace Model\VO;

final class EstagiosVO extends VO
{
    private $carga_horaria;
    private $empresas_id;
    private $estudantes_matricula;
    private $orientadores_id;
    private $area_id;
    private $supervisores_id;
    private $data_inicio;
    private $previsao_fim;
    private $data_fim;
    private $coorientadores_id;

    public function __construct($id = 0, $carga_horaria = "", $empresas_id = 0, 
    $estudantes_matricula = 0, $orientadores_id = 0, $area_id = 0, $supervisores_id = 0, 
    $data_inicio = "", $previsao_fim = "", $data_fim = "", $coorientadores_id = 0)
    {
        parent::__construct($id);

        $this->carga_horaria = $carga_horaria;
        $this->empresas_id = $empresas_id;
        $this->estudantes_matricula = $estudantes_matricula;
        $this->orientadores_id = $orientadores_id;
        $this->area_id = $area_id;
        $this->supervisores_id = $supervisores_id;
        $this->data_inicio = $data_inicio;
        $this->previsao_fim = $previsao_fim;
        $this->data_fim = $data_fim;
        $this->coorientadores_id = $coorientadores_id;
    }

    public function getCargaHoraria()
    {
        return $this->carga_horaria;
    }

    public function setCargaHoraria($carga_horaria)
    {
        $this->carga_horaria = $carga_horaria;
    }

    public function getEmpresasId()
    {
        return $this->empresas_id;
    }

    public function setEmpresasId($empresas_id)
    {
        $this->empresas_id = $empresas_id;
    }

    public function getEstudantesMatricula()
    {   
        return $this->estudantes_matricula;
    }

    public function setEstudantesMatricula($estudantes_matricula)
    {
        $this->estudantes_matricula = $estudantes_matricula;
    }

    public function getOrientadoresId()
    {
        return $this->orientadores_id;
    }

    public function setOrientadoresId($orientadores_id)
    {
        $this->orientadores_id = $orientadores_id;
    }

    public function getAreaId()
    {
        return $this->area_id;
    }

    public function setAreaId($area_id)
    {
        $this->area_id = $area_id;
    }

    public function getSupervisoresId()
    {
        return $this->supervisores_id;
    }

    public function setSupervisoresId($supervisores_id)
    {
        $this->supervisores_id = $supervisores_id;
    }

    public function getDataInicio()
    {
        return $this->data_inicio;
    }

    public function setDataInicio($data_inicio)
    {
        $this->data_inicio = $data_inicio;
    }

    public function getPrevisaoFim()
    {
        return $this->previsao_fim;
    }

    public function setPrevisaoFim($previsao_fim)
    {
        $this->previsao_fim = $previsao_fim;
    }
    public function getDataFim()
    {
        return $this->data_fim;
    }

    public function setDataFIm($data_fim)
    {
        $this->data_fim = $data_fim;
    }

    public function getCoorientadoesId()
    {
        return $this->coorientadores_id;
    }

    public function setCoorientadoresId($coorientadores_id)
    {
        $this->coorientadores_id = $coorientadores_id;
    }
}