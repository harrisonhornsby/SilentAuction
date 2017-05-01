<?php
ini_set('display_errors',1);
error_reporting(-1);
$servername = "db84b.pair.com";
				$username = "bmoore08_3";
				$password = "RHZ3PLM5";
				$dbname = "bmoore08_OrderEntry";
										
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				
			
$UserID = $_GET["ID"];

//echo "this is the value$UserID<br />";
$FirstName = $_POST["FirstName"];

//echo "this is the value $FirstName<br />";

$LastName = $_POST["LastName"];
//echo "this is the value $LastName<br />";
$Address1 = $_POST["Address1"];
//echo "this is the first name $Address1<br />";
$City = $_POST["City"];
//echo "this is the value $City<br />";
$State = $_POST["State"];
//echo "this is the value $State<br />";
$Zip = $_POST["Zip"];
//echo "this is the value $Zip<br />";

$stmt = $conn->prepare("UPDATE `Customers` SET `UserID` = ?,`FirstName` = ?, `LastName` = ?, `Address1` = ?, `City` = ?, `State` = ?,`Zip` = ? WHERE `Customers`.`UserID` = $UserID");
$stmt->bind_param("isssssi",$UserID, $FirstName, $LastName, $Address1, $City, $State, $Zip);

$stmt->execute();

$conn->close();
header("Location: PhpMySql4.php");

//echo "record Updated";
exit();

?>