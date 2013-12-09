<?php
include_once('db.php');

$q1 = "select count(name) as num,year from details group by year" ;

echo "<table border='1'>";
echo "<tr><th>Year</th><th>No of students</th></tr>";
if ($result = $mysqli->query($q1)) {
while($row = $result->fetch_assoc())
{
    echo "<tr><td>".$row['year']."th </td><td>".$row['num']."</td></tr>" ;
    echo "<br>";
}
}
echo "</table><br>";

$q1 = "select count(name) as num,dept from details group by dept" ;

echo "<table border='1'>";
echo "<tr><th>Dept</th><th>No of students</th></tr>";
if ($result = $mysqli->query($q1)) {
while($row = $result->fetch_assoc())
{
    echo "<tr><td>".$row['dept']."</td><td>".$row['num']."</td></tr>" ;
    echo "<br>";
}
}
echo "</table>";


?>
