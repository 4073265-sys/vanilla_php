 <?php
  define('NOMBRE_CENTRO', 'CIFP Carlos III');
  function pie() {
    // Sin "global": las constantes son accesibles en cualquier ámbito
    echo '<footer>', NOMBRE_CENTRO, '</footer>';
  }

  pie();
 ?>
 <?php

  $curriculos = [
    ['alumno' => 'Ana López',    'ciclo' => 'DAW',  'video' => 'https://youtu.be/curriculo1'],
    ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2'],
    ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3'],
  ];
   echo $curriculos[0]['alumno'];   // Ana López
  ?>

<?php
  function mostrarCurriculo(array $curriculo) {
    echo '<li>', $curriculo['alumno'], ' — ', $curriculo['ciclo'],
         ' — <a href="', $curriculo['video'], '">vídeo</a></li>';
  }
  ?>
  <?php

  echo '<h1>', NOMBRE_CENTRO, ' — Currículos</h1>';
  echo '<ul>';
  mostrarCurriculo($curriculos[0]);
  mostrarCurriculo($curriculos[1]);
  mostrarCurriculo($curriculos[2]);
  echo '</ul>';

?>
<?php
echo '<h3>', "Con bucle foreach", '</h3>';
  $curriculos = [
    ['alumno' => 'Ana López',    'ciclo' => 'DAW',  'video' => 'https://youtu.be/curriculo1'],
    ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2'],
    ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3'],
  ];

  
   echo '<ul>';
  foreach ($curriculos as $curriculo) {
    echo '<li class="curriculo">', $curriculo['alumno'], ' — ', $curriculo['ciclo'], '</li>';
  }
  echo '</ul>';
  ?>