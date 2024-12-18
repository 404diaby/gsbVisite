<!-- choix d'un praticien / Derniere modification le 19 avril 2020 par Pascal Blain -->
<?php
	$nbL=count($lesLignes);
	
	echo ' 
	<form name="choixV" action="index.php?choixTraitement=visite&action=voir" method="post">
	<h2>'.$titre; ?>
	        <select name="lstV" STYLE="width:350px;" onchange="submit();">
	            <?php 
				$noL=1;   // ?
	            if (!isset($_REQUEST['lstV'])) {$choix = 'premier';} else {$choix =$_REQUEST['lstV'];}
	            $i=1; 
	            foreach ($lesLignes as $uneLigne) 
				{	
					if($uneLigne['vNum'] == $choix or $choix == 'premier')
						{echo "<option selected value=\"".$uneLigne['uId']."-".$uneLigne['vNum']."\">".$uneLigne['vDate']." ".$uneLigne['pNom']." ".$uneLigne['pPrenom']."</option>\n	";
						
						$choix = $uneLigne['uId'];
						$choix2 = $uneLigne['vNum'];
						$noL=$i;
						}
					else
						{echo "<option value=\"".$uneLigne['vNum']."\">".$uneLigne['vDate']." ".$uneLigne['pNom']." ".$uneLigne['pPrenom']."</option>\n		";
						$i=$i+1;}
				}	           
			    echo '   
	        </select>			
			</h2>';
			//echo $choix."-".$choix2;
?>
	        <!-- ============================================================== navigation dans la liste -->
	        <div id='navigation'>
		        <input type="image"		id="zNouveau" 	title="Ajouter" 	src="images/ajout.gif" 		onclick="faire('choixV', 'ajouter')">
                <input type="image"		id="zModif" 	title="Modifier" 	src="images/modif.gif" 		onclick="faire('choixV', 'modifier')">
                <input type="image"		id="zSupprime" 	title="Supprimer"	src="images/supprimer.gif" 	onclick="faire('choixV', 'supprimer')">&nbsp;&nbsp;
                <input type="image"		id="zPremier" 	title="premier" 	src="images/goPremier.gif" 	onclick="premier('choixV','lstV')">    
		        <input type="image" 	id="zPrecedent" title="pr&eacute;c&eacute;dent" src="images/goPrecedent.gif" onclick="precedent('choixV','lstV')"> 
<?php echo '	
				<input type="text" 	id="zNumero" value="'.$noL.'/'.$nbL.'" disabled="true" size="5" style="text-align:center;vertical-align:top;">'; ?>
		        <input type="image" 	id="zSuivant" 	title="suivant" 	src="images/goSuivant.gif" 	onclick="suivant('choixV','lstV')">    
		        <input type="image"	id="zDernier" 		title="dernier" 	src="images/goDernier.gif" 	onclick="dernier('choixV','lstV')">    
		    </div>
            <input type="hidden"		name="action"	value="<?php if($_REQUEST['action']=="liste") {echo "voir";} else {echo $_REQUEST['action'];}?>">
            <input type="hidden"		name="type" 	value="*">
        	<input type="hidden"		name="zType"	value="*">
        	<input type="hidden"		name="zIndice"	value="*">
            <input type="hidden"		name="zColonne"	value="*">
	</form>
<!-- fin liste de choix -->
