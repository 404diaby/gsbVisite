<!-- Derniere modification le 15 avril 2020 par Guy Mehl -->

<?php
 	if ($_REQUEST['action']=="supprimer") 
		{ 	echo '<h2>SUPPRESSION DU PRATICIEN '.$lesInfosPraticien['pNom'].' '.$lesInfosPraticien['pPrenom'].'</h2>';
		 	echo '<form name="frmA" 	action="index.php?choixTraitement=praticien&action=validerSupprimer&praticien='.$lesInfosPraticien['pNum'].'" method="post">';} 
 	if ($_REQUEST['action']=="modifier") 
		{ 	echo '<h2>MODIFICATION DU PRATICIEN '.$lesInfosPraticien['pNom'].' '.$lesInfosPraticien['pPrenom'].'</h2>'; 	
			echo '<form name="frmA" 	action="index.php?choixTraitement=praticien&action=validerModifier&praticien='.$lesInfosPraticien['pNum'].'" method="post">';}
 	if ($_REQUEST['action']=="ajouter") 
		{ 	echo "<h2>AJOUT D'UN NOUVEAU PRATICIEN </h2>";
			echo '
			<form name="frmA" 	action="index.php?choixTraitement=praticien&action=validerAjouter" method="post" onsubmit="return valider(this)">';}
	echo ("	
    <fieldset><legend>Coordonn&eacute;es</legend>
		<table>");	
 if ($_REQUEST['action']=="supprimer")  //-------------------------------------------------------- cas suppression
	{		echo ("
			<tr><th style='width:120px;'>Nom</th>	<td>".$lesInfosPraticien['pNom']."</td> </tr>
			<tr><th>Pr&eacute;nom</th>				<td>".$lesInfosPraticien['pPrenom']."</td> </tr>
			<tr><th>Rue</th>						<td>".$lesInfosPraticien['pRue']."</td> </tr>
			<tr><th>Code postal</th>				<td>".$lesInfosPraticien['pCP']."</td> </tr>
			<tr><th>Ville</th>						<td>".$lesInfosPraticien['pVille']."</td></tr>
			<tr><th>Coefficient Notoriete</th>		<td>".$lesInfosPraticien['pCoefNotoriete']."</td></tr>			
			<tr><th>Type praticien</th>				<td>".$lesInfosPraticien['wTypeLibelle']."</td> </tr>
			<tr><th>Région</th>						<td>".$lesInfosPraticien['wRegion']."</td></tr>
        </table>
    </fieldset>");
	//</td>");
				
	}
 if ($_REQUEST['action']=="ajouter")  //-------------------------------------------------------- cas ajout
	{
	 		echo ('
			<tr><th style="width:120px;">Nom</th><td>
				<input class="controleLong" type="text" name="ztNom" id="Nom" onblur="verifTexte(this.form, this, 55)" required><input type="hidden" name="praticien" value="'.$choix.'"></td>
			</tr>
			<tr><th>Pr&eacute;nom</th>	<td>
				<input class="controleLong" type="text" name="ztPrenom" id="prenom" onblur="verifTexte(this.form, this, 25)"></td> </tr>');
			echo ('	
	  		<tr><th>Rue</th>			<td><input class="controleLong" type="text" name="ztAdresse"></td> </tr>
			<tr><th>Code postal</th>	<td><input  class="controle" type="text"  pattern="[0-9]{5}" id="Code postal"  name="ztCP">'); 
			echo ("
			<a href=\"javascript:openCodesPostaux('ztCP','ztVille');\" title='Trouvez un code postal en France'>
			<img src='images/cp.gif' width='16' height='13' alt='codes postaux' title='S&eacute;l&eacute;ctionnez votre code postal gr&acirc;ce &agrave; www.codes-postaux.org'></a></td> </tr>
			<tr><th>Ville</th>					<td><input class='controleLong' type='text' name='ztVille'></td></tr>
			<tr><th>Coefficient Notoriété</th>	<td><input class='controleLong' type='text' name='ztCoefNotoriete'></td></tr>
			<tr> <th>Type praticien</th>		<td><select name = 'ldrTypePraticien' style='width:200px;'>"); 
			foreach ($lesTypesPraticien as $unTypePraticien)
			{	if($unTypePraticien['tCode']===$lesInfosPraticien['tCode']){$selected = "selected";} else {$selected = null;}
				echo '
					<option '.$selected.' value="'.$unTypePraticien['tCode'].'">'.$unTypePraticien['tLibelle'].'</option>';
			}  
			echo ("
			</select></td> </tr> ");
			echo ("<tr> <th>R&eacute;gion</th>	<td>  <select name = 'ldrRegion' style='width:200px;'>"); 
			foreach ($lesRegions as $uneRegion)
			{	if($uneRegion['pIndice']===$lesInfosPraticien['region']){$selected = "selected";}
				else {$selected = null;}
				echo '
					<option '.$selected.' value="'.$uneRegion['pIndice'].'*'.$uneRegion['pCategorie'].'">'.$uneRegion['pLibelle'].'</option>';
			}
			echo ("
			</select></td> </tr> 	
		</table>
    </fieldset>");
	} 
			
	
 if ($_REQUEST['action']=="modifier")	//------------------------------------------------------------------------------------ cas modification
	{		
	 		echo ('
			<tr>	<th style="width:120px;">Nom</th>			<td>
					<input class="controleLong" type="text" name="ztNom" id="Nom" onblur="verifTexte(this.form, this, 55)" required value="'.$lesInfosPraticien['pNom'].'"></td> </tr>
			<tr>	<th>Pr&eacute;nom</th>									<td>
					<input class="controleLong" type="text" name="ztPrenom" id="prenom" onblur="verifTexte(this.form, this, 25)" value="'.$lesInfosPraticien['pPrenom'].'"></td> </tr>');
			echo ('	
	  		<tr><th>Adresse</th>			<td><input class="controleLong" type="text" name="ztAdresse" value="'.$lesInfosPraticien['pRue'].'"></td> </tr>
			<tr><th>Code postal</th>		<td><input  class="controle" type="text"  pattern="[0-9]{5}" id="Code postal"  name="ztCP" value="'.$lesInfosPraticien['pCP'].'" >'); 
			echo ("
			<a href=\"javascript:openCodesPostaux('ztCP','ztVille');\" title='Trouvez un code postal en France'>
			<img src='images/cp.gif' width='16' height='13' alt='codes postaux' title='S&eacute;l&eacute;ctionnez votre code postal gr&acirc;ce &agrave; www.codes-postaux.org'></a></td> </tr>
			<tr><th>Ville</th>				<td><input class='controleLong' type='text' name='ztVille' value='".$lesInfosPraticien['pVille']."'></td></tr>");
			echo ('	
	  		<tr><th>Coefficient Notoriété</th>	<td><input class="controleLong" type="text" name="ztCoefNotoriete" value="'.$lesInfosPraticien['pCoefNotoriete'].'"></td> </tr>');
			echo ("
			<tr> <th>Type praticien</th>	<td><select name = 'ldrTypePraticien' style='width:200px;'>"); 
			foreach ($lesTypesPraticien as $unTypePraticien)
			{	if($unTypePraticien['tCode']===$lesInfosPraticien['tCode']){$selected = "selected";}	else {$selected = null;}
				echo '
					<option '.$selected.' value="'.$unTypePraticien['tCode'].'">'.$unTypePraticien['tLibelle'].'</option>';
			}  
			echo ("
			</select></td> </tr>	");
			echo ("
			<tr> <th>R&eacute;gion</th>		<td><select name = 'ldrRegion' style='width:200px;'>"); 
			foreach ($lesRegions as $uneRegion)
			{	if($uneRegion['pIndice']===$lesInfosPraticien['region']){$selected = "selected";}	else {$selected = null;}
				echo '
					<option '.$selected.' value="'.$uneRegion['pIndice'].'*'.$uneRegion['pCategorie'].'">'.$uneRegion['pLibelle'].'</option>';
			}  
			echo ("
			</select></td> </tr>	");
			echo ("
		</table>
    </fieldset> ");
	
	} 
?>         
		
			<td style='border: 0px solid white; witdh:130px; text-align:right;'>
				<input type="hidden" 	name="zTypeAdm"		value="<?php if ($_SESSION['statut']==0) {echo ("true");} else {echo ("false");} ?>"> 
				<input type="hidden" 	name="zOk"			value="OK"> 
				<input type="image" 	name="btValider" 	alt="Valider" 	src="images/valider.jpg" value="OK" >
				<input type="image"		name="btAnnuler" 	alt="Annuler" 	src="images/annuler.jpg" value="nonOK" 	onclick="annuler('frmA');"> 
			</td>
			</tr>
		</table>         
    </form>
