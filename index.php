<html>
	<body>
                Diese Seite läuft auf POD: <b>
<?php
$hostname = gethostname();
print $hostname;
		$secondsWait = 0.1;
header("Refresh:$secondsWait");
		
?>
		
<?php

foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}

?>
</b>
	</body>
</html>

