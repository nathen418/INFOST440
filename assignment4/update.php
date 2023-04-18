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
    <h3>Update a post from the guestbook</h3>
    <form action="update.php" method="POST">
        <?php
        // Define PHP variables using $_REQUEST
        $guestbook_id = isset($_REQUEST['guestbook_id']) ? strip_tags($_REQUEST['guestbook_id']) : '';
        $comment = isset($_REQUEST['comment']) ? strip_tags($_REQUEST['comment']): '';
        $secret = isset($_REQUEST['secret']) ? hash('sha256',$_REQUEST['secret']) : '';
        echo "<br>";
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && !$guestbook_id) {
            echo "<p style='color:red'>Post ID to update:</p>";
            echo "<input type='text' name='guestbook_id'><br><br>";
        } else {
            echo "<input type='hidden' name='guestbook_id' value='$guestbook_id'>";
        }
            echo "<p style='color:blue'>New comment:</p>";
            echo "<input type='text' name='comment' value=\"$comment\" ><br><br>";
        ?>
        <div style='color:green'>
            Post Secret you created when you made the post<br>
            (You need this to delete or update a post)
        </div>
        <input type="password" name="secret"><br><br>
        <?php
        if ($_SERVER['REQUEST_METHOD']) {
            echo "<button class='w3-btn w3-round-xxlarge w3-green'>Update entry $guestbook_id</button>";
        } else {
            echo "<button class='w3-btn w3-round-xlarge w3-green w3-hover-light-green'>Submit</button>";
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
            $query = "UPDATE guestbook SET comment = '$comment' WHERE guestbook_id = '$guestbook_id' AND post_secret = '$secret'";
            $result = mysqli_query($dbc, $query) or die('Your post ID or secret are incorrect.<br> <a href=\'index.php\'>Return to guestbook</a>');
            if (mysqli_affected_rows($dbc) > 0) {
                echo "<p style='color:green'>Your comment was updated!</p>";
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