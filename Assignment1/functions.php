<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Using functions in php</title>
</head>

<body>

    <h2>Using functions in php</h2>
    <?php
    echo "Here I am using php functions to do a variety of things<br><br>";
    echo "I am using the HTTP_CF_CONNECTING_IP header because I am using Cloudflare as a proxy to my server.<br>";
    echo "So in order to get the real users ip instead of the ip used by Cloudflare's infrastructure I need to use this header.<br><br><br>";
    function get_ip()
    {
        $ip = $_SERVER["HTTP_CF_CONNECTING_IP"] ?? $_SERVER['REMOTE_ADDR'];
        return $ip;
    }
    function get_location($ip)
    {
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        return $details;
    }

    echo "Using the get_ip() function I get the users ip address: " . get_ip() . "<br><br>";
    echo "Using the get_location() function I get the users location: " . get_location(get_ip())->city . ", " . get_location(get_ip())->region . ", " . get_location(get_ip())->country . "<br><br>";

    ?>
    <img src="Problem8.png">
</body>

</html>