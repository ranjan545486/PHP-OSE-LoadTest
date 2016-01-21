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

$y = rand(95000,100000);
for ($x=0 ; $x <= $y; $x++)
	for (; $y >= 0; $y--);
$y = rand(95000,100000);
for ($x=0 ; $x <= $y; $x++)
	for (; $y >= 0; $y--);
$y = rand(95000,100000);
for ($x=0 ; $x <= $y; $x++)
	for (; $y >= 0; $y--);
$y = rand(95000,100000);
for ($x=0 ; $x <= $y; $x++)
	for (; $y >= 0; $y--);
$y = rand(95000,100000);
for ($x=0 ; $x <= $y; $x++)
	for (; $y >= 0; $y--);

$time_end = microtime_float();

# sleep(2); # Sleep for 2 seconds before returning
$e_time = $time_end - $time_st;
echo "<h2>Elapsed time: $e_time (Seconds)</h2>";
?>   

</body>
</html>
