<?php
/** 
 * @author 	:Pascal BLAIN, lycee le castel à Dijon
 * @version :2022-03-31
 * Classe d'acces aux donnees. Utilise les services de la classe PDO pour l'application
 * Les attributs sont tous statiques, les 4 premiers pour la connexion
 * $monPdo est de type PDO - $monPdoBD contient l'unique instance de la classe
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoBD
{   		
	private static $serveur='mysql:host=localhost:3306';
	private static $bdd='dbname=gsb';   		
	private static $user='root';    		
	private static $mdp='';	
	private static $monPdo;
	private static $monPdoBD=null;
	/*
	private static $serveur='mysql:host=10.121.38.79';
	private static $bdd='dbname=gsb2022';   		
	private static $user='gsbsio';    		
	private static $mdp='gsbsio';	
	private static $monPdo;
	private static $monPdoBD=null;*/
			
	private function __construct()
	{
		PdoBD::$monPdo = new PDO(PdoBD::$serveur.';'.PdoBD::$bdd, PdoBD::$user, PdoBD::$mdp); 
		PdoBD::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct()
	{
		PdoBD::$monPdo = null;
	}
/**
 * Fonction statique qui cree l'unique instance de la classe PdoBD
*/
	public  static function getPdoBD()
	{
		if(PdoBD::$monPdoBD==null)	{PdoBD::$monPdoBD= new PdoBD();}
		return PdoBD::$monPdoBD;  
	}

/** ---------------------------------------------- module Connexion
 *
 * dernière modif le : 09/03/2022 par Pascal Blain
 * Retourne les informations d'un utilisateur sous la forme d'un tableau associatif
*/
	public function getInfosUtilisateur($login,$mdp)
	{
		$req = "SELECT uId,uNom,uPrenom,uLogin,uMdp,uAdresse,uCP,uVille,uDateEmbauche,uSecteur,uStatut,uRegion,
					st.pLibelle as wStatut,s.pLibelle as wSecteur,r.pLibelle as wRegion,uLabo,lNom
					FROM utilisateur 
					INNER JOIN parametre st ON (st.pType='statUti' AND st.pIndice=uStatut)
					INNER JOIN parametre r ON (r.pType='region' AND r.pIndice=uRegion)
					INNER JOIN parametre s ON (s.pType='secteur' AND s.pIndice=uSecteur)
					INNER JOIN labo ON uLabo=lCode";
		if ($login==="*") 
		{$req.=" WHERE uId='$mdp';";}
		else 
		{$req.=" WHERE uLogin='$login' 
				 AND uMdp='$mdp';";}
		//echo $req;
		$rs = PdoBD::$monPdo->query($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la lecture des informations d'un utilisateur...", $req, PdoBD::$monPdo->errorInfo());}
		$ligne = $rs->fetch();
		return $ligne;
	}
/** ---------------------------------------------- Fin module Connexion*/

/** ---------------------------------------------- module gestion des UTILISATEURS
 * Retourne les informations des UTILISATEURS
*/
	public function getLesUtilisateurs()
	{		
		$req = "SELECT uId,uNom,uPrenom,uLogin,uMdp,uStatut
					FROM utilisateur 
					ORDER BY uNom,uPrenom;";
		$rs = PdoBD::$monPdo->query($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la lecture des &eacute;l&grave;ves ..", $req, PdoBD::$monPdo->errorInfo());}
		$lesLignes = $rs->fetchAll();
		return $lesLignes; 
	}
/**
 * Retourne les informations des praticiens visités par un visiteur médical
*/
	public function getLesVisitees($choix)
	{
		$req = "SELECT p.pNum,pNom,pPrenom,pVille,count(*) as nbVisites
					FROM praticien p INNER JOIN visite v ON p.pNum=v.pNum
					WHERE uId='$choix'
					GROUP BY p.pNum,pNom,pPrenom,pVille
					ORDER BY pNom,pPrenom;";
		//echo $req;
		$rs = PdoBD::$monPdo->query($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la lecture des informations des praticiens visit&eacute;s...", $req, PdoBD::$monPdo->errorInfo());}
		$lesLignes = $rs->fetchAll();
		return $lesLignes; 
	}
/**
 * Retourne les informations des labos
*/
	public function getLesLabos()
	{
		$req = "SELECT lCode, lNom
					FROM labo
					ORDER BY lNom;";
		//echo $req;
		$rs = PdoBD::$monPdo->query($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la lecture des informations des labos...", $req, PdoBD::$monPdo->errorInfo());}
		$lesLignes = $rs->fetchAll();
		return $lesLignes; 
	}
/**
 * Met à jour une ligne de la table utilisateur 
*/
	public function majUtilisateur($valeur,$nom,$prenom,$statut,$login,$mdp,$adresse,$cp,$ville,$region,$secteur,$labo)
	{
		$req = "UPDATE utilisateur SET
					uNom='$nom', uPrenom='$prenom', uStatut=$statut, uLogin='$login', uAdresse='$adresse',
					uCP=$cp, uVille='$ville', uRegion=$region, uSecteur=$secteur, ulabo='$labo', uDateModif=NOW()";
		if ($mdp<>"*") {$req.= ",uMdp='$mdp' ";}
		$req.=" WHERE uId='$valeur';";
		$rs = PdoBD::$monPdo->exec($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la mise à jour de l'utilisateur dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
	}
/**
 * supprime une ligne de la table utilisateur 
*/
	public function supprimeUtilisateur($valeur)
	{
		$req = "DELETE 
				FROM utilisateur
				WHERE  uId='$valeur';";
		$rs = PdoBD::$monPdo->exec($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la suppression de l'utilisateur dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
	}	
/**
 * ajoute une ligne dans la table utilisateur
*/
	public function nouveauCodeUtilisateur($nom)
	{			
		$req = "SELECT if( isnull( max(cast(SUBSTRING(uid, 2, length(uid)-1) as unsigned integer)) ) , 1, max(cast(SUBSTRING(uid, 2, length(uid)-1) as unsigned integer))+1) as num 
				FROM utilisateur 
				WHERE LEFT(uId, 1) ='$nom[0]';";
		$rs = PdoBD::$monPdo->query($req);
		if($rs === false){afficherErreurSQL("Acces impossible a la table utilisateur. ", $req, PdoBD::$monPdo->errorInfo());}
		$ligne=$rs->fetch();
		return $nom[0].strval($ligne['num']);
	}	
	
	public function ajoutUtilisateur($valeur,$nom,$prenom,$statut,$login,$mdp,$adresse,$cp,$ville,$region,$secteur,$labo)
	{			
		$req = "INSERT INTO utilisateur (uId,uNom,uPrenom,uStatut,uLogin,uMdp,uAdresse,uCP,uVille,uRegion,uSecteur,uLabo,uDateEnreg,uDateModif) 
				VALUES 
					('$valeur','$nom','$prenom',$statut,'$login','$mdp','$adresse',$cp,'$ville',$region,$secteur,'$labo', NOW(),NOW());";
		$rs = PdoBD::$monPdo->exec($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de l'insertion de l'utilisateur dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}	
	}
/** ---------------------------------------------- fin module gestion des UTILISATEURS */

/* ---------------------------------------------- module gestion des praticiens */
  /* Retourne les informations des praticiens */
	public function getLesPraticiens($region)
	{		
		$req = "SELECT distinct p.pNum,pNom,pPrenom,region,count(vNum) as nbVisites
					FROM praticien p LEFT JOIN visite v ON (p.pNum=v.pNum";
		($_SESSION['region']==0)?$req.=") group by pNom,pPrenom,p.pNum,region;":$req.=" and uId='".$_SESSION['idUtilisateur']."') WHERE region = $region group by pNom,pPrenom,p.pNum,region;";
		
		$rs = PdoBD::$monPdo->query($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la lecture des praticiens ..", $req, PdoBD::$monPdo->errorInfo());}
		$lesLignes = $rs->fetchAll();
		return $lesLignes; 
	}	
/**
 * Retourne les informations d'un praticien sous la forme d'un tableau associatif
*/
	public function getInfosPraticien($idfP)
	{
		$req = "SELECT pNum,pNom,pPrenom,pRue,pCP,pVille,pCoefNotoriete,p.tCode,tp.tLibelle as wTypeLibelle,p.region,r.plibelle as wRegion
					FROM praticien p
					INNER JOIN type_praticien tp ON tp.tCode = p.tCode
					INNER JOIN parametre r ON (r.pType='region' AND r.pIndice=p.region) 
					WHERE pNum='$idfP'
					";
		
		$rs = PdoBD::$monPdo->query($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la lecture des informations d'un praticien...", $req, PdoBD::$monPdo->errorInfo());}
		$ligne = $rs->fetch();
		return $ligne;
	}	
/**
 * Retourne les informations des visites chez un praticien sous la forme d'un tableau associatif
*/
	public function getLesVisitesPraticien($idP)
	{
	$req = "SELECT  v.uId,vNum,DATE_FORMAT(vDate,'%d/%m/%Y') as wDateVisite,uNom as wNomVisiteur, vRapport, vMotif
					FROM visite v
					INNER JOIN utilisateur u ON u.uId = v.uId
					WHERE pNum='$idP'
					ORDER BY vDate desc;";
		$rs = PdoBD::$monPdo->query($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la lecture des praticiens ..", $req, PdoBD::$monPdo->errorInfo());}
		$lesLignes = $rs->fetchAll();
		return $lesLignes;
	}	
/**
 * Retourne les informations des types praticien
*/
	public function getLesTypesPraticien()
	{
		$req = "SELECT tCode, tLibelle
					FROM type_praticien 
					ORDER BY tLibelle;";
		$rs = PdoBD::$monPdo->query($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la lecture des informations des types de praticien...", $req, PdoBD::$monPdo->errorInfo());}
		$lesLignes = $rs->fetchAll();
		return $lesLignes; 
	}
/**
 * Met à jour une ligne de la table praticien 
*/
	public function majPraticien($valeur,$nom,$prenom,$adresse,$cp,$ville,$coefNotoriete,$type,$region)
	{
		$req = "UPDATE praticien SET
					pNom='$nom', pPrenom='$prenom', pRue='$adresse',
					pCP=$cp, pVille='$ville', region='$region', tCode='$type', pCoefNotoriete='$coefNotoriete'";
		$req.=" WHERE pNum='$valeur';";
		$rs = PdoBD::$monPdo->exec($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la mise à jour de l'utilisateur dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
	}	
/**
 * Supprime une ligne de la table praticien 
*/
	public function supprimePraticien($valeur)
	{
		$req = "DELETE 
				FROM praticien
				WHERE  pNum='$valeur';";
		$rs = PdoBD::$monPdo->exec($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la suppression du praticien dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
	}	
/**
 * Ajoute une ligne dans la table praticien
*/
	public function nouveauCodePraticien()
	{			
		$req="SELECT if( isnull( max(pNum) ) , 1, max(pNum)+1 ) AS numNouveau from praticien;";
		$rs = PdoBD::$monPdo->query($req);
		if($rs === false){afficherErreurSQL("Acces impossible a la table praticien. ", $req, PdoBD::$monPdo->errorInfo());}
		$ligne=$rs->fetch();
		return $ligne['numNouveau'];
	}
	public function ajoutPraticien($valeur,$nom,$prenom,$adresse,$cp,$ville,$coefNotoriete,$typePraticien,$region)
	{	
		$req = "INSERT INTO praticien (pNum,pNom,pPrenom,pRue,pCP,pVille,pCoefNotoriete,tCode,region) 
					VALUES 
						('$valeur','$nom','$prenom','$adresse','$cp','$ville','$coefNotoriete','$typePraticien','$region');";

		$rs = PdoBD::$monPdo->exec($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de l'insertion du praticien dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}	
	}
/** ---------------------------------------------- fin module gestion des praticiens*/
/* ---------------------------------------------- module gestion des visites */
  /* Retourne les informations des visites d'un utilisateur */
  //dans la requette enleve le info inutil
  public function getLesVisites($id)
  {		
	  $req = "SELECT visite.uId ,vNum,visite.pNum,SUBSTR(vDate,1,10) AS vDate,vMotif, pNom,pPrenom,uAdresse,uCP,uVille 
	  FROM visite 
	  INNER JOIN utilisateur ON visite.uId = utilisateur.uId
	  INNER JOIN praticien ON visite.pNum = praticien.pNum
	  WHERE visite.uId =  '".$_SESSION['idUtilisateur']."';";
	
	  $rs = PdoBD::$monPdo->query($req);
	  if ($rs === false) {afficherErreurSQL("Probleme lors de la lecture des praticiens ..", $req, PdoBD::$monPdo->errorInfo());}
	  $lesLignes = $rs->fetchAll();
	  return $lesLignes; 
  }	
  /**
 * Retourne les informations de la table TYPEPARAMETRE
*/
	public function getEchantillons($id,$idV)
	{
		$req = "SELECT offrir.uId, offrir.vNum,fLibelle,mNomCommercial ,mComposition, offrir.mDepotLegal AS DepotLegal,OFF_QTE 
		FROM offrir INNER JOIN medicament ON offrir.mDepotLegal = medicament.mDepotLegal 
		INNER JOIN famille ON medicament.fCode = famille.fCode 
		WHERE  offrir.uId= '$id' AND offrir.vNum =$idV
		ORDER by fLibelle;";
		$rs = PdoBD::$monPdo->query($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la recherche dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
		$lesLignes = $rs->fetchAll();
		return $lesLignes; 
	}	
	/**
 * Retourne les informations dun echantillon
*/
public function getUnEchantillon($id,$idV,$depotlegal)
{
	$req = "SELECT offrir.uId, offrir.vNum,fLibelle,mNomCommercial ,mComposition, offrir.mDepotLegal AS DepotLegal,OFF_QTE 
	FROM offrir INNER JOIN medicament ON offrir.mDepotLegal = medicament.mDepotLegal 
	INNER JOIN famille ON medicament.fCode = famille.fCode 
	WHERE offrir.uId= '$id' AND offrir.vNum =$idV AND offrir.mDepotLegal = '$depotlegal';";
	$rs = PdoBD::$monPdo->query($req);
	if ($rs === false) {afficherErreurSQL("Probleme lors de la recherche dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
	$ligne = $rs->fetch();
	return $ligne; 
}
 /* Retourne les informations d'une visites d'un praticien */
 public function getUneVisitePraticien($id,$idV)
 {	
	$req = "SELECT  visite.uId AS uId,vNum,DATE_FORMAT(vDate,'%Y/%m/%d') as wDateVisite, vRapport, vMotif AS pIndice , mt.pLibelle AS vMotif,praticien.pNum AS pNum,pNom,pPrenom,pRue,pCP,pVille	
					FROM visite
					INNER JOIN praticien ON visite.pNum = praticien.pNum
					INNER JOIN parametre mt ON (mt.pType='MotifVi' AND mt.pIndice=vMotif)
					WHERE visite.uId='$id' AND vNum=$idV;";
	
		$rs = PdoBD::$monPdo->query($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la lecture des visite ..", $req, PdoBD::$monPdo->errorInfo());}
		$uneLignes = $rs->fetch();
		return $uneLignes;
		
	
	}	
	/* Retourne les medicaments */
 public function getLesMedicaments()
  {		
	  $req = "SELECT mDepotLegal,mNomCommercial FROM medicament;";
	
	  $rs = PdoBD::$monPdo->query($req);
	  if ($rs === false) {afficherErreurSQL("Probleme lors de la lecture des praticiens ..", $req, PdoBD::$monPdo->errorInfo());}
	  $lesLignes = $rs->fetchAll();
	  return $lesLignes; 
  }	
  /**
 * REtourne les medicament d'une visite
*/
  
public function getNomMedUneVisite($id,$idV)
 {	
	$req = "SELECT visite.Medicament1 AS Medicament ,mNomCommercial FROM visite 
	INNER JOIN medicament ON visite.Medicament1 = medicament.mDepotLegal
	WHERE visite.uId='$id' AND vNum=$idV
	UNION
	SELECT visite.Medicament2,mNomCommercial FROM visite 
	INNER JOIN medicament ON visite.Medicament2 = medicament.mDepotLegal
	WHERE visite.uId='$id' AND vNum=$idV;";
		$rs = PdoBD::$monPdo->query($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la lecture des visite ..", $req, PdoBD::$monPdo->errorInfo());}
		$lesLignes = $rs->fetchAll();
		return $lesLignes;
 }
	/**
 * Supprime une ligne de la table visite*/
	public function supprimeVisite($id ,$idV)
	{
		$req = "DELETE FROM visite WHERE  uId='$id' AND vNum='$idV';";
		$rs = PdoBD::$monPdo->exec($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la suppression du praticien dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
	}	
	/**
 

 * Met à jour une ligne de la table visite 
*/
public function majVisite($id ,$idV,$Date,$Rapport,$Motif,$Med,$Med2)
{//fairez modif avec les medicamment
	$req = "UPDATE visite SET
				vDate='$Date', vRapport='$Rapport', vMotif='$Motif', Medicament1='$Med' , Medicament2='$Med2' WHERE  uId='$id' AND vNum='$idV' ;";
	$rs = PdoBD::$monPdo->exec($req);
	if ($rs === false) {afficherErreurSQL("Probleme lors de la mise à jour de l'utilisateur dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
}	
///Ajoute une ligne dans la table visite
public function nouveauCodeVisite($id)
	{			
		$req="SELECT if( isnull( max(vNum) ) , 1, max(vNum)+1 ) AS numNouveau from visite WHERE uId='$id';";
		$rs = PdoBD::$monPdo->query($req);
		if($rs === false){afficherErreurSQL("Acces impossible a la table praticien. ", $req, PdoBD::$monPdo->errorInfo());}
		$ligne=$rs->fetch();
		return $ligne['numNouveau'];
	}
	public function ajoutVisite($id,$NewIdV,$idP,$date,$rapport,$motif,$med,$med2)
	{	
		$req = "INSERT INTO visite (uId,vNum,pNum,vDate,vRapport,vMotif,Medicament1,Medicament2) 
		VALUES ('$id',$NewIdV,$idP,'$date','$rapport',$motif,'$med','$med2');";

		$rs = PdoBD::$monPdo->exec($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de l'insertion du praticien dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}	
	}

	/**
 * Met à jour une ligne de la table offrir 
*/
public function majEchantillon($id ,$idV,$depotlegal,$qte)
{//fairez modif avec les medicamment
	$req = "UPDATE offrir SET OFF_QTE='$qte' WHERE  uId='$id' AND vNum=$idV AND mDepotLegal='$depotlegal';";
	$rs = PdoBD::$monPdo->exec($req);
	if ($rs === false) {afficherErreurSQL("Probleme lors de la mise à jour de l'utilisateur dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
}	
public function ajoutEchantillon($id,$idV,$depotlegal,$qte)
	{	
		$req = "INSERT INTO offrir (uId,vNum,mDepotLegal,OFF_QTE) 
		VALUES ('$id',$idV,'$depotlegal',$qte);";

		$rs = PdoBD::$monPdo->exec($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de l'insertion du praticien dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}	
	}
	/* Supprime une ligne de la table offrir*/
public function supprimeEchantillon($id ,$idV,$depotlegal)
{
	$req = "DELETE FROM offrir WHERE  uId='$id' AND vNum='$idV' AND mDepotLegal='$depotlegal';";
	$rs = PdoBD::$monPdo->exec($req);
	if ($rs === false) {afficherErreurSQL("Probleme lors de la suppression du praticien dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
}	
/** ---------------------------------------------- fin module gestion des visites*/
	
/** ---------------------------------------------- gestion des PARAMETRES*/
/**
 * Retourne les informations de la table TYPEPARAMETRE
*/
	public function getLesParametres()
	{
		$req = "SELECT tlId, tlLibelle, tlBooleen, tlChoixMultiple, tlCumul
					FROM typeParametre
					ORDER BY tlLibelle;";
		$rs = PdoBD::$monPdo->query($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la recherche dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
		$lesLignes = $rs->fetchAll();
		return $lesLignes; 
	}	
/**
 * Retourne dans un tableau associatif les informations de la table PARAMETRE (pour un type particulier)
*/
	public function getParametre($type)
	{
		$req = "SELECT pIndice, pLibelle, pCategorie
				FROM parametre
				WHERE pType='$type'
				ORDER by pIndice;";
		$rs = PdoBD::$monPdo->query($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la recherche des parametres dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
		$lesLignes = $rs->fetchAll();
		return $lesLignes;
	}
/**
 * Retourne dans un tableau associatifles informations de la table PARAMETRE (pour un type particulier)
*/
	public function getInfosParam($type, $valeur)
	{
			if ($valeur=="NULL") 
			{$req = "SELECT pType, max(pIndice)+1 AS pIndice, ' ' AS pLibelle, tlLibelle, pPlancher, pPlafond
						 FROM parametre INNER JOIN typeParametre ON typeParametre.tlId=parametre.pType
						 WHERE pType='$type';";
			}
			else
			{$req = "SELECT pType, pIndice, pLibelle, tlLibelle, pPlancher, pPlafond
						 FROM parametre INNER JOIN typeParametre ON typeParametre.tlId=parametre.pType
						 WHERE pType='$type'
						 AND pIndice like '$valeur';";
			}					 
		$rs = PdoBD::$monPdo->query($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la recherche dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
		$ligne = $rs->fetch();		
		return $ligne;
	}
/**
 * Met a jour une ligne de la table PARAMETRE
*/
	public function majParametre($type, $valeur, $libelle, $territoire, $dep, $plancher, $plafond)
	{
		$req = "UPDATE parametre SET pLibelle='$libelle', pPlancher=$plancher, pPlafond=$plafond
					WHERE pType='$type'
					AND pIndice=$valeur;";
		$rs = PdoBD::$monPdo->exec($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la mise a jour des parametres dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
	}	
/**
 * supprime une ligne de la table PARAMETRE 
*/
	public function supprimeParametre($type, $valeur)
	{
		$req = "DELETE 
				FROM parametre
				WHERE pType='$type'
				AND pIndice=$valeur;";
		$rs = PdoBD::$monPdo->exec($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de la suppression d'un parametre dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
	}	
/**
 * ajoute une ligne dans la table PARAMETRE
*/
	public function ajoutParametre($type, $valeur, $libelle,$territoire, $dep, $plancher, $plafond)
	{	
		$req = "INSERT INTO parametre 
					(pType, pIndice, pLibelle, pPlancher, pPlafond) 
					VALUES ('$type', $valeur, '$libelle', $plancher, $plafond);";
		$rs = PdoBD::$monPdo->exec($req);
		if ($rs === false) {afficherErreurSQL("Probleme lors de l'insertion d'un parametre dans la base de donn&eacute;es.", $req, PdoBD::$monPdo->errorInfo());}
	}
/** ---------------------------------------------- fin gestion des PARAMETRES*/
}
?>