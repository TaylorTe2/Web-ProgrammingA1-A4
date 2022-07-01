<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime(style.css); ?>">
  <script src='../wireframe.js'></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kantumruy+Pro|Righteous">
</head>

<body>

  <header>
    <div class="topHeaderArea">
    <img src="../../media/cinema-logo.png" alt="Lundaro Cinema Logo">
    <h1>Lunardo</h1>
    <div>
  </header>

  <ul class="topnav">
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="#about">About Us</a></li>
    <li><a href="#prices">Seats and Prices</a></li>
    <li><a href="#nowshowing">Now Showing</a></li>
  </ul>

  <main>

    <section id="home">
      <img src="../../media/topgun-wallpaper.png" alt="Top Gun Maverick Wallpaper">
      <div class="featured">
        <h1>Featured Film :</h1><h2>  Top Gun Maverick</h2>        
      </div>
    </section>


  </main>

  <footer>
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> Taylor Neal, s3873735. Last modified
      <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
    </div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
      Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>

</body>

</html>