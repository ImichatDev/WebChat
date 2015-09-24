<!DOCTYPE HTML>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="StyleSheet" href="styles/balloon.css">
<link rel="StyleSheet" href="styles/block.css">
<title>無題 1</title>
</head>

<body>
<img src="images/imers38.png" width="150" height="65">
<div id="block">
<ul class="balloon" style="list-style-type:none;margin:0;padding:0 1em;">
	<li>
		<?php
			echo htmlspecialchars($_GET['message']);
		?>
		<div align="left"><div id="balloon-2-left">ｗｗ</div><br><br></div>
		
	</li>
</ul>
</div>
<form action="chat.php" method="post">
	<input type="text" name="message" value="メッセージを入力してください。" /><input type="submit" value="送信" /></form>
</body>

</html>
