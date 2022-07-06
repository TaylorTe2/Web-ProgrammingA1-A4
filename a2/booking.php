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
      <form action="booking.php" method="get">
        <label for="code">Movie Code</label>
        <input type="text">
        <h3>Session Time</h3>
        <div>
          <input type="radio" id="day" name="day" value="Monday">
          <label for="monday">Monday 12pm</label>
        </div>
        <div>
          <input type="radio" id="day" name="day" value="Tuesday">
          <label for="tuesday">Tuesday 12pm</label>
        </div>
        <div>
          <input type="radio" id="day" name="day" value="Wednesday">
          <label for="wednesday">Wednesday 6pm</label>
        </div>
        <div>
          <input type="radio" id="day" name="day" value="Thursday">
          <label for="thursday">Thursday 6pm</label>
        </div>
        <div>
          <input type="radio" id="day" name="day" value="Friday">
          <label for="friday">Friday 6pm</label>
        </div>
        <div>
          <input type="radio" id="day" name="day" value="Saturday">
          <label for="saturday">Saturday 12pm</label>
        </div>
        <div>
          <input type="radio" id="day" name="day" value="Sunday">
          <label for="sunday">Sunday 12pm</label>
        </div>
        <h3>Seats</h3>
        <div id="seatselection">
          <div>
            <label for="seats">Standard, Adult</label>
            <input type="number" min="0" max="10" id="seats" name="seats">
            <label for="seats">Standard, Child</label>
            <input type="number" min="0" max="10" id="seats" name="seats">
            <label for="seats">Standard, Concession</label>
            <input type="number" min="0" max="10" id="seats" name="seats">
          </div>
          <div>
            <label for="seats">Premium, Adult</label>
            <input type="number" min="0" max="10" id="seats" name="seats">
            <label for="seats">Premium, Child</label>
            <input type="number" min="0" max="10" id="seats" name="seats">
            <label for="seats">Premium, Concession</label>
            <input type="number" min="0" max="10" id="seats" name="seats">
          </div>
        </div>
        <input type="submit" value="Submit">
      </form>
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