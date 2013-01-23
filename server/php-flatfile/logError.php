<?php

if (!isset($_POST)) {
	return;
}

$requiredPostVars = array("url", "lineNum", "stackTrace", "browser");
$allDefined = true;
$errorStr = "";
for ($i=0; $i<count($requiredPostVars); $i++) {
	$currVar = $requiredPostVars[$i];
	if (!isset($_POST[$currVar])) {
		$allDefined = false;
		break;
	}
	$errorStr .= "$currVar={$_POST[$currVar]}|";
}

if (!$allDefined) {
	return;
}

if (!error_log("JS ERROR: $errorStr\n", 3, "errors.log")) {
	echo "Couldn't log an error to errors.log";
}