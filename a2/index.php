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
    <li><a href="#prices">Prices</a></li>
    <li><a href="#about">About</a></li>    
    <li><a href="#contactus">Contact Us</a></li>
  </ul>

  <main>

    <section id="home">
      <h1>Featured Films</h1>
      <div class="movies">
        <div class="movieTitle">
          <img src="../../media/morbinTime.JPG" alt="morbius cover art">
        </div>
        <div class="movieTitle">
          <img src="../../media/morbinTime.JPG" alt="morbius cover art">
        </div>
      </div>
    </section>

    <div class="content">
      <section id="Prices">
        <div class="sidebyside">
          <div>
            <h2>Standard Seating</h2>
            <table>
              <tr>
                <th>Assignment: </th>
                <th>Price: </th>
              </tr>
              <tr>
                <td>Adult</td>
                <td>$17.50</td>
              </tr>
              <tr>
                <td>Child/Concession</td>
                <td>$12.50</td>
              </tr>
            </table>
          </div>
          <div>
            <h2>Verone Seating</h2>
            <table>
              <tr>
                <th>Assignment: </th>
                <th>Price: </th>
              </tr>
              <tr>
                <td>Adult</td>
                <td>$23.50</td>
              </tr>
              <tr>
                <td>Child/Concession</td>
                <td>$15.00</td>
              </tr>
            </table>
          </div>
        </div>
      </section>
    </div>

    <div class="content">
    <section id="About">
      <h1>About Us</h1>
      <h2>We are Back!</h2>
      <h3>With sound better than ever before</h3>
      <p>Over the course of the pandemic, we at Lunardo have been working dilligently to upgrade our sound systems so that our customers can come in and enjoy a prestige viewing experience.
      <br>With our cinemas now containing state of the art sound systems and picture quality we know you'll be able to enjoy all the hot releases! 
      </p>
    </section>
  </div>

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