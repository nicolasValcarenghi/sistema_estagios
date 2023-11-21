<?php

namespace Model\VO;

final class EmpresasVO extends VO
{
    private $nome;
    private $endereco;
    private $telefone;
    private $email;
    private $cnpj;
    private $representante_funcao;
    private $representante_cpf;
    private $representante_rg;
    private $cidades_id;

    public function __construct($id = 0, $nome = "", $endereco = "", $telefone = "", $email = "", 
    $cnpj = "", $representante_funcao = "", $representante_cpf = "", $representante_rg = "", $cidades_id = 0)
    {
        parent::__construct($id);

        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->cnpj = $cnpj;
        $this->representante_funcao = $representante_funcao;
        $this->representante_cpf = $representante_cpf;
        $this->representante_rg = $representante_rg;
        $this->cidades_id = $cidades_id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
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

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getRepresentanteFuncao()
    {
        return $this->representante_funcao;
    }

    public function setRepresentanteFuncao($representante_funcao)
    {
        $this->representante_funcao = $representante_funcao;
    }

    public function getRepresentanteCpf()
    {
        return $this->representante_cpf;
    }

    public function setRepresentanteCpf($representante_cpf)
    {
        $this->representante_cpf = $representante_cpf;
    }

    public function getRepresentanteRg()
    {
        return $this->representante_rg;
    }

    public function setRepresentanteRg($representante_rg)
    {
        $this->representante_rg = $representante_rg;
    }

    public function getCidadesId()
    {
        return $this->cidades_id;
    }

    public function setCidadesId($cidades_id)
    {
        $this->cidades_id = $cidades_id;
    }
}