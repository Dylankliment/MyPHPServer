<!DOCTYPE HTML>
<html>
<body>

<?php
$servername = "localhost";

$conn = new mysqli($servername, serverdetails);

if ($conn->connect_error)
{
    die("Connect Error: " . $conn->connect_error);
}

echo "Connected! <br>";

$sql="INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]')";

if (!mysql_query($sql,$conn))
{
    die('Error: ' . mysql_error());
}
echo '1 record added';
mysql_close($conn);
?>
</body>
</html>