<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php
    // PHP imports
    include 'header.php';
    include 'mysqli_connect.php';
    ?>
</head>

<body class="w3-container">
    <h3>Welcome to my guestbook, please sign it by clicking on the comment link above.</h3>
    <!-- have links to sort by fname, lname, date -->
    <p> Sort the posts </p>
    <a href='index.php?sort=fname&order=asc'>
        <button class='w3-btn w3-round-xxlarge w3-green w3-hover-orange'>First Name Ascending</button>
    </a>
    <a href='index.php?sort=fname&order=desc'> 
        <button class='w3-btn w3-round-xxlarge w3-green w3-hover-orange'>First Name Descending</button>
    </a>
    <a href='index.php?sort=lname&order=asc'>
        <button class='w3-btn w3-round-xxlarge w3-green w3-hover-orange'>Last Name Ascending</button>
    </a>
    <a href='index.php?sort=lname&order=desc'>
        <button class='w3-btn w3-round-xxlarge w3-green w3-hover-orange'>Last Name Descending</button>
    </a>
    <a href='index.php?sort=date&order=asc'>
        <button class='w3-btn w3-round-xxlarge w3-green w3-hover-orange'>Date Ascending</button>
    </a>
    <a href='index.php?sort=date&order=desc'>
        <button class='w3-btn w3-round-xxlarge w3-green w3-hover-orange'>Date Descending</button>
    </a>
    <?php
    // query the db to get all entries in the guestbook and sort by the chosen option or default
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['sort']) && isset($_GET['order'])) {
            $sort = $_GET['sort'];
            $order = $_GET['order'];
        } else {
            $sort = 'date';
            $order = 'DESC';
        }
        $results = mysqli_query($dbc, "SELECT guestbook_id, fname, lname, comment, date FROM guestbook ORDER BY $sort $order");
    }


    echo "<table class='w3-card-4'>";
    //Print the results in a table
    while ($row = mysqli_fetch_array($results)) {
        echo "<div class='w3-card-4 w3-blue' style='width:30%;'>";
        echo "<div class='w3-container w3-center'>";
        echo "<p> Post ID: " . $row['guestbook_id'] . "   |   Name: " . $row['fname'] . " " . $row['lname'] . "</p>";
        echo "</div>";
        echo "<div class='w3-container w3-center'>";
        echo "<p> Post: " . $row['comment'] . "</p>";
        echo "</div>";
        echo "<div class='w3-container w3-blue w3-center'>";
        echo "<p> Date: " . $row['date'] . "</p>";
        echo "<div class='w3-container w3-left'>";
        echo "<a href='update.php?guestbook_id=" . $row['guestbook_id'] . "&comment=" . $row['comment'] ."'>Update</a>";
        echo "  <a href='delete.php?guestbook_id=" . $row['guestbook_id'] . "'>Delete</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<br><br>";
    }
    echo "</table>";
    // PHP CARDS ADD THEM IN THE CSS
    ?>
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
</body>

</html>