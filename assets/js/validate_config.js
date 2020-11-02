// エラーチェックの設定(validate.min.js)
$(function(){
	var errorMsg_chkbox = '1つ以上選択してください';
	var errorMsg_required = '値を入力してください';
	var errorMsg_number = '数値を入力してください';
	var errorMsg_email = 'メールアドレス形式で入力してください';
	var errorMsg_equalTo = 'メールアドレスが一致しません';

	$('#req_documents').validate({
		errorElement:'p',
		rules: {
			'reqdocname[]': {
				required: true
			},
			name: {
				required: true
			},
			kananame: {
				required: true
			},
			postal_code: {
				required: true
			},
			address_level1: {
				required: true
			},
			address_line1: {
				required: true
			},
			tel: {
				required: true,
				number: true
			},
			email_hoge: {
				required: true,
				email: true
			},
			email_chk: {
				required: true,
				email: true,
				equalTo: '#email'
				}
			},
			'course[]': {
				required: true
			},

		messages: {
			'reqdocname[]': {
				required: errorMsg_chkbox
			},
			name: {
				required: errorMsg_required
			},
			kananame: {
				required: errorMsg_required
			},
			postal_code: {
				required: errorMsg_required
			},
			address_level1: {
				required: errorMsg_required
			},
			address_line1: {
				required: errorMsg_required
			},
			tel: {
				required: errorMsg_required,
				number: errorMsg_number
			},
			email: {
				required: errorMsg_required,
				email: errorMsg_email
			},
			email_chk: {
				required: errorMsg_required,
				email: errorMsg_email,
				equalTo: errorMsg_equalTo
			},
			'course[]': {
				required: errorMsg_chkbox
			}
		},

		errorPlacement: function(error, element){
			if(element.attr('name')=='reqdocname[]') {
				error.insertAfter('.reqdocname_error');
			} else if(element.attr('name')=='course[]') {
				error.insertAfter('.course_error');
			} else if(element.attr('name')=='tel'){
				error.insertAfter('.tel_error');
			} else {
				error.insertAfter(element);
			}
		}
	});
});
