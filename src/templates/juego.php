<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ruleta de Desastres Ambientales</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/stylejuego.css">
</head>
<body style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;">
<nav class="navbar">
        <div class="navbar-left">
            <a href="#"><i class="fas fa-home"></i></a>
        </div>
        <div class="navbar-center">
            <a href="../templates/inicio.php">Inicio</a>
            <a href="../templates/clima.php">Descubre</a>
            <a href="#">Sobre nosotros</a>
            <a href="../templates/juego.php">¡Ponte a prueba!</a>
            <a href="#">Recomendaciones</a>
            <a href="#">Contactanos</a>
            <a href="../templates/iniciarSesion.php">Iniciar sesión</a>
        </div>
        <div class="navbar-right">
            <div class="search-container">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Búsqueda de ubicación">
            </div>
        </div>
    </nav>  
  <div class="contenedor">
    <h1>Ruleta de Desastres Ambientales</h1>
    <div id="vidas" class="vidas" aria-live="polite"></div>
    <div class="ruleta-container">
      <div class="ruleta" id="ruleta">
        <div class="sector"><span>1</span></div>
        <div class="sector"><span>2</span></div>
        <div class="sector"><span>3</span></div>
        <div class="sector"><span>4</span></div>
        <div class="sector"><span>5</span></div>
        <div class="sector"><span>6</span></div>
      </div>
      <div class="flecha"></div>
    </div>
    <button id="btnGirar" class="btn-girar">Girar Ruleta</button>
    <div id="pregunta" class="pregunta"></div>
    <div id="opciones" class="opciones"></div>
    <div id="resultado" class="resultado"></div>
    <div id="gameOver" class="game-over hidden">
      <h2>¡Game Over!</h2>
      <p id="mensajeAliento"></p>
      <button id="btnReiniciar" class="btn-reiniciar">Jugar de nuevo</button>
    </div>
  </div>
  <script src="../js/scriptjuego.js"></script>
</body>
</html>

