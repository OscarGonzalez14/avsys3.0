<?php
// Create two new DateTime-objects...
$date1 = new DateTime('2006-04-12 12:30:00');
$date2 = new DateTime('2006-04-14 11:30:00');
// The diff-methods returns a new DateInterval-object...
$diff = $date2->diff($date1);

// Call the format method on the DateInterval-object
echo $diff->format('%h hours');