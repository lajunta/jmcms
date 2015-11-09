<?php
	include("../core.php");
	session_destroy();
	//header("Location:$root_url");
	?>
<html>
<head>
<meta http-equiv="Refresh" content="1;url=<?php echo $root_url; ?>" />
<meta charset="utf-8" />
</head>
<body>
<h3>你已经登出系统</h3>
</body>
</html>