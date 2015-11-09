<?php include("core.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$sql = "create table pages(id int not null auto_increment primary key, title varchar(200),body text,author varchar(50),tag varchar(50),created_at datetime,updated_at datetime)";

$result=mysql_query($sql,$con);
if($result){
	echo "create pages table success";
}
else{
	echo "failed table pages";
}

$sql = "create table users(id int not null auto_increment primary key, login varchar(50),passwd varchar(50),role varchar(50),created_at datetime,updated_at datetime)";

$result=mysql_query($sql,$con);
if($result){
	echo "create users table success";
}
else{
	echo "failed table users";
}


?>


</body>
</html>