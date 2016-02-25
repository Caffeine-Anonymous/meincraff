<html>
<body>
<h2>
Users Online Today
</h2>
<hr>
<?php 
$output = shell_exec("ssh minecraft@notch 'cat logs/latest.log' | grep UUID");
echo "<pre>$output</pre>";
?>
<a href="chests.html">Block Placing</a>

</body>
</html>

