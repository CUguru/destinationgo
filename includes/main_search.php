<?php

// Prepare all PDO data to be used later
$host = 'localhost';
$dbname   = 'yujua_DestinationGoFinal';
$user = 'root';
$pass = 'root';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// Prepare all PDO data to be used later
//$host = 'yujua.dev.fast.sheridanc.on.ca';
//$dbname   = 'yujua_DestinationGoFinal';
//$user = 'yujua_guest';
//$pass = 'X5N6N@xUpYa_';
//$charset = 'utf8';
//$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
//$opt = [
//    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//    PDO::ATTR_EMULATE_PREPARES   => false,
//];

try {
    $db = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $error) {
    echo "ERROR: ".$error->getMessage();
}

// create a new PDO connection to the database
//try {
//	$db = new PDO("mysql:host=uguru.dev.fast.sheridanc.on.ca;dbname=uguru_destinationGo;charset=utf8", "uguru_traveller", "WhyMustItBeThisLong?");
//	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//} catch(PDOException $error) {
//	echo "ERROR: ".$error->getMessage();
//}

// fetch all the variables from the checkboxed options
$weather = $_GET['weather'];
$activity = $_GET['activity'];
$cost = $_GET['cost'];
$location = $_GET['location'];
$family = $_GET['family'];
$popularity = $_GET['popularity'];

echo($weather);
echo "<br>";
echo($activity);
echo "<br>";
echo($cost);
echo "<br>";
echo($location);
echo "<br>";
echo($popularity);
echo "<br>";
echo($family);
echo "<br>";

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

// if the variables from the main file are set, we can add more to the sql query to search for that particular variable
if (isset($weather)) {
	$sql .= " AND `w`.`name` LIKE :weather";
}

if (isset($activity)) {
	$sql .= " AND `a`.`name` LIKE :activity";
}

if (isset($cost)) {
	$sql .= " AND `c`.`name` LIKE :cost";
}

if (isset($location)) {
	$sql .= " AND `l`.`name` LIKE :location";
}

if (isset($family)) {
	$sql .= " AND `f`.`name` LIKE :family";
}

if (isset($popularity)) {
	$sql .= " AND `p`.`name` LIKE :popularity";
}

// prepare the sql query
$query = $db->prepare( $sql );

// once we check that the variable are set, we can then bind them to
// the search query variable
if (isset($weather)) {
	$query->bindParam( ':weather', $weather );
}

if (isset($activity)) {
	$query->bindParam( ':activity', $activity);
}

if (isset($cost)) {
	$query->bindParam( ':cost', $cost);
}

if (isset($location)) {
	$query->bindParam( ':location', $location);
}

if (isset($family)) {
	$query->bindParam( ':family', $family);
}

if (isset($popularity)) {
	$query->bindParam( ':popularity', $popularity);
}

// execute the query statment that we are searching for
$query->execute();

$data = $query->fetchAll();

// debug function
function dump($el)
{
    echo "<pre><div style='text-align=left';>";
    var_dump($el); 
    echo "</pre></div>";
}


dump($data);

?>