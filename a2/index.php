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
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#prices">Prices</a></li>
    <li><a href="#contactus">Contact Us</a></li>
  </ul>

  <main>

    <section id="home">
      <h1>Featured Films</h1>
      <div class="movies">
        <div class="movieTitle">
          <img src="../../media/morbinTime.JPG" alt="morbius cover art">
          <div class="morbiusText">Morbius
            <br>now showing.
          </div>
        </div>
        <div class="movieTitle">
          <img src="../../media/morbinTime.JPG" alt="morbius cover art">
          <div class="morbiusText">Morbius2
            <br>now showing.
          </div>
        </div>
      </div>
    </section>

    <section id="About">
      <h1>About Us</h1>
      <p>
        We are back!@@1!
        <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur corporis illum laudantium accusantium voluptatem quas cupiditate tempora, voluptatibus nihil vel impedit assumenda corrupti quo, ex labore atque optio magnam eius iusto! Veniam repudiandae, odio deleniti rem at accusantium reiciendis illo error porro quas adipisci laboriosam rerum est cupiditate saepe dolores iste voluptatem, ipsa debitis a consequatur. Labore assumenda numquam nihil, rem odit necessitatibus asperiores voluptate laborum, nostrum maxime animi. Sit velit excepturi fugiat temporibus, labore alias maiores perspiciatis sint, iste dolore aliquid rem soluta. Id, autem vitae laboriosam sunt voluptates iure quas, vero tempora facilis iusto rem repellendus, facere unde.
      </p>
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