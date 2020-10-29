<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/destyle.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>はままつ芸術大学 資料請求フォーム</title>
</head>
<body>

<div class="wrapper">
	<div class="header">
		<h1>はままつ芸術大学　資料請求フォーム</h1>
		<p>下記の内容で宜しいでしょうか？<br>
	宜しければ「送信」ボタンを押して下さい。</p>
	</div>

	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(isset($_POST["recdocname"]) && is_array($_POST["recdocname"])){
				$recdocname = implode("\n", $_POST["recdocname"]);
			}
			$name = $_POST["name"];
			$kananame = $_POST["kananame"];
			$postal_code = $_POST["postal_code"];
			$address_level1 = $_POST["address_level1"];
			$address_line1 = $_POST["address_line1"];
			$tel = $_POST["tel"];
			$email = $_POST["email"];
			if(isset($_POST["sex"])){
				$sex = $_POST["sex"];
			}
			$bday = $_POST["bday"];
			if(isset($_POST["course"]) && is_array($_POST["course"])){
				$course = implode("\n", $_POST["course"]);
			}
		}
	?>

<form action="complete.php" method="post" id="rec_documents">
	<div class="form-item recdocname">
		<div class="label-title"><p>希望資料</p></div>
		<div class="inputarea">
			<p><?php echo nl2br($recdocname); ?></p>
		</div>
	</div>
		
	<div class="form-item customerinfo">
		<div class="customerinfo-input name">
			<div class="label-title label-title_side"><p>名前</p></div>
			<div class="inputarea"><p><?php echo $name.'（'.$kananame.'）' ?></p></div>
		</div>

		<div class="customerinfo-input address">
			<div class="label-title label-title_side"><p>住所</p></div>
			<div class="inputarea"><p><?php echo '〒'.$postal_code.' '.$address_level1.$address_line1 ?></p></div>
		</div>

		<div class="customerinfo-input tel">
			<div class="label-title label-title_side"><p>電話番号</p></div>
			<div class="inputarea"><p><?php echo $tel ?></p></div>
		</div>

		<div class="customerinfo-input email">
			<div class="label-title label-title_side"><p>メールアドレス</p></div>
			<div class="inputarea"><p><?php echo $email ?></p></div>
		</div>

		<div class="customerinfo-input sex">
			<div class="label-title label-title_side"><p>性別</p></div>
			<div class="inputarea"><p><?php echo $sex ?></p></div>
		</div>

		<div class="customerinfo-input bday">
			<div class="label-title label-title_side"><p>生年月日</p></div>
			<div class="inputarea"><p><?php echo $bday ?></p></div>
		</div>
	</div>

	<div class="form-item course">
		<div class="label-title"><p>志望学部・学科</p></div>
		<div class="inputarea"><p><?php echo nl2br($course) ?></p></div>
	</div>

	<div class="btn">
		<button type="button" class="btn_return" onclick="history.back()"><p>内容を修正する</p></button>
		<button type="submit" class="btn_submit"><p>送信</p></button>
	</div>

</div>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/js/keyEnter.js"></script>
</body>
</html>
