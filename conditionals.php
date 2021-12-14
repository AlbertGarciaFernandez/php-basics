<!DOCTYPE html>
<html>
<body>

<?php

//Condition we are on Monday
$day = date("d");
if ($day == "Monday") {
    echo "We are on Monday" . "<br>";
}
//Condition october month
$month = date("month");
if ($month == 10) {
    echo "We are in October" . "<br>";
} else {
    echo "We are in" . date("F") . "<br>";
}


// Double condition minutes
$currentMinutes = date("i");
if ($currentMinutes < 10) {
    echo "the current minute is less than 10";
} elseif ($currentMinutes < 15) {
    echo "the current minute is less than 15";
} else {
    echo "does not meet any conditions";
}

// switch depending on the current day of the week
$dayweek = date("l");
switch ($dayweek) {
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wednesday":
        echo "Today is Wednesday";
        break;
    case "Thursday":
        echo "Today is Thursday";
        break;
    case "Friday":
        echo "Today is Friday";
        break;
    case "Saturday":
        echo "Today is Saturday";
        break;
    case "Sunday":
        echo "Today is Sunday";
        break;
}
?>

</body>
</html>