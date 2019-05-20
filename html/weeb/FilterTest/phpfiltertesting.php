<!DOCTYPE html>
<html>
<body>

<?php
$myString = "<h1> Ya Yeet </h1>";
echo $myString;
echo filter_var($myString, FILTER_SANATIZE_STRING);
include($_SERVER['DOCUMENT_ROOT'] . '/html/weeb/SQLTuts/dbTest.php');
?>



</body>
</html>