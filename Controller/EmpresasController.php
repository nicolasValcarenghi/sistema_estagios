<?php

namespace Controller;

use Model\EmpresasModel;
use Model\VO\EmpresasVO;

final class EmpresasController extends Controller {
    
    public function list() {
        $model = new EmpresasModel();
        $data = $model->selectAll();

        $this->loadView("listaEmpresas", [
            "empresas" => $data
        ]);

    }

    public function get() {
        $id = $_GET['id'] ?? null;

        if (empty($id)) {
            $vo = new EmpresasVO();
        } else {
            $model = new EmpresasModel();
            $vo = $model->selectOne(new EmpresasVO($id));
        }

        $this->loadView("formEmpresas", [
            "empresas" => $vo
        ]);
    }

    public function save() {
        
        $id = $_POST['id'];
        $vo = new EmpresasVO($_POST['id'], $_POST['nome'] , $_POST['endereco'] , 
        $_POST['telefone'] , $_POST['email'], $_POST['cnpj'],$_POST['representante_funcao'] ,
        $_POST['representante_cpf'] ,$_POST['representante_rg'] ,$_POST['cidades_id']);
        $model = new EmpresasModel();
        
        if(empty($id)) {
            $return = $model->insert($vo);
        } else {
            $return = $model->update($vo);
        }

        $this->redirect("empresas.php");
        
    }

    public function remove() {
        if (empty($_GET['id'])) {
            die("Necessário passar o ID");
        }

        $model = new EmpresasModel();
        $return = $model->delete(new EmpresasVO($_GET['id']));

        $this->redirect("empresas.php");

    }

}
