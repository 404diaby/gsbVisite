<?php
// ****************************************'
//  Le CASTEL-BTS SIO/ PROJET GSB PPE2 2020'
//  Programme: c_utilisateur.php           '
//  Objet    : gestion des utilisateurs    '
//  Client   : Bts SIO1                    '
//  Version  : 22.03                       '
//  Date     : 09/03/2022 à 19h18          '
//  Auteur   : pascal.blain@ac-dijon.fr    '
//*****************************************'
require_once 'controleurs/fonctionsProjet.inc';
$action = $_REQUEST['action'];
switch($action) {
    case 'voir':
    {
        $formulaire			="choixP";
        $champ				="lstUtilisateur";
        include('vues/v_entete.php');
        if ($_SESSION['statut']==0)
        {
            $lesLignes		=$pdo->getLesUtilisateurs();
            include("vues/v_choixUtilisateur.php");
        }
        else
        {
            $choix=$_SESSION['idUtilisateur'];
        }
        $lesInfosUtilisateur= $pdo->getInfosUtilisateur("*",$choix);
        $lesVisites			= $pdo->getLesVisitees($choix);
        include('vues/v_ficheUtilisateur.php');
        break;
    }
//----------------------------------------- FORMULAIRE DE SAISIE
    case 'ajouter':
    case 'modifier':
    case 'supprimer':
    {
        $formulaire		="frmA";
        $champ			="ztNom";
        include('vues/v_entete.php');

        $choix= $_REQUEST['lstUtilisateurs'];
        $lesInfosUtilisateur= $pdo->getInfosUtilisateur("*",$choix);
        $lesStatuts		= $pdo->getParametre("statUti");
        $lesRegions		= $pdo->getParametre("region");
        $lesLabos		= $pdo->getLesLabos();
        include('vues/v_unUtilisateur.php');
        break;
    }
//----------------------------------------- VALIDATION	

    case 'validerAjouter':
    case 'validerModifier':
    case 'validerSupprimer':
    {
        (isset($_REQUEST['utilisateur']))?$valeur=$_REQUEST['utilisateur']:$valeur=$_SESSION['idUtilisateur'];
        if (!strlen($valeur)==3){$valeur=$_SESSION['idUtilisateur'];}
        if ($_REQUEST['zOk']=="OK")
        {
            if ($action==="validerSupprimer")
            {$pdo->supprimeUtilisateur($valeur);$valeur=$_SESSION['idUtilisateur'];}
            else
            {
                $nom		= addslashes ($_REQUEST['ztNom']);
                $prenom		= addslashes ($_REQUEST['ztPrenom']);
                $statut		= $_REQUEST['ldrStatut'];
                $login		= $_REQUEST['ztLogin'];
                $region		= substr($_REQUEST['ldrRegion'],0, strpos($_REQUEST['ldrRegion'],"*"));
                $secteur	= substr($_REQUEST['ldrRegion'],strpos($_REQUEST['ldrRegion'],"*")+1,strlen($_REQUEST['ldrRegion'])-1);
                //$mdp		= md5($_REQUEST['ztMdp']);
                $mdp		= $_REQUEST['ztMdp'];
                if($_REQUEST['brMdp']==0 AND $action==="validerModifier") {$mdp="*";}
                $adresse	= addslashes ($_REQUEST['ztAdresse']);
                if (strlen($_REQUEST['ztCP'])>1)				{$cp	= $_REQUEST['ztCP'];} else {$cp = "Null";}
                $ville			= addslashes ($_REQUEST['ztVille']);
                $labo		= $_REQUEST['ldrLabo'];
                if ($action==="validerAjouter")
                {$valeur=$pdo->nouveauCodeUtilisateur($nom);
                    $pdo->ajoutUtilisateur($valeur,$nom,$prenom,$statut,$login,$mdp,$adresse,$cp,$ville,$region,$secteur,$labo);
                    $sujet 	= "nouveau compte";
                    $msg = "Bonjour ".$prenom." ".$nom.", \r\nLe Castel vient de créer un compte pour vous  ...\r\n";
                }
                else
                {$pdo->majUtilisateur($valeur,$nom,$prenom,$statut,$login,$mdp,$adresse,$cp,$ville,$region,$secteur,$labo);
                    $sujet 	= "nouveau mot de passe";
                    $msg = "Bonjour ".$prenom." ".$nom.", \r\nLe Castel vient de modifier votre mot de passe  ...\r\n";
                }
                $entete	= "From: Pascal Blain <pascal.blain@ac-dijon.fr>\r\n";
                $entete	.= "Mime-Version: 1.0\r\n";
                $entete	.= "Content-type: text/html; charset=utf-8\r\n";
                $entete	.= "\r\n";
                $msg .= "Statut : ".$statut."\r\n";
                $msg .= "Identifiant : ".$login."\r\n";
                $msg .= "Mot de passe : ".$_REQUEST['ztMdp']."\r\n";
                //$pdo->envoyerMail($mail, $sujet, $msg, $entete);
            }
        }
        header ('location: index.php?choixTraitement=utilisateur&action=voir&lstUtilisateurs='.$valeur);
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
