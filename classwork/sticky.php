<!DOCTYPE html>

<head>
    <title>Sticky</title>
</head>

<body>

    <form action="<?php echo $self ?>" method="POST">
        <?php
        $name;
        $email;
        $gender;
        $comments;
        ?>
        <h2 align="center">Making Sticky Forms</h2>
        <br/>
        <br/>

        Name:<input type="text" name="name" value="<?php echo $name; ?>" />
        <br/><br/>

        Gender:<br/>
        Male <input type="radio" name="gender" <?php if ($gender == "Male") echo "checked='checked'"; ?>value="Male">
        Female <input type="radio" name="gender" <?php if ($gender == "Female") echo "checked='checked'"; ?> value="Female">
        Female <input type="radio" name="gender" <?php if ($gender == "Other") echo "checked='checked'"; ?> value="Other">

        Email:
        <input type="text" name="email" value="" />
        <br/><br/>

        Comments:
        <br/>
        <textarea name="comments" cols="40" rows="5"></textarea>
        <br/><br/>

        What Program are you Interested in?: <br />
        <input type="checkbox" name="bsist" value="bsist"> BSIST <br />
        <input type="checkbox" name="msist" value="msist"> MSIST <br />
        <input type="checkbox" name="mlis" value="mlis"> MLIS <br />
        <input type="checkbox" name="phd" value="phd"> PhD <br /><br />

        <input type="submit" name="submit" value="Submit My Name" />
    </form>

    <br/>
    <br/>

</body>

</html>