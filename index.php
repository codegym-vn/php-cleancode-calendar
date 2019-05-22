<?php

require "src/CalendarUtils.php";

$calender = new CalendarUtils();
$numberOfDays = $calender->getDaysOfMonth(5,2019);
echo $numberOfDays;

