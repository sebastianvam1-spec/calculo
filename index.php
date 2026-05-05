<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Historia del Cálculo Integral</title>

<link rel="stylesheet" href="estilos.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<!-- MathJax -->
<script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

</head>

<body>

<header>
    <h1>Historia alejandro, andres, nariyanke del Cálculo Integral</h1>
    <p>Desde la antigüedad hasta la actualidad</p>
</header>

<nav>
    <a href="#origen">Origen</a>
    <a href="#linea">Línea del tiempo</a>
    <a href="#formula">Fórmulas</a>
</nav>

<section id="origen" class="fade">
    <h2>📜 Origen</h2>
    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Archimedes_sphere_and_cylinder.png" width="200">
    <p>
        El cálculo integral comenzó con métodos geométricos desarrollados por 
        <strong>Arquímedes</strong>, quien calculaba áreas y volúmenes mediante aproximaciones.
    </p>
</section>

<section id="linea" class="fade">
    <h2>⏳ Línea del tiempo</h2>

    <div class="timeline">
        <div class="item">
            <h3>Antigua Grecia</h3>
            <p>Método de agotamiento - Arquímedes</p>
        </div>

        <div class="item">
            <h3>Siglo XVII</h3>
            <p>Newton y Leibniz desarrollan el cálculo</p>
        </div>

        <div class="item">
            <h3>Siglo XVIII</h3>
            <p>Formalización matemática</p>
        </div>

        <div class="item">
            <h3>Actualidad</h3>
            <p>Aplicaciones en ciencia y tecnología</p>
        </div>
    </div>
</section>

<section id="formula" class="fade">
    <h2>📊 Fórmulas del cálculo integral</h2>

    <p>Ejemplo básico:</p>

    <div class="formula">
        $$\int x \, dx = \frac{x^2}{2} + C$$
    </div>

    <p>Integral definida:</p>

    <div class="formula">
        $$\int_a^b f(x)\,dx$$
    </div>
</section>

<section class="fade">
    <h2>🚀 Aplicaciones</h2>
    <ul>
        <li>Física (movimiento y energía)</li>
        <li>Ingeniería</li>
        <li>Economía</li>
        <li>Inteligencia Artificial</li>
    </ul>
</section>

<footer>
    <p>Proyecto académico | Cálculo Integral</p>
</footer>

<script src="script.js"></script>

</body>
</html>