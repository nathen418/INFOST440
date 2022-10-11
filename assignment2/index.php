<!DOCTYPE html>
<html>

<head>
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include 'header.php'; ?>
    <!-- write a form with 3 text fields, 1 radio button, and 3 check boxes -->
    <form action="index.php" method="post">
        <?php
        // Define PHP variables
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $hobby = isset($_POST['hobby']) ? $_POST['hobby'] : '';
        $bio = isset($_POST['bio']) ? $_POST['bio'] : '';
        $day = isset($_POST['day']) ? $_POST['day'] : '';
        $month = isset($_POST['month']) ? $_POST['month'] : '';
        $year = isset($_POST['year']) ? $_POST['year'] : '';
        ?>

        <!-- Creating the form and injecting PHP code to make it sticky -->
        <label for="name">Name:</label>
        <input type="text" name="name" <?php if (isset($name)) echo "value='$name'"; ?> id="name">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" <?php if (isset($email)) echo "value='$email'"; ?> id="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" <?php if (isset($password)) echo "value='$password'"; ?> id="password">
        <br>
        <input type="radio" name="gender" <?php if ($gender == "male") echo "checked='checked'"; ?>value="male">
        Male
        <input type="radio" name="gender" <?php if ($gender == "female") echo "checked='checked'"; ?>value="female">
        Female
        <input type="radio" name="gender" <?php if ($gender == "other") echo "checked='checked'"; ?>value="other">
        Other
        <br>
        <input type="checkbox" name="hobby"
            <?php if ($hobby == "reading") echo "checked='checked'"; ?>value="reading">Reading
        <input type="checkbox" name="hobby"
            <?php if ($hobby == "cooking") echo "checked='checked'"; ?>value="cooking">Cooking
        <input type="checkbox" name="hobby"
            <?php if ($hobby == "coding") echo "checked='checked'"; ?>value="coding">Coding
        <br>
        Bio:
        <input type="textarea" name="bio" <?php if (isset($bio)) echo "value='$bio'"; ?>id="bio">
        <br>
        Birthday:
        <?php
        // define the arrays that will be used for the dropdowns
        $daysarray = array_merge(array('Day'), range(1, 31));
        $monthsarray = array_merge(array('Month'), range(1, 12));
        $yearsarray = array_merge(array('Year'), range(1920, 2022));

        // Make a select menu for days and make it sticky
  
        echo '<select name="day">';
        // Loop through the days array
        foreach ($daysarray as $value) {
            if ($_POST['day'] == $value) {
                $isselected = "selected";
            } else {
                $isselected = "";
            }
            // Output the option tag with the value and selected attribute if selected
            echo "<option value=\"$value\" $isselected>$value" . "</option>\n";
        }
        echo '</select>';

        // Make a select menu for months and make it sticky
        echo '<select name="month">';
        // loop through the months array
        foreach ($monthsarray as $value) {
            if ($_POST['month'] == $value) {
                $isselected = "selected";
            } else {
                $isselected = "";
            }
            // Output the option tag with the value and selected attribute if selected
            echo "<option value=\"$value\" $isselected>$value" . "</option>\n";
        }
        echo '</select>';

        // Make a select menu for years and make it sticky
        echo '<select name="year">';
        // loop through the years array
        foreach ($yearsarray as $value) {
            if ($_POST['year'] == $value) {
                $isselected = "selected";
            } else {
                $isselected = "";
            }
            // Output the option tag with the value and selected attribute if selected
            echo "<option value=\"$value\" $isselected>$value" . "</option>\n";
        }
        echo '</select>';
        ?>
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <div class="validation">
        <?php
            // Validate form input
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (empty($name)) {
                    echo "<p>Please enter your name.</p><br>";
                } else {
                    echo "<p>Your name is $name.</p<br>";
                }
                if (empty($email)) {
                    echo "<p>Please enter your email.</p><br>";
                } else {
                    echo "<p>Your email is $email.</p><br>";
                }
                if (empty($password)) {
                    echo "<p>Please enter your password.</p><br>";
                } else {
                    echo "<p>Your password is $password.</p><br>";
                }
                if (empty($gender)) {
                    echo "<p>Please enter your gender.</p<br><br>";
                } else {
                    echo "<p>Your password is $gender.</p><br>";
                }
                if (empty($hobby)) {
                    echo "<p>Please enter your hobby.</p><br>";
                } else {
                    echo "<p>Your hobby is $hobby.</p><br>";
                }
                if (empty($bio)) {
                    echo "<p>Please enter your bio.</p><br>";
                } else {
                    echo "<p>Your bio is $bio.</p><br>";
                }
                if (empty($day)) {
                    echo "<p>Please enter your day.</p><br>";
                } else {
                    echo "<p>Your day is $day.</p><br>";
                }
                if (empty($month)) {
                    echo "<p>Please enter your month.</p<br><br>";
                } else {
                    echo "<p>Your month is $month.</p><br>";
                }
                if (empty($year)) {
                    echo "<p>Please enter your year.</p><br>";
                } else {
                    echo "<p>Your year is $year.</p><br>";
                }
            }
            ?>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>