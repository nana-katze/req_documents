$(function(){
	$('#rec_documents').validate({
		errorElement:'p',
		rules: {
			'recdocname[]': {
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
			email: {
				email: true,
				equalTo: 'email_chk'
			},
			bday: {
				date: true
			},
			'course[]': {
				required: true
			}
		},

		// messages: {
		// 	name: {
		// 		required: '値が未入力です'
		// 	},
		// 	kananame: {
		// 		required: '値が未入力です'
		// 	},
		// 	postal_code: {
		// 		required: '値が未入力です'
		// 	},
		// 	address_level1: {
		// 		required: '値が未入力です'
		// 	},
		// 	address_line1: {
		// 		required: '値が未入力です'
		// 	}
		// },

		errorPlacement: function(error, element){
			if(element.attr('name')=='recdocname[]') {
				error.insertAfter('.recdocname_error');
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