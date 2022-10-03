<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Using conditions</title>
</head>

<body>

    <h2>Using conditions in php</h2>
    <?php
    echo "Here I am using php conditions to do a variety of things<br><br>";
    function check_ip()
    {
        $ip = $_SERVER["HTTP_CF_CONNECTING_IP"] ?? $_SERVER['REMOTE_ADDR'];
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        if ($details->country == "US") {
            return "You are in the US";
        } else {
            return "You are not in the US";
        }
    }
    function check_os()
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($user_agent, 'Windows') !== FALSE) {
            return "You are using Windows";
        } elseif (strpos($user_agent, 'Mac') !== FALSE) {
            return "You are using Mac";
        } elseif (strpos($user_agent, 'Linux') !== FALSE) {
            return "You are using Linux";
        } else {
            return "You are using an unknown operating system, or else your user agent is malformed or obfuscated in some way.";
        }
    }

    echo "This is a funciton that checks the users ip address using the HTTP_CF_CONNECTING_IP header and then returns a string that says \"You are in the US\" or \"You are not in the US\" depending on the users ip address.<br><br>";
    echo check_ip() . "<br><br>";
    echo "This is a function to check the operating system of the user and return a string that says \"You are using Windows\" or \"You are using Mac\" or \"You are using Linux\" depending on the users operating system.<br><br>";
    echo check_os() . "<br><br>";

    ?>
    <img src="Problem9.png">
</body>

</html>