<?php

class Utente extends Shop {
    private $nomeUtente;
    private $cognomeUtente;
    private $telefonoUtente;
    private $mailUtente;
    private $premium;
    private $numeroCarta;
    private $scadenzaCarta;

    public function setNome($_nomeUtente){
        $this->nomeUtente = $_nomeUtente;
    }

    public function getNome(){
        return $this->nomeUtente;
    }

    public function setCognome($_cognomeUtente){
        $this->cognomeUtente = $_cognomeUtente;
    }

    public function getCognome(){
        return $this->cognomeUtente;
    }

    public function setTelefono($_telefonoUtente){
        $this->telefonoUtente = $_telefonoUtente;
    }

    public function getTelefono(){
        return $this->telefonoUtente;
    }

    public function setMail($_mailUtente){
        $this->mailUtente = $_mailUtente;
    }

    public function getMail(){
        return $this->mailUtente;
    }

    public function setPremium($_premium){
        $this->premium = $_premium;
    }

    public function getPremium(){
        return $this->premium;
    }

    public function setCarta($_numeroCarta){
        $this->numeroCarta= $_numeroCarta;
    }

    public function getCarta(){
        return $this->numeroCarta;
    }

    public function setScadenza($_scadenzaCarta){
        $this->scadenzaCarta = $_scadenzaCarta;
    }

    public function getScadenza(){
        return $this->scadenzaCarta;
    }

    // public function insertCreditCard($_numeroCarta){

    //     // $_numeroCarta >= 16

    //     if($_numeroCarta != ""){
    //         $this->premium = true;
    //     }
    // }

}