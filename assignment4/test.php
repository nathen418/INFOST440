<?php
//***********************************************
//NOTE - YOU NEED TO SET UP YOUR SQL QUERY IN ORDER FOR THESE SCRIPTS TO WORK

//SQL query Example with Pagination:
//$query = "SELECT * FROM users LIMIT $start, $display";

//SQL query Example with Sorting:
//$query = "SELECT * FROM users ORDER BY $order_by";

//SQL query Example with Both Pagination and Sorting:
//$query = "SELECT * FROM users ORDER BY $order_by LIMIT $start, $display";
//***********************************************


//***********************************************
//PAGINATION SETUP START
//From Textbook Script 10.5 - #5
//***********************************************

// Number of records to show per page:
$display = 5;

// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.
$pages = $_GET['p'];
} else { // Need to determine.
// Count the number of records:
$q = "SELECT COUNT(guestbook_id) FROM guestbook";
$r = mysqli_query ($dbc, $q);
$rowp = mysqli_fetch_array ($r, MYSQLI_NUM);
$records = $rowp[0];
// Calculate the number of pages...
if ($records > $display) { // More than 1 page.
$pages = ceil ($records/$display);
} else {
$pages = 1;
}
} // End of p IF.

// Determine where in the database to start returning results...
if (isset($_GET['s']) && is_numeric($_GET['s'])) {
$start = $_GET['s'];
} else {
$start = 0;
}

//***********************************************
//PAGINATION SETUP END
//***********************************************




//***********************************************
//PAGINATION PREVIOUS AND NEXT PAGE BUTTONS/LINKS START
//***********************************************

// Make the links to other pages, if necessary.
if ($pages > 1) {

echo '<br /><p>';
$current_page = ($start/$display) + 1;

// If it's not the first page, make a Previous button:
if ($current_page != 1) {
echo '<a href="?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
}

// Make all the numbered pages:
for ($i = 1; $i <= $pages; $i++) {
if ($i != $current_page) {
echo '<a href="?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
} else {
echo $i . ' ';
}
} // End of FOR loop.

// If it's not the last page, make a Next button:
if ($current_page != $pages) {
echo '<a href="?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
}

echo '</p>'; // Close the paragraph.

} // End of links section.

//***********************************************
//PAGINATION PREVIOUS AND NEXT PAGE BUTTONS/LINKS END
//***********************************************
