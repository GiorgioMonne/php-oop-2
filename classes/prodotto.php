<?php

class Prodotti extends Shop {
    public $nome;
    public $prezzo;
    public $disponibilità;

    public function __construct($_nome,$_prezzo,$_disponibilità)
    {
        $this->nome=$_nome;
        $this->prezzo=$_prezzo;
        $this->disponibilità=$_disponibilità;
       
    }

}