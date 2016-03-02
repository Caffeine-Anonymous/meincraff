<?xml version="1.0" encoding="utf-8"?>
<?php require("config/config.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?=$server_name?> </title>
</head>
    <body>
    <?php if(isset($votey_id)): ?>
    <p id="votey">
        <a href="http://minecraftservers.net/server/<?=$votey_id?>/">
        <img src="http://minecraftservers.net/status/server_<?=$votey_id?>.png"
        alt="Vote for our server!" style="float: right" />
        </a>
    </p>
    <?php endif; ?>

    <h1> <?=$server_name?> </h1>
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
<<<<<<< HEAD
=======
<hr />
    <h2 id="about">About</h2>
    <p id="about-text">
    TasteyServ is Creative Bukkit Minecraft server that has been hosting the 
    same map file since September of 2011. 
    Over the course of these four years, The map has grown tremendous in size. 
    There are many areas to explore and to build with many different themes.
    One of the most notable features of our map is our extensive rail system
    that interconnects most major areas together. 
    </p>

    <h2 id="plugins">Plugins</h2>
    <p id="plugins-text">
    Since we are a Bukkit server, we have plugins that make minecraft more 
    fun to play:
    </p>

    <ul id="plugins-list">
    <li>
        <a href="http://dev.bukkit.org/bukkit-plugins/bookshelf/">Bookshelf</a> 
        &ndash; A plugin that lets you store books inside bookshelves.
    </li>

    <li>
        <a href="http://dev.bukkit.org/bukkit-plugins/glow-swap/">GlowSwap</a>
        &ndash; Experimental plugin that lets you replace soulsand with glowstone.
        </li>

    <li>
        <a href="http://dev.bukkit.org/bukkit-plugins/rollingminecarts/">
        Rolling Minecarts</a> 
        &ndash; Keeps chunks with minecarts loaded, and also makes empty carts
        roll as fast on the rails as ones with people in them.
    </li>

    <li>
        <a href="http://dev.bukkit.org/bukkit-plugins/lockette/">Lockette</a>
        &ndash; Make your Chests, Doors, and dispensers private.
    </li>

    <li>
        <b>MessageBlock</b> &ndash; A custom plugin that allows you to place a 
        sign under a pressure pad or detector rail to read the message out to 
        the player on top of it.
    </li>

    <li>
        <a href="http://dev.bukkit.org/bukkit-plugins/multiverse-core">
        Multiverse</a> &ndash; Allows multiple dimensions. 
        See <a href="#worlds">Worlds</a> For more information.
    </li>

    <li>
        <b>NoIce</b> &ndash; Prevents snow buildup in winter biomes.
    </li>

    <li>
        <a href="http://dev.bukkit.org/bukkit-plugins/scizzrhome">ScizzrHome</a>
        &ndash; Set homes by name and allows you to teleport back to them.
    </li>
>>>>>>> 9f724f367278409b059d432ba1a5c75fd54ba229

<?php if(!empty($users)): ?>
<table id="users">
<tr>
<?php foreach ($users as $user): ?>
    <td style='text-align:center'>
        <!--Thank you to minotar for your awesome head API-->
        <img src="http://minotar.net/helm/<?=$user?>/45" alt="<?=$user?>" />
    </td>
<?php endforeach; ?>
</tr>

<tr>
<?php foreach ($users as $user): ?>
    <td style='text-align:center'> <?=$user?> </td>
<?php endforeach; ?>
</tr>
</table>

<?php else: ?>
<p id="user-text">
    There is nobody online!
</p>

<?php endif; ?>

<<<<<<< HEAD
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
=======
    <li>
        <a href="http://dev.bukkit.org/bukkit-plugins/wireless-redstone">
        WirelessRedstone</a> &ndash; Allows you to make lagless remote redstone 
        connections.
    </li>

    <li>
        <a href="http://dev.bukkit.org/bukkit-plugins/worldedit">WorldEdit</a>
        &ndash; Terrain Manipulation tool.
    </li>

    <li>
        <a href="http://dev.bukkit.org/bukkit-plugins/dynmap/">Dynmap</a> &ndash;
        <em>Dynmap is currently down due to 1.9 compatibility issues.</em>
        Dynamically updating world map. <a href="http://mc.primis.org:25566"> 
        See our map here</a>.
    </li>

    <li>
        <a href="http://dev.bukkit.org/bukkit-plugins/iconomy/">iConomy</a> &ndash;
        Currency System. We used to use it for shops, but we got rid
        of them. (for now)    
    </li>

    <li>
        <a href="http://dev.bukkit.org/bukkit-plugins/worldguard">WorldGuard</a>
        &ndash; Protects certain areas of the map.
    </li>

    </ul>

    <h2 id="worlds"> Worlds </h2>
    <p id="worlds-text">
    Multiverse is a wonderful plugin when you get it working.
    We have it working now, you can see them in the 
    <a href="http://mc.primis.org:25566">dynmap</a>. 
    The dimensions we are currently hosting are:
    </p>

    <ul id="worlds-list">
        <li><a href="w0rld">w0rld</a> &ndash;
            Our overworld. This map is creative and hostile mobs are turned off. 
            This is the biggest dimension at almost a gigabyte in size!
        </li>
        
        <li><a href="w0rld_nether">Nether</a> &ndash;
            The standard Nether. 
            Mobs are enabled except for in certain world guard regions.
        </li>
        
        <li><a href="http://mc.primis.org:25566/?worldname=w0rld_the_end">
        The End</a> &ndash; The standard end. Mobs are enabled everywhere.
        </li>

        <li><a href="http://mc.primis.org:25566/?worldname=Survival">
        Survival</a> &ndash; A survival only dimension for anyone who 
            wants to play minecraft the way it was originally designed
        </li>

        <li><a href="http://mc.primis.org:25566/?worldname=Virus">Virus</a> 
        &ndash; An art project that exists in an end dimension. 
            Made up of modified pieces of the overworld.
        </li>

        <li><a href="http://mc.primis.org:25566/?worldname=dunjin">dunjin</a> 
        &ndash; Flatworld designated for dungeon builds.
        </li>

        <li><a href="http://mc.primis.org:25566/?worldname=world">Tzerbei</a> 
        &ndash; Our old survival world, we've finally brought it over to
            abuse, er... I mean use.
        </li>
    </ul>

    <h2 id="news">News</h2>
    <dl>
    <dt>March 1<sup>st</sup>, 2016</dt>
    <dd>
    The site has been updated! We now have an online user listing as well as
    an enumerated TOS with user registration attached. On the news of the
    server itself, we've upgraded to spigot 1.9 today! Unfortunately, spigot
    has gotten rid of some of the 1.7 API's requiring plugin updates. For some
    plugins we have there are simply no replacements, and others, we'll just
    have to wait out and see. As of right now, we've decided to remove
    MobManager, and Dynmap is currently broken due to compatibility issues.
    hopefully dynmap will be updated soon so we can use it again. In the
    meantime, enjoy the 1.9 update!
    </dd>
    <dt>December 2<sup>nd</sup>, 2015</dt>
    <dd>
    ...and we're back!<br />
    Sorry about the delay on bringing the server back online.
    The issue was an OS based one, not a map based one, we didn't lose anything!
    I've decided to make my life a bit more sane in the process, that dynmap
    is switching to 4 pixels per block instead of 16. The visible difference is 
    that individual blocks will be blurry, but the overall picture for 
    surveyance purposes is identical. I've also decided to use SQLite as a tile
    database instead of flatfile, so that should help a bit with backups, since
    there's no longer millions of PNG files, but instead it's just one db.
    I've taken this opportunity to add in another plugin for carts, which makes
    it so chunks stay loaded where there are minecarts in it. This will come
    in very handy in the future.
    </dd>

    <dt>May 29<sup>th</sup>, 2015</dt>
    <dd>
    We had a bit of a technical glitch today when my IP changed. However, I used
    the opportunity to upgrade our plugins! I've also made dynmap about 100% 
    more useful with chat scrollback now. We've also added back in our Tzerbei
    Map for a non-creative build on peaceful. The map follows the old generation
    algorithmns from Beta 1.6. It's a very different game now!
    </dd>

    <dt>May 27<sup>th</sup>, 2015</dt>
    <dd>
    Today, We introduced the new self hosted <a href="/wiki">Wiki</a>.
    We also introduce this website, which is pretty cool.
    Lastly, and, probably most important, we increased the server slots from 20 to
    100 to signify that we're looking foward to bigger and better things.
    Here's to another 5 years of TasteyServ!
    </dd>

>>>>>>> 9f724f367278409b059d432ba1a5c75fd54ba229
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
