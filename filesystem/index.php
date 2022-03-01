<?php

//magic constant

echo __DIR__."<br>";
echo __FILE__."<br>";

echo __LINE__."<br>";


//create directory
mkdir('hello');

//rename directory
//rename directory
//rename('test.php','test');

//delete directory
rmdir('hello');

//read files and folders inside directory
echo file_get_contents('text.txt');
$files = scandir('../');
    echo "<pre>";
    var_dump($files);
    echo "</pre>";

// file_get_contents , file_put_content

//write content inside the file

file_put_contents('text2.txt','hello world');
echo file_get_contents('text2.txt');


//write content inside the file
file_put_contents('text2.txt','hello world');
//file_get_contents();

//file_get_contents()  from url
$userviento = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo  $userviento;
$usuariosjason = json_decode($userviento);
echo "<pre>";
    var_dump($usuariosjason);
    echo "</pre>";

//file exists
echo file_exists('text2.txt');
//is_dir

echo is_dir('test1');

?>