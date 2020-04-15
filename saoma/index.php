<?php 
include("conn.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>生成一键挪车二维码</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>

	<div class="cont">
	<h1>在线生成扫码挪车二维码</h1>
		<form method="post" action="index_pd.php">
			<div class="kuang">
				<input type="text" class="input_text" name="tel" id="tel" placeholder="请输入您的手机号"  required/>
				<br>
				<input type="submit" class="bt" value="确定">
			</div>
		</form>
	<div class="mianze">
		<p>注意事项：如在使用过程中遇到影响使用的重大BUG，请联系作者qq：1986083121（备注来意）。</p>
		<p>使用教程：输入框输入手机号，点击确定就ojbk了。</p>
		<p>本程序仅为学习所用，禁止使用此程序盈利。</p>
	</div>
		
	</div>

	</body>
</html>
