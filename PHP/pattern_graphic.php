<?php

$city = $_REQUEST["w"];

$urls = array();

$urls[] = "///////////////////////////////////////////////////////////////////////";
$urls[] = "-----------------------------------------------------------------------";
$urls[] = ".o0o..o0o..o0o..o0o..o0o..o0o..o0o..o0o..o0o..o0o..o0o..o0o..o0o..o0o..";
$urls[] = "<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<";
$urls[] = ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>";
$urls[] = "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++";

$idx = mt_rand(0,(count($urls)-1));

$result = $urls[$idx];


echo ($result);

?>