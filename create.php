<?php
// 1. trasformo l'array da json a php
$toDoString = file_get_contents('database.json'); //restituisce una stringa
$toDoList = json_decode($toDoString, true); // qui trasforma la stringa in array associativo

// 2. do a newTask gli attributi che arrivano da POST(input)
$newTask = [
    'todo' => $_POST['task']['todo'],
    'done' => $_POST['task']['done'] == 'false' ? false : true, //trasformo la stringa in valore booleano
];
// aggiungo newtask alla lista
$toDoList[] = $newTask;

//3. trasormo di nuovo da php a json
$toDoListEncoded = json_encode($toDoList);
file_put_contents('database.json', $toDoListEncoded);

header ('Content-Type: application/json');
echo$toDoListEncoded;

?>