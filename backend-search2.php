<?php
/**
 * Created by PhpStorm.
 * User: Harrison_2
 * Date: 3/18/2017
 * Time: 9:37 PM
 */
include 'dbconfigSilentAuction.php';

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$term = mysqli_real_escape_string($conn, $_REQUEST['term']);
 
if(isset($term)){
    // Attempt select query execution
    $sql = "SELECT Description, Id FROM Lot WHERE Description LIKE '" . $term . "%'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<p class=\"h4\">".$row['Id'].": ".$row["Description"]."</p>";
            }
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "<p class=\"h4\">No matches found</p>";
        }
    } else{
        echo "ERROR: Not able to execute $sql. " . mysqli_error($conn);
    }
}
 
// close connection
mysqli_close($conn);
?>