<?php
echo '<html><body>';
echo 'Лабораторна робота #0301<br>';
echo 'Завдання 5 <br>';
echo 'Скласти програму, яка розташовує елементи 
заданого одновимірного масиву в 
оберненому порядку. <br>';
$array = array(12, 3, 2, 4, 2, 1, -5, 3, 5, 23, 3, 4, 2, 1);
echo '<pre>'; print_r($array); echo '</pre>';
echo "Реверсивний масив:  <br>";
$r_array =  array_reverse($array);
echo '<pre>'; print_r($r_array); echo '</pre>';
echo "<br>";
echo '</html>';
?>