<html>
<head>
    <title>Insert Image</title>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
	
</form>
</body>
</html>

<?php
/**
 * Author: Bryan Moore
 */
session_start();
$newDir = $_GET['Description'];
//$curDir = getcwd();

$_SESSION['newDir'] = $newDir;

	
?>