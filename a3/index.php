<?php
include 'tools.php';
?>

<!DOCTYPE html>
<html lang='en'>

<?php
defaultHead('Lunardo Home Page');
?>

<body>

  <?php
  defaultHeader();
  ?>

  <div class="topnav">
    <a class="navbtn" href="#home">Home</a>
    <a class="navbtn" href="#about">About Us</a>
    <a class="navbtn" href="#prices">Seats and Prices</a>
    <a class="navbtn" href="#nowshowing">Now Showing</a>
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
        <br>
        <h1>About</h1>
        <br>
        <p>Welcoming both new and exisiting customers. Our doors have finally re-opened. <br> Over the course of our
          break we have managed to make a vast amount of improvements to our facilities. These improvements include:
          <br>
          <br>
        <ul>
          <li>New Seats available. Standard and reclinable first class. (shown below)</li><br>
          <li>Upgrades to projection and sound systems using new 3D Dolby Vision projections and Dolby Atmos Sound
            systems.</li>
          <br>
        </ul>
        <div id="upgrades">
          <div id="sound">
            <h3>Dolby Atmos Sound</h3>
            <p>Dolby atmos sound is a surround sound technology developed by Dolby. It expands on existing sound systems by adding height channels, allowing viewers to experience sound from all directions in our cinemas.</p>
            <img src="../../media/cinema-sound.png" alt="an overview of our cinematic sound system">
          </div>
          <div id="visual">
            <h3>Dolby 3D Vision Projections</h3>
            <p>Our new dolby 3D vision projections allow us to present to you a higher quality viewing experience, so that you'll be able to see a clearer picture along with better colour definition.</p>
            <img src="../../media/cinema-visuals.png" alt="image of dolby projector">
          </div>
        </div>
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
        <div class="flip-card" tabindex="0">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../media/lightyear.png" alt="lightyear movie cover">
            </div>
            <div class="flip-card-back">
              <?php
              echo 
              "<h2>" . $movies[0][0] . "</h2>
              <p>" . $movies[0][1] . "</p>
                <h3>Times:</h3>";
                 for($i = 0; $i < count($movies[0][4]); $i++) {
                    echo implode($movies[0][4][$i]) . "<br>";   
                }
                ?>
                <a href="booking.php?movie=FAM" target="_blank"><button>Book Now</button></a>
            </div>
          </div>
        </div>
        <div class="flip-card" tabindex="0">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../media/topgun-maverick.png" alt="topgun maverick movie cover">
            </div>
            <div class="flip-card-back">
            <?php
              echo 
              "<h2>" . $movies[1][0] . "</h2>
              <p>" . $movies[1][1] . "</p>
                <h3>Times:</h3>";
                 for($i = 0; $i < count($movies[1][4]); $i++) {
                    echo implode($movies[1][4][$i]) . "<br>";   
                }
                ?>
                <a href="booking.php?movie=ACT" target="_blank"><button>Book Now</button></a>
            </div>
          </div>
        </div>
        <div class="flip-card" tabindex="0">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../media/mrs-harris-goes-to-paris.png" alt="mrs harris goes to paris movie cover">
            </div>
            <div class="flip-card-back">
            <?php
              echo 
              "<h2>" . $movies[2][0] . "</h2>
              <p>" . $movies[2][1] . "</p>
                <h3>Times:</h3>";
                 for($i = 0; $i < count($movies[2][4]); $i++) {
                    echo implode($movies[2][4][$i]) . "<br>";   
                }
                ?>
                <a href="booking.php?movie=RMC" target="_blank"><button>Book Now</button></a>
            </div>
          </div>
        </div>
        <div class="flip-card" tabindex="0">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="../../media/prithviraj.png" alt="prithviraj movie cover">
            </div>
            <div class="flip-card-back">
            <?php
              echo 
              "<h2>" . $movies[3][0] . "</h2>
              <p>" . $movies[3][1] . "</p>
                <h3>Times:</h3>";
                 for($i = 0; $i < count($movies[3][4]); $i++) {
                    echo implode($movies[3][4][$i]) . "<br>";   
                }
                ?>
                <a href="booking.php?movie=AHF" target="_blank"><button>Book Now</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php
  defaultFooter();
  ?>

  <aside id="debug">
    <hr>
    <h3>Debug Area</h3>
    <pre>
GET Contains:
<?php print_r($_GET) ?>
POST Contains:
<?php print_r($_POST) ?>
SESSION Contains:
<?php print_r($_SESSION) ?> 
      </pre>
  </aside>


<script src="script.js"></script>

</body>

</html>