<?php

$Viewbag = new stdClass();

function layout($sLayout){
	global $Viewbag;
	$bInLayout = true;
	include_once $sLayout;
}

function renderBody(){
	global $Viewbag;
	include(basename($_SERVER['PHP_SELF']));
}