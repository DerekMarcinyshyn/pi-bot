$(document).ready(function() {
	console.log('ready');

	var pan = 1250;
	var tilt = 1200;

	$('.up-button').on('click', function(e) {
		tilt = tilt - 50;
		$.get('tilt/'+tilt, function(data) {			
			if (tilt < 600) pan = 650;			
		});
	});

	$('.down-button').on('click', function(e) {
		tilt = tilt + 50;
		$.get('tilt/'+tilt, function(data) {			
			if (tilt > 1800) tilt = 1750;
		});
	});

	$('.left-button').on('click', function(e) {
		pan = pan + 50;
		$.get('pan/'+pan, function(data) {				
			if (pan > 2400) pan = 2300;
		});
	});

	$('.right-button').on('click', function(e) {
		pan = pan - 50;
		$.get('pan/'+pan, function(data) {			
			if (pan < 300) pan = 300;
		});
	});

	$('.center-button').on('click', function(e) {
		$.get('center', function(data) {
			pan = 1250;
			tilt = 1200;
		});
	});

	$('#led-lights').change(function() {
		var lights = ($('#led-lights').prop('checked')) ? 'on' : 'off';
		$.get('led-lights/'+lights, function(data) {
			console.log(data);
		});
	});

	$('#ir-lights').change(function() {
		var lights = ($('#ir-lights').prop('checked')) ? 'on' : 'off';
		$.get('ir-lights/'+lights, function(data) {
			console.log(data);
		});
	});
});