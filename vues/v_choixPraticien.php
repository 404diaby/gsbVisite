<!-- choix d'un praticien / Derniere modification le 19 avril 2020 par Pascal Blain -->
<?php
	$nbL=count($lesLignes); 
	echo ' 
	<form name="choixP" action="index.php?choixTraitement=praticien&action=voir" method="post">
	<h2>'.$titre; ?>
	        <select name="lstPraticiens" STYLE="width:350px;" onchange="submit();">
	            <?php 
				$noL=1;   // ?
	            if (!isset($_REQUEST['lstPraticiens'])) {$choix = 'premier';} else {$choix =$_REQUEST['lstPraticiens'];}
	            $i=1; 
	            foreach ($lesLignes as $uneLigne) 
				{	
					if($uneLigne['pNum'] == $choix or $choix == 'premier')
						{echo "<option selected value=\"".$uneLigne['pNum']."\">".$uneLigne['pNom']." ".$uneLigne['pPrenom']." (".$uneLigne['nbVisites']." visites)</option>\n	";
						$choix = $uneLigne['pNum'];
						$noL=$i;
						}
					else
						{echo "<option value=\"".$uneLigne['pNum']."\">".$uneLigne['pNom']." ".$uneLigne['pPrenom']." (".$uneLigne['nbVisites']." visites)</option>\n		";
						$i=$i+1;}
				}	           
			    echo '   
	        </select>			
			</h2>'
?>
	        <!-- ============================================================== navigation dans la liste -->
	        <div id='navigation'>
		        <input type="image"		id="zNouveau" 	title="Ajouter" 	src="images/ajout.gif" 		onclick="faire('choixP', 'ajouter')">
                <input type="image"		id="zModif" 	title="Modifier" 	src="images/modif.gif" 		onclick="faire('choixP', 'modifier')">
                <input type="image"		id="zSupprime" 	title="Supprimer"	src="images/supprimer.gif" 	onclick="faire('choixP', 'supprimer')">&nbsp;&nbsp;
                <input type="image"		id="zPremier" 	title="premier" 	src="images/goPremier.gif" 	onclick="premier('choixP','lstPraticiens')">    
		        <input type="image" 	id="zPrecedent" title="pr&eacute;c&eacute;dent" src="images/goPrecedent.gif" onclick="precedent('choixP','lstPraticiens')"> 
<?php echo '	
				<input type="text" 	id="zNumero" value="'.$noL.'/'.$nbL.'" disabled="true" size="5" style="text-align:center;vertical-align:top;">'; ?>
		        <input type="image" 	id="zSuivant" 	title="suivant" 	src="images/goSuivant.gif" 	onclick="suivant('choixP','lstPraticiens')">    
		        <input type="image"	id="zDernier" 		title="dernier" 	src="images/goDernier.gif" 	onclick="dernier('choixP','lstPraticiens')">    
		    </div>
            <input type="hidden"		name="action"	value="<?php if($_REQUEST['action']=="liste") {echo "voir";} else {echo $_REQUEST['action'];}?>">
            <input type="hidden"		name="type" 	value="*">
        	<input type="hidden"		name="zType"	value="*">
        	<input type="hidden"		name="zIndice"	value="*">
            <input type="hidden"		name="zColonne"	value="*">
	</form>
<!-- fin liste de choix -->
