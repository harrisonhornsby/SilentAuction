<?php
/**
 * Author: Bryan Moore
 */
//include 'dbconfigSilentAuction.php';
//$LotId = $_GET["LotId"];
//echo $LotId = $_GET["LotId"];
//echo "the lot ID is . $LotID . " ;
 
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
                <li><a href="Donors.php">Donors
                <li class="active"><a href="Items.php">Items</a></li>
				<li><a href="PrintCenter.php">Print Center</a></li>
				<li><a href="Lots.php">Lots</a></li> <span class="sr-only">(current)</span></a></li>
				<li><a href="Category.php">Category</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<?php
$LotId = $_GET["LotId"];



$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
	$servername = "db126b.pair.com";
	$username = "bmoore08_4";
	$password = "ai9rBc7G";
	$dbname = "bmoore08_SilentAuction";

	// Create connection
	$con = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($con->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo 'connected to database';
	
   // $con = new mysqli($servername, $username, $password, $dbname) or die('Unable To connect')
   
   $stmt = "UPDATE `Lot` SET 'Image' = ? WHERE `Lot`.`Id` = $LotId";
	
    $stmt = mysqli_prepare($con,$sql);
 
    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);
 
    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Successfullly UPloaded';
    }else{
        $msg = 'Could not upload';
    }
    mysqli_close($con);
}
?>

<form action="UploadImage.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" />
    <button>Upload</button>
</form>
<?php
    echo $msg;
?>



</body>
</html>