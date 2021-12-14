<!DOCTYPE html>
<html>
<body>

<?php
echo "<h2>PHP with Echo!</h2>";
echo "Hello world!<br>";

echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> 
 <?php
print "<h2>PHP with Print!</h2>";
print "Hello world!<br>";

?> 
<?php
$a = array("red", "green", "blue");
print_r($a);

echo "<br>";

$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
print_r($b);
?>


</body>
</html>