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
			 <li class="active"><a href="Bidders.php">Bidders<span class="sr-only">(current)</span></a><li>

          </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
				<!--Item entry form-->
    <div class="container">
       
            <form class="form-horizontal" method="POST" action="SearchBidder.php">
                <div class="form-group">
                    <label class="control-label col-sm-2">Search by Bidder Number</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="Id" pattern="[0-9]{3}" title="Must Be a 3 digit number"  placeholder="Enter Bidder Number" required>
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



<!--Donor entry form-->
<div class="container">
    <button type="button" class="btn" data-toggle="collapse" data-target="#divCollapse">Add Bidder</button>
    <div id="divCollapse" class="collapse">
        <form class="form-horizontal" method="POST" action="CreateBidder.php">
            <div class="form-group">
                <label class="control-label col-sm-2">Bidder Number</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="Id" pattern="[0-9]{3}" title="Must Be a 3 digit number"  placeholder="Enter Bidder Number" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="name" pattern="[a-zA-Z\s]{0,}" title="Letters only" placeholder="Enter Name" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Address</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="address" placeholder="Enter Address" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Cell Number</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="cellNumber" pattern="^\d{3}-\d{3}-\d{4}$" title="Phone Number (format: xxx-xxx-xxxx)" placeholder="Enter Cell Number" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Home Number</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="homeNumber"  placeholder="Enter Home Number" title="Phone Number (format: xxx-xxx-xxxx)" pattern="^\d{3}-\d{3}-\d{4}$" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Email</label>
                <div class="col-sm-10">
                    <input class="form-control" type="email" name="email" placeholder="Enter email" required>
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
    <h2>Bidders</h2>
	<h4><a href="ListNonPayingWinners.php">List All Winning Bidders who haven't paid</a></h4>
	<h4><a href="ListLotsToDeliver.php">List All Lots which are paid for but not delivered</a></h4>
<table class="table table-hover">
  <thead class="thead-inverse">
    <tr>
        <th>Bidder Number</th>
		<th>Name</th>
        <th>Address</th>
        <th>Cell Number</th>
		<th>Home Number</th>
        <th>Contact Email</th>
		<th>Lots Won</th>
        <th>Modify</th>
        <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php


  
 
      $sql = "SELECT * FROM `Bidder`";
  
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



    echo    "<tr>
                <td>$Id</td>
                <td>$name</td>
                <td>$address</td>
                <td>$cellnumber</td>
                <td>$homeNumber</td>
                <td>$email</td>
				<td><a href='LotsWon.php?BidderId=$Id'><span class=\"glyphicon glyphicon-certificate\"></span></a></td>
                <td><a href='ModifyBidder.php?BidderId=$Id'><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
                <td><a href='DeleteBidder.php?BidderId=$Id' onclick=\"return confirm('Are you sure you want to delete this Bidder?');\"><span class=\"glyphicon glyphicon-trash\"></span></a></td>
				
				
				
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
