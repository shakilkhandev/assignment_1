
<?php

$num1 = 10;
$num2 = 15;
$num3 = 6;

if ($num1 > $num2) {
    if ($num1 > $num3) {

        echo "The largest number is  $num1 ";
    } else {

        echo "The largest number is  $num3 ";
    }
} else {
    if ($num2 > $num3) {
        echo "The largest number is  $num2 ";
    } else {
        echo "The largest number is  $num3 ";
    }
}
