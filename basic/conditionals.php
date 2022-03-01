<?php

$age =20;
$salary = 300000;

//if statement
if($age ===20){
    echo "1";
}

//if short statements 
//withouth circles bravces
echo "<br>";
if($age === 20) echo '1';
echo "<br>";
//sample if - else
if($age >20){
    echo "1";
}else{
    echo "2";
}

//difference between == and ===
if($age == 20){
    echo "1" ."<br>";
}

if($age === '20'){
    echo "2" ."<br>";
}

//if AND
if($age == 20 && $salary === 300000){
    echo "do something";
    echo "<br>";
}


//if or
if($age > 20 || $salary === 300000){
    echo "do something";
    echo "<br>";
}


//ternary if

echo $age > 20 ? "young" : "old";

//short ternary
$myAge = $age ?: "18" ; 
echo "<pre>";
var_dump($myAge);
echo "</pre>";



///nulll coalescing operator

$myname = isset($name) ? $name :'john';
$myname = $name ?? 'john';
echo "<br>";

//switch
$userRole = "webadmin";
switch ($userRole) {
    case 'IT':
        echo "this is the it department";
        break;
        case 'admin':
            echo "this is the Admin department";
            break;
    
    default:
       echo "wrong try again";
        break;
}
