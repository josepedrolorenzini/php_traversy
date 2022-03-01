<?php


class Student extends Person{
    public string $studentid;

    public function __construct($name,$surname,$studentid){
        parent::__construct($name,$surname);
        $this->age = 19;
        $this->studentid = $studentid;
        echo " " .  $studentid;
    }

    public function setId($studentid){
        $this->studentid =$studentid;
    }
    public function getId(){
        return $this->studentid;
    }
}