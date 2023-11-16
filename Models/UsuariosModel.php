<?php

namespace Model;

use Model\VO\UsuariosVO;
use Util\Database;

final class UsuariosModel extends Model {
            
    public function selectAll($vo = null) {
        $db = new Database();
        $data = $db->select("SELECT * FROM usuarios");

        $array = [];

        foreach($data as $row) {
            $array[] = new UsuariosVO($row['id'], $row['nome'], $row['login'], $row['senha'], $row['tipo']);            
        }

        return $array;
    }

    public function selectOne($vo = null) {
        $db = new Database();
        $query = "SELECT * FROM usuarios WHERE id = :id";
        $binds = [":id" => $vo->getId()];
        $data = $db->select($query, $binds);

        if (count($data) == 0) {
            return null;
        }

        return new UsuariosVO($data[0]['id'], $data[0]['nome'], $data[0]['login'], $data[0]['senha'], $data[0]['tipo']);
    
    }

    public function insert($vo) {

        $db = new Database();
        $query = "INSERT INTO usuarios (nome, login, senha, tipo) VALUES (:nome, :login, :senha, :tipo)";
        $binds = [
            ":nome" => $vo->getNome(),
            ":login" => $vo->getLogin(),
            ":senha" => sha1($vo->getSenha()),
            ":tipo" =: $vo->getTipo()
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
        $binds = [
            ":nome" => $vo->getNome(),
            ":tipo" => $vo->getTipo(),
            ":login" => $vo->getLogin(),
            ":id" => $vo->getId()
        ];
        
        if (empty($vo->getSenha())) {
            $query = "UPDATE usuarios SET nome = :nome, login = :login, tipo = :tipo WHERE id = :id";
        }
        else {
            $binds["senha"] = sha1($vo->getSenha());
            $query = "UPDATE usuarios SET nome = :nome, login = :login, senha = :senha, tipo = :tipo WHERE id = :id";
        }

        return $db->execute($query, $binds);

    }

    public function delete($vo) {

        $db = new Database();
        $query = "DELETE FROM usuarios WHERE id = :id";
        $binds = [
            ":id" =>  $vo->getId()
        ];

        return $db->execute($query, $binds);

    }
    
    public function doLogin($vo) {
        $db = new Database();
        $query = "SELECT * FROM usuarios WHERE login = :login AND senha = :senha";
        $binds = [
            ":login" => $vo->getLogin(),
            ":senha" => sha1($vo->getSenha())
        ];

        $data = $db->select($query, $binds);

        if (count($data) == 0) {
            return false;
        }

        $usuarios = new UsuariosVO($data[0]['id'], $data[0]['nome'], $data[0]['login'], $data[0]['senha'], $data[0]['tipo']);

        $_SESSION["Usuarios"] = $usuarios;

        return true;

    }

    public function checkLogin() {
        if(empty($_SESSION['Usuarios'])) {
            return false;
        }
        return true;
    }

    public function logout() {
        $_SESSION['Usuarios'] = null;
    }

}
