<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Style.css">
  <title>Document</title>
</head>
<body>
  <?php 
    $materias = $_GET["Materia"];
    $notas = $_GET["Nota"];
    
    if (!empty($materias) && !empty($notas)) {
      $totalNotas = 0;
      $totalMaterias = count($materias);
      
      for ($i = 0; $i < $totalMaterias; $i++) {
        echo "Materia: " . htmlspecialchars($materias[$i]) . " - Nota: " . htmlspecialchars($notas[$i]) . "<br>";
        $totalNotas += $notas[$i];
      }
      
      $media = $totalNotas / $totalMaterias;
      echo "Média: " . number_format($media, 1);
    } else {
      echo "Nenhuma matéria ou nota foi inserida.";
    }
  ?>
</body>
</html>

