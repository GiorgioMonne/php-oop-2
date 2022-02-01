<?php

class Shop {
    public $nome;
    public $indirizzo;
    public $telefono;
    public $website;
    public $orario;
    public $mail;

    public function __construct($_nome,$_indirizzo,$_telefono,$_website,$_orario,$_mail)
    {
        $this->nome=$_nome;
        $this->indirizzo=$_indirizzo;
        $this->telefono=$_telefono;
        $this->website=$_website;
        $this->orario=$_orario;
        $this->mail=$_mail;

    }

}