<?php
class Person {
    protected $position;
    protected $name;
    protected $email;
    
    public function __construct($position, $name, $email) {
        $this->position = $position;
        $this->name = $name;
        $this->email = $email;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getPosition() {
        return $this->position;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getEscapedEmail() { 
        return str_replace('@', ' – at – ', $this->email);
    }
}