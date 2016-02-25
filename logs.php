<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Minecraft Log Reader</title>
</head>
<body>
<h1>
Minecraft Server Log Reader
</h1>
<form action="logs.php" method="post"> 
<p id="date">
<?php

date_default_timezone_set('America/New_York');
if(!empty($_POST["day"])){
    $day = preg_replace("/[^0-9]/","",$_POST["day"]);
    $month = preg_replace("/[^0-9]/","",$_POST["month"]);
    $year = preg_replace("/[^0-9]/","",$_POST["year"]);
    
    $day = str_pad($day, 2, '0', STR_PAD_LEFT);
    $month = str_pad($month, 2, '0', STR_PAD_LEFT); 
} else {
    $day = date("d");
    $month = date("m");
    $year = date("Y");
}
echo 'Day: <input type="text" value="'.$day.'" name="day"/>';
echo 'Month: <input type="text" value="'.$month.'" name="month"/>';
echo 'Year: <input type="text" value="'.$year.'" name="year"/>';
?>
<input type="submit" value="Go"/>
</p>
</form>
<hr />
<pre id="log">
<?php
date_default_timezone_set('America/New_York');
$output = "Please Select a Date";

if(!empty($_POST["day"])){
    $day = preg_replace("/[^0-9]/","",$_POST["day"]);
    $month = preg_replace("/[^0-9]/","",$_POST["month"]);
    $year = preg_replace("/[^0-9]/","",$_POST["year"]);
    
    $day = str_pad($day, 2, '0', STR_PAD_LEFT);
    $month = str_pad($month, 2, '0', STR_PAD_LEFT); 

    $output = shell_exec("ssh minecraft@notch 'zcat logs/".$year."-".$month."-".$day."*'");
    if($day==date("d") && $month==date("m") && $year==date("Y")) {
        $output .= shell_exec("ssh minecraft@notch 'cat logs/latest.log'");
    }
}
    echo $output;
?>
</pre>

<div id="footer">
    <a href="http://validator.w3.org/check?uri=referer">
    <img src="http://www.w3.org/Icons/valid-xhtml10"
        alt="Valid XHTML 1.0 Strict" height="31" width="88" />
    </a>
</div>
</body>
</html>
