<!-- Derniere modification le 25 mars 2022 par Pascal Blain -->

<?php
 	if ($_REQUEST['action']=="supprimerE") 
		{ 	echo '<h2>SUPPRESSION DE l\'ECHANTILLON</h2>';
		 	echo '<form name="frmE" action="index.php?choixTraitement=visite&action=validerSupprimerE&lstV='.$UneVisitePraticien['uId']."-".$UneVisitePraticien['vNum'].'" method="post">';} 
 	if ($_REQUEST['action']=="modifierE") 
		{ 	echo '<h2>MODIFICATION DE l\'ECHANTILLON</h2>'; 	
			echo '<form name="frmE" action="index.php?choixTraitement=visite&action=validerModifierE&lstV='.$UneVisitePraticien['uId']."-".$UneVisitePraticien['vNum'].'" method="post">';}
 	if ($_REQUEST['action']=="ajouterE") 
		{ 	echo '<h2>AJOUT D\'UN ECHANTILLON</h2>';
			echo '<form name="frmE" action="index.php?choixTraitement=visite&action=validerAjouterE&lstV='.$UneVisitePraticien['uId']."-".$UneVisitePraticien['vNum'].'" method="post" onsubmit="return valider(this)">';}
	echo ("	
    <fieldset><legend>Visite du ".$UneVisitePraticien['wDateVisite']." chez ".$UneVisitePraticien['pNom']." ".$UneVisitePraticien['pPrenom']."</legend>
		<table>");	
 if ($_REQUEST['action']=="supprimerE")  //-------------------------------------------------------- cas suppression
	{		//<input type='hidden' name='lstMedicaments' value='".$unEchantillon['mDepotLegal']."'></td></tr>
	echo "<tr>
	<td style='border :0px;'>
	<fieldset>	<legend>Médicament</legend>
		<table>
			<tr><th style='width:120px;'>Famille</th>		<td>".$UnEchantillon['fLibelle']."</td></tr>
			<tr><th style='width:120px;'>Médicament</th>	<td>".$UnEchantillon['mNomCommercial']."
			<input type='hidden' name='depot' value='".$UnEchantillon['DepotLegal']."'></td></tr>
			<tr><th style='width:120px;'>Quanté remise</th>	<td>".$UnEchantillon['OFF_QTE']."</td></tr>
		</table>
	</fieldset>
	</td>		
</tr>
	   <tr>
		   <td style='border :0px;'>
		   <fieldset>	<legend>Rapport de visite";
echo ("						</legend>
			   <table>
				   
				   <tr><th>Date de visite</th>				<td>".$UneVisitePraticien['wDateVisite']."</td></tr>
				   <tr><th>Motif</th>						<td>".$UneVisitePraticien['vMotif']."</td>
				   <th>Medicament 1</th>						<td>");
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
				   
				</table>
		   </fieldset>
		   </td>	
		   
	   </tr>
	   </table>
");				
	}
 if ($_REQUEST['action']=="ajouterE")  //-------------------------------------------------------- cas ajout d'un échantillon
	{/*
	 		echo ("
			<tr>
				<td style='border :0px;'>
				<fieldset>	<legend>Médicament</legend>
					<table>
						<tr><th style='width:120px;'>Famille</th>	<td>
						<select name='lstFamilles' style='width:350px;'  onchange='myFunction(this.name, this.value)'>");
							$noF=1;   // 
							if (!isset($_REQUEST['lstFamilles'])) {$choix = 'premier';} else {$choix =$_REQUEST['lstFamilles'];}
							$i=1; 
							foreach ($lesFamilles as $uneLigne) 
							{	
								if($uneLigne['fCode'] == $choix or $choix == 'premier')
									{echo "<option selected value=\"".$uneLigne['fCode']."\">".$uneLigne['fLibelle']." (".$uneLigne['nbM'].")</option>\n	";
									$choix = $uneLigne['fCode'];
									$noF=$i;
									}
								else
									{echo "<option value=\"".$uneLigne['fCode']."\">".$uneLigne['fLibelle']." (".$uneLigne['nbM'].")</option>\n		";
									$i=$i+1;}
							}	           
							echo ("
						</select>
						</td></tr>
						<tr><th style='width:120px;'>Médicament</th>	<td>
						<select name='lstMedicaments' style='width:350px;'>");
							$noM=1;   // 
							if (!isset($_REQUEST['lstMedicaments'])) {$choix = 'premier';} else {$choix =$_REQUEST['lstMedicaments'];}
							$i=1; 
							foreach ($lesMedicaments as $uneLigne) 
							{	
								if($uneLigne['mDepotLegal'] == $choix or $choix == 'premier')
									{echo "<option selected value=\"".$uneLigne['mDepotLegal']."\">".$uneLigne['mNomCommercial']."</option>\n	";
									$choix = $uneLigne['mDepotLegal'];
									$noM=$i;
									}
								else
									{echo "<option value=\"".$uneLigne['mDepotLegal']."\">".$uneLigne['mNomCommercial']."</option>\n		";
									$i=$i+1;}
							}	           
							echo ("
						</select>
						</td></tr>
						<tr><th style='width:120px;'>Quanté remise</th>	<td><input class='controle' type='text' name='ztQuantite'>
						</td></tr>
					</table>
				</fieldset>
				</td>		
			</tr>
			<tr>
				<td style='border :0px;'>
				<fieldset>	<legend>Rapport de visite</legend>
					<table>
						<tr><th style='width:120px;'>Date de visite</th><td>".$lesInfosVisite['wDate']."</td></tr>
						<tr><th>Motif</th>								<td>".$lesInfosVisite['vMotif']."</td>
							<th>medicament 1</th>
							<td>
								BIVALIC
							</td>
						</tr>
						<tr><th>Commentaires</th>						<td>".$lesInfosVisite['vRapport']."</td>
							<th>medicament 2</th>
							<td>
								APATOUX Vitamine C
							</td>
						</tr>
					</table>
				</fieldset>
				</td>					
			</tr> 	
		</table>
    </fieldset>");*/
	
	$nbL=count($lesEchantillons);
	echo ("
			<tr>
				<td style='border :0px;'>
				<fieldset>	<legend>Médicament</legend>
					<table>
						<tr><th style='width:120px;'>Médicament</th>	<td>
						<select name = 'listOff' style='width:200px;'>"); 
			foreach ($LesMedicaments as $unMedicament)
			{	//enlever les medicamment d'eja donné
				$deja=true;
				
				$i = 0;
					while(  $deja=true && $i < $nbL)
					{
						if($unMedicament['mDepotLegal'] ==$lesEchantillons[$i]['DepotLegal'])
						{
							$deja=false;
						}
						$i++;
					}
					
					if($deja=true)
					{
						echo '<option value="'.$unMedicament['mDepotLegal'].'">'.$unMedicament['mNomCommercial'].'</option>';
					}
					
				
			}
			echo ("
			</select>
						</td></tr>
						<tr><th style='width:120px;'>Quanté remise</th>	<td><input class='controle' type='text' name='ztQuantite' >
						</td></tr>
					</table>
				</fieldset>
				</td>		
			</tr>
			<tr>
				<td style='border :0px;'>
				<fieldset>	<legend>Rapport de visite</legend>
					<table>
						<tr><th style='width:120px;'>Date de visite</th><td>".$UneVisitePraticien['wDateVisite']."</td></tr>
						<tr><th>Motif</th>								<td>".$UneVisitePraticien['vMotif']."</td>
							<th>medicament 1</th>
							<td>");
							$nbL=count($LesNomsMedsUneVisite);
							if( $nbL!=0 )
							{echo "".$LesNomsMedsUneVisite['0']['mNomCommercial']."";}
							else
								{echo"        ";}
								
					echo"		</td>
						</tr>
						<tr><th>Commentaires</th>						<td>".$UneVisitePraticien['vRapport']."</td>
							<th>medicament 2</th>
							<td>";
							$nbL=count($LesNomsMedsUneVisite);
							if( $nbL>1 )
							{echo "".$LesNomsMedsUneVisite['1']['mNomCommercial']."";}
							else
								{echo"               ";}
					echo"		</td>
						</tr>
					</table>
				</fieldset>
				</td>					
			</tr> 	
		</table>
    </fieldset>";

	} 		
	
 if ($_REQUEST['action']=="modifierE")	//-------------------------------------------------------- cas modification
	{		
	 		echo ("
			<tr>
				<td style='border :0px;'>
				<fieldset>	<legend>Médicament</legend>
					<table>
						<tr><th style='width:120px;'>Famille</th>		<td>".$UnEchantillon['fLibelle']."</td></tr>
						<tr><th style='width:120px;'>Médicament</th>	<td>".$UnEchantillon['mNomCommercial']."
						<input type='hidden' name='depot' value='".$UnEchantillon['DepotLegal']."'></td></tr>
						<tr><th style='width:120px;'>Quanté remise</th>	<td><input class='controle' type='text' name='ztQuantite' value='".$UnEchantillon['OFF_QTE']."'>
						</td></tr>
					</table>
				</fieldset>
				</td>		
			</tr>
			<tr>
				<td style='border :0px;'>
				<fieldset>	<legend>Rapport de visite</legend>
					<table>
						<tr><th style='width:120px;'>Date de visite</th><td>".$UneVisitePraticien['wDateVisite']."</td></tr>
						<tr><th>Motif</th>								<td>".$UneVisitePraticien['vMotif']."</td>
							<th>medicament 1</th>
							<td>");
							$nbL=count($LesNomsMedsUneVisite);
							if( $nbL!=0 )
							{echo "".$LesNomsMedsUneVisite['0']['mNomCommercial']."";}
							else
								{echo"        ";}
								
					echo"		</td>
						</tr>
						<tr><th>Commentaires</th>						<td>".$UneVisitePraticien['vRapport']."</td>
							<th>medicament 2</th>
							<td>";
							$nbL=count($LesNomsMedsUneVisite);
							if( $nbL>1 )
							{echo "".$LesNomsMedsUneVisite['1']['mNomCommercial']."";}
							else
								{echo"               ";}
					echo"		</td>
						</tr>
					</table>
				</fieldset>
				</td>					
			</tr> 	
		</table>
    </fieldset>";
	
	} 
?>         	
			<td style='border: 0px solid white; witdh:130px; text-align:right;'>
				<input type="hidden" 	name="zTypeAdm"		value="<?php if ($_SESSION['statut']==0) {echo ("true");} else {echo ("false");} ?>"> 
				<input type="hidden" 	name="ztVisiteur"	value="<?php echo $UneVisitePraticien['uId']; ?>">
				<input type="hidden" 	name="lstVisites"	value="<?php echo $UneVisitePraticien['vNum']; ?>">
				<input type="hidden" 	name="zOk"			value="OK">
				<input type="image" 	name="btValider" 	alt="Valider" 	src="images/valider.jpg" value="OK" >
				<input type="image"		name="btAnnuler" 	alt="Annuler" 	src="images/annuler.jpg" value="nonOK" 	onclick="annuler('frmE');"> 
			</td>
			</tr>
		</table>         
    </form>
<script type="text/javascript">
  // Mon code Javascript
function  myFunction(liste, choix)
	{
<?php	 
	  echo substr ($script,0 ,strlen($script)-1).");\n";
?>	  
	  for (i=document.forms["frmE"].elements["lstMedicaments"].length; i>=0; i--)
	  {document.forms["frmE"].elements["lstMedicaments"].options[i]=null;}
	  //document.forms["frmE"].elements["lstMedicaments"].options.length=0;
	  var option=0;
	  for (var i = 0; i < lesMedicaments.length; i++) 
		{
		if (lesMedicaments[i][2]==choix) 
			{		
				document.forms["frmE"].elements["lstMedicaments"].options[option]=new Option(lesMedicaments[i][1],lesMedicaments[i][0]);
				option++;
			}
		}
	}
function raz(liste)
	{l=document.formu.elements[liste].length;
	for (i=l; i>=0; i--)
	   document.formu.elements[liste].options[i]=null;
	}
</script>