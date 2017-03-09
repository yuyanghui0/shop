<?php 
require_once '../include.php';
checkLogined();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>后台</title>
<link rel="stylesheet" href="styles/backstage.css">
</head>

<body>
    <div class="head operation_user clearfix">
            <div class="logo fl"><a href="#"></a></div>
            <h3 class="head_text fl">中民后台管理系统</h3>
    
       <!--   <div class="link fl"><a href="#">商城</a><span>&gt;&gt;</span><a href="#">商品管理</a><span>&gt;&gt;</span>商品修改</div>-->
        <div class="link fr">
            <b>欢迎您
            <?php 
				if(isset($_SESSION['adminName'])){
					echo $_SESSION['adminName'];
				}elseif(isset($_COOKIE['adminName'])){
					echo $_COOKIE['adminName'];
				}
            ?>
            
            </b>&nbsp;&nbsp;&nbsp;&nbsp;<span></span><a href="doAdminAction.php?act=logout" class="icon icon_e">退出</a>
        </div>
    </div>
    <div class="content clearfix">
        <div class="main">
            <!--右侧内容-->
            <div class="cont" style="margin-top: 30px;">
               
      	 		<!-- 嵌套网页开始 -->         
                <iframe src="addPro.php"  frameborder="0" name="mainFrame" width="100%" height="700px" ></iframe>
                <!-- 嵌套网页结束 -->   
            </div>
        </div>
        <!--左侧列表-->
        <div class="menu">
            <div class="cont">
                <div class="title">积分商城</div>
                <ul class="mList">
                    <li>
                        <h3 onclick="show('menu1','change1')" style="cursor:pointer;">商品管理</h3>
                        <dl id="menu1">
                        	<dd><a href="addPro.php" target="mainFrame">添加商品</a></dd>
                            <dd><a href="listPro.php" target="mainFrame">商品列表</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3 onclick="show('menu2','change2')" style="cursor:pointer;">分类管理</h3>
                        <dl id="menu2" style="display:none;">
                        	<dd><a href="addCate.php" target="mainFrame">添加分类</a></dd>
                            <dd><a href="listCate.php" target="mainFrame">分类列表</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3 onclick="show('menu3','change3')" style="cursor:pointer;">订单管理</h3>
                        <dl id="menu3" style="display:none;">
                            <dd><a href="listOrder.php" target="mainFrame">订单列表</a></dd>
                            <dd><a href="#">订单修改</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3 onclick="show('menu4','change4')" style="cursor:pointer;">用户管理</h3>
                        <dl id="menu4" style="display:none;">
                        	<dd><a href="addUser.php" target="mainFrame">添加用户</a></dd>
                            <dd><a href="listUser.php" target="mainFrame">用户列表</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3 onclick="show('menu5','change5')" style="cursor:pointer;">管理员管理</h3>
                        <dl id="menu5" style="display:none;">
                        	<dd><a href="addAdmin.php" target="mainFrame">添加管理员</a></dd>
                            <dd><a href="listAdmin.php" target="mainFrame">管理员列表</a></dd>
                        </dl>
                    </li>
                    
                         <li>
                        <h3 onclick="show('menu6','change6')" style="cursor:pointer;">商品图片管理</h3>
                        <dl id="menu6" style="display:none;">
                            <dd><a href="listProImages.php" target="mainFrame">商品图片列表</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <script type="text/javascript">
    	function show(num,change){
	    		var menu=document.getElementById(num);	    		
    		   if(menu.style.display=='none'){
    	             menu.style.display='';
    		    }else{
    		         menu.style.display='none';
    		    }
        }
    </script>
</body>
</html>