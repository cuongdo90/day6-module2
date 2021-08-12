<?php 
include "CircleComparator.php";

$sircleOne = new Circle("circleOne", 6);
$sircleTwo = new Circle("circleTwo", 6);
$sircleComparator = new CircleComparator();
var_dump($sircleComparator->compare($sircleOne, $sircleTwo));