<html>
<body>
<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$spawnstring = $_POST["spawnstring"];
$user = $_POST["user"];

if (empty($_POST["user"])) {
    $command = "setblock ".$x." ".$y." ".$z." ".$spawnstring;
} else {
    $command = "give ".$user." ".$spawnstring;
}

$output = shell_exec("ssh minecraft@notch '/usr/local/etc/rc.d/minecraft command ".$command."'");
echo "<pre>$output</pre>";
?>
</body>
</html>
