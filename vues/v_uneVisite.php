<!-- Derniere modification le 15 avril 2020 par Guy Mehl -->

<?php
 	if ($_REQUEST['action']=="supprimer") 
		{ 	echo '<h2>SUPPRESSION DE LA VISITE DU '.$UneVisitePraticien['wDateVisite'].' CHEZ '.$UneVisitePraticien['pNom'].' '.$UneVisitePraticien['pPrenom'].'</h2>';
		 	echo '<form name="frmA" 	action="index.php?choixTraitement=visite&action=validerSupprimer&lstV='.$UneVisitePraticien['uId']."-".$UneVisitePraticien['vNum'].'" method="post">';} 
 	if ($_REQUEST['action']=="modifier") 
		{ 	echo '<h2>MODIFICATION DE LA VISITE DU '.$UneVisitePraticien['wDateVisite'].' CHEZ '.$UneVisitePraticien['pNom'].' '.$UneVisitePraticien['pPrenom'].'</h2>'; 	
			echo '<form name="frmA" 	action="index.php?choixTraitement=visite&action=validerModifier&lstV='.$UneVisitePraticien['uId']."-".$UneVisitePraticien['vNum'].'&lstP='.$choix.'" method="post">';}
 	if ($_REQUEST['action']=="ajouter") 
		{ 	echo "<h2>AJOUT D'UNE NOUVELLE VISITE </h2>";
			echo '
			<form name="frmA" 	action="index.php?choixTraitement=visite&action=validerAjouter&lstV='.$UneVisitePraticien['uId']."-".$UneVisitePraticien['vNum'].'" method="post" onsubmit="return valider(this)">';}
	/*echo ("	
    <fieldset><legend>Visite</legend>
		<table style='border: 0px solid white;'>");	*/
 if ($_REQUEST['action']=="supprimer")  //-------------------------------------------------------- cas suppression
	{		
		echo ('<fieldset><legend>Coordonnée du praticien</legend>
		<table style="border: 0px solid white;">
		<tr>	<th style="width:120px;">Nom/Pr&eacute;nom</th>			
				<td>'.$UneVisitePraticien['pNom'].' '.$UneVisitePraticien['pPrenom'].'</td> </tr>
			');
		echo ('	
		  <tr><th>Adresse</th>			
				  <td>'.$UneVisitePraticien['pRue'].'</td> </tr>
		<tr><th>Code postal/Ville</th>		
				<td>'.$UneVisitePraticien['pCP'].' '.$UneVisitePraticien['pVille']); 
		echo ("
		</td> </tr>
			");
		
		echo ("
	</table>
</fieldset> ");


echo ("		<fieldset>	<legend>Rapport de visite
				</legend>
		   <table>
			   
			<tr>
				   <th>Date de visite</th>				
					<td>".$UneVisitePraticien['wDateVisite']."</td>
			</tr>
			<tr>
				<th>Motif</th>						
					<td>".$UneVisitePraticien['vMotif']."</td>
				<th>Medicament 1</th>				
					<td>");
					$nbL=count($LesNomsMedsUneVisite);
					if( $nbL!=0 )
					{echo "".$LesNomsMedsUneVisite['0']['mNomCommercial']."";}
					else
						{echo"        ";}
						echo"</td></tr>
					<tr><th>Commentaire</th>				<td>".$UneVisitePraticien['vRapport']."</td>
					<th>Medicament 2</th>						<td>
					";
					$nbL=count($LesNomsMedsUneVisite);
					if( $nbL>1 )
					{echo "".$LesNomsMedsUneVisite['1']['mNomCommercial']."";}
					else
						{echo"               ";}
 echo ("					   </td></tr>
			   ");
echo ("			</table>
	   </fieldset>");


				
	}
 if ($_REQUEST['action']=="ajouter")  //-------------------------------------------------------- cas ajout
	{
		$date = (new \DateTime())->format('Y-m-d');

	 	//problème sur afichage du nombre de visite sur chaque praticien
		
	echo' <table style="border: 0px solid white;">
		<tr><td><fieldset><legend>Choix du praticien</legend>
	<table style="border: 0px solid white;">
		<tr><th>Nom/Pr&eacute;nom</th>	<td>
			<select name="lstPraticiens" STYLE="width:350px;">';

		$noL=1;   // ?
		if (!isset($_REQUEST['lstPraticiens'])) {$choix = 'premier';} else {$choix =$_REQUEST['lstPraticiens'];}
		$i=1; 
		foreach ($lesLignes as $uneLigne) 
		{	
			if($uneLigne['pNum'] == $choix or $choix == 'premier')
				{echo "<option selected value=".$uneLigne['pNum'].">".$uneLigne['pNom']." ".$uneLigne['pPrenom']." (".$uneLigne['nbVisites']." visites)</option>\n	";
				$choix = $uneLigne['pNum'];
				$noL=$i;
				}
			else
				{echo "<option value=".$uneLigne['pNum'].">".$uneLigne['pNom']." ".$uneLigne['pPrenom']." (".$uneLigne['nbVisites']." visites)</option>\n		";
				$i=$i+1;}
		}	   
			echo ("
			</select></td> </tr> 	
		</table>
    </fieldset>");
	echo ("	
	
		<table style='border: 0px solid white;'>
	   <tr>
		   <td style='border :0px;'>
		   <fieldset>	<legend>Rapport de visite");
echo ("						</legend>
			   <table>
				   
				   <tr><th>Date de visite</th>				<td><input class='' type='text' name='ztDate' id='date' onblur='verifTexte(this.form, this, 25)' value='$date'></td></tr>
				   <tr><th>Motif</th>						<td>
				   <select name = 'lstMotif' style='width:200px;'>"); 
			foreach ($lesMotifs as $unMotif)
			{	
				echo '
					<option  value="'.$unMotif['pIndice'].'">'.$unMotif['pLibelle'].'</option>';
			}  
			echo ("
			</select>
				   </td><th>Medicament 1</th>						
				   <td>
				   <select name = 'listMed' style='width:200px;'>"); 
			foreach ($LesMedicaments as $unMedicamment)
			{	echo '<option value="'.$unMedicamment['mDepotLegal'].'">'.$unMedicamment['mNomCommercial'].'</option>';
			}  
			echo ("
			</select>
				   </td></tr>
				   <tr><th>Commentaire</th>				
				   <td><input class='' type='text' name='ztRapport' id='rapport' onblur='verifTexte(this.form, this, 25)' placeholder='Entrer votre rapport'></td>
				   <th>Medicament 2</th>						
				   <td>
				   <select name = 'listMedBis' style='width:200px;'>"); 
			foreach ($LesMedicaments as $unMedicamment)
			{	echo '<option value="'.$unMedicamment['mDepotLegal'].'">'.$unMedicamment['mNomCommercial'].'</option>';
			}  
			echo ("
			</select>
				   </td></tr>
				   ");
echo ("				</table>
		   </fieldset>
		   </td>	
		   
	   </tr>
	   </table>
	   </td></tr></table>
	   </fieldset>
");				
	} 
			
	
 if ($_REQUEST['action']=="modifier")	//------------------------------------------------------------------------------------ cas modification
	{		
	
	 		echo ('<fieldset><legend>Coordonnée du praticien</legend>
		<table style="border: 0px solid white;">	
			<tr>	<th style="width:120px;">Nom/Pr&eacute;nom</th>			
					<td>'.$UneVisitePraticien['pNom'].' '.$UneVisitePraticien['pPrenom'].'</td> </tr>
			    ');
			echo ('	
	  		<tr><th>Adresse</th>			
			  		<td>'.$UneVisitePraticien['pRue'].'</td> </tr>
			<tr><th>Code postal/Ville</th>		
					<td>'.$UneVisitePraticien['pCP'].' '.$UneVisitePraticien['pVille']); 
			echo ("
			</td> </tr>
				");
			
			echo ("
		</table>
    </fieldset> ");


echo ("		<fieldset>	<legend>Rapport de visite
					</legend>
			   <table>
				   
				<tr>
				   	<th>Date de visite</th>				
						<td><input class='controleLong' type='text' name='ztDate' id='Date' onblur='verifTexte(this.form, this, 55)' required value='".$UneVisitePraticien['wDateVisite']."'></td>
				</tr>
				<tr>
					<th>Motif</th>						
						<td>
						<select name = 'lstMotif' style='width:200px;'>"); 
			foreach ($lesMotifs as $unMotif)
			{	if($unMotif['pIndice']===$UneVisitePraticien['pIndice']){$selected = "selected";} else {$selected = null;}
				echo '
					<option '.$selected.' value="'.$unMotif['pIndice'].'">'.$unMotif['pLibelle'].'</option>';
			}  
			echo ("
			</select>
						</td>
					<th>Medicament 1</th>				
						<td>
						<select name = 'listMed' style='width:200px;'>"); 
			foreach ($LesMedicaments as $unMedicamment)
			{	if($unMedicamment['mDepotLegal']===$Medicament){$selected = "selected";} else {$selected = null;}
				echo '
					<option '.$selected.' value="'.$unMedicamment['mDepotLegal'].'">'.$unMedicamment['mNomCommercial'].'</option>';
			}  
			echo ("
			</select>
						</td>
					</tr>
				<tr>
					<th>Commentaire</th>				
						<td>
						<input class='controleLong' type='text' name='ztRapport' id='Rapport' onblur='verifTexte(this.form, this, 55)' required value='".$UneVisitePraticien['vRapport']."'>
						</td>
					<th>Medicament 2</th>						

						<td>
						<select name = 'listMedBis' style='width:200px;'>"); 
			foreach ($LesMedicaments as $unMedicamment)
			{	if($unMedicamment['mDepotLegal']===$Medicament2){$selected = "selected";} else {$selected = null;}
				echo '
					<option '.$selected.' value="'.$unMedicamment['mDepotLegal'].'">'.$unMedicamment['mNomCommercial'].'</option>';
			}  
			echo ("
			</select>
						</td>
				</tr>
				   ");
echo ("			</table>
		   </fieldset>");
		
	
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
