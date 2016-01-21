<!DOCTYPE html>
<html>
<body>

<?php 
/**
 * Calculate micro seconds
 */
function microtime_float() {
	list($usec,$sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}

$time_st = microtime_float();
$y = rand(25000,90000);
for ($x=0 ; $x <= $y; $x++);
$y = rand(50000,90000);
for ($x=0 ; $x <= $y; $x++);
$y = rand(75000,90000);
for ($x=0 ; $x <= $y; $x++);
$y = rand(85000,90000);
for ($x=0 ; $x <= $y; $x++);
$y = rand(95000,100000);
for ($x=0 ; $x <= $y; $x++);
$time_end = microtime_float();

# sleep(2); # Sleep for 2 seconds before returning
$e_time = $time_end - $time_st;
echo "<h2>The number is: $y, elapsed time: $e_time (Seconds)</h2>";
?>   

</body>
</html>
