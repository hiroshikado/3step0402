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
		<?php 
		$number = 200;
		// $number = $_POST["inputVal"];
		if ( $number > 100 ) {
			echo "100より大きいです";
		} else {
			echo "100以下です";
		}
		?>
	</div>
</body>
</html>
