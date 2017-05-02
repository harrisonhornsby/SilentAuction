<?php
/**
 * Author: Bryan Moore
 */
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
			<li><a href="Donors.php">Donors</a></li>
			<li><a href="Items.php">Items</a></li>
              <li><a href="PrintCenter.php">Print Center</a></li>
			 <li class="active"><a href="Lots.php">Lots<span class="sr-only">(current)</span></a></li>
			<li><a href="Category.php">Category</a></li>
			 <li><a href="Bidders.php">Bidders</a><li>
          </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
	<!--Item entry form-->
    <div class="container">
        <button type="button" class="btn" data-toggle="collapse" data-target="#divCollapse">Add New Lot</button>
        <div id="divCollapse" class="collapse">
            <form class="form-horizontal" method="POST" action="CreateLot.php">
                <div class="form-group">
                    <label class="control-label col-sm-2">Description</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="description" pattern="[a-zA-Z\s]{0,}" title="Letters only"  placeholder="Enter Lot Description" required>
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
	
	
    <!-- Lot table / View / Edit-->
    <div class="container">
        <h2>Lots</h2>
        <table class="table table-hover">
            <thead class="thead-inverse">
            <tr>
                <th>Lot ID</th>
                <th>Lot Description</th>
                <th>Category ID</th>
				<th>Category Description</th>
				<th>Winning Bidder</th>
				<th>Winning Bid</th>
				<th>Paid</th>
				<th>Delivered</th>
				<th>List Items</th>
				<th>Upload Image</th>
                <th>Modify Lot</th>
                <th>Delete Lot</th>

            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT Lot.Id, Lot.Description, Lot.CategoryId, Category.Description as CategoryDescription, Lot.WinningBidderId, Lot.WinningAmount, Lot.Delivered, Lot.Paid FROM Lot,Category Where Category.id=Lot.CategoryId";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $Id = $row["Id"];
                    $Description = $row["Description"];
					$CategoryId = $row["CategoryId"];
					$CategoryDescription = $row["CategoryDescription"];
					$WinningBidderId = $row["WinningBidderId"];
					$WinningAmount = $row["WinningAmount"];
					$Paid = $row["Paid"];
					$Delivered = $row["Delivered"];
                echo    "<tr>
                <td>$Id</td>
                <td>$Description</td>
                <td>$CategoryId</td>
				<td>$CategoryDescription</td>
                <td>$WinningBidderId</td>
				<td>$WinningAmount</td>
				<td>$Paid</td>
				<td>$Delivered</td>
				<td><a href='ListLotItems.php?LotId=$Id'><span class=\"glyphicon glyphicon-list-alt\"></span></a></td>
				<td><a href='SelectImage.php?Description=$Description'><span class=\"glyphicon glyphicon-picture\"></span></a></td>
				
                <td><a href='ModifyLot.php?LotId=$Id'><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
                <td><a href='DeleteLot.php?LotId=$Id'<span class=\"glyphicon glyphicon-trash\"></span></a></td>
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