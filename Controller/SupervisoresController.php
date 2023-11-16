<?php

namespace Controller;

use Model\VO\SupervisoresVO;
use Model\SupervisoresModel;
use Model\VO\EmpresasModel;


final class SupervisoresController extends Controller {
    
    public function list() {
        $model = new SupervisoresModel();
        $data = $model->selectAll();

        $this->loadView("listaSupervisores", [
            "Supervisores" => $data
        ]);

    }

    public function get() {
        $id = $_GET['id'] ?? null;

        if (empty($id)) {
            $vo = new SupervisoresVO();
        } else {
            $model = new SupervisoresModel();
            $vo = $model->selectOne(new SupervisoresVO($id));
        }

        $modelEmpresas = new EmpresasModel();
        $empresas = $modelEmpresas->selectAll();

        $this->loadView("formSupervisores", [
            "Supervisores" => $vo,
            "Empresas"=> $empresas,          
        ]);
    }

    public function save() {    
        $id = $_POST['id'];
        $vo = new SupervisoresVO($_POST['id'], $_POST['nome'], $_POST['formacao'], $_POST['telefone'], $_POST['email']);

        $model = new SupervisoresModel();

        if(empty($id)) {
            $return = $model->insert($vo);
        } else {
            $return = $model->update($vo);
        }

        $this->redirect("supervisores.php");
        
    }

    public function remove() {
        if (empty($_GET['id'])) {
            die("Necessário passar o ID");
        }

        $model = new SupervisoresModel();
        $return = $model->delete(new SupervisoresVO($_GET['id']));

        $this->redirect("supervisores.php");

    }

}