<?php

$Viewbag = new stdClass();
$Viewbag->bInLayout = false;

function layout($sLayout){
	global $Viewbag, $bInLayout;
	if(!$Viewbag->bInLayout){
		$Viewbag->bInLayout = true;
		include_once $sLayout;
		//don't want to output anything from the layout the first time
		exit;
	}
}

function renderBody(){
	global $Viewbag;
	include(basename($_SERVER['PHP_SELF']));
}