<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Galaxy Swiss Bourdin</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="./styles/styles.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
  	<script src="./vues/proceduresJava.js" type="text/javascript"></script>
  </head>
<?php 
	(isset($_REQUEST['zFormulaire']))	?$formulaire=$_REQUEST['zFormulaire']:$formulaire="choixP"; 
	(isset($_REQUEST['zChamp']))		?$champ=$_REQUEST['zChamp']:$champ="lstParam";
	if (!isset($titre))	{$titre		="";}
?>	
  <body onload="donner_focus('<?php echo $formulaire."','".$champ;?>');">
    <div id="page">
		<div id="entete">
	        <img src="./images/logoGSB.jpg" id="logo" alt="Laboratoire Galaxy Swiss Bourdin" title="Gestion des comptes-rendus de visites" />
	        <div id="sommaire">
<?php if (isset($_SESSION['idUtilisateur'])) 
		{echo '
				<ul>
					<li><a href="index.php?choixTraitement=visite&action=voir" 		title="Visites">Visites</a>|</li>
					<li><a href="index.php?choixTraitement=praticien&action=voir" 	title="Praticiens">Praticiens</a>|</li>
					<li><a href="index.php?choixTraitement=statistiques&action=voir" title="Statistiques">Statistiques</a>|</li>';
		if ($_SESSION['statut']==0) 
			{echo '
					<li><a href="index.php?choixTraitement=utilisateur&action=voir&type=a">Visiteurs</a>|</li>
					<li><a href="index.php?choixTraitement=param&action=voir" title="Parametres">Parametres</a>|</li>';
			}
		else
			{echo '
					<li><a href="index.php?choixTraitement=utilisateur&action=voir&type=a">Mon profil</a>|</li>';
			}
		echo '			
					<li><b>Bienvenue '.$_SESSION['prenom'].'  '.strtoupper($_SESSION['nom']).' </b></li>
					<li style="text-align:left;"><a href="index.php?choixTraitement=connexion&action=demandeConnexion" title="Se d&eacute;connecter"><img alt="déconnexion" src="images/deconnexion.png" border="0" height="26px"></a></li>
				</ul>';
		}
?> 
				<h1>Gestion des Comptes-Rendus de visites</h1>
				
			</div>
		</div>
	<div id="contenu">
<!-- fin affichage du menu -->