<!DOCTYPE HTML>"dylanisdumb", "yeet", 'myDB'
<?php
$cookie_name = "Dang";
$cookie_value = "Dude";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name]))
{
    echo "Cookie named $cookie_name is not set! <br>";
    echo  "Name might be: " . $_COOKIE[$cookie_name];
    
}
else
{
    echo "Cookie $cookie_name is set! <br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
</body>
</html>