<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Basic HTML form</title>
</head>

<body>

  <h2>Basic HTML form</h2>
  <form action="form_post_handle.php" method="post">
    First name:<br>
    <input type="text" name="fname"><br>
    Last name:<br>
    <input type="text" name="lname"><br>
    <input type="radio" name="if" value="student"> Student<br>
    <input type="radio" name="if" value="notstudent"> Not a student<br>
    <input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
    <input type="checkbox" name="vehicle2" value="Car"> I have a car<br>
    <select name="cars">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="mercedes">Mercedes</option>
      <option value="audi">Audi</option>
    </select>
    <br><br>
    <input type="submit" value="Submit">
    <br>
    <img src="Problem10.png">
    <img src="Problem10.2.png">
</body>

</html>