<?php
session_start();
// ****************************************'
//  Le CASTEL-BTS SIO/ PROJET GSB PPE2     '
//  Programme: index.php                   '
//  Objet    : page principale             '
//  Client   : Bts SIO1                    '
//  Version  : 22.03                       '
//  Date     : 09/03/2022 à 19h00          '
//  Auteur   : pascal.blain@ac-dijon.fr    '
//*****************************************'

require_once("controleurs/fonctionsProjet.inc");
require_once ("modele/classPDO.php");

$pdo = PdoBD::getPdoBD();
$estConnecte = estConnecte();

// on vérifie que l'utilisateur est authentifié
if(!isset($_REQUEST['choixTraitement']) || !$estConnecte){$_REQUEST['choixTraitement'] = 'connexion';}

// on analyse le cas d'utilisation en cours ...
$choixTraitement= $_REQUEST['choixTraitement'];
switch($choixTraitement)
{
	case 'connexion'	:	{include("controleurs/c_connexion.php");break;}
	case 'visite' 		:	{include("controleurs/c_visite.php");break;}
	case 'praticien'	:	{include("controleurs/c_praticien.php");break;}
	case 'statistiques' :	{include("controleurs/c_statistiques.php");break;}
	case 'param' 		:	{include("controleurs/c_param.php");break;}
	case 'utilisateur' 	:	{include("controleurs/c_utilisateur.php");break;}	
	default 			:	{echo 'erreur d\'aiguillage !'.$choixTraitement;break;}
}
include("vues/v_pied.php") ;
?>
