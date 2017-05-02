<?php
/**
 * Author: Bryan Moore
 */
include 'dbconfigSilentAuction.php';
  $LotId = $_GET["LotId"];
  $sql = "SELECT * FROM `Lot` WHERE Id=$LotId";
  $result = $conn->query($sql);
$row = $result->fetch_assoc();
  $Id = $row["Id"];
  $Description = $row["Description"];
  $CategoryId = $row["CategoryId"];
  $WinningBidderId = $row["WinningBidderId"];
  $WinningAmount = $row["WinningAmount"];
  $Paid = $row["Paid"];
  $Delivered = $row["Delivered"];
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
              <li><a href="Donors.php">Donors</a></li>
			<li><a href="Items.php">Items</a></li>
			<li><a href="PrintCenter.php">Print Center</a></li>
			<li><a href="Lots.php">Lots</a></li><span class="sr-only">(current)</span></a></li>
			<li><a href="Category.php">Category</a></li>
			 <li><a href="Bidders.php">Bidders</a><li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--Lot entry form-->
<div class="container">
    <h2>Modify Lot</h2>
    <form class="form-horizontal" method="POST" action="UpdateLot.php?LotId=<?php echo $LotId ?>">
        <div class="form-group">
            <label class="control-label col-sm-2">Description</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="Description" pattern="[a-zA-Z\s]{0,}" title="Letters only"  value="<?php echo $Description ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Category Id</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="CategoryId" pattern="[0-9]{0,}" title="Must Be a number" value="<?php echo $CategoryId ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Winning Bidder Id</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="WinningBidderId" pattern="[0-9]{0,}" title="Must Be a number" value="<?php echo $WinningBidderId ?>">
            </div>
        </div>
		<div class="form-group">
            <label class="control-label col-sm-2">Winning Amount</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="WinningAmount" pattern="^\d+(\.|\,)\d{2}$" title="Must be a monetary value. Ex. 4.99 or 4" value="<?php echo $WinningAmount ?>">
            </div>
        </div>
				<div class="form-group">
				<label class="control-label col-sm-2">Paid</label>
				<div class="col-sm-10">
						  <input type="radio" id="private" name="Paid" value="Yes"required>
						  <label for="private">Yes</label>

						  <input type="radio" id="public" name="Paid" value="No"required>
						  <label for="public">No</label>
				   </div>
				</div>
		
					
			<div class="form-group">
            <label class="control-label col-sm-2">Delivered</label>
            <div class="col-sm-10">
					  <input type="radio" id="private" name="Delivered" value="Yes"required>
					  <label for="private">Yes</label>

					  <input type="radio" id="public" name="Delivered" value="No"required>
					  <label for="public">No</label>
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






