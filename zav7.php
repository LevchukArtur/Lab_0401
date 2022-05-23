<?php
echo '<html><body>';
echo 'Лабораторна робота #0301<br>';
echo 'Завдання 5 <br>';
echo 'Всі від’ємні елементи масиву MN(8,4) замінити їх квадратами.  <br>';
$array = [];
for ($i = 0; $i < 8; $i++ ){
    for ($j = 0; $j < 4; $j++) {
        $array[$i][$j] = rand(-50,50);
    }
}
echo '<pre>'; print_r($array); echo '</pre>';
echo "<br>";
echo "Перетворений масив: <br> ";
for ($i = 0; $i < 8; $i++ ){
    for ($j = 0; $j < 4; $j++) {
        if ($array[$i][$j] < 0) {
            $array[$i][$j] = pow($array[$i][$j], 2);
        }
    }
}
echo '<pre>'; print_r($array); echo '</pre>';
echo '</html>';
?>