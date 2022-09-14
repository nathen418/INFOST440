<style>
    body{
        background-color: #0CCA4A;
        font-family: Arial;
    }
    table, th, td {
        border:1px solid black;
    }
    /* This is a CSS comment */
</style>
<body>
    <!-- This is a HTML comment -->
    <h4> Nate Goldsborough - Assignment 1 </h4>
    <h4>List of assignment Parts </h4>
    <table>
        <tr>
            <td>Assignment Files List</td>
        </tr>
        <tr>
            <td><a href="conditions.php">Conditions</a></td>
        </tr>
        <tr>
            <td><a href="constant.php">Constant</a></td>
        </tr>
        <tr>
            <td><a href="phpinfo.php">PHP Info</a></td>
        </tr>
        <tr>
            <td><a href="escape.php">Escape</a></td>
        </tr>
        <tr>
            <td><a href="form.php">Form</a></td>
        </tr>
        <tr>
            <td><a href="functions.php">Functions</a></td>
        </tr>
        <tr>
            <td><a href="index.php">Index</a></td>
        </tr>
        <tr>
            <td><a href="math.php">Math</a></td>
        </tr>
        <tr>
            <td><a href="predefined.php">Predefined</a></td>
        </tr>
        <tr>
            <td><a href="quotes.php">Quotes</a></td>
        </tr>
    </table>

    Custom php content
    <br>
    <?php
    // This is a PHP comment
    // Get the users ip address
    // I am using the HTTP_CF_CONNECTING_IP header because I am using Cloudflare as a proxy to my server
    // so in order to get the real users ip instead of the ip used by Cloudflare's infrastructure I need to use this header
        echo "Your Public IP is: " . $_SERVER["HTTP_CF_CONNECTING_IP"] ?? $_SERVER['REMOTE_ADDR'];
    ?>
    
</body>