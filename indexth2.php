<?php 

include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleOne', 2);
$circleThree = new ComparableCircle('circleOne', 4);

$test = $circleOne->compareTo($circleTwo);
echo('Comparable: <br>');
echo $test;
?>