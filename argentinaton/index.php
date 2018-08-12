<?php include_once('include/header.php'); ?>
  <div class="full_view_pop">
    <div>
			<div class="full_view_bg" onclick="close_full_popup()"></div>
			<div class="full_view_cont">
				<div class="full_view_close" onclick="close_full_popup()" tabindex="1" onkeydown="close_full_popup(event)"><img src="public/img/close.svg" alt="cerrar"></div>
				<div class="full_view_output">
				</div>
			</div>
    </div>
  </div>
	<main>
	    <section class="cover" id="cover">
	    	<div class="parallax-window" data-parallax="scroll" data-image-src="public/img/background.png">
	    	</div>
	    	<div class="main-copy">
	            <div class="logo">
	            	<img src="public/img/argentinaton-logo.svg" alt="Logo Argentinaton">
	            </div>
	            <div class="tagline">
	            	Recorriendo toda la Argentina regalando prótesis 3D.
	            </div>
	    	</div>
	    </section>
		<div class="row">
		    <div class="col-md-12">
		        <section class="mission" id="mission">
    				<img class="compass" src="public/img/compass.png" alt="compass">
    				<div class="max-width-wrapper">
			        	<a href="#mission" class="arrow">
			        		<img src="public/img/arrow-down.svg" alt=">">
			        	</a>
			            <article class="row">
			            	<div class="col-md-7">
			            		<h2>
			            			¿Qué<br/>queremos<br/>hacer?
			            		</h2>
			            		<p>
			            			Conociendo la gran demanda de pedidos de prótesis en Argentina, viajaremos por todo el país creándolas en la ruta mediante una impresora 3D alimentada por paneles solares.
									<br/>
									<br/>
			            			Nuestro objetivo es, no solo entregar las manos atómicas 3D, sino que también conocer las historias y costumbres de cada familia,
									escucharlos y compartir experiencias.
									<br/>
										<br/>
									Estaremos documentando todas estas actividades por medio de las redes sociales, seguinos con el hashtag <b class="f-blue">#Argentinatón</b>.
									<br/>
									<br/>
									<a class="fb-group" href="http://Facebook.com/groups/AtomicLabArgentinaton" target="_blank">
										Sumate a nuestro grupo de Facebook de Argentinatón
									</a>
			            		</p>
								<br/>
								<br/>
								<a tabindex="1" onclick="open_form('donar')" onkeydown="open_form('donar', event)" class="btn btn-lg">
				                			¡Ayudanos!
				                		</a>
			            	</div>
			            	<div class="col-md-5">
								<img class="map" src="public/img/map_incons.svg" alt="mapa">
			            	</div>
			            </article>
    				</div>
		        </section>
		        <div class="max-width-wrapper">
			        <section class="why m-t-11 m-b-11">
			            <article class="row">
			            	<div class="col-md-6 pic-wrapper">
								<img class="mano" src="public/img/mano.jpg" alt="mano">
			            	</div>
			            	<div class="col-md-6">
			            		<div class="centered">
				            		<h2>
				            			¿Por qué?
				            		</h2>
				            		<p>
				            			Hay una necesidad que cubrir y las soluciones actuales (provistas por privados, obras sociales, Estado, entre otros)
				            			no son fáciles ni económicas de adquirir para todos,
										las prótesis tienen un costo aproximado desde 7.500 US$ a más de 15.000 US$ c/u, mientras que con impresión 3D se pueden hacer por un aproximado de 20 US$.
										<br/>
										<br/>
				            			En Atomic Lab entregamos manos y brazos impresos en 3D de manera 100% gratuita a cualquier persona que lo pida. Tenemos aproximadamente 1000 pedidos de manos y brazos mecánicos 3D en Argentina y miles más en el resto del mundo. Conocemos que ese número es solo un pequeño porcentaje de todos los casos que existen en el país.
				            		</p>
			            		</div>
			            	</div>
			            </article>
			        </section>
		            <section class="what">
		        		<h3>
		        			¿Qué te gustaría hacer?
		        		</h3>
		        		<article class="full-width-mob">
			                <div class="row">
			                	<div class="col-xs-3 col-md-3 col-sm-6 margin-bottom-mob">
			                		<div class="item-box">
				                		<div class="icon">
				                			<img src="public/img/icon_mano.svg" alt="mano">
				                		</div>
				                		<div class="text">
				                			Quiero que me
				                			entreguen una prótesis 3D
				                		</div>
				                		<a href="http://limbs.earth" target="_blank" class="btn btn-lg">
				                			Pedir
				                		</a>
			                		</div>
			                	</div>
			                	<div class="col-xs-3 col-md-3 col-sm-6 margin-bottom-mob">
			                		<div class="item-box">
				                		<div class="icon">
				                			<img src="public/img/icon_donacion.svg" alt="people">
				                		</div>
				                		<div class="text">
				                			Quiero hacer una
											donación individual
				                		</div>
				                		<a tabindex="1" onclick="open_form('donar')" onkeydown="open_form('donar', event)" class="btn btn-lg">
				                			¡Donar!
				                		</a>
			                		</div>
			                	</div>
			                	<div class="col-xs-3 col-md-3 col-sm-6">
			                		<div class="item-box">
				                		<div class="icon">
				                			<img src="public/img/icon_charla.svg" alt="discussion">
				                		</div>
				                		<div class="text">
				                			Quiero que den una
											charla en mi empresa
				                		</div>
				                		<a tabindex="1" onclick="open_form('charla')" onkeydown="open_form('charla', event)" class="btn btn-lg">
				                			Contacto
				                		</a>
			                		</div>
			                	</div>
			                	<div class="col-xs-3 col-md-3 col-sm-6">
			                		<div class="item-box">
				                		<div class="icon">
				                			<img src="public/img/icon_sponsor.svg" alt="card">
				                		</div>
				                		<div class="text">
				                			Quiero sponsorear el
				                			proyecto con mi empresa
				                		</div>
				                		<a tabindex="1" onclick="open_form('sponsor')" onkeydown="open_form('sponsor', event)" class="btn btn-lg">
				                			Contacto
				                		</a>
			                		</div>
			                	</div>
			                </div>
		        		</article>
		        		<article class="center slider show-mob">
		        		  <div>
		            		<div class="item-box">
		                		<div class="icon">
		                			<img src="public/img/icon_mano.svg" alt="mano">
		                		</div>
		                		<div class="text">
		                			Quiero que me
		                			entreguen una prótesis 3D
		                		</div>
		                		<a href="http://limbs.earth" target="_blank" class="btn btn-lg">
		                			Más info
		                		</a>
		            		</div>
		        		  </div>
		        		  <div>
				    		<div class="item-box">
				        		<div class="icon">
				        			<img src="public/img/icon_donacion.svg" alt="people">
				        		</div>
				        		<div class="text">
				        			Quiero hacer una
									donación individual
				        		</div>
				        		<a tabindex="1" onclick="open_form('donar')" onkeydown="open_form('donar', event)" class="btn btn-lg">
				        			¡Donar!
				        		</a>
				    		</div>
		        		  </div>
		        		  <div>
				    		<div class="item-box">
				        		<div class="icon">
				        			<img src="public/img/icon_charla.svg" alt="discussion">
				        		</div>
				        		<div class="text">
		                			Quiero que den una
									charla en mi empresa / ciudad
				        		</div>
				        		<a tabindex="1" onclick="open_form('charla')" onkeydown="open_form('charla', event)" class="btn btn-lg">
				        			Contacto
				        		</a>
				    		</div>
		        		  </div>
		        		  <div>
		        		    <div class="item-box">
		                		<div class="icon">
		                			<img src="public/img/icon_sponsor.svg" alt="card">
		                		</div>
		                		<div class="text">
		                			Quiero sponsorear el
		                			proyecto con mi empresa
		                		</div>
		                		<a tabindex="1" onclick="open_form('sponsor')" onkeydown="open_form('sponsor', event)" class="btn btn-lg">
		                			Contacto
		                		</a>
		            		</div>
		        		  </div>
		        		</article>
		            </section>
		            <section class="sponsors m-t-11 m-b-11">
		        		<h3>
		        			Empresas que nos acompañan
		        		</h3>
		                <article class="row empresas_acompanan" style="display: flex; justify-content: center;">
			            	<div class="col-md-2">
			            		<a href="https://www.ford.com.ar" target="_blank">
			            			<img src="public/img/ford_logo.svg" alt="company">
			            		</a>
			            	</div>
			            	<div class="col-md-2">
			            		<a href="http://zarate.gob.ar" target="_blank">
			            			<img src="public/img/zaratelogo.svg?1" alt="company">
			            		</a>
			            	</div>
			            	<div class="col-md-2">
			            		<a href="http://www.123seguro.com" target="_blank">
			            			<img src="public/img/123logo.svg?1" alt="company">
			            		</a>
			            	</div>
			            	</div>
		                </article>
		            </section>
		            <footer>
		            	<a href="#cover" class="arrow">
		            		<img src="public/img/arrow-up.svg" alt=">">
		            	</a>
						<div class="info-block">
							<div class="intro">
			            		Seguinos en nuestras redes sociales
							</div>
			            	<ul>
			            		<li>
			            			<a href="http://instagram.com/TheAtomicLab">
			            				<img src="public/img/instagram.png" alt="instagram" target="_blank">
			            			</a>
			            		</li>
			            		<li>
			            			<a href="http://fb.com/TheAtomicLab">
			            				<img src="public/img/facebook.png" alt="facebook" target="_blank">
			            			</a>
			            		</li>
			            		<li>
			            			<a href="http://twitter.com/TheAtomicLab">
			            				<img src="public/img/twitter.png" alt="twitter" target="_blank">
			            			</a>
			            		</li>
			            	</ul>
			            	<div class="contact-mail">
			            		<a href="https://www.facebook.com/groups/AtomicLabArgentinaton">#Argentinatón</a>
			            	</div>
						</div>
		            	<div class="copyright">
		            		Copyright © 2018 | Atomic Lab
		            	</div>
		            </footer>
		        </div>
		    </div>
		</div>
	</main>
	<script src="public/js/forms_arg.js" type="text/javascript" charset="utf-8"></script>
	<?php include_once('include/footer.php'); ?>
