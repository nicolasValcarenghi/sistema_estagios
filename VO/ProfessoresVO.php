<?php

namespace Model\VO;

final class ProfessoresVO extends VO
{

    private $nome;
    private $email;
    private $funcao;
    private $area_id;


    public function __construct($id = 0, $nome = "", $email = "", $funcao = "", $area_id = 0)
    {
        parent::__construct($id);
        $this->nome = $nome;
        $this->$email = $email;
        $this->$funcao = $funcao;
        $this->$area_id = $area_id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->$email = $email;
    }

    public function getFuncao()
    {
        return $this->funcao;
    }

    public function setFuncao($funcao)
    {
        $this->$funcao = $funcao;
    }

    public function getArea_id()
    {
        return $this->area_id;
    }

    public function setArea_id($area_id)
    {
        $this->$area_id = $area_id;
    }
}