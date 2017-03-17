<?php
include '~/public_html/dbconfigSilentAuction.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
		  <a class="navbar-brand" href="#">Silent Auction</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="Donors.php">Donors <span class="sr-only">(current)</span></a></li>
			<li><a href="Items.php">Items</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

<!--Donor entry form-->
<div class="container">
<button type="button" class="btn" data-toggle="collapse" data-target="#divCollapse">Add New Donor</button>
<div id="divCollapse" class="collapse">

    <h2>Donor Entry Form</h2>
<div id="collapseForm" class="form-group row">

      <label for="example-text-input" class="col-2 col-form-label">Business Name</label>
      <div class="col-10">
        <input class="form-control" type="text" value="" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Contact Name</label>
      <div class="col-10">
        <input class="form-control" type="text" value="" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Contact Email</label>
      <div class="col-10">
        <input class="form-control" type="text" value="" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Contact Title</label>
      <div class="col-10">
        <input class="form-control" type="text" value="" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Address</label>
      <div class="col-10">
        <input class="form-control" type="text" value="" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">City</label>
      <div class="col-10">
        <input class="form-control" type="text" value="" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">State</label>
      <div class="col-10">
        <input class="form-control" type="text" value="" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Zip Code</label>
      <div class="col-10">
        <input class="form-control" type="text" value="" id="example-text-input">
      </div>
    </div>
    <div class="form-group row">
      <label for="example-text-input" class="col-2 col-form-label">Tax Receipt</label>
      <div class="col-10">
        <input class="form-control" type="text" value="" id="example-text-input">
      </div>
    </br>
      <button type="submit" class="btn btn-primary">Create Donor</button>
    </div>
</div>

<!-- Donor table / View / Edit-->
<div class="container">
<table class="table table-hover">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>