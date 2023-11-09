<?php

namespace Model\VO;

final class SupervisorVO extends VO
{

    private $formacao;
    private $telefone;
    private $email;

    public function __construct($id = 0, $formacao = "", $telefone = "", $email = "")
    {
        parent::__construct($id);
        $this->formacao = $formacao;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function getFormacao()
    {
        return $this->formacao;
    }

    public function setFormacao($formacao)
    {
        $this->formacao = $formacao;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


}