<?php
	include_once('include/header.php');
?>
<link rel="stylesheet" href="leaflet/leaflet.css">
<link rel="stylesheet" href="leaflet/leaflet-routing-machine.css">
<script src="leaflet/leaflet.js"></script>
<script src="leaflet/leaflet-routing-machine.js"></script>

<style media="screen">
	#mainMap{
		width: 100vw;
		height: 30vw;
	}
	.listaEventos{
		position: absolute;
		height: 100%;
		width: 300px;
	}
</style>
<div class="containerMap">
	<div class="listaEventos">

	</div>
	<div class="" id="mainMap"></div>
</div>

<script type="text/javascript">
	let eventos = {
		1234565: {
			type: 'entrega', //v_label
			date: 1525449989, //v_dia, v_mes
			latLan: [51.5, -0.09], //v_location
			data: {
				img: 'nene001.jpg', //v_imagen
				desc: 'Hoy entregamos una mano felizmente en londres. Gino no deja de roncar por las noches.' //v_texto
			}
		},
		2146464: {
			type: 'entrega',
			date: 1525489989,
			latLan: [51.53, -0.091],
		},
		4456464: {
			type: 'entrega',
			date: 1525499989,
			latLan: [51.525, -0.2],
		},
		4456465: {
			type: 'entrega',
			date: 1525499989,
			latLan: [51.525, -0.5],
		},
	}

	let tokenMap = 'pk.eyJ1IjoibWF0aWFzZ2YiLCJhIjoiY2pnc205Mmo2MDJsdzMzbjI2dHVsZnNhYSJ9.GHBkK7xLQz1C6DYDmQqXTw';
	let mapAtom = L.map('mainMap').setView([51.5, -0.09],12);
	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token='+tokenMap, {
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
		maxZoom: 18,
		id: 'mapbox.streets',
		accessToken: tokenMap
	}).addTo(mapAtom);

	//icons
	let iconoAtomico = L.icon({
    iconUrl: 'public/img/icons/geoAtomic.svg',
		shadowUrl: 'public/img/icons/sombrageoAtomic.png',
    iconSize:     [64, 64],
		shadowSize:   [64, 64],
		iconAnchor:   [32, 64],
    shadowAnchor: [32, 64],
	});

	let ruta = L.Routing.control({
  	waypoints: [],
  	routeWhileDragging: false,
		draggableWaypoints: false,
		addWaypoints: false,
		createMarker: false,
		lineOptions: {
			styles: [
				{color: '#f27329', opacity: 1, weight: 4},
			]
		},
  	// geocoder: L.Control.Geocoder.nominatim()
	});
	let nodosRuta = [];

	//eventos
	$.each(eventos, function(k,o){
		eventos[k].obj = {};
		eventos[k].obj = L.marker(o.latLan).addTo(mapAtom);
		eventos[k].obj.id = k;
		eventos[k].obj.on('click', markerclick);
		if(o.type=='entrega'){
			eventos[k].obj.setIcon(iconoAtomico);
		}
		nodosRuta.push(L.latLng(o.latLan[0], o.latLan[1]));
	});
	ruta.setWaypoints(nodosRuta);
	ruta.addTo(mapAtom);
	ruta.route();
	console.log(ruta);

	function markerclick(e){
		createPopup(eventos[this.id]);
		console.log(this.id);
	}

	function createPopup(obj){
		let html = '';
		let hasHeadImg = '';
		let headerUrl = false;
		if('data' in obj){
			if('img' in obj.data && obj.data != ''){
				hasHeadImg = ' hasHeaderImg';
				headerUrl = 'public/img/gallery/'+obj.data.img;
			}
		}

		let v_type = obj.type;
		let v_image = headerUrl;
		let v_location = obj.latLan;
		let v_text = "";
		let v_fecha = new Date(obj.date*1000);
		//Asco pero para pasar rapido
		const monthNames = ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO",
  		"JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"
		];

		if(obj.data != undefined )
			{
				if(obj.data.desc != undefined)
				{
					v_text = obj.data.desc;
				}
			};


		let v_dia = v_fecha.getDay();
		let v_mes = monthNames[v_fecha.getMonth()];

		html = '<div class="widget"><div class="top-box" style="background-image: url('+v_image+');"><div class="manoton-label">'+v_type+'</div></div><div class="bottom-box"><div class="location">'+v_location+'</div><p>'+v_text+'</p><div class="protesis"><img src="public/img/delivered-hand.svg" alt="h">34 manos entregadas</div><div class="footer"><div class="date"> '+v_dia+'<span> '+v_mes+'</span></div><div class="more-pics">Ver Fotos</div></div></div></div>';//end main
		// $('body').append(html);
		console.log(obj.latLan);
		let pooop = L.popup()
		.setLatLng(obj.latLan)
		.setContent(html)
		.openOn(mapAtom);
	}
</script>


<?php
	include_once('include/footer.php');
?>




<div class="widget">
	<div class="top-box" style="background-image: url('public/img/img-placeholder.png');">
		<div class="manoton-label">
			Manotón
		</div>
	</div>
	<div class="bottom-box">
		<div class="location">
			Rosario, Santa Fe
		</div>
		<p>
			It was a humorously perilous business for both of us. For, before we proceed further, it must be said that the monkey-rope was.
		</p>
		<div class="protesis">
			<img src="public/img/delivered-hand.svg" alt="h">
			34 manos entregadas
		</div>
		<div class="footer">
			<div class="date">
				20
				<span>
					MAY
				</span>
			</div>
			<div class="more-pics">
				Ver Fotos
			</div>
		</div>
	</div>
</div>
