<form action="array_dropdown_sticky.php" method="post">
<?php 

// define the arrays that will be used for the dropdowns
$daysarray = array_merge(array ('Day'), range(1, 31));
$monthsarray = array_merge(array ('Month'), range(1, 12));
$yearsarray = array_merge(array ('Year'), range(1920, 2022));

// Make a select menu for days and make it sticky
echo '<select name="day">';
// Loop through the days array
foreach ($daysarray as $value) {
    if ($_POST['day'] == $value) {
        $isselected = "selected";
    }
    else {
        $isselected = "";
    }
    // Output the option tag with the value and selected attribute if selected
    echo "<option value=\"$value\" $isselected>$value"."</option>\n";
}
echo '</select>';

// Make a select menu for months and make it sticky
echo '<select name="month">';
// loop through the months array
foreach ($monthsarray as $value) {
    if ($_POST['month'] == $value) {
        $isselected = "selected";
    }
    else {
        $isselected = "";
    }
    // Output the option tag with the value and selected attribute if selected
    echo "<option value=\"$value\" $isselected>$value"."</option>\n";
}
echo '</select>';

// Make a select menu for years and make it sticky
echo '<select name="year">';
// loop through the years array
foreach ($yearsarray as $value) {
    if ($_POST['year'] == $value) {
        $isselected = "selected";
    }
    else {
        $isselected = "";
    }
    // Output the option tag with the value and selected attribute if selected
    echo "<option value=\"$value\" $isselected>$value"."</option>\n";
}
echo '</select>';
?>
<input type="submit" value="submit"/>
</form>
