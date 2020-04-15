<?php 
include("conn.php");
$bh=$_GET["id"];
$result=mysqli_query($link,"select *  from ma_main where id = $bh");	
if($result){
$news=mysqli_fetch_array($result);	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>扫码一键挪车</title>
</head>
<body>
    
</body>
<script>
  <?php echo "window.location.href = 'tel:".$news["tel"]."';";?>
</script>
</html>
<?php
}else{
    echo "错误";
}
?>