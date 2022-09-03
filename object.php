<?php
class test {

var string $name;
var string $address;
var string $country;
var int $age;



}


$ob = new test();
$ob->name = 'Jose Amandi de Almeida';
$ob->address = 'Rua Bairopite Hudi Laran Dili Timor-Leste';
$ob->country = 'Timor-Leste';

echo json_encode($ob->name).PHP_EOL;
echo json_encode($ob->address).PHP_EOL;
echo json_encode($ob->country).PHP_EOL;
