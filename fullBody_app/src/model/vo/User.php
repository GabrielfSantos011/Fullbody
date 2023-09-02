<?php

namespace fullBody\Mvc\model\vo;


class User {

   public readonly string $email;
   public readonly string $passWord;

    public function __construct($name, $passWord) {
        
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassWord($passWord){
        $this->email = $passWord;
    }
}