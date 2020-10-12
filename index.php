<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>はままつ芸術大学 資料請求フォーム</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="wrapper">
	<div class="header">
		<h1>はままつ芸術大学　資料請求フォーム</h1>
	</div>

	<div class="intro">
		<p>この度は資料請求をしていただき、ありがとうございます。以下の項目に沿って、必要事項を入力してください。</p>
	</div>

	入力
	確認
	完了

	<div class="input">
	<form action="" method="post" id="rec_documents">
		<div class="recdocname">
			<p class="label-title">希望資料</p><br>
			<input type="checkbox" name="pamphlet" id="pamphlet" value="1"><label for="pamphlet">2021年度パンフレット（学部）</label><br>
			<input type="checkbox" name="graduationworks" id="graduationworks" value="2"><label for="graduationworks">2021年度 卒業制作優秀作品集</label>
		</div>
		
		<div class="customerinfo">
			<div class="customerinfo_name">
				<label for="name" class="label-title">氏名（漢字）</label>
				<input type="text" name="name" id="name" autocomplete="name">
			</div>

			<div class="customerinfo_kananame">
				<label for="kananame" class="label-title">氏名（ふりがな）</label>
				<input type="text" name="kananame" id="kananame">
			</div>

			<div class="customerinfo_address">
				<p class="label-title">住所</p>
				<label for="postal-code" class="label">郵便番号</label><br>
				<input type="text" name="postal-code" id="postal-code"><br>

				<label for="address-level1" class="label">番地・マンション名</label><br>
				<input type="text" name="address-level1" id="address-level1"><br>

				<label for="address-level2" class="label">市区町村</label><br>
				<input type="text" name="address-level2" id="address-level2"><br>
				
				<label for="address-line1" class="label">番地等</label><br>
				<input type="text" name="address-line1" id="address-line1"><br>

				<label for="address-line2" class="label">マンション名</label><br>
				<input type="text" name="address-line2" id="address-line2"><br>
			</div>

			<div class="tel">
				<label for="tel" class="label-title">電話番号</label>
				<input type="tel" name="tel" id="tel">
			</div>

			<div class="email">
				<label for="email" class="label-title">メールアドレス</label>
				<input type="email" name="email" id="email">
			</div>

			<div class="sex">
				<p class="label-title">性別</p>
				<input type="radio" name="sex" id="male" value="male"><label for="male">男</label>
				<input type="radio" name="sex" id="female" value="female"><label for="female">女</label>
			</div>

			<div class="bday">
				<label for="bday" class="label-title">生年月日</label>
				<input type="text" name="bday" id="bday">
			</div>

		</div>

		<div class="course">
			<p class="label-title">志望学部・学科をお答えください（複数選択可）</p>
			<input type="checkbox" name="pnt_jp" id="paint_jp" value="1"><label for="paint_jp">美術学部　美術学科　日本画専攻</label><br>
			<input type="checkbox" name="pnt_oil" id="paint_oil" value="2"><label for="paint_oil">美術学部　美術学科　油絵専攻</label><br>
			<input type="checkbox" name="sculpture" id="sculpture" value="3"><label for="sculpture">美術学部　美術学科　彫刻専攻</label><br>
			<input type="checkbox" name="dsgn_product" id="dsgn_product" value="4"><label for="dsgn_product">美術学部　デザイン学科　プロダクトデザイン専攻</label><br>
			<input type="checkbox" name="dsgn_architecture" id="dsgn_architecture" value="5"><label for="dsgn_architecture">美術学部　デザイン学科　建築デザイン専攻</label><br>
		</div>

		<button type="submit" form="rec_documents">確認する</button>

	</form>

	</div>

</div>


</body>
</html>