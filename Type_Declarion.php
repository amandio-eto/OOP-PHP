<?php
require_once "object.php";


$data = new test();
$data->name = "Jose Amandio de Almeida";
$data->country = 'Timor-Leste';
$data->address = 'Rua China Rate Lahane Oreintal Dili Timor-Leste';
$data->age = 22;

json_decode($data->name).PHP_EOL;
json_decode($data->country).PHP_EOL;
json_decode($data->address).PHP_EOL;
json_decode($data->age).PHP_EOL;


