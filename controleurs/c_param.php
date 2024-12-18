<?php
// ****************************************'
//  Le CASTEL-BTS SIO/ PROJET démonstration'
//  Programme: c_param.php                 '
//  Objet    : gestion des parametres      '
//  Client   : Bts SIO1                    '
//  Version  : 22.03                       '
//  Date     : 09 mars 2022 à 19H51        '
//  Auteur  : pascal-blain@wanadoo.fr      '
//*****************************************'

$action 	= $_REQUEST['action'];
if (!isset($_REQUEST['type'])) 		{$type = '*';} 		else {$type =$_REQUEST['type'];}
if (!isset($_REQUEST['valeur'])) 	{$valeur = '*';} 	else {$valeur =$_REQUEST['valeur'];}
if (!isset($_REQUEST['zPlancher'])) {$plancher = 0;} 	else {$plancher =intval($_REQUEST['zPlancher']);}
if (!isset($_REQUEST['zPlafond'])) 	{$plafond = 0;} 	else {$plafond =intval($_REQUEST['zPlafond']);}
if (!isset($_REQUEST['zType'])) 	{$zType = '*';} 	else {$zType =$_REQUEST['zType'];}
if (!isset($_REQUEST['zIndice'])) 	{$indice = '*';} 	else {$indice =$_REQUEST['zIndice'];}

switch($action) {
case 'voir':
	{
		include("vues/v_entete.php");
		$lesParametres=$pdo->getLesParametres();
		include("vues/v_choixParam.php");
		$enteteParametre=$lesParametres[$noP-1];
		$lesInfosParametre = $pdo->getParametre($choix);
		include("vues/v_ficheParametre.php");
		$stat="2";
		break;
	}
//-----------------------------------------liste détaillée pour un parametre
case 'liste':
	{
		include("vues/v_entete.php");
		$lesParametres=$pdo->getLesParametres();
		include("vues/v_choixParam.php");
		$titre2=$lesStatistiques[0]['libelle'];
		include("vues/v_listeStat.php");
		break;
	}
//----------------------------------------- AJOUT/MODIFICATION/SUPPRESSION
case 'ajouter':
case 'modifier':
case 'supprimer':
	{ 
		include("vues/v_entete.php");
		$infosParam = $pdo->getInfosParam($type, $valeur);
		include("vues/v_unParam.php");
		break;
	}
//----------------------------------------- VALIDATION AJOUT	
case 'validerAjouter':
	{// enregistrement de la ligne et retour
		if ($_REQUEST['zOk']=="OK") {$pdo->ajoutParametre($type, $valeur, addslashes ($_REQUEST['zLibelle']), $_REQUEST['zTerritoire'], $_REQUEST['zDep'] , $plancher, $plafond);}
		header ('location: index.php?choixTraitement=param&action=voir&lstParam='.$type);
	}
//----------------------------------------- VALIDATION MODIFICATION
case 'validerModifier':
	{ 
		if ($_REQUEST['zOk']=="OK") {$pdo->majParametre($type, $valeur, addslashes ($_REQUEST['zLibelle']), $_REQUEST['zTerritoire'], $_REQUEST['zDep'], $plancher, $plafond);}	
		header ('location: index.php?choixTraitement=param&action=voir&lstParam='.$type);
		break;
	}
//----------------------------------------- VALIDATION SUPPRESSION
case 'validerSupprimer':
	{ 
		if ($_REQUEST['zOk']=="OK") {$pdo->supprimeParametre($type, $valeur);}	
		header ('location: index.php?choixTraitement=param&action=voir&lstParam='.$type);
		break;
	}
	
default :
	{
		echo 'erreur d\'aiguillage !'.$action;
		break;
	}
}
?>