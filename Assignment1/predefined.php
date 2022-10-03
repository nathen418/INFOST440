<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Using Predefined Variables</title>
</head>

<body>
  <h2>Using Predefined Variables</h2>
  <?php
    echo "This code is using predefined variables to get the users ip address (from the cloudflare header) and the users user agent.<br>";
    echo "I am using the HTTP_CF_CONNECTING_IP header because I am using Cloudflare as a proxy to my server.<br>";
    echo "So in order to get the real users ip instead of the ip used by Cloudflare's infrastructure I need to use this header<br><br>";
    echo "Your Public IP is: " . $_SERVER["HTTP_CF_CONNECTING_IP"] ?? $_SERVER['REMOTE_ADDR'];
    echo "<br><br>";
    echo "Your user agent is: " . $_SERVER['HTTP_USER_AGENT'];
    ?>
    <img src="Problem5.png">
</body>

</html>