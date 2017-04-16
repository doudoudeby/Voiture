@extends('layouts.default')

@section('content')

<br><br>
		<div class="container">

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					@include('partials.envoyer_haut_page')
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4">
								
						</div>
						<div class="col-md-4" id="image">
							<img src="../../img/autre/clement.jpg" class="img-responsive img-circle" title="Image">	
						</div>
						<div class="col-md-4">
								
						</div>
					</div>
					<br>
					<div class="row" >
						<div class="col-md-3">
								
						</div>
						<div class="col-md-6" id="information">
							<p>
								je m'appelle je m'appelleje m'appelle je m'appelle<br>
								je m'appelle je m'appelleje m'appelle je m'appelle<br>
								je m'appelle je m'appelleje m'appelle je m'appelle<br>
								je m'appelle je m'appelleje m'appelle je m'appelle<br>
								je m'appelle je m'appelleje m'appelle je m'appelle
							</p>
							<a href="envoyer.php" class="btn btn-primary ">INTERESSER</a><br>
						</div>
						<div class="col-md-3">
								
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