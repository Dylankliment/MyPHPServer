<!DOCTYPE php>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
// == mysqli(servername, username, password, (OPTIONAL) Database Name)
$conn = new mysqli($servername, serverdetails);

if ($conn->connect_error)
{
    die("Connect Error: " . $conn->connect_error);
}

echo "Connected! <br>";


// // === Creating a new table with input value fields ===
// $sql = "CREATE TABLE MyGuests ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// regdate TIMESTAMP
// )";

// $conn->query($sql);
// // =====================================================





// //=== Inserting Data into an existing table ===
// $sqlInsert  = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'Get@Rekt.com')";
// if ($conn->query($sqlInsert) === TRUE)
// {
//     echo "Insert was created <br>" . $sqlInsert . "<br>";
// }
// else
// {
//     echo "Error inserting database: " . $conn->error;
// }
// //==============


//$sql = 'DROP TABLE MyGuests';


// Select = Find data fields in a table
$sql = "SELECT id, firstname, lastname FROM MyGuests";

$result = $conn->query($sql);



if ($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else
{
    echo "0 results <br>";
}






$conn->close();
?>