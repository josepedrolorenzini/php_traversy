<?php


//function print hello world

function hello(){
    echo " hello World <br>";
}
hello();
hello();
hello();
//function with argument
function hola($name){
    //echo "hello i am $name";
    return "hello i am $name";
}
echo hola("jose pedro") . "<br>";

//createsum of 2 functions

function suma($a , $b){
    return $a + $b ;
}
echo suma(4,5);
// xcreate function to sum all numbers using $nums

function sum(...$nums){
    echo "<pre>";
    var_dump($nums);
    echo "</pre>";
}
echo sum(1,2,3,4,5,6);
//for loops
for ($i=0; $i <= 6; $i++) { 
   echo $i . '<br>';
}
 ///function with foreach
function sumas(...$numss){
    $sum = 0;
    foreach ($numss as $n) {
        $sum += $n;
    }
    return $sum;
}
echo sumas(1,2,3,4,5,6) . "<br>";


//arrrows functions

function zum(...$mun){
return array_reduce($mun , fn($carry , $n) => $carry + $n);
}
echo zum(1,2,3,4,5,6);