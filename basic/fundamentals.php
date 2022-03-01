<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Hello World";

    /// single line comments
    #single line
    /* multi line comment */
    ?>
     <?php
     echo "<br>";
    echo "hola mundo";


    ///variables
    $name = 'jose'; //string
    $age = 40; //integer
    $ismale =  true; //boolean
    $height =1.85;//float or double
    $salary = null; //null
    echo "<br>";
    echo " my name is $name";
    echo "<br>";
    echo " my age is $age";
    echo "<br>";
    if($ismale){
        echo "i am a male";
    }else{
      echo   "i am female";
    }
    echo "<br>";
    echo gettype($name);
    echo "<br>";
    echo gettype($height);


    // varibale checking functions
    is_string($name);
    is_int($age);
    is_bool($ismale);
    is_double($height);

    if(is_string($age)){
        echo "<br>";
        echo "is a string";
    }else{
        echo "<br>";
        echo "age". $age . " is integer";
    }

    //constant are variable u can not change
    echo "<br>";
    define("PI" , 3.14);
    echo PI."<br>";
    //using php built-in constant
    echo SORT_ASC.'<br>';
    echo PHP_INT_MAX.'<br>';


    ///declaring numbers
    $a=5;
    $b=4;
    $c=1.2;
    echo ($a +$b) *$c ."<br>";
    echo $a +$b *$c;

    //function to check if is numner
    is_float(1.25);
    is_double(1.25);
    is_int(5);
    is_numeric("3.45");
    ?>
</body>
</html>