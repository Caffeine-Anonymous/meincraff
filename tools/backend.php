<html>
<body>
<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$spawnstring = $_POST["spawnstring"];
$user = $_POST["user"];

if (empty($_POST["user"])) {
    if (!empty($_POST["cblock"])){
        $spawnstring = 'command_block 0 replace {Command:"setblock '.$x." ".$y." ".$z." ".$spawnstring.'",TrackOutput:0}';
        $x=$_POST["cX"];
        $y=$_POST["cY"];
        $z=$_POST["cZ"];
    }
    $command = "setblock ".$x." ".$y." ".$z." ".$spawnstring;
} else {
    $command = "give ".$user." ".$spawnstring;
}

$output = shell_exec("ssh minecraft@notch '/usr/local/etc/rc.d/minecraft command ".$command."'");
echo "<pre>$output</pre>";
?>
</body>
</html>
