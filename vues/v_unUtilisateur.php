<!-- Derniere modification le 11 avril 2020 par Pascal Blain -->

<?php
 	if ($_REQUEST['action']=="supprimer") 
		{ 	echo '<h2>SUPPRESSION DE L\'UTILISATEUR '.$lesInfosUtilisateur['uNom'].' '.$lesInfosUtilisateur['uPrenom'].'</h2>';
		 	echo '<form name="frmA" 	action="index.php?choixTraitement=utilisateur&action=validerSupprimer&utilisateur='.$lesInfosUtilisateur['uId'].'" method="post">';} 
 	if ($_REQUEST['action']=="modifier") 
		{ 	echo '<h2>MODIFICATION DE L\'UTILISATEUR '.$lesInfosUtilisateur['uNom'].' '.$lesInfosUtilisateur['uPrenom'].'</h2>'; 	
			echo '<form name="frmA" 	action="index.php?choixTraitement=utilisateur&action=validerModifier&utilisateur='.$lesInfosUtilisateur['uId'].'" method="post">';}
 	if ($_REQUEST['action']=="ajouter") 
		{ 	echo "<h2>AJOUT D'UN NOUVEL UTILISATEUR</h2>";
			echo '
			<form name="frmA" 	action="index.php?choixTraitement=utilisateur&action=validerAjouter" method="post" onsubmit="return valider(this)">';}
	echo ("	
    <fieldset><legend>Coordonn&eacute;es</legend>
		<table>");	
 if ($_REQUEST['action']=="supprimer")  //-------------------------------------------------------- cas suppression
	{		echo ("
			<tr><th style='width:120px;'>Nom</th>	<td>".$lesInfosUtilisateur['uNom']."</td> </tr>
			<tr><th>Pr&eacute;nom</th>				<td>".$lesInfosUtilisateur['uPrenom']."</td> </tr>
			<tr><th>Adresse</th>					<td>".$lesInfosUtilisateur['uAdresse']."</td> </tr>
			<tr><th>Code postal</th>				<td>".$lesInfosUtilisateur['uCP']."</td> </tr>
			<tr><th>Ville</th>						<td>".$lesInfosUtilisateur['uVille']."</td></tr>					
			<tr><th>Statut</th>						<td>".$lesInfosUtilisateur['wStatut']."</td> </tr>
			<tr><th>Nom de compte</th>				<td>".$lesInfosUtilisateur['uLogin']."</td></tr>
        </table>
    </fieldset>
	<table style='border: 0px solid white; '>
			<tr>
			<td style='border: 0px solid white;'>
				<fieldset><legend>Laboratoire</legend>
				<textarea name='ztObs' cols='70' rows='1'>".$lesInfosUtilisateur['lNom']."</textarea>
				</fieldset>
			</td>");	
	}
 if ($_REQUEST['action']=="ajouter")  //-------------------------------------------------------- cas ajout
	{
	 		echo ('
			<tr><th style="width:120px;">Nom</th><td>
				<input class="controleLong" type="text" name="ztNom" id="Nom" onblur="verifTexte(this.form, this, 55)" required></td>
			</tr>
			<tr><th>Pr&eacute;nom</th>									<td>
				<input class="controleLong" type="text" name="ztPrenom" id="prenom" onblur="verifTexte(this.form, this, 25)"></td> </tr>');
			echo ('	
	  		<tr><th>Adresse</th>			<td><input class="controleLong" type="text" name="ztAdresse"></td> </tr>
			<tr><th>Code postal</th>		<td><input  class="controle" type="text"  pattern="[0-9]{5}" id="Code postal"  name="ztCP">'); 
			echo ("
			<a href=\"javascript:openCodesPostaux('ztCP','ztVille');\" title='Trouvez un code postal en France'>
			<img src='images/cp.gif' width='16' height='13' alt='codes postaux' title='S&eacute;l&eacute;ctionnez votre code postal gr&acirc;ce &agrave; www.codes-postaux.org'></a></td> </tr>
			<tr><th>Ville</th>				<td><input class='controleLong' type='text' name='ztVille'></td></tr>
			<tr> <th>Statut</th>			<td><select name = 'ldrStatut' style='width:200px;'>"); 
			foreach ($lesStatuts as $unStatut)
			{	if($unStatut['pIndice']===$lesInfosUtilisateur['uStatut']){$selected = "selected";}	else {$selected = null;}
				echo '
					<option '.$selected.' value="'.$unStatut['pIndice'].'">'.$unStatut['pLibelle'].'</option>';
			}
			echo ("
			</select></td> </tr> 
			<tr><th>Nom de compte</th>					<td>
				<input class='controleLong' type='text' name='ztLogin' id='Nom de compte' onblur='verifTexte(this.form, this, 15)'></td></tr>");
			echo ("
			<tr><th>Mot de passe </th>					<td><input type='hidden' name='brMdp' value='0'>
				<input class='controleLong' type='text' name='ztMdp' id='Mot de passe'></td></tr>
			<tr> <th>R&eacute;gion</th>			<td>
			<select name = 'ldrRegion' style='width:200px;'>"); 
			foreach ($lesRegions as $uneRegion)
			{	if($uneRegion['pIndice']===$lesInfosUtilisateur['uRegion']){$selected = "selected";}
				else {$selected = null;}
				echo '
					<option '.$selected.' value="'.$uneRegion['pIndice'].'*'.$uneRegion['pCategorie'].'">'.$uneRegion['pLibelle'].'</option>';
			}
			echo ("
			</select></td> </tr>	
		</table>
    </fieldset>
	<table style='border: 0px solid white; '>
			<tr>
			<td style='border: 0px solid white;'>
				<fieldset><legend>Laboratoire</legend>
				<select name = 'ldrLabo' style='width:200px;'>"); 
			foreach ($lesLabos as $unLabo)
			{	if($unLabo['lCode']===$lesInfosUtilisateur['uLabo']){$selected = "selected";}	else {$selected = null;}
				echo '
					<option '.$selected.' value="'.$unLabo['lCode'].'">'.$unLabo['lNom'].'</option>';
			}
				echo ("
				</select></td> </tr>	
	</table>");
			
	}
 if ($_REQUEST['action']=="modifier")	//------------------------------------------------------------------------------------ cas modification
	{		
	 		echo ('
			<tr>	<th style="width:120px;">Nom</th>			<td>
					<input class="controleLong" type="text" name="ztNom" id="Nom" onblur="verifTexte(this.form, this, 55)" required value="'.$lesInfosUtilisateur['uNom'].'"></td> </tr>
			<tr>	<th>Pr&eacute;nom</th>									<td>
					<input class="controleLong" type="text" name="ztPrenom" id="prenom" onblur="verifTexte(this.form, this, 25)" value="'.$lesInfosUtilisateur['uPrenom'].'"></td> </tr>');
			echo ('	
	  		<tr><th>Adresse</th>			<td><input class="controleLong" type="text" name="ztAdresse" value="'.$lesInfosUtilisateur['uAdresse'].'"></td> </tr>
			<tr><th>Code postal</th>		<td><input  class="controle" type="text"  pattern="[0-9]{5}" id="Code postal"  name="ztCP" value="'.$lesInfosUtilisateur['uCP'].'" >'); 
			echo ("
			<a href=\"javascript:openCodesPostaux('ztCP','ztVille');\" title='Trouvez un code postal en France'>
			<img src='images/cp.gif' width='16' height='13' alt='codes postaux' title='S&eacute;l&eacute;ctionnez votre code postal gr&acirc;ce &agrave; www.codes-postaux.org'></a></td> </tr>
			<tr><th>Ville</th>				<td><input class='controleLong' type='text' name='ztVille' value='".$lesInfosUtilisateur['uVille']."'></td></tr>");
			
			echo ("
			<tr> <th>Statut</th>			<td><select name = 'ldrStatut' style='width:200px;'>"); 
			foreach ($lesStatuts as $unStatut)
			{	if($unStatut['pIndice']===$lesInfosUtilisateur['uStatut']){$selected = "selected";}	else {$selected = null;}
				echo '
					<option '.$selected.' value="'.$unStatut['pIndice'].'">'.$unStatut['pLibelle'].'</option>';
			}
			echo ("
			</select></td> </tr> 
			<tr><th>Nom de compte</th>					<td>
				<input class='controleLong' type='text' name='ztLogin' id='Nom de compte' onblur='verifTexte(this.form, this, 15)'  value='".$lesInfosUtilisateur['uLogin']."'></td></tr>
			<tr><th>Nouveau mot de passe ?</th>			<td><input type='radio' name='brMdp' value='0' checked>Non <input type='radio' name='brMdp' value='1'>Oui
				<input class='controleLong' type='text' name='ztMdp' id='Mot de passe'></td></tr>
			<tr> <th>R&eacute;gion</th>			<td><select name = 'ldrRegion' style='width:200px;'>"); 
			foreach ($lesRegions as $uneRegion)
			{	if($uneRegion['pIndice']===$lesInfosUtilisateur['uRegion']){$selected = "selected";}	else {$selected = null;}
				echo '
					<option '.$selected.' value="'.$uneRegion['pIndice'].'*'.$uneRegion['pCategorie'].'">'.$uneRegion['pLibelle'].'</option>';
			}
			echo ("
			</select></td> </tr>	
		</table>
    </fieldset>
	<table style='border: 0px solid white; '>
			<tr>
			<td style='border: 0px solid white;'>
				<fieldset><legend>Laboratoire</legend>
				<select name = 'ldrLabo' style='width:200px;'>"); 
			foreach ($lesLabos as $unLabo)
			{	if($unLabo['lCode']===$lesInfosUtilisateur['uLabo']){$selected = "selected";}	else {$selected = null;}
				echo '
					<option '.$selected.' value="'.$unLabo['lCode'].'">'.$unLabo['lNom'].'</option>';
			}
				echo ("
				</select></td> </tr>	
	</table>");
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
