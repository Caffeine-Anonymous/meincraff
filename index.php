<?xml version="1.0" encoding="utf-8"?>

<?php require("config/config.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo $server_name;?> </title>
</head>
    <body>
    <?php if(isset($votey_id)): ?>
    <p id="votey">
        <a href="http://minecraftservers.net/server/<?php echo $votey_id;?>/">
        <img src="http://minecraftservers.net/status/server_<?php echo $votey_id;?>.png"
        alt="Vote for our server!" style="float: right" />
        </a>
    </p>
    <?php endif; ?>

    <h1> <?php echo $server_name;?> </h1>
    <p id="navbar">
        <?php include("navbar.html")?>
    </p>


<h2> Users Currently Online </h2>
<?php
// MCStatus-php by martok (github: martok/MCStatus-php)
require("lib/MCStatus.php");
try {
    $remote = new MCStatus($server_ip, $server_port);
    $data = $remote->getFull();
    $users = $data['players'];
}
catch (Exception $e) {
    echo "<pre>".$e->getMessage()."</pre>\n";
}

?>

<?php if(!empty($users)): ?>
<table id="users">
<tr>
<?php foreach ($users as $user): ?>
    <td style='text-align:center'>
    <!--Thank you to minotar for your awesome head API-->
        <img src="http://minotar.net/helm/<?php echo $user;?>/45" 
            alt="<?php echo $user;?>" />
    </td>
<?php endforeach; ?>
</tr>

<tr>
<?php foreach ($users as $user): ?>
    <td style='text-align:center'> <?php echo $user;?> </td>
<?php endforeach; ?>
</tr>
</table>

<?php else: ?>
<p id="user-text">
    There is nobody online!
</p>

<?php endif; ?>

<hr />
    <h2 id="about">About</h2>
    <?php include("about.html"); ?>

    <h2 id="news">News</h2>
    <dl>
<?php
    $files = array();
    $d = dir("news");
    while (false !== ($file = $d->read())) {
        if(fnmatch("*-*-*.html", $file)) {
            array_push($files, $file);
        }
    }
    $d->close();
    rsort($files); // Sort by newest
    foreach($files as $file) {
        echo "<dt>".date('F j, Y',strtotime(basename($file,".html")))."</dt>\n";
        echo "<dd>\n";
        include("news/".$file);
        echo "</dd>\n";
    }
?>
    </dl>

    <h2 id="links">External Links</h2>
    <ul id="links-list">
        <li>We Don't have any outside links yet</li>
    </ul>

    <hr />

    <div id="footer">
        <a href="http://validator.w3.org/check?uri=referer">
        <img src="http://www.w3.org/Icons/valid-xhtml10"
            alt="Valid XHTML 1.0 Strict" height="31" width="88" />
        </a>
    </div>

    </body>
</html>
