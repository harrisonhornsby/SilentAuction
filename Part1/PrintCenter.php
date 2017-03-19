<?php
/**
 * Created by PhpStorm.
 * User: harri
 * Date: 3/18/2017
 * Time: 8:11 PM
 */

?>
<html>
<head>
    <script type="text/javascript" src="js/jquery-1.8.0.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
                <li class="active"><a href="PrintCenter.php">Print Center</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <h2>Print Center</h2>
    <form class="form-horizontal" method="POST" action="">
            <div class="form-group">
                <label class="control-label col-sm-2">Business Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="businessName"  placeholder="Enter Business Name" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Generate Tax Receipt</button>
                    <button type="button" onclick="window.open('DonationRequest.pdf')" class="btn btn-default">Generate Donation Request</button>

                </div>
            </div>
        </form>
</div>

</body>

</html>
