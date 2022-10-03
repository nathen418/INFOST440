<?php
// Define PHP variables using $_REQUEST ($_POST)
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$student = isset($_REQUEST['student']) ? $_REQUEST['student'] : '';

// Validation: Checks if all fields are filled (not NULL)
if (($fname !=NULL) AND ($lname !=NULL) AND ($student !=NULL)) {

    //All fields were filled in, so continue with the conditional
    if ($student == 'yes') {
        echo $fname." ".$lname.", We are happy that you are taking INFOST 440!";
    }
    else {
        echo $fname. ", You should consider taking INFOST 440.";
    }
    }
else {
    //when they were missing something in the form
    echo "Go back and fill out the missing information.";

    }

 ?>
