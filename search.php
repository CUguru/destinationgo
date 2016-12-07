<?php
?>

<form>
	<input type="text" name="search">
	<button type="submit"></button>
</form>

<?php
// create a new PDO connection to the database
try {
	$db = new PDO("mysql:host=uguru.dev.fast.sheridanc.on.ca;dbname=uguru_destinationGo;charset=utf8", "uguru_traveller", "WhyMustItBeThisLong?");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $error) {
	echo "ERROR: ".$error->getMessage();
}


// create the search function for each of the radio buttons
if( isset($_GET['beaches']) ) {
	$beaches = "%".$_GET['beaches']."%";
} else {
	$beaches = "%";
}

// search for mountain locations
if( isset($_GET['mountains']) ) {
	$mountains = "%".$_GET['mountains']."%";
} else {
	$mountains = "%";
}


// search for relaxing locations
if( isset($_GET['relaxing']) ) {
	$relaxing = "%".$_GET['relaxing']."%";
} else {
	$relaxing = "%";
}


// search for locations with a nightlife
if( isset($_GET['nightlife']) ) {
	$nightlife = "%".$_GET['nightlife']."%";
} else {
	$nightlife = "%";
}

// search for locations that are expensive
if( isset($_GET['high']) ) {
	$high = "%".$_GET['high']."%";
} else {
	$high = "%";
}


// search for locations that are not expensive
if( isset($_GET['low']) ) {
	$low = "%".$_GET['low']."%";
} else {
	$low = "%";
}

// search for locations with beaches 
if( isset($_GET['beaches']) ) {
	$beaches = "%".$_GET['beaches']."%";
} else {
	$beaches = "%";
}


// search for destinations found in urban areas
if( isset($_GET['urban']) ) {
	$urban = "%".$_GET['urban']."%";
} else {
	$urban = "%";
}

// search for destinations found in rural areas
if( isset($_GET['rural']) ) {
	$rural = "%".$_GET['rural']."%";
} else {
	$rural = "%";
}

// search for kid friendly locations
if( isset($_GET['kids']) ) {
	$kids = "%".$_GET['kids']."%";
} else {
	$kids = "%";
}

// adult only locations search
if( isset($_GET['adults']) ) {
	$adults = "%".$_GET['adults']."%";
} else {
	$adults = "%";
}

// search for popular locations
if( isset($_GET['popular']) ) {
	$popular = "%".$_GET['popular']."%";
} else {
	$popular = "%";
}

// search for hidden locations
if( isset($_GET['hidden']) ) {
	$hidden = "%".$_GET['hidden']."%";
} else {
	$hidden = "%";
}



// create search function that looks in the join table for destinations matching our search
$sql = "SELECT * FROM destinations WHERE name LIKE :search";
$query = $db->prepare($sql);

$query->bindParam(':search', $search);
$query->execute();


?>

