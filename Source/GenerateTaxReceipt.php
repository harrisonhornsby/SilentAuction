<?php
include 'dbconfigSilentAuction.php';
$DonorId = $_GET["DonorId"];
$sql = "SELECT `BusinessName` FROM `Donors` WHERE Id = $DonorId";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$BusinessName = $row["BusinessName"];

$sql = "SELECT `Description`,`RetailValue` FROM `Items` WHERE DonorId = $DonorId";
$result = $conn->query($sql);
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<title>Donation Tax Receipt</title>
<div class="container-fluid">
    <h4>Dear Friend of W. H. Taylor Elementary School</h4>
<p>Thank you for your support of W. H. Taylor’s PTA. Because of your generous donations, our PTA was able to help fund many important services for our school as well as Taylor Families.  </p>
<ul>
    <li>Our PTA helped fund the Backpack Program, through the Food Bank of Southeastern Virginia and Eastern Shore. This program enables the 25 identified students at our school that are at risk for hunger to go home each Friday with enough food to last their family through the weekend.</li>
    <li>Class fieldtrips are open to all students, whether or not their family has the money to pay the fieldtrip fees. When a child’s family is unable to pay, W. H. Taylor PTA fills in the gap so every child can participate.</li>
    <li>Our PTA supports the teachers and school in a myriad of other ways as well. This would have been impossible without the support of our many donors.</li>
</ul>
    <p>
        We acknowledge the receipt of your donation that you generously contributed to W. H. Taylor PTA.
    </p>

    <p>Donor: <?php echo $BusinessName ?></p>
    <p>Donations:</p>
        <ul>
        <?php
            if ($result->num_rows > 0)
            {
                $TotalValue = 0;
                while($row = $result->fetch_assoc())
                {
                $TotalValue += $row["RetailValue"];
                    echo "<li>".$row["Description"].", $".$row["RetailValue"]."</li>";
                }
            }
            else{
                echo "No Donations Found.";
            }
        ?>
        </ul>
    <p><b>Value: $ <?php echo $TotalValue ?></b></p>
    <p>W. H. Taylor Elementary School PTA is a non-profit 501(c)(3) organization. Your gift is tax deductible to the extent allowed by the law. W. H. Taylor PTA Tax ID is #54-1190250.</p>
    <p>No goods or services were received in return for this donation.</p>

    <p>Thank you again for your generous support.</p>

    <p>Sincerely,</p>

    <p>Tamara Haines</p>
    <p>W. H. Taylor PTA Silent Auction Chairperson</p>

</div>
</body>
</html>