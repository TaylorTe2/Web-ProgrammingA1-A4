<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lunardo Booking Page</title>

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
    <a href="index.php#home">Home</a>
    <a href="index.php#about">About Us</a>
    <a href="index.php#prices">Seats and Prices</a>
    <a href="index.php#nowshowing">Now Showing</a>
  </div>

  <main>
    <div id="bookingform">
      <form action="booking.php" method="post">
        <input type="hidden" id="movieID" name="movieID" value="FAM">
        <h3>Session Time</h3>
        <div class="radioselect">
          <input type="radio" id="day" name="day" value="Monday" data-pricing="fullprice">
          <label for="monday">Monday 12pm</label>
        </div>
        <div class="radioselect">
          <input type="radio" id="day" name="day" value="Tuesday" data-pricing="fullprice">
          <label for="tuesday">Tuesday 12pm</label>
        </div>
        <div class="radioselect">
          <input type="radio" id="day" name="day" value="Wednesday" data-pricing="discprice">
          <label for="wednesday">(Discounted) Wednesday 6pm</label>
        </div>
        <div class="radioselect">
          <input type="radio" id="day" name="day" value="Thursday" data-pricing="fullprice">
          <label for="thursday">Thursday 6pm</label>
        </div>
        <div class="radioselect">
          <input type="radio" id="day" name="day" value="Friday" data-pricing="fullprice">
          <label for="friday">Friday 6pm</label>
        </div>
        <div class="radioselect">
          <input type="radio" id="day" name="day" value="Saturday" data-pricing="fullprice">
          <label for="saturday">Saturday 12pm</label>
        </div>
        <div class="radioselect">
          <input type="radio" id="day" name="day" value="Sunday" data-pricing="fullprice">
          <label for="sunday">Sunday 12pm</label>
        </div>
        <h3>Seats</h3>
        <div id="seatselection">
          <div>
            <label for="STA">Standard, Adult</label>
            <select name="STA" id="STA" data-fullprice="20.50" data-discprice="15.00">
              <option value="0">Please Select</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
            <label for="STC">Standard, Child</label>
            <select name="STC" id="STC" data-fullprice="16.50" data-discprice="12.00">
              <option value="0">Please Select</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
            <label for="STP">Standard, Concession</label>
            <select name="STP" id="STP" data-fullprice="18.00" data-discprice="13.50">
              <option value="0">Please Select</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
          <div>
            <label for="FCA">Premium, Adult</label>
            <select name="FCA" id="FCA" data-fullprice="30.00" data-discprice="24.00">
              <option value="0">Please Select</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
            <label for="FCC">Premium, Child</label>
            <select name="FCC" id="FCC" data-fullprice="24.00" data-discprice="21.00">
              <option value="0">Please Select</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
            <label for="FCP">Premium, Concession</label>
            <select name="FCP" id="FCP" data-fullprice="27.00" data-discprice="22.50">
              <option value="0">Please Select</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
        </div>
        <h3>Your Details</h3>
        <div class="details">
          <label for="fname">First Name: </label>
          <input type="text" id="fname" name="fname" required>
        </div>
        <div class="details">
          <label for="lname">Last Name: </label>
          <input type="text" id="lname" name="lname" required>
        </div>
        <div class="details">
          <label for="email">Email Address: </label>
          <input type="text" id="email" name="email" required>
        </div>
        <div class="details">
          <label for="phone">Mobile: </label>
          <input type="text" id="phone" name="phone" required>
        </div>
        <input type="submit" value="Submit">
      </form>
    </div>
    <div id="movieinfo">
      <h2>Movie Details: </h2>
      <h3>Lightyear</h3>
      <p>Legendary Space Ranger Buzz Lightyear embarks on a space adventure with aspiring recruits Izzy, Moe,
        Darby and their robot companion Sox. As this ragtag team embarks on their toughest mission yet, they
        must
        learn to work together as a team to escape the evil zerg and their army of obedient robots that never
        turn
        back.</p>
        <iframe src="https://www.youtube.com/embed/BwZs3H_UN3k" title="Lightyear | Official Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </main>
  <footer>
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here. Last modified
      <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
    </div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
      Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>
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

</body>

</html>