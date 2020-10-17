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
		<p>この度は資料請求をしていただき、ありがとうございます。<br>以下の項目に沿って、必要事項を入力してください。</p>
	</div>

	<form action="" method="post" id="rec_documents">
		<div class="recdocname">
			<div class="label-title"><p>希望資料</p></div>
			<div class="inputarea">
				<p>
					<input type="checkbox" name="pamphlet" id="pamphlet" value="1"><label for="pamphlet">2021年度パンフレット（学部）</label><br>
					<input type="checkbox" name="graduationworks" id="graduationworks" value="2"><label for="graduationworks">2021年度 卒業制作優秀作品集</label>
				</p>
			</div>
		</div>
		
		<div class="customerinfo">
			<div class="customerinfo-input name">
				<div class="label-title label-title_side"><p>名前</p></div>
				<div class="inputarea"><input type="text" class="name" name="name" autocomplete="name" placeholder="鈴木 花子"></div>
			</div>

			<div class="customerinfo-input kananame">
				<div class="label-title label-title_side"><p>名前（ふりがな）</p></div>
				<div class="inputarea"><input type="text" class="kananame" name="kananame" autocomplete="kananame" placeholder="すずき はなこ"></div>
			</div>

			<div class="customerinfo-input address">
				<div class="label-title label-title_side"><p>住所</p></div>
				<div class="inputarea">
					<p class="label-sub">郵便番号</p>
					<input type="text" class="postal-code" name="postal-code" autocomplete="postal-code" placeholder="1230001">

					<p class="label-sub">都道府県</p>
					<input type="text" class="address-level1" name="address-level1" autocomplete="address-level1" placeholder="静岡県">

					<p class="label-sub">市区町村</p>
					<input type="text" class="address-level2" name="address-level2" autocomplete="address-level2" placeholder="〇〇市〇〇区〇〇町">
					
					<p class="label-sub">丁目・番地等</p>
					<input type="text" class="address-line1" name="address-line1" autocomplete="address-line1" placeholder="〇丁目1-1-1">

					<p class="label-sub">マンション・建物名</p>
					<input type="text" class="address-line2" name="address-line2" autocomplete="address-line2" placeholder="〇〇マンション 101号室">
				</div>
			</div>

			<div class="customerinfo-input tel">
				<div class="label-title label-title_side"><p>電話番号（携帯電話番号も可）</p></div>
				<div class="inputarea"><input type="tel" class="tel" name="tel" autocomplete="tel" placeholder="090XXXXXXXX"></div>
			</div>

			<div class="customerinfo-input email">
				<div class="label-title label-title_side"><p>メールアドレス</p></div>
				<div class="inputarea">
					<input type="email" class="email" name="email" autocomplete="email" placeholder="XXXX@gmail.com">
					<input type="email" class="email" name="email-chk" autocomplete="email" placeholder="XXXX@gmail.com（確認のため再入力）">
				</div>
			</div>

			<div class="customerinfo-input sex">
				<div class="label-title label-title_side"><p>性別</p></div>
				<div class="inputarea">
					<p>
						<input type="radio" name="sex" id="male" value="male"><label for="male">男</label>
						<input type="radio" name="sex" id="female" value="female"><label for="female">女</label>
					</p>
				</div>
			</div>

			<div class="customerinfo-input bday">
				<div class="label-title label-title_side"><p>生年月日</p></div>
				<div class="inputarea"><input type="text" class="bday" name="bday" autocomplete="bday" placeholder="2002-04-01"></div>
			</div>
		</div>

		<div class="course">
			<div class="label-title"><p>志望学部・学科をお答えください（複数選択可）</p></div>
			<div class="inputarea">
				<p>
					<input type="checkbox" name="pnt_jp" id="paint_jp" value="1"><label for="paint_jp">美術学部　美術学科　日本画専攻</label><br>
					<input type="checkbox" name="pnt_oil" id="paint_oil" value="2"><label for="paint_oil">美術学部　美術学科　油絵専攻</label><br>
					<input type="checkbox" name="sculpture" id="sculpture" value="3"><label for="sculpture">美術学部　美術学科　彫刻専攻</label><br>
					<input type="checkbox" name="dsgn_product" id="dsgn_product" value="4"><label for="dsgn_product">美術学部　デザイン学科　プロダクトデザイン専攻</label><br>
					<input type="checkbox" name="dsgn_architecture" id="dsgn_architecture" value="5"><label for="dsgn_architecture">美術学部　デザイン学科　建築デザイン専攻</label><br>
				</p>
			</div>
		</div>

		<div class="btn">
			<button type="submit" form="rec_documents"><p>確認する</p></button>
		</div>

	</form>

</div>

</body>
</html>