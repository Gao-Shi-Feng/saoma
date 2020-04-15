<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>提交中。。。。</title>
</head>

<body>
 <?php include('conn.php');
 $t1=$_POST['tel'];
 $t2= date("Y/m/d H:i:s");




	$result=mysqli_query($link,"INSERT INTO `ma_main` (`tel`, `shijian`) VALUES ('$t1', '$t2')");
	
 if($result){
	
	 $id=mysqli_insert_id($link);
 	echo "<script>alert('提交成功');location.href='https://cli.im/api/qrcode/code?text=https://www.rapbang.cn/saoma/saoma.php?id=$id&mhid=4BeSBFnumMshMHcnLtFUOas';</script>";
}else{
	echo "<script>alert('提交失败,请联系管理员QQ1986083121');history.back();</script>";
}
 ?>
</body>
</html>