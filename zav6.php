<?php
echo '<html><body>';
echo 'Лабораторна робота #0301<br>';
echo 'Завдання 6 <br>';
echo ' В одновимірному числовому масиві всі додатні числа замінити нулями. <br>';
$array = array(12, 3, -2, 4, 2, 1, -5, 3, 5, 23, -3, 4, 2, -1);
echo '<pre>'; print_r($array); echo '</pre>';
echo "Змінений масив:  <br>";
for ($i = 0; $i < count($array); $i++){
  if ($array[$i] > 0 ){
      $array[$i] = 0;
  }
};
echo '<pre>'; print_r($array); echo '</pre>';
echo "<br>";
echo '</html>';
?>