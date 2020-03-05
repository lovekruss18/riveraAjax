<?php
  
   $a[] = "Josephine, Salonoy";
   $a[] = "De Ramos, Noel";
   $a[] = "Sarsonas, Carl";
   $a[] = "Villarin, Alfie";
   $a[] = "Ybanez, Martin";
   $a[] = "Manalop,  Mark Ronald";
   $a[] = "Cabatuan, Martin";
   $a[] = "Marcella, Aljun";
   $a[] = "Romagera, Alvin";
    $a[] = " Alvin Romagera";
  
   
   $q = $_REQUEST["q"];
   $hint = "";
   
   if ($q !== "") {
      $q = strtolower($q);
      $len = strlen($q);
      
      foreach($a as $name) {
		
         if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
               $hint = $name;
            }else {
               $hint .= ", $name";
            }
         }
      }
   }
   echo $hint === "" ? "Please enter a valid course name" : $hint;
?>