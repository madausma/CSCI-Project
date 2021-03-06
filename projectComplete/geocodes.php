<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Google Geocode XML Request</title>
</head>
<body>

</body>
</html>
<?php
	$address = isset($_GET['address'])?$_GET['address'] : "";

	displayForm($address);

	if(isset($_GET['submitForm']) && $address !="")
		handleform($address);

?>
</body>
</html>
<?php
	function displayForm($address){
	?>
		<fieldset><legend>Enter and Address to get Location Information</legend>
			<form method="get">
				Address:<input type="text" name=address size="55" value='<?php echo $address; ?>'/>
				<br><br>
				<input type="submit" name="submitForm" value="Get Info" />
			</form>
		</fieldset>
	<?php
	}


	function handleForm($address){
		echo "<fieldset><legend>Info about $address</legend>";

   		$geocodeURL = "https://maps.googleapis.com/maps/api/geocode/xml?";
   		$address = "address=" . urlencode($address);
   		// https://console.developers.google.com
   		$key = "AIzaSyChDLXOZNXE3uVLajMSHRn0_s9_uJxbjtg";
   		$geocoderequest = "$geocodeURL$address" . "&" . $key;

   		//die( "The url is >" . $geocoderequest . "<" );

   		$xml= new SimpleXMLElement( file_get_contents( $geocoderequest ) );

   		if($xml->status != 'OK') {
   			$status = $xml->error_message;
   			die("bad result status $status");
   		}

		$placeRequestURL = "https://maps.googleapis.com/maps/api/place/details/xml?";
   		//$key = "key=AIzaSyAsAWbQ0_nFCSoOwOwVP9JYroJ12JI0xOE";
   		$placeID = "placeid=" . $xml->place_id;
   		$placedetailsrequest = "$placeRequestURL$placeID" . "&" . $key;

   		echo $placedetailsrequest;

   		$xml2 = new SimpleXMLElement( file_get_contents( $geocoderequest ) );
   		$loc = getLocation($xml);
   		echo "<pre>"; print_r( $loc);  	echo "</pre>";


	}

    function getLocation($xml)
    {
        //echo "<pre>"; print_r( $xml);  	echo "</pre>";
        $latitude  = $xml->result->geometry->location->lat;
        $longitude = $xml->result->geometry->location->lng;

        $location = array("latitude" => $latitude, "longitude" => $longitude);

        return ($location);
    }

?>