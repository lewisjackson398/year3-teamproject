<?php
// Include config file
require_once "../server/config/config.php";
include('../group/global/makeHeader.php');
echo makeHeader(); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Equipment</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<?php include('../group/global/makeNav.php');
    echo makeNav();
?>
<body>
<div class="form">
<p>Welcome to the equipment dashboard.</p>
<p><a href="classes.php">Back to classes</a><p>
<p><a href="viewEquipment.php">View equipment booked</a></p>
<p><a href="insertEquipment.php">Book Equipment</a><p>
<p><a href="adminLogout.php">Logout</a></p>
</div>
<?php
include('../group/global/makeFooter.php');
echo makeFooter();
?>
</body>
</html>
    