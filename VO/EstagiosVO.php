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

    public function getCarga_horaria()
    {
        return $this->carga_horaria;
    }

    public function setCarga_horaria($carga_horaria)
    {
        $this->carga_horaria = $carga_horaria;
    }

    public function getEmpresas_id()
    {
        return $this->empresas_id;
    }

    public function setEmpresas_id($empresas_id)
    {
        $this->empresas_id = $empresas_id;
    }

    public function getEstudantes_matricula()
    {   
        return $this->estudantes_matricula;
    }

    public function setEstudantes_matricula($estudantes_matricula)
    {
        $this->estudantes_matricula = $estudantes_matricula;
    }

    public function getProfessores_id()
    {
        return $this->professores_id;
    }

    public function setProfessores_id($professores_id)
    {
        $this->professores_id = $professores_id;
    }

    public function getArea_id()
    {
        return $this->area_id;
    }

    public function setArea_id($area_id)
    {
        $this->area_id = $area_id;
    }

    public function getSupervisores_id()
    {
        return $this->supervisores_id;
    }

    public function setSupervisores_id($supervisores_id)
    {
        $this->supervisores_id = $supervisores_id;
    }

    public function getData_inicio()
    {
        return $this->data_inicio;
    }

    public function setData_inicio($data_inicio)
    {
        $this->data_inicio = $data_inicio;
    }

    public function getPrevisao_fim()
    {
        return $this->previsao_fim;
    }

    public function setPrevisao_fim($previsao_fim)
    {
        $this->previsao_fim = $previsao_fim;
    }

    public function getCidades_id()
    {
        return $this->cidades_id;
    }

    public function setCidades_id($cidades_id)
    {
        $this->cidades_id = $cidades_id;
    }
}