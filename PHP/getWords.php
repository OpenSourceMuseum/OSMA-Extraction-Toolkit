<?php

$words = array();

$q1 = "SELECT c.id as id_class, c.name as class, w.id as id_word, w.word as word FROM " . $prefix . "classes c, " . $prefix . "words w WHERE c.id=w.id_class AND c.city=" . $dbh->quote($citycode) . "";


$stat = $dbh->query($q1);
if($stat){
	foreach ( $stat as $row) {
		$ww = array();
		$ww["id_class"] = $row["id_class"];
		$ww["class"] = $row["class"];
		$ww["id_word"] = $row["id_word"];
		$ww["word"] = $row["word"];
		$words[] = $ww;
	}
	$stat->closeCursor();	
}


$location = $cityname;

?>