<?php

//creare arrays

$fruits = ["banana" , "apple" , "orange"];
$fruta = array("pina" , "sandias","naranjas");


//print whoole array
echo "<pre>";
var_dump($fruits);
echo "</pre>";

//get element by index
echo $fruits[2];

//set element sby index
$fruits[0] = "peach";
echo "<pre>";
var_dump($fruits);
echo "</pre>";

//check if array has elements at index
echo isset($fruits[3]);

//print the length of the array
echo count($fruits).'<br>';

//addd elements at the end of the array
array_push($fruits, "watermelon");
echo "<pre>";
var_dump($fruits);
echo "</pre>";


//remove elements rom the end of the array
echo array_pop($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

///add element in the begginign
array_unshift($fruits,"damasco");
echo "<pre>";
var_dump($fruits);
echo "</pre>";

//split the string into an array
$string = "banana,manzana,orange";
echo "<pre>";
var_dump(explode("," ,  $string));
echo "</pre>";

//combine array elements into string
echo implode(" & " , $fruits);

//check if element exist in the array
in_array('apple', $fruits);
echo "<pre>";
var_dump(in_array('apple', $fruits));
echo "</pre>";
 
//search element index in the array
echo "<pre>";
var_dump(array_search('Mango', $fruits));
echo "</pre>";
echo "<pre>";
var_dump(array_search('apple', $fruits));
echo "</pre>";

//merge 2 arrays array_merge() ;
$vegetables = ["potato","beetroot","rocket","mushrooms"];
array_merge($fruits, $vegetables);
echo "<pre>";
var_dump(array_merge($fruits, $vegetables));
echo "</pre>";
echo "<pre>";
var_dump([...$fruits , ...$vegetables]);
echo "</pre>";


/// ================
// associative arrays
////=-====================
echo "<h1>associative arrays</h1>";
//create associative array
$person =[
    'name'=> "Sam",
    "surname" => "troublemaker",
    "age"=>30,
    "hobbies" => [ 'bicycle' , ' hacking' , 'Crypto']
];

echo "<pre>";
var_dump($person);
echo "</pre>";
echo "<pre>";
print_r($person);
echo "</pre>";


//get element by key
echo $person['name']."<br>";
//st element by key
 $person['name']= "Jose pedro";
 $person['surname']= "Lorenzini";
 echo "<pre>";
var_dump($person);
echo "</pre>";


///null coalescing assignemnt operators

// if(!isset($person['address'])){
//     $person['address'] = 'unknown';
// }
// echo "<pre>";
// var_dump($person);
// echo "</pre>";

$person['address'] = $person['address'] ?? 'unknown';
echo "<pre>";
var_dump($person);
echo "</pre>";

//check if array has specific key


//print keys of the array
echo "<pre>";
var_dump(array_keys($person));
echo "</pre>";
//print the values of the array
echo "<pre>";
var_dump(array_values($person));
echo "</pre>";


///two dimensional arrays
echo "<h3>two dimensional arrays</h3>";
$todos = [
        ['title'=>'prestashop' , 'completed'=>true],
        ['title'=>'php 2' , 'completed'=>false]

];

echo "<pre>";
var_dump($todos);
echo "</pre>";

?>
