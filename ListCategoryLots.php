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
			<li class="active"><a href="Items.php">Items</a></li>
              <li><a href="PrintCenter.php">Print Center</a></li>
			  <li><a href="Lots.php">Lots<span class="sr-only">(current)</span></a></li>
			<li><a href="Category.php">Category</a></li>
			 <li><a href="BiddingForm.php">Bidding Sheet</a></li>
          </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
	    <!-- Item table / View / Edit-->
    <div class="container">
	 <h2>Lots in Category</h2>
        <table class="table table-hover">
            <thead class="thead-inverse">
            <tr><br />
                <th>Lot Id</th>
                <th>Description</th>
				<th>Category Description</th>
                <th>Winning Bidder</th>
				<th>Winnning Bid</th>
				<th>Paid</th>
				<th>Delivered</th>
            </tr>
            </thead>
            <tbody>
            <?php
			
			  $CategoryId = $_GET["CategoryId"];
			  $sql = "SELECT Lot.Id,Lot.Description,Lot.CategoryId,Lot.WinningBidderId,Lot.WinningAmount,Lot.Paid,Lot.Delivered, Category.Description as CategoryDescription From Lot, Category where Lot.CategoryId = $CategoryId and Category.Id = $CategoryId";
			$result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $Id = $row["Id"];
                    $Description = $row["Description"];
					$CategoryDescription = $row["CategoryDescription"];
					$WinningBidderId = $row["WinningBidderId"];
					$WinningAmount = $row["WinningAmount"];
					$Paid = $row['Paid'];
					$Delivered = $row["Delivered"];
                echo    "<tr>
                <td>$Id</td>
                <td>$Description</td>
                <td>$CategoryDescription</td>
                <td>$WinningBidderId</td>
				<td>$WinningAmount</td>
				<td>$Paid</td>
				<td>$Delivered</td>
                </tr>";
                }
            }
			
			$conn->close();
			?>
