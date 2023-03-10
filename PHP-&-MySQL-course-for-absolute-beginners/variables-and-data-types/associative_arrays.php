<?php

$carsToyota = array(
  "make" => "Toyota",
  "model" => "Camry",
  "year" => 2018,
  "color" => "white"
);

foreach ($carsToyota as $key => $value) {
  echo $key . " : " . $value . "<br>";
}
