<?php


$join = new DateTime('2020-05-30');

$terminate = new DateTime();

$span = $terminate->diff($join);
//print_r($span);

echo "Your subscription ends in {$span->y} Years, {$span->m} Month and {$span->d} days!";