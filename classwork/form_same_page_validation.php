<form action="form_same_page_validation.php" method="POST">
<h2 align="center">Same Page Validation. </h2>
<br>
<?php
//----------------------------------------------------
// Define PHP variables
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$comments = isset($_POST['comments']) ? $_POST['comments'] : '';
// ---------------------------------------------------
// ---------------------------------------------------
// Below is Same Page Error Messsages

// Check if form was ever submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($name)) echo "<p>Please enter your name.</p>";
    if (empty($email)) echo "<p>Please enter your email.</p>";
    if (empty($comments)) echo "<p>Please enter your comments.</p>";
}
// --------------------------------------------------
?>
<br>

Name:
<input type="text" name="name" />
<br /><br />

Email:
<input type="text" name="email" />
<br /><br />

Comments:
<br />
<textarea name="comments" cols="40" rows="5"></textarea>
<br /><br />

<input type="submit" name="submit" value="Submit My Info" />
</form>
<br />
<br />

<?php
// If everything is filled out, display messsage
/* if (                     ) {
    



 } */
 ?>

</body>
</html>