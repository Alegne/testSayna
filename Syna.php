<?php
////////////////////////
function somme ($a, $b)
{
  return $a + $b;
}

////////////////////////
function factoriel($nb){
  $i ="";
  $f="";

  if ($nb == 0 OR $nb == 1) return 1;
  else return $nb*factoriel($nb-1);

/////////////////////////
function divise($a, $b){
  $divise = false;
  if($b % $a == 0) $divise = true;
  else $divise = false;
  return $divise
}



/////////////////////////
function quotRest($a, $b, &$q, &$r){
  $q = 0;
  $r = $a;
  while($r >= $b){
    $q += 1;
    $r %= $b;
  }
}



///////////////////////////
function voyelle($c){
  $a = ['a', 'e', 'o', 'i', 'y', 'u'];
  return in_array($c, $a);
}

function voyelle($c){
  $a = ['a', 'e', 'o', 'i', 'y', 'u'];
  $voyelle = false;
  foreach ($a as $caractere) {
    if ($caractere == $c) {
      $voyelle = true;
    } else {
      $voyelle = false;
    }
  }
  return $voyelle;
}


/////////////////////////////
function permute(&$a, a$b){
  $c = $a;
  $a = $b;
  $b = $c
}


/////////////////////////////
function vabs($a){
  $vabs = $a;
  if ($a < 0) $vabs = $a*(-1);
  return $vabs;
}
}




















 ?>
