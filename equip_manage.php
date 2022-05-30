<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>管理员系统</title>
	<link rel="stylesheet" type="text/css" href="hstyle.css"/>
</head>

<body>
	<?php
  session_start();
  if(!($_SESSION['xingming'])){
     echo"<script>alert('登录后，才能查看');location='adminlogin.php'</script>";
  }
  ?>


<div  id="header">
	<ul id="uu1">
    	<li class="headli"><a href="#" class="heada"><img src="../qiantai/himages/1.png" height="70px" /></a></li>
        
    	<li class="headli"><div ><a href="../qiantai/houtaizhu.php" class="heada">管理控制台</a></div></li>
    
    	<li id="usern"class="headli"><a href="#" class="heada"><?php  echo $_SESSION['xingming']; ?></a></li>
        <li id="quit"class="headli"><a href="../qiantai/adminlogin.php" class="heada">退出系统</a></li>
    </ul>

</div>

<div id="zhong">

<div id="shulan">
<ul>
	<li class="shuli"><a href="../qiantai/houtai.php">管理员</a><hr /></li>
    
	<li	class="shuli"><a href="../qiantai/userxinxi.php">用户管理</a><hr /></li>
   
    <li class="shuli"><a href="../qiantai/equip.php">健身设备管理</a><hr /></li>
  
    <li class="shuli"><a href="../qiantai/appoint.php">预约管理</a></li>
    <li class="shuli"><a href="#"></a></li>
</ul>



</div>

<div id="data">

<div >
欢迎管理员——<?php  echo $_SESSION['xingming']; ?>
<hr />
<h3>商品信息：</h3>
</div>


<div align="center">
<form method="post" id="productform" name="productform" action="">

<?php
$con=mysqli_connect("localhost","root","","admindatabase");	
	mysqli_query($con,"set names utf8");
			$data = mysqli_query($con,"select * from appoint");
			$maxrows = mysqli_num_rows($data);
			$page_size = 3;  //每页显示数
			if($maxrows%$page_size == 0)
			{
				$maxpage = (int)($maxrows/$page_size);
			}
			else
			{
				$maxpage = (int)($maxrows/$page_size)+1;
			}
			if(isset($_GET['curpage']))
			{
				$page = $_GET['curpage'];
			}
			else
			{
				$page=1;
			}
			$start = $page_size*($page-1);
			$data=mysqli_query($con,"select * from appoint limit $start,$page_size");
?>
<table width="1300" border="1" align="center">
			
            <tr><th colspan="9">预约信息</th></tr>
            <tr>
				<td  width="100px">用户编号</td>
                <td  width="100px">设备名称</td>
				<td   width="100px">图片</td>
            	<td   width="100px">小时租金</td>
                <td  width="100px">设备编号</td> 
                <td width="200px">操作</td>
    </tr>

<?php
			while($row = mysqli_fetch_array($data))
			{	
?>
              <tr> 
            	<td ><?php echo $row[0] ?></td>
            	<td ><?php echo $row[1] ?></td>
                <td ><img src="img/<?php echo $row[2] ?>" height='100' width='100' /></td>
                <td ><?php echo $row[3] ?></td>
                <td><?php echo $row[4] ?></td>
               
                <td><a href="appointout.php?eid=<?php echo $row[4]; ?>">删除</a>/<a href="appointupdate.php?id=<?php echo $row['id']; ?>">修改</a></td>
    </tr>
<?php
		    }
?>
		</table>
        <table>
        <tr>
        <td>
<?php
		echo "<p>共 $maxpage 页&nbsp;&nbsp;";
		//设置上一页
		if($page>1){
			$prepage=$page-1;
			echo "<a href='?curpage=$prepage'>上一页</a>&nbsp;&nbsp;";
		}
		//设置下一页
		if($page<$maxpage){
			$nextpage=$page+1;
			 echo "<a href='?curpage=$nextpage'>下一页</a>&nbsp;&nbsp;";
		}
		echo "&nbsp;&nbsp;第 $page 页</p>";
	
  ?>
</td></tr></table>
</form>
</div>

</div>

</body>
</html>