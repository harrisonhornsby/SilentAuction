<?php
/**
 * Created by PhpStorm.
 * User: harri
 * Date: 3/20/2017
 * Time: 10:01 PM
 */
include 'dbconfigSilentAuction.php';
$BidderId = $_GET["BidderId"];
  $sql = "DELETE FROM `Bidder` WHERE Id = $BidderId";
  $result = $conn->query($sql);
  $conn->close();
header("Location: Bidders.php");
?>