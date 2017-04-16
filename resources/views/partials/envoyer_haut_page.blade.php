<!-- bannière -->
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<img src="../../img/banniere.jpg" class="img-responsive img-thumbnail" title="Image">					
	</div>
</div>
<!-- marquee ; defilement des infos -->
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<marquee id="marqu">
			*****************************************<B>INFOS SUR LE SITE</B>**************************************************************
		</marquee>
	</div>
</div>
<!-- menu -->
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="../../index.php">Accueil</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href=" {{ url('/vente') }} ">Vente</a></li>
						<li><a href=" {{ url('/location') }} ">Location</a></li>
						<li><a href="{{ url('/contact') }}">Contact</a></li>
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">
								<img src="../../img/logoF.jpg" class="img-responsive img-thumbnail" alt="Image">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="../../img/logoT.png" class="img-responsive img-thumbnail" alt="Image">
							</a>
						</li>
						
						<!-- <form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Rechercher">
							</div>
							<button type="submit" class="btn btn-default">OK</button>
						</form> -->
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</div>
</div>




