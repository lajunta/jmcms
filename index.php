<?php include("core.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/moban.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="stylesheet" type="text/css" href="assets/jqm/jquery.mobile-1.4.5.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
<script type="text/javascript" src="assets/js/jquery.1.10.0.min.js"></script>
<script type="text/javascript" src="assets/jqm/jquery.mobile-1.4.5.min.js"></script>

<!-- InstanceBeginEditable name="doctitle" -->

<title>李伟强职业技术学校</title>

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<script language="javascript" type="text/javascript">
var a = 0;

$(function(){
	play();
	setInterval(play,4000);
});

function play(){
	limg=$("img:eq("+a+")");
	limg.siblings().hide();
	limg.fadeIn(2000);
	a++;
	if(a>=3) a=0;
}
</script>
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
	<div id="index_lp">
    	<img src="assets/images/1.gif" />
    	<img src="assets/images/2.gif" /> 
    	<img src="assets/images/3.gif" />               
    </div>
	<h3 style="background-color:red;text-align:center;color:white;">李伟强职业技术学校</h3>
    
    <div id="sec2">
        <div class="ui-grid-a">
            <div class="ui-block-a"><img src="assets/images/1.gif" width="160" height="112" />
            	<h2> 学校概况</h2>
            </div>
            <div class="ui-block-b"><img src="assets/images/2.gif" width="160" height="120" />
            	<h2> 专业介绍 </h2>
            </div>

            <div class="ui-block-a"><img src="assets/images/3.gif" width="160" height="120" />
                 <h2> 学习园地 </h2>
            </div>
            <div class="ui-block-b"><img src="assets/images/1.gif" width="160" height="112" />
            	 <h2> 校园新闻 </h2>
            </div>
        </div>
    </div>
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
