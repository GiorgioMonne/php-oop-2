<?php

class Prodotti extends Shop {
    public $nome;
    public $prezzo;
    public $disponibilit√†;

    public function __construct($_nome,$_prezzo,$_disponibilit√†)
    {
        $this->nome=$_nome;
        $this->prezzo=$_prezzo;
        $this->disponibilit√†=$_disponibilit√†;
       
    }

}