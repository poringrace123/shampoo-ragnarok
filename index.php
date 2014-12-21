<?php
$servername = "ap-cdbr-azure-southeast-a.cloudapp.net";
$username = "b83ddbf91ea530";
$password = "afbdf16f";

//Database=shampooAhxBCXGFd;Data Source=ap-cdbr-azure-southeast-a.cloudapp.net;User Id=b1714f994df5fc;Password=6226870c
//Database=shampooAwdP4ZOGp;Data Source=ap-cdbr-azure-southeast-a.cloudapp.net;User Id=b83ddbf91ea530;Password=afbdf16f
// Create connection
<?php
$link = mysql_connect($servername, $username, $password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
?>