<html>
	<body>
                Diese Seite läuft auf POD: <b>
<?php
$hostname = gethostname();
print $hostname;
		$secondsWait = 0.1;
header("Refresh:$secondsWait");
		
echo "<font size="24" face='Arial'>";
		

if (strpos($hostname, 'blue') !== false) {
echo "<body style='background-color:blue'>";
echo "color: white";
};
		
if (strpos($hostname, 'green') !== false) {
echo "<body style='background-color:green'>";
echo "color: white";
};
		
?>
</b>
	</body>
</html>

