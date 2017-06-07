<!DOCTYPE html>

<html>
<head>
<link rel='stylesheet' type='text/css'
href='http://www.free-map.org.uk/course/css/dfti0910.css' />
</head>
<body>

<?php

$id = $_GET["id"];

$conn = new PDO ("mysql:host=localhost;dbname=dftitutorials;","dftitutorials","dftitutorials");

$results = $conn->query("select * from wadsongs where songid='id'");
$add = $conn->query ("UPDATE wadsongs SET likes likes+1" )
while($row = $results->fetch())

{
echo "<p> You Liked: </p>"
echo "<p>";
echo "Title $row[title] <br/>";
echo "Artist $row[artist] <br/>";
echo "Day $row[day] <br/>";
echo "Month $row[month] <br>";
echo "Year $row[year] <br/>";
echo "Chart $row[chart] <br/>";
echo "Likes $row[likes] <br/>";
echo "Like href='like.php' <br/>";
echo "</p>";
}
?>

</body>
</html>
