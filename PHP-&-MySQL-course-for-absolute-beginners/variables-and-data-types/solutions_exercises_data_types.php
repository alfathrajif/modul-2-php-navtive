<?php

// Latihan 1
$x = 3;
$y = 2;
$z = ($x + $y) * 5;
echo "The total is $z";

echo "<hr>";

// Latihan 2
$price = 2000000;
$vat = 0.05;
$totalPrice = $price * $vat;
echo "Price: $price <br>";
echo "Vat: $vat <br>";
echo "Total Price: $totalPrice <br>";

echo "<hr>";

// Latihan 3
$x = 2000000;
$y = 5000000;
$z = 8250000;

$average = ($x + $y + $z) / 3;
echo "The average is - Rp. " . number_format($average, 2);

echo "<hr>";

// Latihan 4
$countries = array(
  "Netherlands" => "Amsterdam",
  "Germany" => "Berlin",
  "Thailand" => "Bangkok"
);

foreach ($countries as $country => $capital) {
  echo "The capital of $country is $capital <br>";
}

echo "<hr>";

// Latihan 5
$cm = 400;
$cmToInch = $cm * 0.39;

echo "$cm centimeters is $cmToInch inches.";
echo "<hr>";

// Latihan 6
$expenses = array(40, 70, 20, 85, 40);
$amountOfExpenses = 0;
$totalAmount = 0;

foreach ($expenses as $expense) {
  $totalAmount += $expense;
  $amountOfExpenses += 1;
}

echo "My $amountOfExpenses biggest expenses were $totalAmount <br>";

echo "<hr>";

// Latihan 7

$weather = ["sunny", "cloudy", "rain", "storm", "wind", ""];

echo "Yesterday was a beautiful day with $weather[0] skies and warm temperatures. Today, however, it's very $weather[1] outside and we're expecting $weather[2] later in the day. The $weather[4] is starting to pick up and the humidity is increasing, making it feel quite sticky and uncomfortable. It's definitely not the best day to go outside and enjoy the fresh air. In fact, we might even experience some thunder$weather[3]s later in the evening, so it's important to stay safe and dry. Despite the current weather conditions, the forecast for tomorrow is looking much better with clear skies and cooler temperatures.";
