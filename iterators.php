<!DOCTYPE html>
<html>
<body>

<?php
// use for 
for ($x = 0; $x <= 100; $x++) {
    echo "The number is: $x <br>";
}

// foreach
$fruits = array("mango", "kiwi", "coconut", "orange");

foreach ($fruits as $value) {
    echo "$value <br>";
}

//while

while($i<6){
        echo "<p>The number is $i,</p>";
        $i++;
    }

// do while loop
$y = 1;

do {
    echo "The number is: $y <br>";
$y++;
} while ($y <= 5);
?> 

</body>
</html>