<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TasteyServ TOS Agreement</title>
</head>

<body>
<h1>
Minecraft Server Registration
</h1>
<hr />
<p>

<?php
if(isset($_POST['agree'], $_POST['username'], $_POST['email'])) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        $str = explode(' ', $_POST['username']);
        $user = substr($str[0],0,16); // Sanitizing important input.
        if(preg_match('/[^a-z_0-9]/i', $user)) {
            echo "You did not enter a valid username!\n";
        } else {
            $message = "User ".$user." Registerd on the server with email".
            $_POST['email'];
            mail("supportprimis@gmail.com","User Registered",$message);
            shell_exec("ssh minecraft@notch '/usr/local/etc/rc.d/minecraft command ".
            "pex user ".$user." group set member'");
            echo "Thank you for registering, Welcome to Tasteyserv, ".$user;
        }
    } else {
        echo $_POST['email']." is not a valid email address\n";
    }
} else {
    echo "You did not agree to the TOS correctly, Please go back.";
}
?>
</p>
</body>
</html>
