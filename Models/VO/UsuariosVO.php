<?php

namespace Model\VO;

final class UsuariosVO extends VO {

    private $nome;
    private $login;
    private $senha;

    private $tipo;

    public function __construct($id = 0, $nome = "", $login = "", $senha = "", $tipo = "") {
        parent::__construct($id);
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
        $this->tipo = $tipo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

}