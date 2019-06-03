<html>
	<body>
                Diese Seite läuft auf POD: <b>
<?php
$hostname = gethostname();
print $hostname;
		$secondsWait = 0.1;
header("Refresh:$secondsWait");

		

if (strpos($hostname, 'blue') !== false) {
echo "<body style='background-color:blue','color:white'>";
};
		
if (strpos($hostname, 'green') !== false) {
echo "<body style='background-color:green','color:white'>";
};
		
?>
</b>
	</body>
</html>

