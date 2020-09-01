<?php
class Arreglo
{
 private $Arreglo;
 public function __constructor()
 {
  $this->Arreglo = array();
 }
 public function __constructor($n)
 {
  $this->Arreglo = array();
  for($i = 0; $i < $n; $i++)
  {
   $this->Array[i] = rand();
  }
 }
 public function ordena($Arreglo)
  for($i=1;$i<sizeof($Arreglo);$i++){
          for($j=0;$j<sizeof($Arreglo)-$i;$j++){
              if($Arreglo[$j]>$Arreglo[$j+1]){
                 $k=$Arreglo[$j+1]; 
                 $Arreglo[$j+1]=$Arreglo[$j]; 
                 $Arreglo[$j]=$k;
              }
          }
  }
      return $Arreglo;
}
 public function cuenta();
 public function medVar();
 public function mostrar();
}
?>
