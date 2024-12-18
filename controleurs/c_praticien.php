<?php
// ****************************************'
//  Le CASTEL-BTS SIO/ PROJET GSB PPE2     '
//  Programme: c_praticien.php             '
//  Objet    : gestion des praticiens      '
//  Client   : Bts SIO1                    '
//  Version  : 22.03                       '
//  Date     : 09/03/2022 à 20h00          '
//  Auteur   : Pascal.Blain@ac-dijon.fr    '
//*****************************************'
$action = $_REQUEST['action'];
switch($action) {
case 'voir':
	{   
		$formulaire			="choixP";
		$champ				="lstPraticiens";	
		include("vues/v_entete.php");
		$region=$_SESSION['region'];
		$lesLignes	 	=$pdo->getLesPraticiens($region);
		include("vues/v_choixPraticien.php");
		$lesInfosPraticien   =  $pdo->getInfosPraticien($choix);
		$lesVisitesPraticien = $pdo->getLesVisitesPraticien($choix);
		include("vues/v_fichePraticien.php");
		break;
	}
//----------------------------------------- FORMULAIRE DE SAISIE
case 'ajouter':
case 'modifier':
case 'supprimer':
	{ 
		$formulaire		="frmA";
		$champ			="ztNom";	
		include("vues/v_entete.php");
		
		$choix= $_REQUEST['lstPraticiens'];
		$lesInfosPraticien  = $pdo->getInfosPraticien($choix);
		$lesRegions			= $pdo->getParametre("region");
		$lesTypesPraticien	= $pdo->getLesTypesPraticien();
		include("vues/v_unPraticien.php");
		break;
	}
//----------------------------------------- VALIDATION	
case 'validerAjouter':
case 'validerModifier':	
case 'validerSupprimer':
	{
	(isset($_REQUEST['praticien']))?$valeur=$_REQUEST['praticien']:$valeur='erreur'; 
	if ($_REQUEST['zOk']=="OK") 
	{
		if ($action==="validerSupprimer")
		{
			$pdo->supprimePraticien($valeur);
			header ('location: index.php?choixTraitement=praticien&action=voir');	
			break;
		}
		else
		{
			$nom		   = addslashes ($_REQUEST['ztNom']);
			$prenom		   = addslashes ($_REQUEST['ztPrenom']);
			$adresse	   = addslashes ($_REQUEST['ztAdresse']);
			if (strlen($_REQUEST['ztCP'])>1)	{$cp	= $_REQUEST['ztCP'];} else {$cp = "Null";}
			$ville		   = addslashes ($_REQUEST['ztVille']);
			$coefNotoriete = addslashes ($_REQUEST['ztCoefNotoriete']);
			$typePraticien = addslashes($_REQUEST['ldrTypePraticien']);
			$region		   = addslashes($_REQUEST['ldrRegion']);
			if ($action==="validerAjouter") 
				{	$valeur=$pdo->nouveauCodePraticien();						
					$pdo->ajoutPraticien($valeur,$nom,$prenom,$adresse,$cp,$ville,$coefNotoriete,$typePraticien,$region);}
			else 
				{$pdo->majPraticien($valeur,$nom,$prenom,$adresse,$cp,$ville,$coefNotoriete,$typePraticien,$region);}			
		}
	}
	header ('location: index.php?choixTraitement=praticien&action=voir&lstPraticiens='.$valeur);	
	break;
	}
	//----------------------------------------- 
default :
	{
		echo 'erreur d\'aiguillage !'.$action;
		break;
	}
}
?>
