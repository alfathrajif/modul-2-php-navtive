<?php
$cars1 = "BMW";
$cars2 = "Audi";
$cars3 = "Mercedes";

$cars = array("BMW", "Audi", "Mercedes");
echo $cars[2];

$cars2 = array("Volve", "Chevy", "Volkswagen");

$cars = array_merge($cars, $cars2);

print_r($cars);
