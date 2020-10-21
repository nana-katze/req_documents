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
		<div class="form-item recdocname">
			<div class="label-title"><p>希望資料</p></div>
			<div class="inputarea">
				<p>
					<input type="checkbox" name="pamphlet" id="pamphlet" value="1"><label for="pamphlet">2021年度パンフレット（学部）</label><br>
					<input type="checkbox" name="graduationworks" id="graduationworks" value="2"><label for="graduationworks">2021年度 卒業制作優秀作品集</label>
				</p>
			</div>
		</div>
		
		<div class="form-item customerinfo">
			<div class="customerinfo-input name">
				<div class="label-title label-title_side"><p>名前</p></div>
				<div class="inputarea"><p><input type="text" class="name" name="name" autocomplete="name" placeholder="鈴木 花子"></p></div>
			</div>

			<div class="customerinfo-input kananame">
				<div class="label-title label-title_side"><p>名前（ふりがな）</p></div>
				<div class="inputarea"><p><input type="text" class="kananame" name="kananame" autocomplete="kananame" placeholder="すずき はなこ"></p></div>
			</div>

			<div class="customerinfo-input address">
				<div class="label-title label-title_side"><p>住所</p></div>
				<div class="inputarea">
					<p class="label-sub">郵便番号</p>
					<p><input type="text" class="postal-code" name="postal-code" autocomplete="postal-code" placeholder="1230001"></p>

					<p class="label-sub">都道府県</p>
					<div class="select-wrap">
						<p><select name="pref_name">
							<option value="" hidden>選択してください</option>
							<option value="北海道">北海道</option>
							<option value="青森県">青森県</option>
							<option value="岩手県">岩手県</option>
							<option value="宮城県">宮城県</option>
							<option value="秋田県">秋田県</option>
							<option value="山形県">山形県</option>
							<option value="福島県">福島県</option>
							<option value="茨城県">茨城県</option>
							<option value="栃木県">栃木県</option>
							<option value="群馬県">群馬県</option>
							<option value="埼玉県">埼玉県</option>
							<option value="千葉県">千葉県</option>
							<option value="東京都">東京都</option>
							<option value="神奈川県">神奈川県</option>
							<option value="新潟県">新潟県</option>
							<option value="富山県">富山県</option>
							<option value="石川県">石川県</option>
							<option value="福井県">福井県</option>
							<option value="山梨県">山梨県</option>
							<option value="長野県">長野県</option>
							<option value="岐阜県">岐阜県</option>
							<option value="静岡県">静岡県</option>
							<option value="愛知県">愛知県</option>
							<option value="三重県">三重県</option>
							<option value="滋賀県">滋賀県</option>
							<option value="京都府">京都府</option>
							<option value="大阪府">大阪府</option>
							<option value="兵庫県">兵庫県</option>
							<option value="奈良県">奈良県</option>
							<option value="和歌山県">和歌山県</option>
							<option value="鳥取県">鳥取県</option>
							<option value="島根県">島根県</option>
							<option value="岡山県">岡山県</option>
							<option value="広島県">広島県</option>
							<option value="山口県">山口県</option>
							<option value="徳島県">徳島県</option>
							<option value="香川県">香川県</option>
							<option value="愛媛県">愛媛県</option>
							<option value="高知県">高知県</option>
							<option value="福岡県">福岡県</option>
							<option value="佐賀県">佐賀県</option>
							<option value="長崎県">長崎県</option>
							<option value="熊本県">熊本県</option>
							<option value="大分県">大分県</option>
							<option value="宮崎県">宮崎県</option>
							<option value="鹿児島県">鹿児島県</option>
							<option value="沖縄県">沖縄県</option>
						</select></p>
					</div>

					<p class="label-sub">市区町村</p>
					<p><input type="text" class="address-level2" name="address-level2" autocomplete="address-level2" placeholder="〇〇市〇〇区〇〇町"></p>
					
					<p class="label-sub">丁目・番地等</p>
					<p><input type="text" class="address-line1" name="address-line1" autocomplete="address-line1" placeholder="〇丁目1-1-1"></p>

					<p class="label-sub">マンション・建物名</p>
					<p><input type="text" class="address-line2" name="address-line2" autocomplete="address-line2" placeholder="〇〇マンション 101号室"></p>
				</div>
			</div>

			<div class="customerinfo-input tel">
				<div class="label-title label-title_side"><p>電話番号</p></div>
				<div class="inputarea"><p><input type="tel" class="tel" name="tel" autocomplete="tel" placeholder="090XXXXXXXX">（携帯電話番号も可）</p></div>
			</div>

			<div class="customerinfo-input email">
				<div class="label-title label-title_side"><p>メールアドレス</p></div>
				<div class="inputarea">
					<p>
						<input type="email" class="email" name="email" autocomplete="email" placeholder="XXXX@gmail.com">
						<input type="email" class="email" name="email-chk" autocomplete="email" placeholder="XXXX@gmail.com（確認のため再入力）">
					</p>
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
				<div class="inputarea"><p><input type="text" class="bday" name="bday" autocomplete="bday" placeholder="2002-04-01"></p></div>
			</div>
		</div>

		<div class="form-item course">
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
			<button type="submit" form="rec_documents" class="btn_submit"><p>確認する</p></button>
		</div>

	</form>

</div>

</body>
</html>
