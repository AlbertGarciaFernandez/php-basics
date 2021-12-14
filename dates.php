<!DOCTYPE html>
<html>
<body>

<?php

//Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
    echo "Today is " . date("Y-m-d") . "<br>";
//Get the current date in any format
    echo "Current date is " . date("Y.m.d") . "<br>";
//Get the current day
    echo "Current day is " . date("l") . "<br>";
//Get the current month in numerical format (1-12)
    echo "Current month is " . date("m") . "<br>";
//Get the current minute with leading zeros (00 - 59)
    echo "Current minutes " . date("i") . "<br>";
?>

<!-- historial for use it
    d - Represents the day of the month (01 to 31)
    m - Represents a month (01 to 12)
    Y - Represents a year (in four digits)
    l (lowercase 'L') - Represents the day of the week 
    H - 24-hour format of an hour (00 to 23)
    h - 12-hour format of an hour with leading zeros (01 to 12)
    i - Minutes with leading zeros (00 to 59)
    s - Seconds with leading zeros (00 to 59)
    a - Lowercase Ante meridiem and Post meridiem (am or pm)
-->

</body>
</html>