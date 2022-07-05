<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>

  <!-- TODO: remove line below. -->
  <link rel="stylesheet" href="style.css">
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
          <br>
        <ul>
          <li>New Seats available. Standard and reclinable first class.</li><br>
          <li>Upgrades to projection and sound systems using new 3D Dolby Vision projections and Dolby Atmos Sound
            systems.</li>
          <br>
        </ul>
        we are very excited to welcome all customers back into our cinemas to enjoy a premium viewing experience.
        </p>
      </div>
    </section>

    <section id="prices">
      <h1><br>Seating</h1>
      <div id="seatinfo">
        <p>We are now offering two different kinds of seating. Customers are able to select from either our premium
          seating options or our classic standard seating option. <br><br>

          Our new premium seating offers ample space to move about without being bothering, or being bothered by other
          viewers. These seats offer an in-front view of the display, and mixed with our new audio/visual upgrades will
          provide you with a viewing experience you will not forget. The different types of seating are available below,
          along with the prices.</p>
        <div id="seatimages">
          <div class="seatWithHeading">
            <h2>Standard Seating</h2>
            <img src="../../media/Profern-Standard-Twin.png" alt="Image of the standard seating">
          </div>
          <div class="seatWithHeading">
            <h2>Premium Seating</h2>
            <img src="../../media/Profern-Verona-Twin.png" alt="Image of Premium Seating">
          </div>
        </div>
      </div>
      <div id="pricetable">
        <table>
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
        </table>
      </div>
      </div>
    </section>

    <section id="nowshowing">
      <div>
        <h1><br>Now Showing</h1>
      </div>
      <div id="shownmovies">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../media/lightyear.png" alt="lightyear movie cover">
            </div>
            <div class="flip-card-back">
              <h2>Lightyear</h2>
              <p>Legendary Space Ranger Buzz Lightyear embarks on a space adventure with aspiring recruits Izzy, Moe,
                Darby and their robot companion Sox. As this ragtag team embarks on their toughest mission yet, they
                must
                learn to work together as a team to escape the evil zerg and their army of obedient robots that never
                turn
                back.</p>
                <h3>Times:</h3>
                <p><strong>Mon - Tue</strong>: 12pm</p>
                <p><strong>Wed - Fri</strong>: 6pm</p>
                <p><strong>Sat - Sun</strong>: 12pm</p>
                <br>
              <p>button that says book now</p>
            </div>
          </div>
        </div>
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../media/topgun-maverick.png" alt="topgun maverick movie cover">
            </div>
            <div class="flip-card-back">
              <h2>Top Gun: Maverick</h2>
              <p>After more than 30 years as a major Navy pilot, Pete "Maverick" Mitchell is where he is, pushing the boundaries of what he can do as a daring test pilot and avoiding promotions that would degrade his status. While training an adult squad for a specific mission, Maverick must confront his departed spirits and deepest fears, culminating in a mission that requires the greatest sacrifice. from those who choose to fly.</p>
              <h3>Times:</h3>
                <p><strong>Mon - Tue</strong>: 9pm</p>
                <p><strong>Wed - Fri</strong>: 9pm</p>
                <p><strong>Sat - Sun</strong>: 6pm</p>
                <br>
              <p>button that says book now</p>
            </div>
          </div>
        </div>
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../media/mrs-harris-goes-to-paris.png" alt="mrs harris goes to paris movie cover">
            </div>
            <div class="flip-card-back">
              <h2>Mrs. Harris Goes to Paris</h2>
              <p>In 1950s London, a widowed cleaning lady falls madly in love with a couture Dior dress and decides she wants to have one of her own. After working on a fundraiser to make her dream come true, she embarks on an adventure in Paris that changes not only her own worldview but also the fate of the House of Dior.</p>
              <h3>Times:</h3>
                <p><strong>Mon - Tue</strong>: Not Showing</p>
                <p><strong>Wed - Fri</strong>: 12pm</p>
                <p><strong>Sat - Sun</strong>: 3pm</p>
                <br>
              <p>button that says book now</p>
            </div>
          </div>
        </div>
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../media/prithviraj.png" alt="prithviraj movie cover">
            </div>
            <div class="flip-card-back">
              <h2>Samrat Prithviraj</h2>
              <p>Follow the story of the fearless King Prithviraj's heroism as he faces off against Muhammad of Ghor.</p>
              <h3>Times:</h3>
                <p><strong>Mon - Tue</strong>: 6pm</p>
                <p><strong>Wed - Fri</strong>: Not Showing</p>
                <p><strong>Sat - Sun</strong>: 9pm</p>
                <br>
              <p>button that says book now</p>
            </div>
          </div>
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