<?PHP

/*
session_start();
$_SESSION['message'] = '';

$servername = getenv('IP');
    $dbusername = getenv('C9_USER');
    $dbpassword = "";
    $database = "users_db";
    $dbport = 3306;

    // Create connection
    $mysqli = new mysqli($servername, $dbusername, $dbpassword, $database, $dbport);
*/




//output table of history?
//

// table 
echo "<table>"; 


//WHILE LOOP TO GO THROUGH RESULTS
while($row = mysql_fetch_array($result)){  
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";
}

echo "</table>";


//mysql_close();






?>