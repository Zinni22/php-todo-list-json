<?php

// 1. trasformo l'array da json a php
$toDoString = file_get_contents('database.json');
$toDoList = json_decode($toDoString, true);


// 2. Response di axios
$response = [
    'success' => true,
    'message' => 'Ok',
    'code' => 2001,
    'toDos' => $toDoList
];


// 3. trasformo da php a json
$jsonResponse = json_encode($response);
header ('Content-Type: application/json');
echo $jsonResponse;

