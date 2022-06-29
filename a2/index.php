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
  </head>

  <body>

    <header>
      <h1>Lunardo</h1>
    </header>

      <ul class="topnav">
        <li><a class="active" href ="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#prices">Prices</a></li>        
        <li><a href="#contactus">Contact Us</a></li>
      </ul>

    <main>

      <div class="content">
      <article id='underConstruction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      </article>
    </div>

    <section id="home">
      <h1>Featured Films</h1>
      <div class="movieTitle">
        <img src="../../media/morbinTime.JPG" alt="morbius cover art">
        <div class="morbiusText">Morbius</div>
      </div>
    </section>

    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Taylor Neal, s3873735. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
