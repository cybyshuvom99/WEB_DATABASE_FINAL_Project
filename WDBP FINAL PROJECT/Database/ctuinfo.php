<?php
include("../controller/config.php");
$table_Cuinfo="CREATE TABLE IF NOT EXISTS Cuinfo(
cid INT(11) NOT NULL auto_increment,
PRIMARY KEY(cid),
fname VARCHAR(50) NOT NULL,
lname VARCHAR(50) NOT NULL,
phone VARCHAR(13) NOT NULL,
uname VARCHAR(50) NOT NULL,
pass  VARCHAR(18) NOT NULL,
gender ENUM('m','f','o') NOT NULL
)";
$Cuinfo=mysqli_query($myconn,$table_Cuinfo);
if($Cuinfo===TRUE)
{
	echo "Cuinfo tabel created";
}
else
{
		echo "Cuinfo tabel not created";
}
?>