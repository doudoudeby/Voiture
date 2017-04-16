@extends('layouts.default')

@section('content')
<br><br>

<div class="container">	

    <div class="row">

    	<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					@include('partials.haut_page')
				</div>
			</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<!-- presnetation bloc -->
					<div class="row">
						<div class="col-md-2">
					
						</div>
						<div class="col-md-6">
							<p  class="alert alert-danger" role="alert">
								Oh snap! Changez quelques choses et essayez de soumettre à nouveau.<br>
								Oh snap! Changez quelques choses et essayez de soumettre à nouveau.<br>
								Oh snap! Changez quelques choses et essayez de soumettre à nouveau.<br>
								Oh snap! Changez quelques choses et essayez de soumettre à nouveau.
							</p>
						</div>
						
						<div class="col-md-4">
							<form class="navbar-form navbar-right" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="rechercher">
								</div>
								<button type="submit" class="btn btn-success">OK</button>
							</form>
						</div>
					</div>
					
					<!-- bloc publicité -->

					<div class="row" id="publicite">
						<div class="col-md-12">
							<img src="img/orange.jpg" class="img-responsive img-thumbnail" alt="Image">
						</div>
					</div>

					<br>
					<!-- carrousel voiture en vente ou location -->
					
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:900px;margin:0px auto 56px;">
						        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
						            <ul class="amazingslider-slides" style="display:none;">
						                <li>
						                	<img src="img/slider/slider2.JPG" title="voiture 1" data-description="VOITURE DE LUXE ,EN LOCATION"/>
						                </li>
						                <li>
						                	<img src="img/slider/slider1.png" title="voiture 2" data-description="VOITURE DE LUXE ,EN VENTE"/>
						                </li>
						                <li>
						                	<img src="img/slider/slider3.jpg" title="voiture 3" data-description="VOITURE DE LUXE ,EN LOCATION"/>
						                </li>
						              
						                <li>
						                	<img src="img/slider/slider4.jpg" title="voiture 2" data-description="VOITURE DE LUXE ,EN VENTE"/>
						                    <a href="#"><button class="as-btn-blueborder-small">PLUS</button></a>
						                </li>
						            </ul>
						            <ul class="amazingslider-thumbnails" style="display:none;">
						                <li><img src="img/slider/slider2-tn.JPG" title=""/></li>
						                <li><img src="img/slider/slider1-tn.png" title=""/></li>
						                <li><img src="img/slider/slider3-tn.JPG" title=""/></li>
						                <li><img src="img/slider/slider4-tn.JPG" title=""/></li>
						                
						            </ul>
						        </div>
						    </div>
						</div>
					</div>
					
					<!-- bloc pub et autres -->
					
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<img src="img/orange.jpg" class="img-responsive img-thumbnail" alt="Image">
								</div>
							</div>
							<BR><br>
								
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="row text-center">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<h1>PARTENAIRE</h2>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2">
									
										</div>
										<div class="col-md-4">
											<ul class="list-group">
												<li class="list-group-item">
													<img src="img/partenaire2.png" class="img-responsive img-thumbnail" title="Image">
												</li>
												<li class="list-group-item">
													<img src="img/partenaire1.png" class="img-responsive img-thumbnail" title="Image">
												</li>
												<li class="list-group-item">
													<img src="img/partenaire2.png" class="img-responsive img-thumbnail" title="Image">
												</li>
											</ul>
										</div>
										<div class="col-md-1">
											
										</div>
										<div class="col-md-4">
											<ul class="list-group">
												<li class="list-group-item">
													<img src="img/partenaire1.png" class="img-responsive img-thumbnail" title="Image">
												</li>
												<li class="list-group-item">
													<img src="img/partenaire2.png" class="img-responsive img-thumbnail" title="Image">
												</li>
												<li class="list-group-item">
													<img src="img/partenaire1.png" class="img-responsive img-thumbnail" title="Image">
												</li>
											</ul>
										</div>
										<div class="col-md-1">
											
										</div>
									</div>
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

			</div>
	</div>
@endsection