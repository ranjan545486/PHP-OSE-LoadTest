<!DOCTYPE html>
<html>
<body>

<?php 
$date_st = new DateTime();
$y = rand(400,750);
for ($x=0 ; $x <= $y; $x++);
$date_end = new DateTime();
sleep(2); # Sleep for 2 seconds before returning
$e_time = $date_end - $date_st;
echo "<h2>The number is: $y, elapsed time: $e_time (msec)</h2>";
?>   

</body>
</html>
