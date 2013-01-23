<?php

// need to be filled in!
$dbHostname = "localhost";
$dbDbName   = "jserrorlogs";
$dbTable    = "js_errors";
$dbUsername = "root";
$dbPassword = "root";

if (!isset($_POST)) {
	return;
}

$requiredPostVars = array("url", "lineNum", "stackTrace", "browser");
$allDefined = true;
$escapedPostVars = array();
for ($i=0; $i<count($requiredPostVars); $i++) {
	$currVar = $requiredPostVars[$i];
	if (!isset($_POST[$currVar])) {
		$allDefined = false;
		break;
	}
	$escapedPostVars[$currVar] = mysql_real_escape_string($_POST[$currVar]);
}

if (!$allDefined) {
	return;
}


$now = date("Y-m-d H:i:s");
$link = mysql_connect($dbHostname, $dbUsername, $dbPassword);
mysql_select_db($dbDbName);
$response = @mysql_query("
	INSERT INTO {$dbTable} (url, line_number, stack_trace, browser, error_time)
	VALUES ('{$escapedPostVars["url"]}', '{$escapedPostVars["lineNum"]}', '{$escapedPostVars["stackTrace"]}',
		'{$escapedPostVars["browser"]}', '{$now}')
");

if ($response) {
	echo "error logged.";
} else {
	echo "Problem logging error: " . mysql_error();
}