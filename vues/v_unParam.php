<!-- Derniere modification le 9 avril 2020 par Pascal Blain -->

<?php
 	if ($action==="supprimer") 
		{echo '<h2>SUPPRESSION DE LA VALEUR D\'UN PARAMETRE</h2>';
		 echo "<form name='frmParam' action='index.php?choixTraitement=param&action=validerSupprimer&type=".$infosParam['pType']."&valeur=".$infosParam['pIndice']."' method='post'>";} 
	if ($action==="modifier") 
		{echo '<h2>MODIFICATION DE LA VALEUR D\'UN PARAMETRE</h2>';
		 echo "<form name='frmParam' action='index.php?choixTraitement=param&action=validerModifier&type=".$infosParam['pType']."&valeur=".$infosParam['pIndice']."' method='post'>";}
	if ($action==="ajouter") 
		{echo '<h2>AJOUT DE LA VALEUR D\'UN PARAMETRE</h2>';
		 echo "<form name='frmParam' action='index.php?choixTraitement=param&action=validerAjouter&type=".$infosParam['pType']."' method='post'>";}
?>	
<!-- Affichage des valeurs dans un tableau r&eacute;capitulatif.  -->
        <div>
            <table style='border: 0px solid white;'>
            <tr><td style='border :0px;'>
                <fieldset><legend><?php echo $infosParam['tlLibelle'] ?></legend>
<?php
if ($infosParam['pType']==="secteur")
{
echo ("			<table>
                        <tr> <th>Indice</th>			<td>");

						if ($_REQUEST['action']==="ajouter") {echo "<input class='controle' type='text' name='valeur' value='".$infosParam['pIndice']."'>";}
						else {echo $infosParam['pIndice'];}  
echo ("				</td> </tr>
                        <tr> <th>Valeur</th>			<td>");
						if ($_REQUEST['action']==="ajouter") {echo "<input class='controleLong' type='text' name='zLibelle'>";}
						if ($_REQUEST['action']==="modifier") {echo "<input class='controleLong' type='text' name='zLibelle' value='".$infosParam['pLibelle']."'>";}
						if ($_REQUEST['action']==="supprimer") {echo $infosParam['pLibelle'];}
echo ("				</td> </tr>
	  					<tr> <th>Territoire</th>		<td>");
						if ($_REQUEST['action']==="ajouter") {echo "<input class='controle' type='text' name='zTerritoire'>";}
						if ($_REQUEST['action']==="modifier") {echo "<input class='controle' type='text' name='zTerritoire' value='".$infosParam['territoire']."'>";}
						if ($_REQUEST['action']==="supprimer") {echo $infosParam['territoire'];}
echo ("				</td> </tr>
	  					<tr> <th>D&eacute;partement</th>	<td>");
						if ($_REQUEST['action']==="ajouter") {echo "<input class='controle' type='text' name='zDep'>";}
						if ($_REQUEST['action']==="modifier") {echo "<input class='controle' type='text' name='zDep' value='".$infosParam['dep']."'>";}
						if ($_REQUEST['action']==="supprimer") {echo $infosParam['dep'];}
echo ("				</td> </tr>
	  					<INPUT type='hidden' name='choixOrientation' value='0'>
						<INPUT type='hidden' name='zPlancher' 	value='0'>
						<INPUT type='hidden' name='zPlafond' 	value='0'>
                    </table>");
}
else
{
echo ("			<table>
                        <tr> <th>Indice</th>			<td>");
						if ($action==="ajouter") {echo "<input class='controle' type='text' name='valeur' value='".$infosParam['pIndice']."'>";}
						else {echo $infosParam['pIndice'];}  
echo ("				</td> </tr>
                        <tr> <th>Valeur</th>			<td>");
						if ($action==="ajouter") 		{echo "<input class='controle' type='text' name='zLibelle'>";$actif=null;}
						if ($action==="modifier") 	{echo "<input class='controleLong' type='text' name='zLibelle' value='".$infosParam['pLibelle']."'>";$actif=null;}
						if ($action==="supprimer") 	{echo $infosParam['pLibelle'];$actif="disabled='disabled'";}  
echo ("				</td> </tr>");
						if($infosParam['pType'] === "motifSo")		
							{ 
								echo ("<tr> <th>R&eacute;orientation </th>			<td>");
								if($infosParam['pPlancher'] == 1)
									{echo ("
									<INPUT type='radio' 	name='choixOrientation' value='1' ".$actif." checked>oui 
									<INPUT type='radio' 	name='choixOrientation' value='0' ".$actif.">Non</td> </tr>");}
								else
									{echo ("
									<INPUT type='radio' 	name='choixOrientation' value='1' ".$actif.">oui 
									<INPUT type='radio' 	name='choixOrientation' value='0' ".$actif." checked>Non</td> </tr>");}
echo ("							<INPUT type='hidden' name='zPlancher'	value='0'>
									<INPUT type='hidden' name='zPlafond' 	value='0'>");
							} 
						else
							{ echo ("
	  					<tr> <th>Plancher</th>			<td><input class='controle' type='text' name='zPlancher' value='".$infosParam['pPlancher']."'></td> </tr>						
						<tr> <th>Plafond</th>			<td><input class='controle' type='text' name='zPlafond' value='".$infosParam['pPlafond']."'></td> </tr>");}
echo ("
	  				</table>
					<input type='hidden' name='zTerritoire' value='NULL'><input type='hidden' name='zDep' value='NULL'>");
} ?>
                </fieldset>
                </td>	
            </tr>
            </table>
        </div>

        <p align="right">
            <input type="hidden" 	name="zOk" value="OK">
            <input type="image" 	name="btValider" alt="Valider" src="images/valider.jpg"  	onclick="this.form.submit();">
            <input type="image" 	name="btAnnuler" alt="Annuler" src="images/annuler.jpg" 	onclick="annuler('frmParam');">
        </p>   
    </form>
</div>