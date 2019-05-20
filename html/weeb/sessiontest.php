<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
echo "Favorite color is " . $_SESSION["favcolor"] . ". <br>";;
echo "Favorite animal is " . $_SESSION["favanimal"] . ". <br>";

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

echo "Favorite color is " . $_SESSION["favcolor"] . ". <br>";;
echo "Favorite animal is " . $_SESSION["favanimal"] . ". <br>";
?>

</body>
</html>