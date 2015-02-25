<?php


function verifCarte ($numeroCarte, &$numeroErreur, &$texteErreur) {

 
  
  $cartes = array (  array ('name' => 'American Express', 
                          'length' => '15', 
                          'prefixes' => '34,37',               
                         ),
                   
                   array ('name' => 'MasterCard', 
                          'length' => '16', 
                          'prefixes' => '51,52,53,54,55',
                         ),
                  
                   array ('name' => 'VISA', 
                          'length' => '16', 
                          'prefixes' => '4',
                         ),
                  
                     );

  $numeroErreur = 0;

  $typeErreur [0] = "Carte Inconnue";
  $typeErreur [1] = "Aucune CB saisie";
  $typeErreur [2] = "Format de CB invalide";
  $typeErreur [3] = "Prefixe invalide";
  $typeErreur [4] = "Taille saisie non correspondante";
               
  // Definir le type de carte
  $typeCarte = -1;
  
  // Verifier que le client a bien donner une cc. la fonction php strlen sert a calculer la taille d une chaine
  if (strlen($numeroCarte) == 0)  {
	 $numeroErreur = 1;     
	 $texteErreur = $typeErreur [$numeroErreur];
	 return false; 
  }
  
  // enleve tout les espaces entre les nombres saisie
  $numeroCarte = str_replace (' ', '', $numeroCarte);

  // on check que tout les numero sont conforme
  if (!preg_match("/^[0-9]{13,19}$/",$numeroCarte))  {
	 $numeroErreur = 2;     
	 $texteErreur = $typeErreur [$numeroErreur];
	 return false; 
  }
	  
  for ($i=0; $i<sizeof($cartes); $i++) {

	  // Charger un tableau exploser la chaine de caractere pour recuperer les prefixes 
	  $prefix = explode(',',$cartes[$i]['prefixes']);
	  // maintenant on test pour voir si le prefixe match  
	  $PrefixValid = false; 
	  for ($j=0; $j<sizeof($prefix); $j++) {
		$exp = '/^' . $prefix[$j] . '/';
		if (preg_match($exp,$numeroCarte)) {
		  $PrefixValid = true;
		  break;
		}
	  }
		  
	  // Si le prefixe n'est pas valide on n a pas besoin de verifier la longueur
	  if (!$PrefixValid) {
		 $numeroErreur = 3;     
		 $texteErreur = $typeErreur [$numeroErreur];
		 continue; 
	  }
		
	  // Verifie si la longueur de la carte est valide
	  $TailleValide = false;
	  $longueur = explode(',',$cartes[$i]['length']);
	  for ($j=0; $j<sizeof($longueur); $j++) {
		if (strlen($numeroCarte) == $longueur[$j]) {
		  $TailleValide = true;
		  break;
		}
	  }
	  
	  // on check si tout est OK quand la longueur est valide
	  if (!$TailleValide) {
		 $numeroErreur = 4;     
		 $texteErreur = $typeErreur [$numeroErreur];
		 continue; 
	  };   
	  
	  // La carte de credit est au bon format
	  $numeroErreur = "";
	  $texteErreur = "";
	  return true;
	}
	
	// Si la carte n'est pas trouvée envoyer une erreur
	if ($typeCarte == -1) {
		$numeroErreur = 0;     
		$texteErreur = $typeErreur [$numeroErreur];
		echo ($texteErreur);
		return false; 
		
	}
}

?>