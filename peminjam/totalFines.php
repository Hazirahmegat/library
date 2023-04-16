<?php

// Define the due date and the current date
$dueDate = strtotime('2023-04-10');
$currentDate = time();

// Calculate the difference in seconds between the due date and the current date
$timeDiff = $currentDate - $dueDate;

// Convert the difference into days
$daysLate = round($timeDiff / (60 * 60 * 24));

// Define the fine per day
$finePerDay = 0.50;

// Calculate the total fine
$totalFine = $daysLate * $finePerDay;

// Output the total fine
echo "The total fine for returning the book late is $" . number_format($totalFine, 2) . ".";
?> 
