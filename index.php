<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Don Olivar - Huile d'olive espagnole</title>
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


	<!-- Menu de navigation-->

	<nav>
		<div class="menu-bar">
			<div class="container">
				<div class="navbar">
					<ul>
						<li>
							<div class="logo">
								<a href="index.html"><img class="logo" src="images/accueil/logo.png" alt="Logo Don Olivar" loading=lazy></a>
							</div>
						</li>
						<li class="limenu"><a href="index.html">Accueil</a></li>
						<li class="limenu">
							<a href="boutique.html">Boutique</a>
							<div class="sous-menu">
								<ul>
									<li><a href="boutique.html">Huiles</a></li>
									<li><a href="boutique.html">Bio</a></li>
									<li><a href="boutique.html">Gourmet</a></li>
									<li><a href="boutique.html">Epicerie</a></li>
									<li><a href="nospaniers.html">Nos paniers</a></li>
								</ul>
							</div>
						</li>
						<li class="limenu"><a href="promotions.html">Promotions</a></li>
						<li class="limenu"><a href="espacepro.html">Espace pro</a></li>
						<li class="limenu"><a href="blogaccueil.html">Blog</a></li>
						<li class="limenu"><a href="#"><img class="loupe" src="images/loupe.svg" alt="loupe" loading=lazy></a></li>
						<li class="limenu"><a href="inscription.html"><img class="compte" src="images/compte.svg" alt="compte" loading=lazy></a>
							<div class="sous-menu">
								<ul>
									<li>
										<?php
											if(isset($_SESSION['nom'])){
										?>
										<div style="float:left">
											<a href='page_membre.php'> Mon compte </a> <br>
											<?php echo "Bonjour". " ".$_SESSION['nom'];?> </div> <br> <br>
										<?php } 
										else {
										?>
											<a href='formcon_ins.html' style="float:left"> Connexion </a> <br>
										<?php 
										}
										?>
										<!--<a href="seconnecter.html">Se connecter</a>-->
									</li>
									<!--<li><a href="contact.html">Cr??er un compte</a></li>-->
								</ul>
							</div>
						</li>
						<li class="limenu"><a href="panier.html"><img class="panier" src="images/panier.svg" alt="panier" loading=lazy></a></li> 
						<li class="limenu"><a href="#"><img class="eye" src="images/eye.svg" alt="eye" loading=lazy></a></li> 
					</ul>
				</div>
			</div>
		</div>
	</nav>
	
	<!-- Fin du menu de navigation-->
	
	
	<!-- Slider-->
	
	<div class="slider">
			<img src="images/accueil/slider/slider1.png" alt="Saveurs de l'Espagne" class="img_slider active" loading=lazy />
			<img src="images/accueil/slider/slider2.png" alt="Panier livr?? chez vous" class="img_slider" loading=lazy />
			<img src="images/accueil/slider/slider3.png" alt="Marque ??co-responsable" class="img_slider" loading=lazy />	
		<div class="suivant">
			<i class="fas fa-chevron-circle-right"></i>
		</div>
		<div class="precedent">
			<i class="fas fa-chevron-circle-left"></i>
		</div>
	</div>
	<script src="app.js"></script>
	
	<!-- Fin du slider-->	


	<!-- Banni??re produits -->

	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/huile.jpg)">
						<div class="banner_category">
							<a href="boutique.html">HUILES</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/bio.png)">
						<div class="banner_category">
							<a href="boutique.html">BIO</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/gourmet.jpg)">
						<div class="banner_category">
							<a href="boutique.html">GOURMET</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<!-- Fin de la banni??re produits -->

	
	<!-- Nos meilleures ventes -->	
	
	<h1 class="titreh1">Nos meilleures ventes</h1>
	
	<section class="meillsection">
	
		<div class="row5">
			<div class="product-item">
					<div class="product_image">
						<a href="produit_huile.html"><img src="images/produit3.png" alt="Huile aromatis??e ROMERO" loading=lazy></a>
					</div>
					<div class="favorite"></div>
						<div class="product_info">
							<h5 class="product_name"><a href="produit_huile.html">Huile aromatis??e ROMERO</a></h5>
							<div class="product_price">8,99 ???</div>
						</div>
					<div class="add_to_cart_button"><a href="#">ajouter au panier</a></div>
			</div>
		</div>
		
		<div class="row5">
			<div class="product-item">
					<div class="product_image">
						<a href="produit_tapenade.html"><img src="images/tapenade.png" alt="Tapenade" loading=lazy></a>
					</div>
					<div class="favorite"></div>
					<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column "><span>PRO</span></div>
						<div class="product_info">
							<h5 class="product_name"><a href="produit_pate.html">Tapenade de Vizc??ntar</a></h5>
							<div class="product_price">9,99 ???</div>
						</div>
					<div class="add_to_cart_button"><a href="#">ajouter au panier</a></div>
			</div>
		</div>
		
		<div class="row5">
			<div class="product-item">
					<div class="product_image">
						<a href="produit_confiture.html"><img src="images/confiture.png" alt="Confiture d???olives ??gura" loading=lazy></a>
					</div>
					<div class="favorite"></div>
						<div class="product_info">
							<h5 class="product_name"><a href="#">Confiture d???olives ??gura</a></h5>
							<div class="product_price">7,99 ???</div>
						</div>
					<div class="add_to_cart_button"><a href="#">ajouter au panier</a></div>	
			</div>
		</div>
		
		<div class="row5">
			<div class="product-item">
					<div class="product_image">
						<a href="produit_huile.html"><img src="images/produit3.png" alt="Huile d'olive vierge extra" loading=lazy></a>
					</div>
					<div class="favorite"></div>
						<div class="product_info">
							<h5 class="product_name"><a href="produit_huile.html">Huile d'olive vierge extra bio</a></h5>
							<div class="product_price">9,99 ???</div>
						</div>
					<div class="add_to_cart_button"><a href="#">ajouter au panier</a></div>
			</div>
		</div>
		
		<div class="row5">
			<div class="product-item">
					<div class="product_image">
						<img src="images/product_3.png" alt="Olives vertes" loading=lazy>
					</div>
					<div class="favorite"></div>
						<div class="product_info">
							<h5 class="product_name">Olives vertes</h5>
							<div class="product_price">6,99 ???</div>
						</div>
					<div class="add_to_cart_button"><a href="#">ajouter au panier</a></div>	
			</div>
		</div>
		
	</section>
		
	<!-- Fin de nos meilleures ventes -->
	
	
	<!-- 4 raisons de commander sur Don Olivar -->
	
		<!-- Image -->
		<div class="topleft">
			<img class="topleftimg" src="images/accueil/topleft.png" alt="Olives vertes" loading=lazy>
		</div>

	<div class="small_container">
		<h1 class="titreh1">4 raisons de commander sur Don Olivar</h1>
		<div class="row">
			<div class="col-2">
				<img class="raisons" src="images/4-1.png" alt="4 raisons de commander" loading=lazy>
					<p>Des produits de qualit??</p>
			</div>
			<div class="col-2">
				<img class="raisons" src="images/4-2.png" alt="4 raisons de commander" loading=lazy>
					<p>Le meilleur dans vos assiettes</p>
			</div>
		</div>
	</div>
	
		<!-- Image -->
		<div class="topright">
			<img class="toprightimg" src="images/accueil/topright.png" alt="Olives vertes" loading=lazy>
		</div>
	
	<div class="small_container">
		<div class="row">
			<div class="col-2">
				<img class="raisons" src="images/4-3.png" alt="4 raisons de commander" loading=lazy>
					<p>Soutenir les petits producteurs</p>
			</div>
			<div class="col-2">
				<img class="raisons" src="images/4-4.png" alt="4 raisons de commander" loading=lazy>
					<p>Une large gamme de prix</p>
			</div>
		</div>
	</div>
	
	<!-- Fin des 4 raisons de commander sur Don Olivar -->
	
	
	<!-- Section avant footer -->
	
	<div class="avantfooter">
		<div class="container">
			<div class="row">
				<div class="avantfooter-col">
					<p>Paiement s??curis??</p>
					<div class="avfooter">
						<img class="avfooterlogo" src="images/af1.png" alt="Paiement s??curis??" loading=lazy>
					</div>
				</div>
				<div class="avantfooter-col">
					<p>Aide et contact</p>
					<div class="avfooter">
						<img class="avfooterlogo" src="images/af2.png" alt="Aide et contact" loading=lazy>
					</div>
				</div>
				<div class="avantfooter-col">
					<p>Retours gratuits</p>
					<div class="avfooter">
						<img class="avfooterlogo" src="images/af3.png" alt="Retours gratuits" loading=lazy>
					</div>
				</div>
				<div class="avantfooter-col">
					<p>Livraison gratuite d??s 120??? d'achats</p>
					<div class="avfooter">
						<img class="avfooterlogo" src="images/af4.png" alt="Livraison gratuite d??s 120???" loading=lazy>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Fin de la section avant footer -->
	
	
	<!-- Footer -->
	
	<div class="footer">
	
		<!-- Newsletter -->
		
		<h2> Inscrivez-vous ?? notre newsletter !</h2>
			<div class= "newsletter">
				<input type="text" name="adresse mail" id="id_mail" placeholder="Entrez votre adresse e-mail" onFocus="this.value='';"><br />
				<input type= "submit" value="S'inscrire" name = "bouton">
			</div>
			<div class="conditions">
				<input name = "Accords_conditions" type= "checkbox" value="1" required>
				<a href = "#" target="_blank" >J'ai lu et j'accepte les termes et conditions</a>
			</div>
	
					<!-- Ligne de s??paration -->
					<hr />
				
		<!-- 3 colonnes -->
		
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Restons connect??s</h3>
					<div class="applogo">
						<a href="https://www.facebook.com/DonOlivar-110550281478277"><img class="applogoimg" src="images/reseaux/facebook.png" alt="Logo Facebook"></a>
						<a href="https://www.linkedin.com/company/don-olivar/"><img class="applogoimg" src="images/reseaux/linkedin.png" alt="Logo LinkedIn"></a>
						<a href="https://www.instagram.com/donolivar/"><img class="applogoimg" src="images/reseaux/instagram.png" alt="Logo Instagram"></a>
					</div>
				</div>
				<div class="footer-col-2">
					<h3>A propos</h3>
					<ul>
						<li><a href="#">Qui sommes-nous ?</a></li>
						<li><a href="#">Avis clients</a></li>
						<li><a href="#">Nous rejoindre</a></li>
					</ul>
				</div>
				<div class="footer-col-3">
					<h3>Aide</h3>
					<ul>
						<li><a href="contact.html">Contactez-nous</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Livraisons et retours</a></li>
						<li><a href="politique.html">Politique de confidentialit??</a></li>
					</ul>
				</div>
			</div>
		</div>

	</div>
	
	<!-- Fin du footer -->


</body>
</html>