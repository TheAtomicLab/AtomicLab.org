var termino = true;
function mostrar_otros() {
	if (termino == true) {
		termino = false
		var otros = $("#otros_montos");
		var ot = document.getElementById('ot')
		if (otros.hasClass('ot_act')) {
			$(otros).removeClass('ot_act');
			setTimeout(function(){ot.style.display = 'none'; termino = true;}, 200);
		} else {
			ot.style.display = 'block';
			setTimeout(function(){$(otros).addClass('ot_act'); termino = true;}, 10);
		}
	}
}

function donate(x) {
	var ars = null;
	var usd = null;
	var titulo = null;
	var mpago = null; //link a mercado pago
	var libre = false;
	//modificar estos valores para modificar los montos
	switch(x) {
		case 0:
			titulo = 'Donar una mano';
			ars = 300;
			usd = 17;
			mpago = 'https://www.mercadopago.com/mla/checkout/start?pref_id=250863338-14def56b-ae43-456c-95d6-cb95f9f667ec';
			break;
		case 1:
			titulo = 'Donar un brazo';
			ars = 450;
			usd = 25;
			mpago = 'https://www.mercadopago.com/mla/checkout/start?pref_id=250863338-36b6a4d7-923c-4f28-9780-8f6bc1ed2253';
			break;
		case 3:
			titulo = 'Donación libre'
			libre = true; //Esto hace que se muestr el otro form
	}
	$('#out h2').text(titulo);
	if (libre == false) {
		$("#dona_a").css('display', 'block');
		$('#dona_a .valorUSD').text(usd+'(USD)');
		$('#dona_a .valorARS').text(ars+'(ARS)');
		$('#paypalUSD').attr('href', 'https://www.paypal.com/paypalme/TheAtomicLab/send?amount='+usd+'&currencyCode=USD');
		$('#paypalARS').attr('href', 'https://www.paypal.com/paypalme/TheAtomicLab/send?amount='+ars+'&currencyCode=ARS');
		$('#mpago').attr('href', mpago);
	} else {
		$("#dona_b").css('display', 'block');
	}
	$("#output").css('display', 'block');
}
function cerrar_donate() {
	$("#output").css('display', 'none');
	$("#dona_a").css('display', 'none');
	$("#dona_b").css('display', 'none');
	//reset
	$('#dona_a h2').text('');
	$('#dona_a .valorUSD').text('');
	$('#dona_a .valorARS').text('');
	$('#paypalUSD').attr('href', '');
	$('#paypalARS').attr('href', '');
	$('#mpago').attr('href', '');
}