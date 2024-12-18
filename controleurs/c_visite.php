<?php
// ****************************************'
//  Le CASTEL-BTS SIO/ PROJET GSB PPE2     '
//  Programme: c_visite.php                '
//  Objet    : gestion rapports de visites '
//  Client   : Bts SIO1                    '
//  Version  : 22.03                       '
//  Date     : 25/03/2022 � 10h57          '
//  Auteur   : Pascal.Blain@ac-dijon.fr    '
//*****************************************'

$action = $_REQUEST['action'];
switch($action) {
case 'voir':
	{   
		$formulaire			="choixV";
		$champ				="lstV";	
		include("vues/v_entete.php");
		$lesLignes	 	=$pdo->getLesVisites($_SESSION['idUtilisateur']);
		include("vues/v_choixVisite.php");
        //$lesInfosPraticien   =  $pdo->getInfosPraticien($choix);
		$UneVisitePraticien = $pdo->getUneVisitePraticien($choix,$choix2);
		$LesNomsMedsUneVisite = $pdo->getNomMedUneVisite($choix,$choix2);
		
		$lesEchantillons = $pdo->getEchantillons($choix,$choix2);
		include("vues/v_ficheVisite.php");
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
		$lesLignes	 	=$pdo->getLesVisites($_SESSION['idUtilisateur']);
		//echo substr($_REQUEST['lstV'],0,strpos($_REQUEST['lstV'],'-'));
		$lesMotifs = $pdo->getParametre('MotifVi');
		$LesMedicaments = $pdo->getLesMedicaments();
		$UneVisitePraticien = $pdo->getUneVisitePraticien(substr($_REQUEST['lstV'],0,strpos($_REQUEST['lstV'],'-')),substr($_REQUEST['lstV'],strpos($_REQUEST['lstV'],'-')+1));
		$choix = substr($_REQUEST['lstV'],0,strpos($_REQUEST['lstV'],'-'));
		$choix2 =substr($_REQUEST['lstV'],strpos($_REQUEST['lstV'],'-')+1);
		$LesNomsMedsUneVisite = $pdo->getNomMedUneVisite($choix,$choix2);
		$choix= $_REQUEST['lstV'];
		//(isset($_REQUEST['Med']))?$Medicament=$_REQUEST['Med']:$Medicament="null"; 
		//(isset($_REQUEST['Med2']))?$Medicament2=$_REQUEST['Med']:$Medicament2="null"; 
		if(isset($LesNomsMedsUneVisite['0']['Medicament'])&&isset($LesNomsMedsUneVisite['1']['Medicament'])){
			$Medicament=$LesNomsMedsUneVisite['0']['Medicament'];
			$Medicament2=$LesNomsMedsUneVisite['1']['Medicament'];
		}
		else{
			$Medicament="null";
		$Medicament2="null";
		
		}
		
		
		$lesInfosPraticien  = $pdo->getInfosPraticien($choix);
		
//ajout
		$region=$_SESSION['region'];
		$lesLignes	 	=$pdo->getLesPraticiens($region);

		include("vues/v_uneVisite.php");
		break;
	}
	//----------------------------------------- FORMULAIRE DE SAISIE enchantillon
case 'ajouterE':
case 'modifierE':
case 'supprimerE':
	{ 
	include("vues/v_entete.php");
	$choix = substr($_REQUEST['lstV'],0,strpos($_REQUEST['lstV'],'-'));
	$choix2 = substr($_REQUEST['lstV'],strpos($_REQUEST['lstV'],'-')+1);	
	$UneVisitePraticien = $pdo->getUneVisitePraticien(substr($_REQUEST['lstV'],0,strpos($_REQUEST['lstV'],'-')),substr($_REQUEST['lstV'],strpos($_REQUEST['lstV'],'-')+1));
	$LesNomsMedsUneVisite = $pdo->getNomMedUneVisite($choix,$choix2);
	$lesEchantillons = $pdo->getEchantillons(substr($_REQUEST['lstV'],0,strpos($_REQUEST['lstV'],'-')),substr($_REQUEST['lstV'],strpos($_REQUEST['lstV'],'-')+1));	
	$UneVisitePraticien = $pdo->getUneVisitePraticien($choix,$choix2);
	$LesNomsMedsUneVisite = $pdo->getNomMedUneVisite($choix,$choix2);
	$depotlegal = $_REQUEST['depot'];
	
	$UnEchantillon = $pdo->getUnEchantillon($choix,$choix2,$depotlegal);
	$LesMedicaments = $pdo->getLesMedicaments();	
   
	include("vues/v_unEchantillon.php");
	break;
	}
//----------------------------------------- VALIDATION	
//enlever information inutile
case 'validerAjouter':
case 'validerModifier':	
case 'validerSupprimer':
	{
	(isset($_REQUEST['visite']))?$valeur=$_REQUEST['visite']:$valeur='erreur'; 
	
	if ($_REQUEST['zOk']=="OK") 
	{
		if ($action==="validerSupprimer")
		{	

			$id = substr($_REQUEST['lstV'],0,strpos($_REQUEST['lstV'],'-'));
			
			$idV = substr($_REQUEST['lstV'],strpos($_REQUEST['lstV'],'-')+1);
			$pdo->supprimeVisite($id,$idV);
			header ('location: index.php?choixTraitement=visite&action=voir');	
			break;
		}
		else
		{
			$id = substr($_REQUEST['lstV'],0,strpos($_REQUEST['lstV'],'-'));
			
			$idV = substr($_REQUEST['lstV'],strpos($_REQUEST['lstV'],'-')+1);
			$idP 	= addslashes ($_REQUEST['lstPraticiens']);
			$date		   = addslashes ($_REQUEST['ztDate']);
			$rapport		   = addslashes ($_REQUEST['ztRapport']);
			$motif	   = addslashes ($_REQUEST['lstMotif']);
			$med 	= addslashes ($_REQUEST['listMed']);
			$med2 	= addslashes ($_REQUEST['listMedBis']);
			

			/*if (strlen($_REQUEST['ztCP'])>1)	{$cp	= $_REQUEST['ztCP'];} else {$cp = "Null";}
			$ville		   = addslashes ($_REQUEST['ztVille']);
			$coefNotoriete = addslashes ($_REQUEST['ztCoefNotoriete']);
			$typePraticien = addslashes($_REQUEST['ldrTypePraticien']);
			$region		   = addslashes($_REQUEST['ldrRegion']);*/
			if ($action==="validerAjouter") 
				{	$NewIdV=$pdo->nouveauCodeVisite($id);

					$pdo->ajoutVisite($id,$NewIdV,$idP,$date,$rapport,$motif,$med,$med2);}
			else 
				{$pdo->majVisite($id ,$idV,$date,$rapport,$motif,$med,$med2);}			
		}
	}
	header ('location: index.php?choixTraitement=visite&action=voir');	
	break;
	}
	//----------------------------------------- VALIDATION	Echantillon
case 'validerAjouterE':
case 'validerModifierE':	
case 'validerSupprimerE':
	{
	(isset($_REQUEST['visite']))?$valeur=$_REQUEST['visite']:$valeur='erreur'; 
	
	if ($_REQUEST['zOk']=="OK") 
	{
		if ($action==="validerSupprimerE")
		{	
			$id = substr($_REQUEST['lstV'],0,strpos($_REQUEST['lstV'],'-'));
			$idV = substr($_REQUEST['lstV'],strpos($_REQUEST['lstV'],'-')+1);
			$depotlegal = addslashes($_REQUEST['depot']);	
			$pdo->supprimeEchantillon($id,$idV,$depotlegal);
			header ('location: index.php?choixTraitement=visite&action=voir');	
			break;
		}
		else
		{
			$id = substr($_REQUEST['lstV'],0,strpos($_REQUEST['lstV'],'-'));
			
			$idV = substr($_REQUEST['lstV'],strpos($_REQUEST['lstV'],'-')+1);
			
			$qte = addslashes($_REQUEST['ztQuantite']);
			$depotlegal = addslashes($_REQUEST['listOff']);	
		
			/*
			$nom		   = addslashes ($_REQUEST['ztNom']);
			$prenom		   = addslashes ($_REQUEST['ztPrenom']);
			$adresse	   = addslashes ($_REQUEST['ztAdresse']);
			if (strlen($_REQUEST['ztCP'])>1)	{$cp	= $_REQUEST['ztCP'];} else {$cp = "Null";}
			$ville		   = addslashes ($_REQUEST['ztVille']);
			$coefNotoriete = addslashes ($_REQUEST['ztCoefNotoriete']);
			$typePraticien = addslashes($_REQUEST['ldrTypePraticien']);
			$region		   = addslashes($_REQUEST['ldrRegion']);*/
			if ($action==="validerAjouterE") 
				{			
								
							
					$pdo->ajoutEchantillon($id,$idV,$depotlegal,$qte);
				}
			else 
				{$depotlegal = addslashes($_REQUEST['depot']);
					$pdo->majEchantillon($id,$idV,$depotlegal,$qte);}			
		}
	}
	header ('location: index.php?choixTraitement=visite&action=voir');	
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
