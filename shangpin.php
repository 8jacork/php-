
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    	<li class="headli"><a href="#" class="heada"><img src="himages/1.png" height="70px" /></a></li>
        
    	<li class="headli"><div ><a href="houtaizhu.php" class="heada">管理控制台</a></div></li>
    
    	<li id="usern"class="headli"><a href="#" class="heada"><?php  echo $_SESSION['xingming']; ?></a></li>
        <li id="quit"class="headli"><a href="adminlogin.php" class="heada">退出系统</a></li>
    </ul>

</div>

<div id="zhong">

<div id="shulan">
<ul>
	<li class="shuli"><a href="houtai.php">管理员</a><hr /></li>
    
	<li	class="shuli"><a href="userxinxi.php">用户管理</a><hr /></li>
   
    <li class="shuli"><a href="equip.php">健身设备管理</a><hr /></li>
  
    <li class="shuli"><a href="appoint.php">预约管理</a></li>
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
			$data = mysqli_query($con,"select * from sp");
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
			$data=mysqli_query($con,"select * from sp limit $start,$page_size");
?>
<table width="1300" border="1" align="center">
			
            <tr><th colspan="9">商品信息</th></tr>
            <tr>
                <td  width="100px">商品id</td>
				<td   width="100px">商品名称</td>
            	<td   width="100px">商品价格</td>
                <td  width="350px">商品简介</td>
                <td   width="100px" >图片</td>
                <td  width="100px">商品规格</td>
                
				
                <td width="200px">操作</td>
    </tr>

<?php
			while($row = mysqli_fetch_array($data))
			{	
?>
              <tr> 
            	<td ><?php echo $row["id"] ?></td>
            	<td ><?php echo $row["name"] ?></td>
                <td ><?php echo $row["price"] ?></td>
                <td ><?php echo $row["news"] ?></td>
                
                <td ><img src="img/<?php echo $row['tupian'] ?>" height='100' width='100' /></td>
                <td><?php echo $row["size"] ?></td>
               
                <td><a href="spdelete.php?id=<?php echo $row['id']; ?>">删除</a>/<a href="spupdate.php?id=<?php echo $row['id']; ?>">修改</a></td>
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