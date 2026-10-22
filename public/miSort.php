<?php
function miSort(array &$miArray) : array{
    sort($miArray);
    return $miArray;
}

$ciclos = ['DAW', 'ASIR', 'DAM'];

$ciclosOrdenados = miSort($ciclos);

print_r($ciclos);
 
?>



<?php
function incrementa(int &$numero) : int {
    return $numero;
    $numero++;
}

$numero = 0;

for($i=0; $i < 10; $i++){
    echo "<p>".incrementa($numero)."</p>";
}



<?php
function incrementa(int &$numero) : int {
    return $numero++;
    
}

$numero = 0;

for($i=0; $i < 10; $i++){
    echo "<p>".incrementa($numero)."</p>";
}


<?php
  function enlaceVideo(?string $video): string
  {
      if ($video === null || $video === '') {
          return 'Sin vídeo';
      }
      return '<a href="' . $video . '">vídeo</a>';
  }
?>

