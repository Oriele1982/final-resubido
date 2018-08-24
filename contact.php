<?php get_header() ?>

	<section class="header__education">
		<div class="jumbotron_education">
	 		<div class="container">
		  		<h2 class="title_education">Contacto</h2> 
			</div>  			
		</div>
	</section>
	<main class="contact_me">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="alert">
					<h3 class="message">Cualquier consulta no dude en escribir</h3>
				</div>
				<div class="my_form">
					<form class="form-inline">
						<div class="form-group">
						    <label class="text_form" for="exampleInputName2">Nombre</label>
						    <input type="text" class="form-control" id="exampleInputName2" placeholder="Ingrese su nombre">
						</div>
						<div class="form-group">
						    <label class="text_form" for="exampleInputEmail2">Email</label>
						    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Ingrese su mail">
						</div>
					</form>
						<div class="form-text">
						    <label class="message_form" for="exampleInputEmail2">Mensaje</label>
						    <textarea class="mesagge_text form-control" rows="4" placeholder="Ingrese su mensaje"></textarea>
						</div>
						<button type="submit" class="btn_send btn"> Enviar</button>
					
				</div>
			</div>
		</div>
	</main>

<?php get_footer() ?>