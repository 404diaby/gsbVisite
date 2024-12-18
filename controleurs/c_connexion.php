<?php
// ****************************************'
//  Le CASTEL-BTS SIO/ PROJET GSB PPE2 2020'
//  Programme: c_connexion.php             '
//  Objet    : authentification            '
//  Client   : Bts SIO1                    '
//  Version  : 22.03                       '
//  Date     : 09/03/2022 à 19h07          '
//  Auteur   : pascal.blain@ac-dijon.fr    '
//*****************************************'

if(!isset($_REQUEST['action'])){$_REQUEST['action'] = 'demandeConnexion';}

$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
	session_unset();
	unset($choix);
	$formulaire			= "frmIdentification";
	$champ				= "login";
	include("vues/v_entete.php");
	include("vues/v_connexion.php");
	break;
	}
	case 'valideConnexion':{
		$login 			= $_REQUEST['login'];
		$mdp 			= $_REQUEST['mdp']; //md5($_REQUEST['mdp']);
		$utilisateur 	= $pdo->getInfosUtilisateur($login,$mdp);

		if(!is_array( $utilisateur)){
			$formulaire	="frmIdentification";
			$champ		="login";
			include("vues/v_entete.php");
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
			$id 		= $utilisateur['uId'];
			$nom 		= $utilisateur['uNom'];
			$prenom 	= $utilisateur['uPrenom'];
			$statut		= $utilisateur['uStatut'];
			($statut==0)?$region=0:$region=$utilisateur['uRegion'];
			connecter($id,$nom,$prenom,$statut,$region);		
			header ('location: index.php?choixTraitement=utilisateur&action=voir');
		}
		break;
	}
	default :{
		$formulaire		="frmIdentification";
		$champ			="login";
		include("vues/v_entete.php");
		include("vues/v_connexion.php");
		break;
	}
}
?>