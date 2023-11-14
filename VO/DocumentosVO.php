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

    public function getEstagios_id()
    {
        return $this->estagios_id;
    }

    public function setEstagios_id($estagios_id)
    {
        $this->estagios_id = $estagios_id;
    }

    public function getTermo_de_compromisso()
    {
        return $this->termo_de_compromisso;
    }

    public function setTermo_de_compromisso($termo_de_compromisso)
    {
        $this->termo_de_compromisso = $termo_de_compromisso;
    }

    public function getPlano_de_atividade()
    {
        return $this->plano_de_atividade;
    }

    public function setPlano_de_atividade($plano_de_atividade)
    {
        $this->plano_de_atividade = $plano_de_atividade;
    }

    public function getFicha_autoavaliacao()
    {
        return $this->ficha_autoavaliacao;
    }

    public function setFicha_autoavaliacao($ficha_autoavaliacao)
    {
        $this->ficha_autoavaliacao = $ficha_autoavaliacao;
    }

    public function getFicha_avaliacao_empresa()
    {
        return $this->ficha_avaliacao_empresa;
    }

    public function setFicha_avaliacao_empresa($ficha_avaliacao_empresa)
    {
        $this->ficha_avaliacao_empresa = $ficha_avaliacao_empresa;
    }

    public function getRelatorio_final()
    {
        return $this->relatorio_final;
    }

    public function setRelatorio_final($relatorio_final)
    {
        $this->relatorio_final = $relatorio_final;
    }

}