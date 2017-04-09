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
			<li class="active"><a href="Lots.php">Lots</a></li><span class="sr-only">(current)</span></a></li>
			<li><a href="Category.php">Category</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>



</body>
</html>


<?php
include 'dbconfigSilentAuction.php';
session_start();
$LotId = $_SESSION['LotId'];

			$sql = "SELECT * FROM `Lot` WHERE Id=$LotId";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$temp = $row["Description"];
					
		  $dir = "$temp/";
	
			if($opendir = opendir($dir))
			{
				while(($file = readdir($opendir)) !== FALSE)
				{
					if ($file != "." && $file != "..")
					echo "<center><img src='$dir/$file' height='400' width='700' ></center><br/>";
				}
			}
	
       ?>