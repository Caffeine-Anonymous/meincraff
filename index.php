<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> TasteyServ Minecraft </title>
</head>
    <body>
    <p> <a href="http://minecraftservers.net/server/39379/">
        <img src="http://minecraftservers.net/status/server_39379.png"
        alt="Vote for our server!" style="float: right" />
    </a> </p>


    <h1> TasteyServ Minecraft </h1>
    <p>
    [<a href="#about">About</a>]
    [<a href="#plugins">Plugins</a>]
    [<a href="#worlds">Worlds</a>]
    [<a href="#news">News</a>]
    [<a href="http://mc.primis.org:25566">Dynmap</a>]
    [<a href="http://tasteyserv.wikia.com">Wiki</a>]
    [<a href="#links">External Links</a>]
    [<a href="tools">Admin Tools</a>]
    [<a href="tos">TOS</a>]
    </p>


<h2> Users Currently Online </h2>
<?php
// MCStatus-php by martok (github: martok/MCStatus-php)
require_once("lib/MCStatus.php");
try {
    $mcs = new MCStatus('notch',25565); // Server instance
    $data = $mcs->getFull();    // Query Server. QUERY MUST BE ENABLED SERVER SIDE
    $users = $data['players'];  // Get just the players from the data
} 
catch (Exception $e) {
    echo "<pre>".$e->getMessage()."</pre>\n";
}

if(!empty($users)) {
    echo "<table>\n\t<tr>\n"; // Start the table only if users online
    
    foreach ($users as $user) { // Headshots from minotar.net :D
        echo "\t\t<td><img style='margin: 0 auto;' alt='".
        $user."' src='http://minotar.net/helm/".$user.
        "' height='45' width='45'/></td>"."\n";
    }
    
    echo "\t</tr>\n\t<tr>\n"; // End heads, start names.
    
    foreach ($users as $user) { // Names
        echo "\t\t<td style='text-align:center'>".$user."</td>\n";
    }

    echo "\t</tr>\n</table>\n"; // End names, end table
} else {
    echo "<p>There is nobody online!</p>\n"; // Default case if no one online 
}
?>
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
        <a href="http://dev.bukkit.org/bukkit-plugins/mobmanager">MobManager</a>
        &ndash; Prevents the spawning of mobs in the overworld.
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

    <li>
        <a href="http://dev.bukkit.org/bukkit-plugins/simplecarts">SimpleCarts</a>
        (broken) &ndash; Makes Railine construction easier.
    </li>

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
