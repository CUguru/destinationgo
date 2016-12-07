<?php

// create a new PDO connection to the database
try {
	$db = new PDO("mysql:host=uguru.dev.fast.sheridanc.on.ca;dbname=uguru_destinationGo;charset=utf8", "uguru_traveller", "WhyMustItBeThisLong?");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $error) {
	echo "ERROR: ".$error->getMessage();
}

// fetch all the variables from the checkboxed options
$weather = $_GET['weather'];
$activity = $_GET['activity'];
$cost = $_GET['cost'];
$location = $_GET['location'];
$family = $_GET['family'];
$popularity = $_GET['popularity'];

echo "WEATHER:";
var_dump( $weather );


// create the main sql query
$sql = "SELECT `d`.`name`,
	`w`.`name` as `weather`,
	`c`.`name` as `cost`,
	`f`.`name` as `family`
FROM `destinations` AS `d`
INNER JOIN `weather` AS `w` ON ( `d`.`wid`= `w`.`wid`)
INNER JOIN `cost` AS  `c` ON ( `d`.`cid` = `c`.`cid` )
INNER JOIN `family` AS  `f` ON ( `d`.`fid` = `f`.`fid` )
INNER JOIN `location` AS  `l` ON ( `d`.`lid` = `l`.`lid` )
INNER JOIN `activity` AS  `a` ON ( `d`.`aid` = `a`.`aid` )
INNER JOIN `popularity` AS  `p` ON ( `d`.`pid` = `p`.`pid` ) WHERE TRUE";



if (isset($weather)) {
	$sql .= " AND `weather` LIKE :weather";
}

$query->bindParam( ':weather', $weather );


















?>