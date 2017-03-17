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
		  <a class="navbar-brand" href="http://harrisonhornsby.pairserver.com/SilentAuction/Part%201/Index.html">Silent Auction</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="Donors.php">Donors</a></li>
			<li class="active"><a href="Items.php">Items <span class="sr-only">(current)</span></a></li>
		</ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

    <!--Item entry form-->
    <div class="container">
        <button type="button" class="btn" data-toggle="collapse" data-target="#divCollapse">Add New Item</button>
        <div id="divCollapse" class="collapse">
        <h2>Item Entry Form</h2>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Description</label>
            <div class="col-10">
                <input class="form-control" type="text" value="" id="example-text-input">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Retail Value</label>
            <div class="col-10">
                <input class="form-control" type="text" value="" id="example-text-input">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Donor Id</label>
            <div class="col-10">
                <input class="form-control" type="text" value="" id="example-text-input">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Lot Id</label>
            <div class="col-10">
                <input class="form-control" type="text" value="" id="example-text-input">
            </div>
        </div>
        </br>
            <button type="submit" class="btn btn-primary">Add Item</button>
        </div>
        </div>

<div class="container">
<table class="table table-hover">
  <thead class="thead-inverse">
    <tr>
        <th>Description</th>
        <th>Retail Value</th>
        <th>Donor Id</th>
        <th>Lot Id</th>
    </tr>
  </thead>
  <tbody>
    <tr>
            <td>Some Description</td>
        <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
              <td>Some Description</td>
        <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
        <td>Some Description</td>
              <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>