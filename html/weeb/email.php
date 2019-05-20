<!DOCTYPE HTML>
<?php
$cookie_name = "Wowza";
$cookie_value = "My Dude";
setcookie($cookie_name, $cookie_value, time() - (86400 * 30), '/' , null, false, false);
?>
<html>

<?php
// vars
$emailErr = '';
$email = "";



if ($_SERVER["REQUEST_METHOD"] == "POST")
{  
    if (empty($_POST["email"]))
    {
        $emailErr = "Email is required.";
    }   else
    {
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Invalid email format.";
        } 
    }
}
function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
?>
<body>
<h1> YEET</h1>

<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>)">
E-mail: <input type="text" name="email" value="<?php echo $email; ?>"><br>
<input type="submit" name="submit" value="Submit">
</form>

<br><br>
<?php
echo "<h2>Your Input:</h2>";
?>
<br>
<?php
echo $email;
?>
<br>
<?php include 'mycars/mycar.php';
echo "I have a $color $car.";?>
<br>
<?php
if(!isset($_COOKIE[$cookie_name]))
{
    echo "Cookie named $cookie_name is not set!";
}
else
{
    echo "Cookie $cookie_name is set! <br>";
    echo "Value is: " . $_COOKIE[$cookie_name] . ".";
}
if(count($_COOKIE[$cookie_name]) > 0)
{
    echo "<br> Cookies are Enabled";
}
else
{
    echo "<br> Cookies are Disabled :(";
}
?>
</body>
</html>
