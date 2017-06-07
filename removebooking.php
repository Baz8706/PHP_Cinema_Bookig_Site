<?php
session_start();

$id = htmlentities($_GET['bookingID']);
$nt = htmlentities($_GET['ntID']);
$shid = htmlentities($_GET['sID']);
if ( !isset($_SESSION[gatekeeper]))

{
echo "<h1 class='filml'>You cannot view this page without logging in!<h1>";
}

else{
$conn = new PDO ('mysql:host=localhost;dbname=dcooper', 'dcooper', 'ree0OoCh');
$updateshowings=$conn->query("UPDATE filmshowings SET maxtickets=maxtickets+'$nt' WHERE ID = '$shid';");
$update=$conn->query("DELETE FROM mybookings WHERE ID='$id' AND '$_SESSION[gatekeeper]' = username ;");
header ('location: mybookings.php');}

?>