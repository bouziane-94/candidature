<!DOCTYPE html>
<html lang="fr">
    <head>
		
        <title>Exercice 8</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        <link rel="stylesheet" href="style.css" />
        
    </head>

    <body>
		
		<strong>Votre candidature</strong>
		
		<table>
			
		   <tr>
				
			<td>
				 
			<?php
			
			$nom = $_GET['nom'];
			
			echo "Nom : " . $nom ;
		 
			?>
			
			</td>
			
		   </tr>
		   
			<br/>
			
		   <tr>
				
			<td>
				 
			<?php
			
			$prenom = $_GET['prenom'];
			
			echo "Prénom : " . $prenom ;
			
			?>
			
			</td>
			
		   </tr>
		 
			<br/>
			
		   <tr>
				
			<td>
				 
			<?php
			
			$civilite = $_GET['civilite'];
			
			echo "Civilite : " . $civilite ;
			
			?>
			
			</td>
			
		   </tr>
			
			
			<br/>
			
		   <tr>
				
			<td>
				 
			<?php
			
			$naissance = $_GET['date'];
			
			echo "Date de Naissance : " . $naissance ;
			
			?>
			
			</td>
			
		   </tr>
			
			<br/>
			
		   <tr>
				
			<td>
				 
			<?php
			
			$tel = $_GET['tel'];
			
			echo "Téléphone : " . $tel ;
			
			?>
			
			</td>
			
		   </tr>
			
			<br/>
			
		   <tr>
				
			<td>
			<?php
			
			$email = $_GET['email'];
			
			echo "Email : " . $email ;
			
			?>
			
			</td>
			
		   </tr>
			
			<br/>
			
		    <tr>
				
			 <td>
				 
			<?php
			
			$niveau = $_GET['niveau'];
			
			echo "Niveau en PHP: " . $niveau ;
			
			?>
			
			 </td>
			
		   </tr>
			
			<br/>
			
		   <tr>
				
			 <td>
				 
			<?php
			
			$framework = $_GET['framework'];
			
			echo "Framework : " . $framework ;
			
			?>
			</td>
			
		   </tr>
			
		 	<br>
		 	
		   <tr>
				
		 	<td>
				
			<?php
			
			$parcours = $_GET['parcours'];
			
			echo "Parcours : " . $parcours ;
			
			?>
		 	
		 	</td>
		 	
		   </tr>
		 	
		</table>
		
	</body>

</html>	
