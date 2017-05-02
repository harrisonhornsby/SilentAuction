<?php
include 'dbconfigSilentAuction.php';
$DonorId = $_GET["DonorId"];
  $sql = "SELECT * FROM `Donors` WHERE Id=$DonorId";
  $result = $conn->query($sql);
$row = $result->fetch_assoc();
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
  $conn->close();
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
		  <li class="active"><a href="Donors.php">Donors</a></li>
			<li><a href="Items.php">Items</a></li>
              <li><a href="PrintCenter.php">Print Center</a></li>
			  <li><a href="Lots.php">Lots</a></li>
			<li><a href="Category.php">Category</a></li>
			 <li><a href="Bidders.php">Bidders<span class="sr-only">(current)</span></a><li>

          </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

<!--Donor entry form-->
            <div class="container">
                <h2>Modify Donor</h2>
            <form class="form-horizontal" method="POST" action="UpdateDonor.php?ModifiedDonorId=<?php echo $DonorId?>">
            <div class="form-group">
                <label class="control-label col-sm-2">Business Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="businessName"  value="<?php echo $BusinessName; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Contact Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="contactName" value="<?php echo $ContactName; ?>"  required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Contact Email</label>
                <div class="col-sm-10">
                    <input class="form-control" type="email" name="contactEmail" value="<?php echo $ContactEmail; ?>"  required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Contact Title</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="contactTitle" value="<?php echo $ContactTitle; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Address</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="address" value="<?php echo $Address; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">City</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="city" value="<?php echo $City; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">State</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="state" value="<?php echo $State; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Zip</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="zip" value="<?php echo $ZipCode; ?>" required>
                </div>
            </div>
                <!--<div class="form-group">
                    <label class="control-label col-sm-2">Tax Receipt</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" name="taxReceipt" value="<?php echo $TaxReceipt; ?>" required>
                    </div>
                </div>-->
				<div class="form-group">
					  <label class="control-label col-sm-2">Tax Receipt Received</label>
					  <div class="col-sm-10">
						Yes <input type="radio" id="taxReceiptYes" name="taxReceipt" value="1" <?php if($TaxReceipt==1) { echo 'checked'; } ?> required>
                    </div>
					  <div class="col-sm-10">
						No <input type="radio" id="taxReceiptNo" name="taxReceipt" value="0" <?php if($TaxReceipt==0) { echo 'checked'; } ?> required>
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