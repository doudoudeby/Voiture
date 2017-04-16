@extends('layouts.default')

@section('content')

<br><br>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					@include('partials.envoyer_haut_page')
				</div>
			</div>
			<br>
			<div class="row">
				<legend class="text-center"><h2><b >CONTACT</b></h2></legend>
				<br>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<form action="" method="POST" role="form">
						
					
						<div class="form-group">
							<label for="">Nom:</label><br>
							<input type="text" class="form-control" id="" placeholder="">
							<label for="">Prénom:</label><br>
							<input type="text" class="form-control" id="" placeholder="">
							<label for="">E-mail:</label><br>
							<input type="email" class="form-control" id="" placeholder="">
							<br><br><br>
							<label for="">Message:</label><br>
							<textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>
						</div>
					
						
					
						<button type="submit" class="btn btn-primary">Envoyer</button>
					</form>
				</div>
			</div>
			
			<br><br>
			<!-- pied de page -->
			<footer class="text-center">
				<p id="footer">&copy; Copyright <?php $annee= date("Y") ;echo $annee;?> - Tous droits réservés.</p>
			</footer>
		</div>