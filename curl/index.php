<?php

$url = 'https://jsonplaceholder.typicode.com/users';

//sample example to get data
$resource =  curl_init($url);
curl_setopt($resource,CURLOPT_RETURNTRANSFER , true);
$result = curl_exec($resource);

$info = curl_getinfo($resource , CURLINFO_HTTP_CODE);
echo $result;
echo "<pre>";
var_dump($info);
echo "</pre>";
//get response status code