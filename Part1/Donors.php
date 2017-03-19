<?php
include 'dbconfigSilentAuction.php';
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="Index.html">Silent Auction</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="Donors.php">Donors <span class="sr-only">(current)</span></a></li>
			<li><a href="Items.php">Items</a></li>
              <li><a href="PrintCenter.php">Print Center</a></li>

          </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

<!--Donor entry form-->
<div class="container">
    <button type="button" class="btn" data-toggle="collapse" data-target="#divCollapse">Add New Donor</button>
    <div id="divCollapse" class="collapse">
        <form class="form-horizontal" method="POST" action="CreateDonor.php">
            <div class="form-group">
                <label class="control-label col-sm-2">Business Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="businessName"  placeholder="Enter Business Name" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Contact Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="contactName" placeholder="Enter Contact Name" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Contact Email</label>
                <div class="col-sm-10">
                    <input class="form-control" type="email" name="contactEmail" placeholder="Enter Contact Email" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Contact Title</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="contactTitle" placeholder="Enter Contact Title" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Address</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="address" placeholder="Enter Address" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">City</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="city" placeholder="Enter City" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">State</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="state" placeholder="Enter State" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Zip</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="zip" placeholder="Enter Zip" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Donor table / View / Edit-->
<div class="container">
    <h2>Donors</h2>
<table class="table table-hover">
  <thead class="thead-inverse">
    <tr>
        <th>Donor Id</th>
        <th>Business Name</th>
        <th>Contact Name</th>
        <th>Contact Email</th>
        <th>Contact Title</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>Received Tax Receipt</th>
        <th>Generate Donation Request</th>
        <th>Generate Tax Receipt</th>
        <th>Modify</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql = "SELECT * FROM `Donors`";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $Id = $row["Id"];
        $BusinessName = $row["BusinessName"];
        $ContactName = $row["ContactName"];
        $ContactEmail = $row["ContactEmail"];
        $ContactTitle = $row["ContactTitle"];
        $Address = $row["Address"];
        $City = $row["City"];
        $State = $row["State"];
        $ZipCode = $row["ZipCode"];
        $TaxReceipt = $row["TaxReceipt"];

    echo    "<tr>
                <td>$Id</td>
                <td>$BusinessName</td>
                <td>$ContactName</td>
                <td>$ContactEmail</td>
                <td>$ContactTitle</td>
                <td>$Address</td>
                <td>$City</td>
                <td>$State</td>
                <td>$ZipCode</td>
                <td>$TaxReceipt</td>
                <td><a href='GenerateTaxReceipt.php?DonorId=$Id'><span class=\"glyphicon glyphicon-paperclip\"></span></a></td>
                <td><a href='GenerateDonationRequest.php?DonorId=$Id'><span class=\"glyphicon glyphicon-heart-empty\"></span></a></td>
                <td><a href='ModifyDonor.php?DonorId=$Id'><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
            </tr>";
      }
  }
  $conn->close();
  ?>
</tbody>
</table>
</div>
</body>
</html>