<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 * Description of Kontrahent
 *
 * @author Krzysztof
 */
class Kontrahent {
    private $nazwa;
    private $adres;
    private $telefon;
    private $mail;
    
    public function SetNazwa ($na)
    {
        $this->nazwa =$na;
    }
    
    public function SetAdres ($na)
    {
        $this->adres =$na;
    }
    
    public function SetTelefon ($na)
    {
        $this->telefon =$na;
    }
     public function SetMail ($na)
    {
        $this->mail =$na;
    }
    
    public function GetNazwa ()
    {
        return $this->nazwa;
    }
    public function GetAdres ()
    {
        return $this->adres;
    }
    
    public function GetTelefon ()
    {
        return $this->telefon;
    }
    
      public function GetMail ()
    {
        return $this->mail;
    }
    
    public function __toString() {
        return $this->nazwa.' '.$this->adres;
    }
    
            
}
