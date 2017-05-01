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
		  <li><a href="Donors.php">Donors</a></li>
			<li><a href="Items.php">Items</a></li>
              <li><a href="PrintCenter.php">Print Center</a></li>
			  <li><a href="Lots.php">Lots</a></li>
			<li><a href="Category.php">Category</a></li>
			 <li><a href="BiddingForm.php">Bidding Sheet</a></li>
			 <li><a href="Bidders.php">Bidders<span class="sr-only">(current)</span></a><li>

          </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

<!-- Donor table / View / Edit-->
<div class="container">
    <h2>Winning Bidders Who Haven't Paid</h2>
<table class="table table-hover">
  <thead class="thead-inverse">
    <tr>
        <th>Bidder Number</th>
		<th>Name</th>
        <th>Address</th>
        <th>Cell Number</th>
		<th>Home Number</th>
        <th>Contact Email</th>
		<th>Paid</th>
		<th>Lots Won</th>
		<th>Description</th>
		<th>Winning Bid</th>
    </tr>
  </thead>
  <tbody>
  <?php


  
 
  $sql = "SELECT Bidder.Id,Bidder.Name,Bidder.Address,Bidder.CellNumber,Bidder.HomeNumber,Bidder.Email,Lot.Paid as 'Paid',Lot.Id as 'Lot Won', Lot.Description as 'Description', Lot.WinningAmount as 'WinningBid' 
FROM Bidder,Lot 
WHERE Bidder.Id = Lot.WinningBidderId 
AND Lot.Paid = 'No'";
  $result = $conn->query($sql);
  
	
	
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $Id = $row["Id"];
        $name = $row["Name"];
        $address = $row["Address"];
        $cellnumber = $row["CellNumber"];
        $homeNumber = $row["HomeNumber"];
        $email = $row["Email"];
        $paid = $row["Paid"];
		$LotId = $row["Lot Won"];
		$Description =$row["Description"];
		$WinningBid = $row["WinningBid"];


    echo    "<tr>
                <td>$Id</td>
                <td>$name</td>
                <td>$address</td>
                <td>$cellnumber</td>
                <td>$homeNumber</td>
                <td>$email</td>
				<td>$paid</td>
				<td>$LotId</td>
				<td>$Description</td>
				<td>$WinningBid</td>
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
