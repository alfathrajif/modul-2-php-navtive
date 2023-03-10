<?php

$x = 20;
$y = 42;

if ($x < $y) {
  $highest = $y;
  $lowest = $x;
  echo "Highest value is $highest. Lowest value is $lowest";
} elseif ($x > $y) {
  $highest = $x;
  $lowest = $y;
  echo "Highest value is $highest. Lowest value is $lowest";
}

echo "<hr>";

$number = 3;

switch ($number) {
  case 1:
    echo "Spades";
    break;
  case 2:
    echo "Hearts";
    break;
  case 3:
    echo "Diamonds";
    break;
  case 4:
    echo "Clubs";
    break;
  default:
    echo "We haven't it";
    break;
}

echo "<hr>";

$score = 90;

if ($score >= 90 && $score <= 100) {
  echo "Your Score is A";
} elseif ($score >= 80 && $score <= 89) {
  echo "Your Score is B";
} elseif ($score >= 70 && $score <= 79) {
  echo "Your Score is C";
} elseif ($score >= 60 && $score <= 69) {
  echo "Your Score is D";
} elseif ($score <= 59) {
  echo "Your Score is F";
}

echo "<hr>";

$workHours = 2;
$olderYears = 3;
$failures = 6;

if ($workHours >= 10000 || $olderYears > 7 || $failures >= 25) {
  echo "Beli Baru";
} else {
  echo "Hemat Guys";
}

echo "<hr>";

$year = 2001;

if ($year % 400 == 0 || $year % 4 == 0) {
  echo $year . " is a leap year";
} else {
  echo $year . " is not a leap year";
}

echo "<hr>";

$o = 1;
$p = 20;

while ($o <= $p) {
  $multiplication = $o * $p;
  echo $o . " * " . $p . " is " . $multiplication . "<br>";
  $o++;
}

echo "<hr>";

$num1 = 0;
$num2 = 1;
$counter = 0;

while ($counter < 11) {
  echo ' ' . $num1;
  $num3 = $num2 + $num1;
  $num1 = $num2;
  $num2 = $num3;
  $counter++;
}
