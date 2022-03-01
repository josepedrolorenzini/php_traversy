<?php

//while
while(true){
    //otherwise will run forever
break;
}


//loop with counter
$counter = 0;

while ($counter <= 10) {
   echo $counter .'<br>';
   //this break the loop in 5
   if($counter === 5){
       break;
   }
   $counter++ ;
}

//do while
do {
    echo "do while " . $counter . "<br>";
    $counter++;
} while ($counter <= 10);


///for
echo "<h1>for loop</h1> <br>";
for ($i=0; $i < 10 ; $i++) { 
    echo "for loop" . $i . "<br>";
}

///foreach
echo "<h1>foreach</h1> <br>";
$countries = ['chile' , 'australia' , 'peru' , 'ukraine'];
foreach ($countries as $paises) {
    echo $paises . "<br>";
}

foreach ($countries as $i => $paises) {
    echo $i . $paises . "<br>";
}


///foreach associate arrays
//create associative array
echo "<h4>foreach associative arrays</h4> <br>";
$person =[
    'name'=> " Sam ",
    "surname" => " troublemaker ",
    "age"=>30,
    "hobbies" => [ ' bicycle ' , ' hacking ' , ' Crypto ']
];

foreach ($person as $key => $value) {
    if(is_array($value)){
       // echo strtoupper("key: " ) . $key . " ::::: " . strtoupper(' value: ') .  $value . "<br>";
       echo strtoupper("key: " ) . $key . " ::::: " . strtoupper(' value: ') .  implode("," , $value) . "<br>";
       
    }else{
        echo strtoupper("key: " ) . $key . " ::::: " . strtoupper(' value: ') .  $value . "<br>";
    }
    
}