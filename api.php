<?php

// 1. trasformo l'array da json a php
$toDoString = file_get_contents('database.json'); //restituisce una stringa
$toDoList = json_decode($toDoString, true); // qui trasforma la stringa in array associativo



// 2. Response di axios
$response = [
    'success' => true,
    'message' => 'Ok',
    'code' => 2001,
    'toDos' => $toDoList
];


// 3. trasformo da php a json
header ('Content-Type: application/json');
$jsonResponse = json_encode($response);
echo $jsonResponse;

