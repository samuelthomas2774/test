<?php
	if(isset($_SERVER["PATH_INFO"]) && ($_SERVER["PATH_INFO"] == "/phpinfo")) {
		phpinfo();
	} else {
		echo "<!DOCTYPE html>";
		echo 5 * 2 + 1;
		echo "<!-- END -->";
	}
	