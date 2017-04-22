<?php
/**
 * Created by PhpStorm.
 * User: harri
 * Date: 3/20/2017
 * Time: 9:56 PM
 */
include 'dbconfigSilentAuction.php';
$DonorId = $_GET["DonorId"];
  $sql = "DELETE FROM `Donors` WHERE Id = $DonorId";
  $result = $conn->query($sql);
  $conn->close();
header("Location: Donors.php");
?>