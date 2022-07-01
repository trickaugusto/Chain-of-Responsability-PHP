<?php

abstract class ObjetoDaCadeia{
    public $proximo; 

    public function adcProximo(ObjetoDaCadeia $proximo): ObjetoDaCadeia
    {
        $this->proximo = $proximo;
        return $proximo;
    }

    public function trata(string $requisicao): string 
    {
        if ($this->proximo) return $this->proximo->trata($requisicao);
        return $requisicao;
    }
}

class ObjA extends ObjetoDaCadeia 
{
    public function trata($requisicao): string
    {
        return parent::trata($requisicao . "ObjA \n");
    }
}

class ObjB extends ObjetoDaCadeia 
{
    public function trata($requisicao): string
    {
        return parent::trata($requisicao . "ObjB \n");
    }
}

$objetoA = new ObjA();
$objetoA->adcProximo(new ObjB())->adcProximo(new ObjB)->adcProximo(new ObjA);
print_r($objetoA->trata("inicial \n"));