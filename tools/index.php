<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin Tools</title>
</head>

<body>
<h1>Admin Tools</h1>
<p>
[<a href="/dunjintool.html">Sean's Chest Spawner</a>]
[<a href="chests.html">Block Placer</a>]
[<a href="logs.php">Server Log Reader</a>]
</p>
<h2>Users Online Today</h2>
<hr>
<?php 
date_default_timezone_set('America/New_York');
$today = date("Y")."-".date("m")."-".date("d");

$output = shell_exec("ssh minecraft@notch 'zcat logs/".$today."*' | grep UUID"); 
$output .= shell_exec("ssh minecraft@notch 'cat logs/latest.log' | grep UUID");

echo "<pre>$output</pre>";

?>
</body>
</html>

