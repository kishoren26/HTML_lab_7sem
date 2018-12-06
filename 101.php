<html>
<head>
<style>
table, td, th
{
border: 1px solid black;
width: 33%;
text-align: center;
border-collapse:collapse;
background-color:lightblue;
}
table { margin: auto; }
</style>

</head>


<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "weblab";
$a=[];
// Create connection
// Opens a new connection to the MySQL server
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection and return an error description from the last connection error, if any
//if ($conn->connect_error)
//die("Connection failed: " . $conn->connect_error);
$sql = "SELECT * FROM students";
// performs a query against the database
$result = $conn->query($sql);
echo "<br>";
echo "<center> BEFORE SORTING </center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>Address</th></tr>";
if ($result->num_rows> 0)
{
// output data of each row and fetches a result row as an associative array
while($row = $result->fetch_assoc()){
echo "<tr>";
echo "<td>". $row["usn"]."</td>";
echo "<td>". $row["name"]."</td>";
echo "<td>". $row["sem"]."</td></tr>";
array_push($a,$row["usn"]);
}
}
else
echo "Table is Empty";
echo "</table>";
$sql = "SELECT * FROM studentss";
// performs a query against the database
$result = $conn->query($sql);
echo "<br>";
echo "<center> after SORTING </center>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>Address</th></tr>";
if ($result->num_rows> 0)
{
// output data of each row and fetches a result row as an associative array
while($row = $result->fetch_assoc()){
echo "<tr>";
echo "<td>". $row["usn"]."</td>";
echo "<td>". $row["name"]."</td>";
echo "<td>". $row["sem"]."</td></tr>";
array_push($a,$row["usn"]);
}
}
else
echo "Table is Empty";
echo "</table>";