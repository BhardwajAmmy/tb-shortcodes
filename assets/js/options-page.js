// Wait DOM
jQuery(document).ready(function ($) {

	// ########## About screen ##########

	$('.tbs-demo-video').magnificPopup({
		type: 'iframe'
	});

	// ########## Custom CSS screen ##########

	$('.tbs-custom-css-originals a').magnificPopup({
		type: 'iframe'
	});

	// Enable ACE editor
	if ($('#techbooth-field-custom-css-editor').length > 0) {
		var editor = ace.edit('techbooth-field-custom-css-editor'),
			$textarea = $('#techbooth-field-custom-css').hide();
		editor.getSession().setValue($textarea.val());
		editor.getSession().on('change', function () {
			$textarea.val(editor.getSession().getValue());
		});
		editor.getSession().setMode('ace/mode/css');
		editor.setTheme('ace/theme/monokai');
		editor.getSession().setUseWrapMode(true);
		editor.getSession().setWrapLimitRange(null, null);
		editor.renderer.setShowPrintMargin(null);
		editor.session.setUseSoftTabs(null);
	}

	// ########## Add-ons screen ##########

	var addons_timer = 0;
	$('.tbs-addons-item').each(function () {
		var $item = $(this),
			delay = 300;
		$item.click(function (e) {
			window.open($(this).data('url'));
			e.preventDefault();
		});
		addons_timer = addons_timer + delay;
		window.setTimeout(function () {
			$item.addClass('animated bounceIn').css('visibility', 'visible');
		}, addons_timer);
	});

	// ########## Examples screen ##########

	// Disable all buttons
	$('#tbs-examples-preview').on('click', '.tbs-button', function (e) {
		if ($(this).hasClass('tbs-example-button-clicked')) alert(tbs_options_page.not_clickable);
		else $(this).addClass('tbs-example-button-clicked');
		e.preventDefault();
	});

	var examples_timer = 0,
		$example_window = $('#tbs-examples-window'),
		$example_preview = $('#tbs-examples-preview');
	$('.tbs-examples-group-title, .tbs-examples-item').each(function () {
		var $item = $(this),
			delay = 200;
		if ($item.hasClass('tbs-examples-item')) $item.on('mousedown', function (e) {
			var code = $(this).data('code'),
				id = $(this).data('id');
			$item.magnificPopup({
				type: 'inline',
				alignTop: true,
				callbacks: {
					close: function () {
						$example_preview.html('');
					}
				}
			});
			var tbs_example_preview = $.ajax({
				url: ajaxurl,
				type: 'get',
				dataType: 'html',
				data: {
					action: 'tbs_example_preview',
					code: code,
					id: id
				},
				beforeSend: function () {
					if (typeof tbs_example_preview === 'object') tbs_example_preview.abort();
					$example_window.addClass('tbs-ajax');
					$item.magnificPopup('open');
				},
				success: function (data) {
					$example_preview.html(data);
					$example_window.removeClass('tbs-ajax');
				}
			});
			e.preventDefault();
		});
		examples_timer = examples_timer + delay;
		window.setTimeout(function () {
			$item.addClass('animated fadeInDown').css('visibility', 'visible');
		}, examples_timer);
	});
	$('#tbs-examples-window').on('mousedown', '.tbs-examples-get-code', function (e) {
		$(this).hide();
		$(this).parent('.tbs-examples-code').children('textarea').slideDown(300);
		e.preventDefault();
	});
});