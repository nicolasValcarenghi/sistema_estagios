<?php

namespace Model\VO;

final class DocumentosVO extends VO
{
    private $estagios_id;
    private $termo_de_compromisso;
    private $plano_de_atividade;
    private $ficha_autoavaliacao;
    private $ficha_avaliacao_empresa;
    private $relatorio_final;

    public function __construct($id = 0, $estagios_id = 0, $termo_de_compromisso = "", 
    $plano_de_atividade = "", $ficha_autoavaliacao = "", $ficha_avaliacao_empresa = "", $relatorio_final = "")
    {
        parent::__construct($id);

        $this->estagios_id = $estagios_id;
        $this->termo_de_compromisso = $termo_de_compromisso;
        $this->plano_de_atividade = $plano_de_atividade;
        $this->ficha_autoavaliacao = $ficha_autoavaliacao;
        $this->ficha_avaliacao_empresa = $ficha_avaliacao_empresa;
        $this->relatorio_final = $relatorio_final;
    }

    public function getEstagioId()
    {
        return $this->estagios_id;
    }

    public function setEstagioId($estagios_id)
    {
        $this->estagios_id = $estagios_id;
    }

    public function getTermoDeCompromisso()
    {
        return $this->termo_de_compromisso;
    }

    public function setTermoDeCompromisso($termo_de_compromisso)
    {
        $this->termo_de_compromisso = $termo_de_compromisso;
    }

    public function getPlanoDeAtividade()
    {
        return $this->plano_de_atividade;
    }

    public function setPlanoDeAtividade($plano_de_atividade)
    {
        $this->plano_de_atividade = $plano_de_atividade;
    }

    public function getFichaAutoavaliacao()
    {
        return $this->ficha_autoavaliacao;
    }

    public function setFichaAutoavaliacao($ficha_autoavaliacao)
    {
        $this->ficha_autoavaliacao = $ficha_autoavaliacao;
    }

    public function getFichaAvaliacaoEmpresa()
    {
        return $this->ficha_avaliacao_empresa;
    }

    public function setFichaAvaliacaoEmpresa($ficha_avaliacao_empresa)
    {
        $this->ficha_avaliacao_empresa = $ficha_avaliacao_empresa;
    }

    public function getRelatorioFinal()
    {
        return $this->relatorio_final;
    }

    public function setRelatorioFinal($relatorio_final)
    {
        $this->relatorio_final = $relatorio_final;
    }

}