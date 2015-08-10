<?php
	if(!isset($_SERVER["PATH_INFO"])) $_SERVER["PATH_INFO"] = "";
	if($_SERVER["PATH_INFO"] == "/phpinfo") {
		phpinfo();
	} elseif($_SERVER["PATH_INFO"] == "/server") {
		var_dump($_SERVER);
	} elseif($_SERVER["PATH_INFO"] == "/environment") {
		var_dump($_ENV);
	} elseif($_SERVER["PATH_INFO"] == "/variables") {
		var_dump($GLOBALS);
	} else {
		echo "<!DOCTYPE html>";
		echo 5 * 2 + 1;
		echo "<!-- END -->";
	}
	