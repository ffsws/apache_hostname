<html>
	<body>
                This page is displayed on the container: <b>
<?php
$hostname = gethostname();
print $hostname;
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

