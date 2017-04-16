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
			<span class="text-center">
				<b>
					<h1>LOCATION</h1>
				</b>
			</span>
			<br>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
					    <a href="autre.php">
						    <img src="../../img/slider.jpg" alt="Lights" style="width:100%">
						    <div class="caption">
						        <p>Lorem ipsum...</p>
						    </div>
					    </a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
					    <a href="#">
						    <img src="../../img/slider.jpg" alt="Lights" style="width:100%">
						    <div class="caption">
						        <p>Lorem ipsum...</p>
						    </div>
					    </a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
					    <a href="#">
						    <img src="../../img/slider.jpg" alt="Lights" style="width:100%">
						    <div class="caption">
						        <p>Lorem ipsum...</p>
						    </div>
					    </a>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
					    <a href="#">
						    <img src="../../img/slider.jpg" alt="Lights" style="width:100%">
						    <div class="caption">
						        <p>Lorem ipsum...</p>
						    </div>
					    </a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
					    <a href="#">
						    <img src="../../img/slider.jpg" alt="Lights" style="width:100%">
						    <div class="caption">
						        <p>Lorem ipsum...</p>
						    </div>
					    </a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
					    <a href="#">
						    <img src="../../img/slider.jpg" alt="Lights" style="width:100%">
						    <div class="caption">
						        <p>Lorem ipsum...</p>
						    </div>
					    </a>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
					    <a href="#">
						    <img src="../../img/slider.jpg" alt="Lights" style="width:100%">
						    <div class="caption">
						        <p>Lorem ipsum...</p>
						    </div>
					    </a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
					    <a href="#">
						    <img src="../../img/slider.jpg" alt="Lights" style="width:100%">
						    <div class="caption">
						        <p>Lorem ipsum...</p>
						    </div>
					    </a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
					    <a href="#">
						    <img src="../../img/slider.jpg" alt="Lights" style="width:100%">
						    <div class="caption">
						        <p>Lorem ipsum...</p>
						    </div>
					    </a>
					</div>
				</div>
			</div>
			

			<br><br>
			
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