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

  <div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="#about">About Us</a>
    <a href="#prices">Seats and Prices</a>
    <a href="#nowshowing">Now Showing</a>
  </div>

  <main>

    <section id="home">
      <div class="featuredimg">
        <img src="../../media/topgun-wallpaper.png" alt="Top Gun Maverick Wallpaper">
        <div class="featured">
          <h1>Featured Film:</h1>
          <h2>Top Gun Maverick</h2>
        </div>
      </div>
    </section>

    <section id="about">
      <div>
        <h1>About</h1>
        <br>
        <p>Welcoming both new and exisiting customers. Our doors have finally re-opened. <br> Over the course of our
          break we have managed to make a vast amount of improvements to our facilities. These improvements include:
          <br>
        <ul>
          <li>New Seats available. Standard and reclinable first class.</li>
          <li>Upgrades to projection and sound systems using new 3D Dolby Vision projections and Dolby Atmos Sound
            systems.</li>
        </ul>
        we are very excited to welcome all customers back into our cinemas to enjoy a premium viewing experience.
        </p>
      </div>
    </section>

    <section id="prices">
      <div id="imgtable">
        <div class="vertflex">
          <img src="../../media/Profern-Standard-Twin.png" alt="Standard Seats">
          <img src="../../media/Profern-Verona-Twin.png" alt="Premium Seats">
        </div>
      <div id="pricetable">        
        <h1>Seat Prices</h1>
        <table>
          <tbody>
            <tr>
              <th>
                <p>Seat Type</p>
              </th>
              <th>
                <p>Discount Prices</p>
              </th>
              <th>
                <p>Normal Prices</p>
              </th>
            </tr>
            <tr>
              <td>
                <p>Standard Adult</p>
              </td>
              <td>
                <p>15.00</p>
              </td>
              <td>
                <p>20.50</p>
              </td>
            </tr>
            <tr>
              <td>
                <p>Standard Concession</p>
              </td>
              <td>
                <p>13.50</p>
              </td>
              <td>
                <p>18.00</p>
              </td>
            </tr>
            <tr>
              <td>
                <p>Standard Child</p>
              </td>
              <td>
                <p>12.00</p>
              </td>
              <td>
                <p>16.50</p>
              </td>
            </tr>
            <tr>
              <td>
                <p>First Class Adult</p>
              </td>
              <td>
                <p>24.00</p>
              </td>
              <td>
                <p>30.00</p>
              </td>
            </tr>
            <tr>
              <td>
                <p>First Class Concession</p>
              </td>
              <td>
                <p>22.50</p>
              </td>
              <td>
                <p>27.00</p>
              </td>
            </tr>
            <tr>
              <td>
                <p>First Class Child</p>
              </td>
              <td>
                <p>21.00</p>
              </td>
              <td>
                <p>24.00</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
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