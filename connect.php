<?

$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];
$user = "";
$password = "";

$connect = mysql_connect("localhost",$user,$password);
@mysql_select_db($tutorial) or ("Database not found");

$query = "SELECT * FROM `users` WHERE `user` = '$inputuser'";
$querypass = "SELECT * FROM `users` WHERE `password` = 'inputpass'";

echo $query;
echo $querypass;

mysql_close();

?>