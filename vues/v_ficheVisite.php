
<!-- affichage du detail de la fiche Praticien / Derniere modification le 19 avril 2020  -->
<?php 
$titre="rapports de visite";
echo ('
		<div id="fiche">
			<ul class="lesOnglets">	
				<li class="actif onglet" 	id="onglet1" onclick="javascript:Affiche(\'1\',2);">'.$titre.'</li>
				<li class="inactif onglet" 	id="onglet2" onclick="javascript:Affiche(\'2\',2);">Echantillons</li>
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
						
						<tr><th>Nom/Pr&eacute;nom</th>				<td>".$UneVisitePraticien['pNom']." ".$UneVisitePraticien['pPrenom']."</td></tr>
						<tr><th>Rue</th>						<td>".$UneVisitePraticien['pRue']."</td></tr>
						<tr><th>Code postal/Ville</th>				<td>".$UneVisitePraticien['pCP']." ".$UneVisitePraticien['pVille']."</td></tr>
						");
echo ("				</table>
				</fieldset>
				</td>	
				
			</tr>
			</table>
	");
	echo ("	
	
		<table style='border: 0px solid white;'>
	   <tr>
		   <td style='border :0px;'>
		   <fieldset>	<legend>Rapport de visite");
echo ("						</legend>
			   <table>
				   
				   <tr><th>Date de visite</th>				<td>".$UneVisitePraticien['wDateVisite']."</td></tr>
				   <tr><th>Motif</th>						<td>".$UneVisitePraticien['vMotif']."</td>
				   <th>Medicament 1</th>						<td>");
				   $nbL=count($LesNomsMedsUneVisite);
				   if( $nbL!=0 )
				   {echo "<input type='hidden' name='Med' value='".$LesNomsMedsUneVisite['0']['Medicament']."'>".$LesNomsMedsUneVisite['0']['mNomCommercial']."";}
				   else
				   	{echo"        ";}
					   echo"</td></tr>
				   <tr><th>Commentaire</th>				<td>".$UneVisitePraticien['vRapport']."</td>
				   <th>Medicament 2</th>						<td>
				   ";
				   $nbL=count($LesNomsMedsUneVisite);
				   if( $nbL>1 )
				   {echo "<input type='hidden' name='Med2' value='".$LesNomsMedsUneVisite['1']['Medicament']."'>".$LesNomsMedsUneVisite['1']['mNomCommercial']."";}
				   else
				   	{echo"               ";}
echo ("					   </td></tr>
				   
				</table>
		   </fieldset>
		   </td>	
		   
	   </tr>
	   </table>
</div>");				
				
		
/*================================================================================================== SUIVI DES VISITES(2)*/		
 echo ("	
	 	<div style='display: none;' class='unOnglet' id='contenuOnglet2'> 
 			
				");
		foreach ($lesEchantillons as $unEchantillon)		
		{
			
			
			//<a href='index.php?choixTraitement=visite&action=voir&lstVisites=".$unEchantillon['uId']."-".$unEchantillon['vNum'].' style='text-decoration:none;'>".$unEchantillon['medicament.mNomCommercial'].'</a>
			echo(" 
			<fieldset><legend>".$unEchantillon['fLibelle']."</legend>
			
				<table name=>
				<tr><th class='controle' >Nom commercial</th>
					<th class='controle' >Composition</th>
					<th class='controle' >Quantité</th>
					<th class='controle' >mise à jour</th>
				</tr>
				<tr ><td class='controle' ><input type='hidden' name='depot' value='".$unEchantillon['DepotLegal']."'>".$unEchantillon['mNomCommercial']."</td>
					<td class='controle' >".$unEchantillon['mComposition']."</td>
					<td class='controle' >".$unEchantillon['OFF_QTE']."</td>
					<td>	
					<a href='index.php?choixTraitement=visite&action=modifierE&&lstV=".$UneVisitePraticien['uId']."-".$UneVisitePraticien['vNum']."&depot=".$unEchantillon['DepotLegal']."'> <input type='image'		id='zModifE'	title='Modifier' 	src='images/modif.gif'		onclick='faire('choixV', 'modifierE')'  ></a>
					<a href='index.php?choixTraitement=visite&action=supprimerE&lstV=".$UneVisitePraticien['uId']."-".$UneVisitePraticien['vNum']."&depot=".$unEchantillon['DepotLegal']."'> <input type='image'		id='zSupprimeE' 	title='Supprimer'	src='images/supprimer.gif' 	onclick='faire('choixV', 'supprimerE')'  >&nbsp;&nbsp;</a>
					");
					
	?> 				 
		
            <input type="hidden"		name="action"	value="<?php if($_REQUEST['action']=="liste") {echo "voir";} else {echo $_REQUEST['action'];}?>">
           <!-- <input type='hidden' name='DL' value=".$unEchantillon['DepotLegal'].">	-->
<?php					
				
							
		echo ("</td>
				</tr>
				</table>
				</fieldset>");
					
				
		}

?>
		  
<input type="image"		id="zNouveauE" 	title="Ajouter" 	src="images/ajout.gif" 		onclick="faire('choixV', 'ajouterE')">
<?php
echo"	</div>";
?>
<?php
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
