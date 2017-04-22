<?php
/**
 * Created by PhpStorm.
 * User: harri
 * Date: 3/20/2017
 * Time: 10:01 PM
 */
include 'dbconfigSilentAuction.php';
$ItemId = $_GET["ItemId"];
  $sql = "DELETE FROM `Items` WHERE Id = $ItemId";
  $result = $conn->query($sql);
  $conn->close();
header("Location: Items.php");
?>