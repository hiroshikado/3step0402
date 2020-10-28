<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>if elseを使ってみよう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>if elseを使ってみよう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<h4>好きな数値を入力してください</h4>
		<form action="if.php" method="post">
			<label>数値</label>
			<input type="text" class="form-control" name="inputVal">
			<input type="submit" class="btn" value="送信">
		</form>
	</div>
</body>
</html>
