<form action="array_dropdown_sticky.php" method="post">
<?php 
// Array Sticky Codes 
// Make your day drop-down menu sticky

// This assumes your posted value is 'Day' & your created array is $daysarray
$days = range(1, 31);
$daysdefault = array ('Day');
$daysarray = array_merge($daysdefault, $days);

// Outputs the opening HTML tag for a drow-down menu
echo '<select name="day">';

// Loops through array and cheks to see if the POST value for 'day' is
//equal to the current value in the dropdown menu.

foreach ($daysarray as $value) {
    if ($_POST['day'] == $value) {
        //Current option in dropdown menu was the POST value,
        //then make a variable $isselected set to the HTML value of selected
        $isselected = "selected";
    }
    else {
        //Current option in dropdown menu was NOT the POST value,
        //then make a variable $isselected set to nothing 
        $isselected = "";
    }
    // Output the HTML option tag, with $isselected in it
    //this will put the tag 'selected' in the sticky value
    //and none of the others
    echo "<option value=\"$value\" $isselected>$value"."</option>\n";
}

echo "</select>";
?>
<input type="submit" valu="submit" />
</form>
