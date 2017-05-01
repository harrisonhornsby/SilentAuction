<?php
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

  $sql = "SELECT * FROM `Customers` WHERE UserID=$UserID";
  $result = $conn->query($sql);
$row = $result->fetch_assoc();
  $UserID = $row["UserID"];
  $FirstName = $row["FirstName"];
  $LastName = $row["LastName"];
  $Address1 = $row["Address1"];
  $City = $row["City"];
  $State = $row["State"];
  $Zip = $row["Zip"];
  $conn->close();
  
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<!--Donor entry form-->
<div class="container">
    <h2>Modify Custommer</h2>
    <form class="form-horizontal" method="POST" action="updateCustomer.php?ID=<?php echo $UserID ?>">
       
        <div class="form-group">
            <label class="control-label col-sm-2">First Name</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="FirstName" value="<?php echo $FirstName ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Last Name</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="LastName" value="<?php echo $LastName ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Address 1</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="Address1" value="<?php echo $Address1 ?>" required>
            </div>
        </div>
		 <div class="form-group">
            <label class="control-label col-sm-2">City</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="City" value="<?php echo $City ?>" required>
            </div>
        </div>
		 <div class="form-group">
            <label class="control-label col-sm-2">State</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="State" value="<?php echo $State ?>" required>
            </div>
        </div>
		 <div class="form-group">
            <label class="control-label col-sm-2">Zip</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="Zip" value="<?php echo $Zip ?>" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>