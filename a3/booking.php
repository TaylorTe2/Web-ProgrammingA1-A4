<?php
include 'tools.php';
include 'post-validation.php';
?>

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

  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
  <script src='../wireframe.js'></script>
  <script src="script.js"></script>
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
    <a class="btn" href="index.php#home">Home</a>
    <a class="btn" href="index.php#about">About Us</a>
    <a class="btn" href="index.php#prices">Seats and Prices</a>
    <a class="btn" href="index.php#nowshowing">Now Showing</a>
  </div>

  <main>

    <?php
    //set's a movienumber variable to relevant movie. default to -1 to bugs from
    // malicious behaviour. Could just declare the variable but this is less buggy.
    $mvnum = -1;
    if ($_GET['movie'] == "FAM") $mvnum = 0;
    else if ($_GET['movie'] == "ACT") $mvnum = 1;
    else if ($_GET['movie'] == "RMC") $mvnum = 2;
    else if ($_GET['movie'] == "AHF") $mvnum = 3;
    else header("Location: " . 'index.php');
    ?>

    <div id="warnings">
      <div>
        <p>
          <?php
          //returns a 2D array of 'errors' and 'warnings' errors will return the user home.
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fieldErrors = validateBooking($movies, $mvnum);

            if (count($fieldErrors[0]) != 0) {
              header("Location: " . 'index.php');
            } else if (count($fieldErrors[1]) > 0) {
              echo '<div>' .
                implode(",<br>", $fieldErrors[1]) . '</div>';
            }
            //we can add an else statement here AFTER verification to write to txt.
            else {
              //open the file
              $file = fopen("bookings.txt", "a");

              $totalPrice = calcPrice($_POST['day'], 'STA', $_POST['seats']['STA'])
                          + calcPrice($_POST['day'], 'STP', $_POST['seats']['STP'])
                          + calcPrice($_POST['day'], 'STC', $_POST['seats']['STC'])
                          + calcPrice($_POST['day'], 'FCA', $_POST['seats']['FCA'])
                          + calcPrice($_POST['day'], 'FCP', $_POST['seats']['FCP'])
                          + calcPrice($_POST['day'], 'FCC', $_POST['seats']['FCC']);

              //create an array to add to file
              $bookingfields = array(
                date("Y-m-d"),
                $_POST['user']['name'],
                $_POST['user']['email'],
                $_POST['user']['phone'],
                $_POST['movieID'],
                explode(" ", $_POST['day'])[0],
                explode(" ", $_POST['day'])[1],
                $_POST['seats']['STA'],
                calcPrice($_POST['day'], 'STA', $_POST['seats']['STA']),
                $_POST['seats']['STP'],
                calcPrice($_POST['day'], 'STP', $_POST['seats']['STP']),
                $_POST['seats']['STC'],
                calcPrice($_POST['day'], 'STC', $_POST['seats']['STC']),
                $_POST['seats']['FCA'],
                calcPrice($_POST['day'], 'FCA', $_POST['seats']['FCA']),
                $_POST['seats']['FCP'],
                calcPrice($_POST['day'], 'FCP', $_POST['seats']['FCP']),
                $_POST['seats']['FCC'],
                calcPrice($_POST['day'], 'FCC', $_POST['seats']['FCC']),
                number_format((float)$totalPrice, 2, '.', ''),
                number_format((float)$totalPrice/11, 2, '.', '')
              );

              //add the array to file.
              fputcsv($file, $bookingfields);

            }
          }
          ?>
        </p>
      </div>
    </div>

    <div id="bookingform">
      <?php
      echo
      '<form name="bookingform" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '?movie=' . $movies[$mvnum][5] . '" onsubmit="return validateBookingForm()" onchange="return calcPrice()" method="post">';
      echo
      '<input type="hidden" id="movieID" name="movieID" value="' . $movies[$mvnum][5] . '">';
      ?>
      <h3>Session Time</h3>
      <?php
      for ($i = 0; $i < count($movies[$mvnum][4]); $i++) {
        //change this to whatever the discounted viewing day is. Will also need to change
        // script.js.
        if ($movies[$mvnum][4][$i][0] == "Wednesday") {
          echo
          '<div class="radioselect">
                    <input type="radio" id="day" name="day" value="' . $movies[$mvnum][4][$i][0] . $movies[$mvnum][4][$i][1] . '" data-pricing="discprice">
                    <label for="' . $movies[$mvnum][4][$i][0] . '">' .
            implode($movies[$mvnum][4][$i]) . "</label></div>";
        } else {
          echo
          '<div class="radioselect">
                    <input type="radio" id="day" name="day" value="' . $movies[$mvnum][4][$i][0] . $movies[$mvnum][4][$i][1] . '" data-pricing="fullprice">
                    <label for="' . $movies[$mvnum][4][$i][0] . '">' .
            implode($movies[$mvnum][4][$i]) . "</label></div>";
        }
      }
      ?>
      <!-- This is used for testing valid day input do not delete. -->
      <div class="radioselect">
        <input type="radio" id="day" name="day" value="testday" data-pricing="fullprice">
        <label for="testday">testday 12pm</label>
      </div>
      <h3>Seats</h3>
      <div id="seatselection">
        <div>
          <label for="STA">Standard, Adult</label>
          <select name="seats[STA]" id="STA" data-fullprice="20.50" data-discprice="15.00" default=0>
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
          <select name="seats[STC]" id="STC" data-fullprice="16.50" data-discprice="12.00" default=0>
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
          <select name="seats[STP]" id="STP" data-fullprice="18.00" data-discprice="13.50" default=0>
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
          <select name="seats[FCA]" id="FCA" data-fullprice="30.00" data-discprice="24.00" default=0>
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
          <select name="seats[FCC]" id="FCC" data-fullprice="24.00" data-discprice="21.00" default=0>
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
          <select name="seats[FCP]" id="FCP" data-fullprice="27.00" data-discprice="22.50" default=0>
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
        <label for="fname">Full Name: </label>
        <input type="text" id="fname" name="user[name]" required>
      </div>
      <div class="details">
        <label for="email">Email Address: </label>
        <input type="email" id="email" name="user[email]" required>
      </div>
      <div class="details">
        <label for="phone">Mobile: </label>
        <input type="text" id="phone" name="user[phone]" required>
      </div>
      <div>
        <p>Your Price Total is: </p>
        <p id=calculatedPrice></p>
        <br>
      </div>
      <input type="submit" value="Submit">
      </form>
    </div>
    <div id="movieinfo">
      <h2>Movie Details:</h2>
      <?php
      echo '<h3>' . $movies[$mvnum][0] . '</h3>
      <p>' . $movies[$mvnum][1] . '</p>
      <iframe src="' . $movies[$mvnum][3] . '" title="Lightyear | Official Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
      ?>
    </div>
  </main>
  <footer>
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here. Last modified
      <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
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

  <script src="script.js"></script>

</body>

</html>