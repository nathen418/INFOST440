<form action="calendar.php" method="POST">
<?php

// Make the months array:
//(completely enter months)
$months = array ( 1 => 'January', 'February', 'March','April', 'May','June');

// Make the months pull-down menu:
echo '<select name="month">';
foreach ($months as $key => $value) {
    echo "<option value=\"$key\">$value</option>\n";
} 
echo '</select>';
 
// Make the days and years arrays:
$days = range (1, 31);
$years = range (1920, 2022);

// Make the days pull-down menu
echo '<select name="day">';
foreach ($days as $value) {
    echo "<option value=\"$value\"> $value</option>\n";
} 
echo '</select>';

// Make the years pull-down menu
echo '<select name="year">';
foreach ($years as $value) {
    echo "<option value=\"$value\"> $value</option>\n";
} 
echo '</select>';

 ?>
</form>
