<html>
<body>

<?php 
function form_post_handle()
{
    // This function spits out the data that was entered in the form on form.php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $if = $_POST["if"];
    $vehicle1 = $_POST["vehicle1"];
    $vehicle2 = $_POST["vehicle2"];
    $cars = $_POST["cars"];
    echo "First name: " . $fname . "<br>";
    echo "Last name: " . $lname . "<br>";
    echo "Are you a student? " . $if . "<br>";
    echo "Do you have a bike? " . $vehicle1 . "<br>";
    echo "Do you have a car? " . $vehicle2 . "<br>";
    echo "What car do you have? " . $cars . "<br>";
}
echo "This page repeats back to you the data you entered in the form on <a href=\"https://sois-440.antaresnetwork.com/Assignment1/form.php\">https://sois-440.antaresnetwork.com/Assignment1/form.php</a><br><br>";
form_post_handle();
?>

</body>
</html>