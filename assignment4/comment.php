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
    <h3>Fill out the form below to submit your comment in the guestbook</h3>
    <form action="comment.php" method="POST">
        <?php
        // Define PHP variables using $_REQUEST
        $fname = isset($_REQUEST['fname']) ? strip_tags($_REQUEST['fname']) : '';
        $lname = isset($_REQUEST['lname']) ? strip_tags($_REQUEST['lname']) : '';
        $comment = isset($_REQUEST['comment']) ? mysqli_real_escape_string($dbc, $_REQUEST['comment']): '';
        $secret = isset($_REQUEST['secret']) ? hash('sha256',$_REQUEST['secret']) : '';

        // Check if form was ever submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Validation: Checks if all fields are filled
            if (empty($fname) || empty($lname) || empty($comment) || empty($secret)) {
                echo "<p style='color:red'>Please fill out all fields</p>";
            } else {
                // Insert the data into the database

                $query = "INSERT INTO guestbook (fname, lname, comment, post_secret) VALUES ('$fname', '$lname', '$comment', '$secret')";
                $result = mysqli_query($dbc, $query) or die('Error querying database.');
                echo "<p style='color:green'>Comment successfully added to the guestbook!</p>";
                echo "<a href='index.php'>Return to guestbook</a>";
            }
        }
        ?>
        <br>
        First Name:<br>
        <input type="text" name="fname"><br>
        Last Name:<br>
        <input type="text" name="lname"><br>

        Comments:<br>
        <textarea name="comment" cols="40" rows="5"></textarea><br>

        <p style='color:green'>Post Secret (You need this to delete or update a post) </p>
        <input type="password" name="secret"><br>

        <button class="w3-btn w3-round-xlarge w3-green w3-hover-light-green">Post</button>
    </form>
    <br>
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
</body>

</html>