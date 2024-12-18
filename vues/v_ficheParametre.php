<!-- affichage du détail d'un type de parametre / Dernière modification le 11 avril 2020 par Pascal BLAIN -->
<?php
echo(' 	
	<div id="fiche">
				');
/*==================================================================================================  */
$nbP=count($lesInfosParametre);
echo("		
		<div>
			<fieldset><legend>Parametre</legend>
			<table>
				<tr><th style='width:25px;text-align:center;'><a href='index.php?choixTraitement=param&action=ajouter&type=".$enteteParametre['tlId']."&valeur=NULL'><img title='Ajouter une valeur' src='images/ajout.gif'></a></th><th style='width:25px;'>Code</th><th style='text-align:center;'>Description</th><th style='width:70px;'>Booléen</th><th style='width:70px;'>Choix multiples</th></tr>
				<tr><td>&nbsp;</td><td>".$enteteParametre['tlId']."</td><td>".$enteteParametre['tlLibelle']."</td><td style='text-align:center;'>".$enteteParametre['tlBooleen']."</td><td style='text-align:center;'>".$enteteParametre['tlChoixMultiple']."</td></tr>
			</table>
			</fieldset><br />
			
			<table style='border: 0px solid white;'>
			<tr>
				<td style='border :0px;'>
				<fieldset><legend>Valeurs</legend>
					<table>");
					$numPa=1;
					foreach ($lesInfosParametre as $uneLigne)
					{
						if ($numPa<10)
						{$numPa=$numPa+1;
						$type	=	$choix;
						$indice	=	$uneLigne['pIndice'];

						echo("<tr> <th style='width:20px;text-align:center;'>".$uneLigne['pIndice']."</th>	<td>".$uneLigne['pLibelle']."</td>
								<td style='width:20px;text-align:center;'>");
						
						echo("</td>
								<td style='width:10px;text-align:center;'><a href='index.php?choixTraitement=param&action=modifier&type=".$enteteParametre['tlId']."&valeur=".$uneLigne['pIndice']."'><img src='images/modif.gif'  title='modifier'></a></td>
								<td style='width:10px;text-align:center;'>");
						echo ("						
						<a href='index.php?choixTraitement=param&action=supprimer&type=".$enteteParametre['tlId']."&valeur=".$uneLigne['pIndice']."'><img title='Supprimer' src='images/supprimer.gif'></a>");
						echo ("
						</td></tr>");
						}
					}
					while ($numPa<10)
					{
						echo("<tr> <th style='width:25px;'>&nbsp;</th>					<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td> </tr>");
						$numPa=$numPa+1;
					}
					echo("
					</table>
				</fieldset></td>");
				if ($nbP>=10)
				{				
				echo("	
				<td style='border :0px;'>
				<fieldset><legend>(suite)</legend>
					<table>");
					$numP=1;
					foreach ($lesInfosParametre as $uneLigne)
					{
						if ($numP>=10)
						{
						$type	=	$choix;
						$indice	=	$uneLigne['pIndice'];
						
						echo("<tr> <th style='width:20px;text-align:center;'>".$uneLigne['pIndice']."</th>	<td style='width:140px;'>".$uneLigne['pLibelle']."</td>
								<td style='width:20px;text-align:center;'>");
						
						echo("</td>
								<td style='width:20px;text-align:center;'><a href='index.php?choixTraitement=param&action=modifier&type=".$enteteParametre['tlId']."&valeur=".$uneLigne['pIndice']."'><img src='images/modif.gif'  title='modifier'></a></td>
								<td style='width:20px;text-align:center;'>");
						echo ("
								<a href='index.php?choixTraitement=param&action=supprimer&type=".$enteteParametre['tlId']."&valeur=".$uneLigne['pIndice']."'><img title='Supprimer' src='images/supprimer.gif'></a>");
						echo ("
						</td></tr>");
						}
						$numP=$numP+1;
					}
					if ($numP<10) {$numP=10;}
					while ($numP<19)
					{
						echo("<tr> <th style='width:20px;text-align:center;'>&nbsp;</th>	<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td> </tr>");
						$numP=$numP+1;
					}
					echo("
					</table>
				</fieldset>
				</td>");
				}
			echo("	
			</tr>
			</table>
			<fieldset><legend>Observations</legend>
				<table style='border: 0px solid white;'>
					<tr> 
						 <td>...</td>
					</tr>
				</table>
			</fieldset>			
		</div>
	</div>");				
?>