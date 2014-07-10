<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Contatto{
    
    private $id;
    
    private $username;
    private $password;
    
    private $nome;
    private $cognome;
    private $indirizzo;
    private $budget;
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function getUsername(){
        return $this->username;
    }
    
    public function setUsername($usr){
        $this->username = $usr;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function setPassword($psw){
        $this->password = $psw;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setCognome($cognome){
        $this->cognome = $cognome;
    }
    
    public function getCognome(){
        return $this->cognome;
    }
    
    public function setIndirizzo($indirizzo){
        $this->indirizzo = $indirizzo;
    }
    
    public function getIndirizzo(){
        return $this->indirizzo;
    }
    
    public function setBudget($budget){
        $this->budget = $budget;
    }
    
    public function getBudget(){
        return $this->budget;
    }
    
    public function ricarica($credito){
        $this->budget = $this->budget + $credito;
    }
    
    
}
?>
