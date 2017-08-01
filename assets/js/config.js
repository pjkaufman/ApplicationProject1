"use strict";
$(document).ready(function() {
	$.ajax({
		type: "POST",
		url: location + '/time_zones',
		dataType: 'json',
		success: function(resp) {
			var markup;
			for (var row in resp) {
				markup = '<option value="' + resp[row] + '">' + resp[row] + '</option>';

				$('select.time_zone').append(markup).select2();

			};
		},
	});
});
