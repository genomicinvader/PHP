<?php

function addNumber($value1,$value2){
$value = $value1 + $value2;
return $value;
}

$result = addNumber(5, 10);
echo $result;

echo "<br/>";

$result = addNumber(5, $result);
echo "<br/>";

$result = addNumber(5, $result);
?>

