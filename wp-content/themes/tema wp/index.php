<?php get_header(); ?>

<div class="row">
<div class="col-md-12 welcome">
	<h1><?php blog_info(name) ?></h1>
	<h4><?php blog_info(description) ?></h4>
</div>
</div>      </div>
</div>
<div class="row" id="contact">
	<div class="col-lg-12 text-center">
		<h2>Contattaci!</h2>
		<h3>Per favore, inserisci le informazioni richieste nei riquadri sottostanti</h3>
	</div>
</div>
<form>
	<div class="row row-form">
		<div class="col-lg-12">
			<div class="col-lg-6">
				<div class="form-group">
					<label>Nome e Cognome</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input name="name" type="text" class="form-control input-lg" placeholder="Inserisci nome e cognome" required>
					</div>
				</div>
				<div class="form-group">
					<label>Email</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input name="email" type="email" class="form-control input-lg" placeholder="Email" required>
					</div>
				</div>
				<div class="form-group">
					<label>Telefono</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
						<input name="phone" type="number" class="form-control input-lg" placeholder="Inserisci il numero di telefono" required>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label>Commento</label>
					<textarea spellcheck class="form-control input-lg" placeholder="Per favore, inserisci un commento"></textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<button type="submit" class="btn btn-primary btn-lg">Invia</button>
			</div>
		</div>
	</div>


<?php get_footer(); ?>