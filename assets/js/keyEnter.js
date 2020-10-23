$(function() {
	var elements = 'input[type=text], input[type=email], input[type=tel]';
	$(elements).on('keydown', function(e){
		var n = $(elements).length;
		if (e.which == 13) {
			e.preventDefault();
			var Index = $(elements).index(this);
			var nextIndex = $(elements).index(this) + 1;
			if (nextIndex < n) {
				$(elements)[nextIndex].focus();
			} else {
				$(elements)[index].blur();
			}
		}
	});
});

