<?php

namespace App\Entity;

class User {
    /**
     * 2propriétés
     * -nom => $name
     * -email => $email
     */

    /**
     * PUBLIC :accessible a tous
     * PROTECTED : accessible dans les classes mere et fille
     * PRIVATE : accessible que dans la classe
     */

    protected $email;
    protected $name;

    //getter du name
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }
    
    //getter du name
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}