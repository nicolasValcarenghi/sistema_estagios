<?php

namespace Controller;

use Model\DocumentosModel;
use Model\VO\DocumentosVO;

final class DocumentosController extends Controller {
    
    public function list() {
        $model = new DocumentosModel();
        $data = $model->selectAll();

        $this->loadView("listaDocumentos", [
            "documentos" => $data
        ]);

    }

    public function get() {
        $id = $_GET['id'] ?? null;

        if (empty($id)) {
            $vo = new DocumentosVO();
        } else {
            $model = new DocumentosModel();
            $vo = $model->selectOne(new DocumentosVO($id));
        }

        $this->loadView("formDocumentos", [
            "documentos" => $vo
        ]);
    }

    public function save() {
        
        $id = $_POST['id'];
        $vo = new DocumentosVO($_POST['id'], $_POST['estagios_id'] , $_POST['termo_de_compromisso'] , 
        $_POST['plano_de_atividade'] , $_POST['ficha_de_autoavalicao'], $_POST['ficha_avaliacao_empresa'],
         $_POST['relatorio_final']);
        $model = new DocumentosModel();
        
        if(empty($id)) {
            $return = $model->insert($vo);
        } else {
            $return = $model->update($vo);
        }

        $this->redirect("documentos.php");
        
    }

    public function remove() {
        if (empty($_GET['id'])) {
            die("Necessário passar o ID");
        }

        $model = new DocumentosModel();
        $return = $model->delete(new DocumentosVO($_GET['id']));

        $this->redirect("documentos.php");

    }

}
