@extends('layouts.default')

@section('content')

<br><br>
		<div class="container">

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					@include('partials.envoyer_haut_page')
				</div>
			</div>
			<br><br><br>
			<div class="row">
				<div class="col-md-12">
					<div class="row">	
						<div class="col-md-4" id="image">
							<img src="../../img/autre/clement.jpg" class="img-responsive img-circle" title="Image">	
						</div>
						<div class="col-md-8">
								<form action="" method="POST" role="form">
									
									<div class="form-group">
										<label for="">Nom:</label><br>
										<input type="text" class="form-control" id="" placeholder="" required="required"><br>
										<label for="">Prénom:</label><br>
										<input type="text" class="form-control" id="" placeholder="" required="required"><br>
										<label for="">Contact:</label><br>
										<input type="text" class="form-control" id="" placeholder="" required="required"><br><br><br><br><br>
										<label for="">Message:</label><br>
										<textarea name="" id="input" class="form-control" rows="3" ></textarea><br>
									</div>
								
									<button type="submit" class="btn btn-primary">Envoyer</button>
								</form>
						</div>
					</div>
					
				</div>
			</div>
			<br>
			
			<!-- aller en haut -->
			<div class="scroll-top-wrapper ">
				<span class="scroll-top-inner">
					<i class="">HAUT</i>
				 </span>
			</div>

			<!-- pied de page -->
			<footer class="text-center">
				<p id="footer">&copy; Copyright <?php $annee= date("Y") ;echo $annee;?> - Tous droits réservés.</p>
			</footer>
		</div>

@endsection