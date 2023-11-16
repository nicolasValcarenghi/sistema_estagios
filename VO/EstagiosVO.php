<?php

namespace Model\VO;

final class EstagiosVO extends VO
{
    private $carga_horaria;
    private $empresas_id;
    private $estudantes_matricula;
    private $professores_id;
    private $area_id;
    private $supervisores_id;
    private $data_inicio;
    private $previsao_fim;
    private $cidades_id;

    public function __construct($id = 0, $carga_horaria = "", $empresas_id = 0, $estudantes_matricula = 0, 
    $professores_id = 0, $area_id = 0, $supervisores_id = 0 , $data_inicio = "", 
    $previsao_fim = "", $cidades_id = 0)
    {
        parent::__construct($id);

        $this->carga_horaria = $carga_horaria;
        $this->empresas_id = $empresas_id;
        $this->estudantes_matricula = $estudantes_matricula;
        $this->professores_id = $professores_id;
        $this->area_id = $area_id;
        $this->supervisores_id = $supervisores_id;
        $this->data_inicio = $data_inicio;
        $this->previsao_fim = $previsao_fim;
        $this->cidades_id = $cidades_id;
    }

    public function getCargaHoraria()
    {
        return $this->carga_horaria;
    }

    public function setCargaHoraria($carga_horaria)
    {
        $this->carga_horaria = $carga_horaria;
    }

    public function getEmpresasID()
    {
        return $this->empresas_id;
    }

    public function setEmpresasID($empresas_id)
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

    public function getProfessoresID()
    {
        return $this->professores_id;
    }

    public function setProfessoresID($professores_id)
    {
        $this->professores_id = $professores_id;
    }

    public function getAreaID()
    {
        return $this->area_id;
    }

    public function setAreaID($area_id)
    {
        $this->area_id = $area_id;
    }

    public function getSupervisoresID()
    {
        return $this->supervisores_id;
    }

    public function setSupervisoresID($supervisores_id)
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

    public function getCidadesID()
    {
        return $this->cidades_id;
    }

    public function setCidadesID($cidades_id)
    {
        $this->cidades_id = $cidades_id;
    }
}