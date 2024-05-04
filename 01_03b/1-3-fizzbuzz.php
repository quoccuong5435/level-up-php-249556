<?php
$i = 1;
$list_array = [];
while ($i <= 100) {
  if ($i % 15 == 0) {
    echo "FizzBug";
  } else if ($i % 3 == 0) {
    echo "Fizz";
  } else if ($i % 5 == 0) {
    echo "Buzz";
  }
  $i++;
  echo '</br>';
}
