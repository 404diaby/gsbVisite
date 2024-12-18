<!-- choix d'un utilisateur / Derniere modification le 9 avril 2020 par Pascal Blain -->
<?php
	$nbL=count($lesLignes); 
	echo ' 
	<form name="choixP" action="index.php?choixTraitement=utilisateur&action=voir" method="post">
	<h2>'.$titre; ?>
	        <select name="lstUtilisateurs" STYLE="width:350px;" onchange="submit();">
	            <?php 
	            if (!isset($_REQUEST['lstUtilisateurs'])) {$choix = 'premier';} else {$choix =$_REQUEST['lstUtilisateurs'];}
	            $i=1; 
	            foreach ($lesLignes as $uneLigne) 
				{	
					if($uneLigne['uId'] == $choix or $choix == 'premier')
						{echo "<option selected value=\"".$uneLigne['uId']."\">".$uneLigne['uNom']." ".$uneLigne['uPrenom']."</option>\n	";
						$choix = $uneLigne['uId'];
						$noL=$i;
						}
					else
						{echo "<option value=\"".$uneLigne['uId']."\">".$uneLigne['uNom']." ".$uneLigne['uPrenom']."</option>\n		";
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
                <input type="image"		id="zPremier" 	title="premier" 	src="images/goPremier.gif" 	onclick="premier('choixP','lstUtilisateurs')">    
		        <input type="image" 	id="zPrecedent" title="pr&eacute;c&eacute;dent" src="images/goPrecedent.gif" onclick="precedent('choixP','lstUtilisateurs')"> 
<?php echo '	
				<input type="text" 	id="zNumero" value="'.$noL.'/'.$nbL.'" disabled="true" size="5" style="text-align:center;vertical-align:top;">'; ?>
		        <input type="image" 	id="zSuivant" 	title="suivant" 	src="images/goSuivant.gif" 	onclick="suivant('choixP','lstUtilisateurs')">    
		        <input type="image"	id="zDernier" 		title="dernier" 	src="images/goDernier.gif" 	onclick="dernier('choixP','lstUtilisateurs')">    
		    </div>
            <input type="hidden"		name="action"	value="<?php if($_REQUEST['action']=="liste") {echo "voir";} else {echo $_REQUEST['action'];}?>">
            <input type="hidden"		name="type" 	value="*">
        	<input type="hidden"		name="zType"	value="*">
        	<input type="hidden"		name="zIndice"	value="*">
            <input type="hidden"		name="zColonne"	value="*">
	</form>
<!-- fin liste de choix -->
