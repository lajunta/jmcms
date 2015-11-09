<?php include("../core.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/moban.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="stylesheet" type="text/css" href="../assets/jqm/jquery.mobile-1.4.5.min.css"/>
<link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
<script type="text/javascript" src="../assets/js/jquery.1.10.0.min.js"></script>
<script type="text/javascript" src="../assets/jqm/jquery.mobile-1.4.5.min.js"></script>

<!-- InstanceBeginEditable name="doctitle" -->

<title>李伟强职业技术学校</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div data-role="page" id="index">
	<div data-role="panel" id="lpanel" data-position="right" data-display="overlay">
        <h3 align="center">
             <?php 
             if(is_login()){
                echo "<a href=$root_url>".$_SESSION['login'].$_SESSION['role']." </a>";
				echo "<a href=".$root_url."auth/logout.php" . " data-icon='user' data-role='button' >登出</a>";
            }else{
            ?>
            <a href=<?php echo $root_url."auth/login.php" ?> data-icon="user" data-role="button" >登录</a>
            <? } ?>
         </h3>
         <ul data-role="listview">
             <li>   <a href=<?php echo $root_url."pages/new.php"; ?> >发布文章</a>     </li>
             <li>   <a href=<?php echo $root_url."pages/index.php"; ?> >文章管理</a>     </li>
             <li>   <a href=<?php echo $root_url."users/index.php"; ?> >用户管理</a>     </li>
         </ul> 
         <a href="" data-icon="delete" data-role="button" data-theme="c" data-rel="close">关闭</a>

    </div>
	<div data-role="header" data-theme="f" >
    	<a href=<?php echo $root_url ?> data-icon="home" data-role="button"  data-iconpos="notext"  >首页</a>
    	<h1>李伟强职校</h1>
    	<a href="#lpanel" data-icon="info" data-role="button"  data-iconpos="notext" >登录</a>
		
    </div>
    
    <div data-role="content">
	<!-- InstanceBeginEditable name="CONTENT" -->
	
		<table data-role="table"  data-mode="reflow" class="ui-responsive ui-table ui-table-reflow table-stroke">
    	<thead>
        <tr>
        	<th>文章名</th>
            <th>类别</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        <?php 
			$tt = "文章列表";
			if(isset($_GET['tag'])){
				$tt = $_GET['tag'];
				$sql="select * from pages where tag='$_GET[tag]';";
			}else{
				$sql="select * from pages ;";
			}
			echo "<h3>$tt</h3>";
			$result=mysql_query($sql,$con);
			while($row=mysql_fetch_array($result)){
				$title = $row['title'];
				$tag = $row['tag'];	
				$id = $row['id'];
				echo "<tr>";
				echo "<td>$title</td>";
				echo "<td>$tag</td>";
				echo "<td>";
				if(is_role("admin")){
				echo "<a href=edit.php?id=$id> 编辑 </a> ";
				echo "<a href=destroy.php?id=$id> 删除 </a> ";
				}
				echo "</td>";
				echo "</tr>";
			}
		?>
        </tbody>
    </table>
	<!-- InstanceEndEditable -->
    </div>
    
    <div data-role="footer" data-position="fixed">
    
    	<div data-role="navbar" data-iconpos="notext">
        <ul>
        	<li><a href=<?php echo $root_url."pages/show.php?pname=校园概况"; ?> > 校园概况 </a></li>
        	<li><a href=<?php echo $root_url."pages/?tag=专业介绍"; ?> > 专业介绍 </a></li>
        	<li><a href=<?php echo $root_url."pages/?tag=学习园地"; ?> > 学习园地 </a></li> 
        	<li><a href=<?php echo $root_url."pages/show.php?pname=联系我们"; ?> > 联系我们 </a></li>                               
         </ul>
        </div>
    </div>
</div>
</body>
<!-- InstanceEnd --></html>
