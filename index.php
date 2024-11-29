<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=basicoPhp7.php>Básico Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section class="problema">
  <h2>Problema: Fuerza gravitacional entre la Tierra y la Luna</h2>
  <p>Descripción:</p>
  <p>La Luna gira en torno a la Tierra, completando una revolución en 27.3 días. Suponga que la órbita es circular y que tiene un radio de 238,000 millas. ¿Cuál es la magnitud de la fuerza gravitacional que la Tierra ejerce sobre ella?</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
<ul>
    <li>Velocidad orbital: \(v = \frac{2 \pi r}{T}\)</li>
    <li>Fuerza gravitacional: \(F = \frac{mv^2}{r}\)</li>
</ul>
</section>
<section class="datos">
<h2>Datos:</h2>
<ul>
    <li>Masa de la Luna (\(m\)): \(7.36 \times 10^{22}\) kg</li>
    <li>Radio orbital (\(r\)): 238,000 millas = \(3.83 \times 10^8\) m</li>
    <li>Período orbital (\(T\)): 27.3 días = \(2.36 \times 10^6\) s</li>
</ul>
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>Se calculan la velocidad orbital y la fuerza gravitacional utilizando las fórmulas dadas.</p>
</section>
<?php
// Función para calcular la fuerza gravitacional
function calcular_fuerza() {
    // Constantes y datos
    $masa_luna = 7.36e22; // kg
    $radio_orbital = 3.83e8; // m
    $periodo_orbital = 2.36e6; // s
    
    // Velocidad orbital
    $velocidad_orbital = (2 * pi() * $radio_orbital) / $periodo_orbital;

    // Fuerza gravitacional
    $fuerza_gravitacional = ($masa_luna * pow($velocidad_orbital, 2)) / $radio_orbital;

    return [
        'velocidad' => $velocidad_orbital,
        'fuerza' => $fuerza_gravitacional
    ];
}
?>
<section class="resultado">
<h2>Resultado:</h2>
<?php
$resultados = calcular_fuerza();
echo "<div id='resultadoVelocidad'><p>Velocidad orbital: " . number_format($resultados['velocidad'], 2) . " m/s</p></div>";
echo "<div id='resultadoFuerza'><p>Fuerza gravitacional: " . number_format($resultados['fuerza'], 2) . " N</p></div>";
?>
</section>
</section>
<footer class="pie">
    Creative Commons versión 3.0 SciSoft 2033
</footer>
</section>
</body>
</html>

