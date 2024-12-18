
<!-- affichage du detail de la fiche Praticien / Derniere modification le 19 avril 2020  -->
<?php 
$titre="Caract&eacute;ristiques du praticien";
echo ('
		<div id="fiche">
			<ul class="lesOnglets">	
				<li class="actif onglet" 	id="onglet1" onclick="javascript:Affiche(\'1\',2);">'.$titre.'</li>
				<li class="inactif onglet" 	id="onglet2" onclick="javascript:Affiche(\'2\',2);">Visites</li>
			</ul>');
/*  */
/*================================================================================================== COORDONNEES (1) */

 echo ("	
	 	<div style='display: block;' class='unOnglet' id='contenuOnglet1'> 
 			<table style='border: 0px solid white;'>
			<tr>
				<td style='border :0px;'>
				<fieldset>	<legend>Coordonn&eacute;es du praticien ");
echo ("						</legend>
					<table>
						<tr><th style='width:120px;'>Nom</th>	<td>".$lesInfosPraticien['pNom']."</td> </tr>
						<tr><th>Pr&eacute;nom</th>				<td>".$lesInfosPraticien['pPrenom']."</td></tr>
						<tr><th>Rue</th>						<td>".$lesInfosPraticien['pRue']."</td></tr>
						<tr><th>Code postal</th>				<td>".$lesInfosPraticien['pCP']."</td></tr>
						<tr><th>Ville</th>						<td>".$lesInfosPraticien['pVille']."</td></tr>
						<tr><th>Coefficient notoriete</th>		<td>".$lesInfosPraticien['pCoefNotoriete']."</td></tr>
						<tr><th>Type praticien</th>				<td>".$lesInfosPraticien['wTypeLibelle']."</td></tr>
						<tr><th>R&eacute;gion</th>				<td>".$lesInfosPraticien['wRegion']."</td></tr>						
						");
echo ("				</table>
				</fieldset>
				</td>	
				
			</tr>
			</table>
	</div>");		
				
		
/*================================================================================================== SUIVI DES VISITES(2)*/		
 echo ("	
	 	<div style='display: none;' class='unOnglet' id='contenuOnglet2'> 
 			<table style='border: 0px solid white;'>
			<tr>
				<td style='border :0px;'>
				<fieldset><legend>Visites chez le praticien</legend>
				<table>
				<tr><th class='controle' >Date visite</th>
					<th class='controle' >Visiteur médical</th>
					<th class='controle' >Rapport</th>
					<th class='controle' >Motif</th>
				</tr>");
		foreach ($lesVisitesPraticien as $uneVisite)		
		{echo(" 
				<tr><td class='controle'>
<a href='index.php?choixTraitement=visite&action=voir&lstVisites=".$uneVisite['uId']."-".$uneVisite['vNum']."' style='text-decoration:none;'>".$uneVisite['wDateVisite']."</a></td>
					<td class='controle' >".$uneVisite['wNomVisiteur']."</td>
					<td class='controle' >".$uneVisite['vRapport']."</td>
					<td class='controle' >".$uneVisite['vMotif']."</td>
				</tr>");
		}					
		echo ("
				</table>
				</fieldset>
				</td>");				
	echo ("	</tr>
			</table>
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