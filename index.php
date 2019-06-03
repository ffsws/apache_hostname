<html>
	<body>
                Diese Seite läuft auf POD: <b>
<?php
$hostname = gethostname();
print $hostname;
		$secondsWait = 0.1;
header("Refresh:$secondsWait");

		

if (strpos($hostname, 'blue') !== false) {
echo "<body style='background-color:blue'>";
};
		
if (strpos($hostname, 'green') !== false) {
echo "<body style='background-color:green'>";
};
		
?>
</b>
	</body>
</html>

