<html>
	<body>
                Diese Seite läuft auf POD: <b>
<?php
$hostname = gethostname();
print $hostname;
		$secondsWait = 5.0;
header("Refresh:$secondsWait");
		
?>
		
<?php

foreach (getallheaders() as $name => $value) {
    echo "$name: $value","<br>";
}

?>
</b>
	</body>
</html>

