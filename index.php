<?php
session_start();
?>
<html>
<body>

<h1 style="text-align: center;"> Mon site </h1>

<?php
if(isset($_SESSION['nom'])){
	?>
	    <div style="float:right; color:blue;">
	    <a href='page_membre.php'> Mon compte </a> <br>
	   <?php echo "Bonjour". " ".$_SESSION['nom'];?> </div> <br> <br>
	   
	<?php } 
	else {
		?>
      <a href='formcon_ins.html' style="float:right"> Connexion </a> <br>
	<?php 
	}

?>

<p style="text-align: justify;">Montius nos tumore inusitato quodam et novo ut rebellis et maiestati recalcitrantes Augustae per haec quae strepit incusat iratus nimirum quod contumacem praefectum, quid rerum ordo postulat ignorare dissimulantem formidine tenus iusserim custodiri.

Oportunum est, ut arbitror, explanare nunc causam, quae ad exitium praecipitem Aginatium inpulit iam inde a priscis maioribus nobilem, ut locuta est pertinacior fama. nec enim super hoc ulla documentorum rata est fides.

Montius nos tumore inusitato quodam et novo ut rebellis et maiestati recalcitrantes Augustae per haec quae strepit incusat iratus nimirum quod contumacem praefectum, quid rerum ordo postulat ignorare dissimulantem formidine tenus iusserim custodiri.</p>

</body>
</html>