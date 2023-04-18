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

<body>
    <?php
    // get the guestbook_id from the GET request and create a button that deletes the entry with that id

    ?>

    <h3>Delete a post from the guestbook</h3>
    <form action="delete.php" method="POST">
        <?php
        // Define PHP variables using $_REQUEST
        $guestbook_id = isset($_REQUEST['guestbook_id']) ? strip_tags($_REQUEST['guestbook_id']) : '';
        $secret = isset($_REQUEST['secret']) ? hash('sha256', $_REQUEST['secret']) : '';
        ?>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && !$guestbook_id) {
            echo "<p style='color:red'>Post ID to delete:</p>";
            echo "<input type='text' name='guestbook_id'><br><br>";
        }
        ?>
        <div style='color:green'>
            Post Secret you created when you made the post<br>
            (You need this to delete or update a post)
        </div>
        <input type="password" name="secret"><br><br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && !$guestbook_id) {
            echo "<button class='w3-btn w3-round-xxlarge w3-green w3-hover-orange'>Submit</button>";
        }
        ?>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $guestbook_id = isset($_GET['guestbook_id']) ? $_GET['guestbook_id'] : '';
            if ($guestbook_id) {
                echo "<input type='hidden' name='guestbook_id' value='$guestbook_id'>";
                echo "<button class='w3-btn w3-round-xxlarge w3-red '>Delete entry $guestbook_id</button>";
                echo "<br><a href='index.php'>Return to guestbook</a>";
            }
        }
        ?>
    </form>
    <?php
    // Check if form was ever submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Validation: Checks if all fields are filled
        if (empty($guestbook_id)) {
            echo "<p style='color:red'>Please enter a number of a post</p>";
        } else if (!empty($secret)) {
            // Insert the data into the database
            $query = "DELETE FROM guestbook WHERE guestbook_id = '$guestbook_id' AND post_secret = '$secret'";
            $result = mysqli_query($dbc, $query) or die('Your post ID or secret are incorrect.<br> <a href=\'index.php\'>Return to guestbook</a>');
            if (mysqli_affected_rows($dbc) > 0) {
                echo "<p style='color:green'>Your comment was deleted!</p>";
            } else {
                echo "<p style='color:red'>Your post ID or secret are incorrect.</p>";
                echo "Reloading in 2 seconds...";
                echo "<script> setTimeout(function(){ javascript:history.go(-1) }, 2000); </script>";
            }
            echo "<a href='index.php'>Return to guestbook</a>";
        } else {
            echo "<p style='color:red'>Please enter a secret</p>";
        }
    }
    ?>
    <br>
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
</body>

</html>