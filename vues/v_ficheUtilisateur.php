
<!-- affichage du detail de la fiche Utilisateur / Derniere modification le 11 avril 2020 par Pascal BLAIN -->
<?php 
$titre="caract&eacute;ristiques de l'utilisateur";
echo ('
		<div id="fiche">
			<ul class="lesOnglets">	
				<li class="actif onglet" 	id="onglet1" onclick="javascript:Affiche(\'1\',2);">'.$titre.'</li>
				<li class="inactif onglet" 	id="onglet2" onclick="javascript:Affiche(\'2\',2);">Praticiens visités</li>
			</ul>');
/*================================================================================================== COORDONNEES (1) */

 echo ("	
	 	<div style='display: block;' class='unOnglet' id='contenuOnglet1'> 
 			<table style='border: 0px solid white;'>
			<tr>
				<td style='border :0px;'>
				<fieldset><legend>Coordonn&eacute;es de  l'utilisateur ");
				if ($lesInfosUtilisateur['uId']==$_SESSION['idUtilisateur'] and $_SESSION['statut']<>0)
				{$lien=$_SERVER['PHP_SELF'].'?choixTraitement=utilisateur&action=modifier&lstUtilisateurs='.$lesInfosUtilisateur['uId'];
echo ('			<input type="image"	title="Modifier" src="images/modif.gif" onclick="document.location.href=\''.$lien.'\'">');
				}
echo ("</legend>
					<table>
						<tr><th style='width:120px;'>Nom</th>	<td>".$lesInfosUtilisateur['uNom']."</td> </tr>
						<tr><th>Pr&eacute;nom</th>				<td>".$lesInfosUtilisateur['uPrenom']."</td></tr>
						<tr><th>Adresse</th>					<td>".$lesInfosUtilisateur['uAdresse']."</td></tr>
						<tr><th>Code postal</th>				<td>".$lesInfosUtilisateur['uCP']."</td></tr>
						<tr><th>Ville</th>						<td>".$lesInfosUtilisateur['uVille']."</td></tr>
						<tr><th>Statut</th>						<td>".$lesInfosUtilisateur['wStatut']."</td></tr>
						<tr><th>Nom de compte</th>				<td>".$lesInfosUtilisateur['uLogin']."</td></tr>
						<tr><th>R&eacute;gion</th>				<td>".$lesInfosUtilisateur['wRegion']."</td></tr>						<tr><th>Secteur</th>					<td>".$lesInfosUtilisateur['wSecteur']."</td></tr>						
						");
echo ("			</table>
				</fieldset>
				</td>	
				
			</tr>
			</table>
			
			<fieldset><legend>Laboratoire</legend>
			<table style='border: 0px solid white;'>
				<tr> 
					 <td>".$lesInfosUtilisateur['lNom']."</td>
				</tr>
			</table>
			</fieldset>
		</div>");
		
/*================================================================================================== SUIVI DES VISITES(2)*/		
 echo ("	
	 	<div style='display: none;' class='unOnglet' id='contenuOnglet2'> 
 			<table style='border: 0px solid white;'>
			<tr>
				<td style='border :0px;'>
				<fieldset><legend>Praticiens visit&eacute;s</legend>
				<table>
				<tr><th class='controleLong'>Nom et prenom du praticien</th>
						<th class='controle' style='text-align : center;'>Nombre de visites</th>
				</tr>");
		foreach ($lesVisites as $uneLigne)
		{echo(" 
				<tr><td class='controleLong'>
<a href='index.php?choixTraitement=praticien&action=voir&lstPraticiens=".$uneLigne['pNum']."' style='text-decoration:none;'>".$uneLigne['pNom']." ".$uneLigne['pPrenom']." (".$uneLigne['pVille'].")</a></td>
						<td class='controle' style='text-align : center;'>".$uneLigne['nbVisites']."</td>
				</tr>");
		}					
		echo ("
				</table>
				</fieldset>
				</td>				
			</tr>
			</table>
			
			<fieldset><legend>Laboratoire</legend>
			<table style='border: 0px solid white;'>
				<tr> 
					 <td>".$lesInfosUtilisateur['lNom']."</td>
				</tr>
			</table>
			</fieldset>
		</div>");

/*================================================================================================== XXXXX */
echo ("
		<div style='display: none;' class='unOnglet' id='contenuOngletX'>
			<fieldset><legend>XXXX</legend>
			<table>
				<tr><th style='width:130px;'>.....</th></tr>
				<tr><td>xxxx</td></tr>
			</table>
			</fieldset>
		</div>

	</div>");				
?>