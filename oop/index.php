<?php

//include class person and heritance student class
require_once 'person.php';
require_once 'student.php';
//what is class and instance

//instance person 1
$p = new Person("jose", 'lorenzini');
$p->setAge(40);
echo "<br>";

// $p->name="jose";
// $p->surname='lorenzini';
//print values
echo "<pre>";
var_dump($p);
echo "</pre>";
echo $p->getAge();
echo "<br>";


//instance person 2
$p2 = new Person("pedro", 'arancibia');
$p2->setAge(50);
echo "<br>";
echo $p->getAge();
echo "<pre>";
var_dump($p2);
echo "</pre>";
//access static methods
echo Person::$counter;echo "<br>";
echo Person::getCounter();

//create person class in person.php //heritage student.php
echo "<br>";

echo "herencia de la clase student para person.php <br>";
$students = new Student('sam','xrp',"k190364");
$students->setId('1981');
echo "<br>";
echo "new id " . $students->getId();
//create instance of person

//using setter and getter



?>