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
		<p>この度は資料請求をしていただき、ありがとうございます。以下の項目に沿って、必要事項を入力してください。</p>
	</div>
<!-- 
	入力
	確認
	完了 -->

	<form action="" method="post" id="rec_documents">
		<div class="recdocname">
			<div class="label-title"><p>希望資料</p></div>
			<input type="checkbox" name="pamphlet" id="pamphlet" value="1"><label for="pamphlet">2021年度パンフレット（学部）</label><br>
			<input type="checkbox" name="graduationworks" id="graduationworks" value="2"><label for="graduationworks">2021年度 卒業制作優秀作品集</label>
		</div>
		
		<div class="customerinfo">
			<div class="customerinfo-input name">
				<div class="label-title"><p>氏名（漢字）</p></div>
				<div class="inputarea"><input type="text" name="name" autocomplete="name"></div>
			</div>

			<div class="customerinfo-input kananame">
				<div class="label-title"><p>氏名（ふりがな）</p></div>
				<div class="inputarea"><input type="text" name="kananame" autocomplete="kananame"></div>
			</div>

			<div class="customerinfo-input address">
				<div class="label-title"><p>住所</p></div>
				<div class="inputarea">
					<p class="label-sub">郵便番号</p>
					<input type="text" name="postal-code" autocomplete="postal-code"><br>

					<p class="label-sub">都道府県</p>
					<input type="text" name="address-level1" autocomplete="address-level1"><br>

					<p class="label-sub">市区町村</p>
					<input type="text" name="address-level2" autocomplete="address-level2"><br>
					
					<p class="label-sub">番地等</p>
					<input type="text" name="address-line1" autocomplete="address-line1"><br>

					<p class="label-sub">マンション名</p>
					<input type="text" name="address-line2" autocomplete="address-line2"><br>
				</div>
			</div>

			<div class="customerinfo-input tel">
				<div class="label-title"><p>電話番号</p></div>
				<div class="inputarea"><input type="tel" name="tel" autocomplete="tel"></div>
			</div>

			<div class="customerinfo-input email">
				<div class="label-title"><p>メールアドレス</p></div>
				<div class="inputarea"><input type="email" name="email" autocomplete="email"></div>
			</div>

			<div class="customerinfo-input sex">
				<div class="label-title"><p>性別</p></div>
				<div class="inputarea">
					<input type="radio" name="sex" id="male" value="male"><label for="male">男</label>
					<input type="radio" name="sex" id="female" value="female"><label for="female">女</label>
				</div>
			</div>

			<div class="customerinfo-input bday">
				<div class="label-title"><p>生年月日</p></div>
				<div class="inputarea"><input type="text" name="bday" autocomplete="bday"></div>
			</div>
		</div>

		<div class="course">
			<p>志望学部・学科をお答えください（複数選択可）</p>
			<input type="checkbox" name="pnt_jp" id="paint_jp" value="1"><label for="paint_jp">美術学部　美術学科　日本画専攻</label><br>
			<input type="checkbox" name="pnt_oil" id="paint_oil" value="2"><label for="paint_oil">美術学部　美術学科　油絵専攻</label><br>
			<input type="checkbox" name="sculpture" id="sculpture" value="3"><label for="sculpture">美術学部　美術学科　彫刻専攻</label><br>
			<input type="checkbox" name="dsgn_product" id="dsgn_product" value="4"><label for="dsgn_product">美術学部　デザイン学科　プロダクトデザイン専攻</label><br>
			<input type="checkbox" name="dsgn_architecture" id="dsgn_architecture" value="5"><label for="dsgn_architecture">美術学部　デザイン学科　建築デザイン専攻</label><br>
		</div>

		<button type="submit" form="rec_documents">確認する</button>

	</form>

</div>

</body>
</html>