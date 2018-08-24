<?php get_header() ?>

	<section class="header__education">
		<div class="jumbotron_education">
	 		<div class="container">
		  		<h2 class="title_education">Portafolio Proyectos</h2> 
			</div>  			
		</div>
	</section>
	<main class="portfolio__main">
		<section class="portfolio_carousel">
			<div id="carousel-example-generic" class="carousel_height carousel slide" data-ride="carousel">
			<!-- Indicators -->
				<ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
			  	</ol>

  			<!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
		    	<div class="item active">
		    		<img src="assets/img/render1.jpg" class="port_image" alt="Responsive Image">
			      	<div class="carousel-caption">
	        			<h3 class="title_image">Render Cocina</h3>
    					<p class="description_image">Se utilizó el programa web Rhinoceros 4.0 y 3d Max</p>
	      			</div>
    			</div>
			    <div class="item">
			      	<img src="assets/img/render2.jpg" class="port_image" alt="Responsive Image">
			      	<div class="carousel-caption">
	        			<h3 class="title_image">Render Sala de Estar</h3>
    					<p class="description_image">Se utilizó el programa web Rhinoceros 4.0 y 3d Max</p>
	      			</div>
			    </div>
			    <div class="item">
			      	<img src="assets/img/web.jpg" class="port_image" alt="Responsive Image">
			      	<div class="carousel-caption">
	        			<h3 class="title_image">Desarrollo Front-End</h3>
    					<p class="description_image">Utilización de Editor de texto Sublime para crear páginas y apps web</p>
	      			</div>
			    </div>
			    <div class="item">
			      	<img src="assets/img/codigo.jpg" class="port_image" alt="Responsive Image">
			      	<div class="carousel-caption">
	        			<h3 class="title_image">Visualización Código</h3>
    					<p class="description_image">La manera en que se crea y estructura una página web</p>
	      			</div>
			    </div>
			    <div class="item">
			      	<img src="assets/img/impresion_digital.jpg" class="port_image" alt="Responsive Image">
			      	<div class="carousel-caption">
	        			<h3 class="title_image">Impresión Papelería</h3>
    					<p class="description_image">Impresión de distintos trabajos en papelería para empresas</p>
	      			</div>
			    </div>
			    <div class="item">
			      	<img src="assets/img/papeleria.jpg" class="port_image" alt="Responsive Image">
			      	<div class="carousel-caption">
	        			<h3 class="title_image">Tarjetas Corporativas</h3>
    					<p class="description_image">Distintas tarjetas para empresas y personales.</p>
	      			</div>
			    </div>
			</div>

		  	<!-- Controls -->
		  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
		  	</a>
			  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
			  	</a>
			</div>
		</section>
	</main>

<?php get_footer() ?>