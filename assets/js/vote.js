jQuery(document).ready(function ($) {
	$('#wpwrap').before($('.tbs-vote').slideDown());
	$('.tbs-vote-action').on('click', function (e) {
		var $this = $(this);
		e.preventDefault();
		$.ajax({
			type: 'get',
			url: $this.attr('href'),
			beforeSend: function () {
				$('.tbs-vote').slideUp();
				if (typeof $this.data('action') !== 'undefined') window.open($this.data('action'));
			},
			success: function (data) {}
		});
	});
});