<?php
session_start();

echo "Hello PHP 8<br>";

$var = 200.75;
$arr = array('coffee','tea','milk','soda','water');

for($i=1;$i<=20;$i++){
    echo $i."<br>";
}

foreach($arr as $val){
    echo $val."<br>";
}

// New feature in PHP 7
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1