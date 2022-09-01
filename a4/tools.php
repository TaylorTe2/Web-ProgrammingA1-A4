<?php
session_start();
/* Put your PHP functions and modules here.
   Many will be provided in the teaching materials,
   keep a look out for them!
*/

function defaultHead($pageTitle)
{
  echo '<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>' . $pageTitle . '</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id="wireframecss" type="text/css" rel="stylesheet" href="../wireframe.css" disabled>

  <!-- TODO: remove line below. -->
  <link rel="stylesheet" href="style.css">

  <link id="stylecss" type="text/css" rel="stylesheet" href="style.css">
  <script src="../wireframe.js"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kantumruy+Pro|Righteous">
</head>';
}

function defaultHeader()
{
  echo '  <header>
  <div class="topHeaderArea">
    <img src="../../media/cinema-logo.png" alt="Lundaro Cinema Logo">
    <h1>Lunardo</h1>
    <div>
</header>';
}

function defaultFooter()
{
  echo '<footer>
    <div>
    <h3>Retrieve Previous Booking</h3>
    <form action="receipt.php">
      <div class="finddetails">
        <div class="finddetailsinner">
          <label for="email">Email Address: </label>
          <input type="email" id="email" name="user[email]" required>
        </div>
        <div class="finddetailsinner">
          <label for="phone">Mobile: </label>
          <input type="text" id="phone" name="user[phone]" required>
        </div>
        <div class="finddetailsinner">
        <input class="button" type="submit" value="Submit" onclick="findUser()">
        </div>
      </div>
    </form>
  </div>
  <div>&copy;
    <script>
      document.write(new Date().getFullYear());
    </script> Taylor Neal, s3873735. Last modified' .
    date("Y F d  H:i", filemtime($_SERVER["SCRIPT_FILENAME"])) . '
  </div>
  <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
    Programming course at RMIT University in Melbourne, Australia.</div>
  <div><button id="toggleWireframeCSS" onclick="toggleWireframe()">Toggle Wireframe CSS</button></div>
</footer>';
}

//Family Movie details for storage in Array. Doing it this way  makes it easier for future updates of Family Titles.
$FAMName = "Lightyear";
$FAMDesc = "Legendary Space Ranger Buzz Lightyear embarks on a space adventure with aspiring  recruits Izzy, Moe, Darby and their robot companion Sox. As this ragtag team embarks on their toughest mission yet, they must learn to work together as a team to escape the evil zerg and their army of obedient robots that never
  turn
  back.";
$FAMShowings = array(
  array("Monday", " 12:00pm"),
  array("Tuesday", " 12:00pm"),
  array("Wednesday", " 6:00pm"),
  array("Thursday", " 6:00pm"),
  array("Friday", " 6:00pm"),
  array("Saturday", " 12:00pm"),
  array("Sunday", " 12:00pm")
);

//Action Movie Details
$ACTName = "Top Gun Maverick";
$ACTDesc = "After more than 30 years as a major Navy pilot, Pete 'Maverick' Mitchell is where he is, pushing the boundaries of what he can do as a daring test pilot and avoiding promotions that would degrade his status. While training an adult squad for a specific mission, Maverick must confront his departed spirits and deepest fears, culminating in a mission that requires the greatest sacrifice. from those who choose to fly.";
$ACTShowings = array(
  array("Monday", " 9:00pm"),
  array("Tuesday", " 9:00pm"),
  array("Wednesday", " 9:00pm"),
  array("Thursday", " 9:00pm"),
  array("Friday", " 9:00pm"),
  array("Saturday", " 6:00pm"),
  array("Sunday", " 6:00pm")
);

$RMCName = "Mrs. Harris Goes to Paris";
$RMCDesc = "In 1950s London, a widowed cleaning lady falls madly in love with a couture Dior dress and decides she wants to have one of her own. After working on a fundraiser to make her dream come true, she embarks on an adventure in Paris that changes not only her own worldview but also the fate of the House of Dior.";
$RMCShowings = array(
  array("Wednesday", " 12:00pm"),
  array("Thursday", " 12:00pm"),
  array("Friday", " 12:00pm"),
  array("Saturday", " 3:00pm"),
  array("Sunday", " 3:00pm")
);

$AHFName = "Samrat Prithviraj";
$AHFDesc = "Follow the story of the fearless King Prithviraj's heroism as he faces off against Muhammad of Ghor.";
$AHFShowings = array(
  array("Monday", " 6:00pm"),
  array("Tuesday", " 6:00pm"),
  array("Saturday", " 9:00pm"),
  array("Sunday", " 9:00pm")
);

//array(Movie Title, Description of Movie, Rating/10, Youtube Trailer Link, Showing Times)
$movies = array(
  array($FAMName, $FAMDesc, 6.0, "https://www.youtube.com/embed/BwZs3H_UN3k", $FAMShowings, "FAM"),
  array($ACTName, $ACTDesc, 7.8, "https://www.youtube.com/embed/qSqVVswa420", $ACTShowings, "ACT"),
  array($RMCName, $RMCDesc, 9.0, "https://www.youtube.com/embed/iO9JcPbbmAA", $RMCShowings, "RMC"),
  array($AHFName, $AHFDesc, 6.0, "https://www.youtube.com/embed/33-CQdPHyjw", $AHFShowings, "AHF")
);

function calcPrice($day, $seat, $numSeats)
{
  $discPricetable = array(
    'STA' => 15.00,
    'STP' => 13.50,
    'STC' => 12.00,
    'FCA' => 24.00,
    'FCP' => 22.50,
    'FCC' => 21.00
  );

  $fullPricetable = array(
    'STA' => 20.50,
    'STP' => 18.00,
    'STC' => 16.50,
    'FCA' => 30.00,
    'FCP' => 27.00,
    'FCC' => 24.00
  );

  if (explode(" ", $day)[0] == 'Wednesday') {
    return $numSeats * $discPricetable[$seat];
  } else {
    return $numSeats * $fullPricetable[$seat];
  }
}

function getSingleSeatPrice($day, $seat)
{
  $discPricetable = array(
    'STA' => 15.00,
    'STP' => 13.50,
    'STC' => 12.00,
    'FCA' => 24.00,
    'FCP' => 22.50,
    'FCC' => 21.00
  );

  $fullPricetable = array(
    'STA' => 20.50,
    'STP' => 18.00,
    'STC' => 16.50,
    'FCA' => 30.00,
    'FCP' => 27.00,
    'FCC' => 24.00
  );

  if (explode(" ", $day)[0] == 'Wednesday') {
    return $discPricetable[$seat];
  } else {
    return $fullPricetable[$seat];
  }
}


function createSessionFields($bookingfields)
{

  $sessionFields = array();

  $sessionFields['date'] = $bookingfields[0];
  $sessionFields['name'] = $bookingfields[1];
  $sessionFields['email'] = $bookingfields[2];
  $sessionFields['phone'] = $bookingfields[3];
  $sessionFields['movieID'] = $bookingfields[4];
  $sessionFields['day'] = $bookingfields[5];
  $sessionFields['time'] = $bookingfields[6];
  $sessionFields['numSTA'] = $bookingfields[7];
  $sessionFields['costSTA'] = $bookingfields[8];
  $sessionFields['numSTP'] = $bookingfields[9];
  $sessionFields['costSTP'] = $bookingfields[10];
  $sessionFields['numSTC'] = $bookingfields[11];
  $sessionFields['costSTC'] = $bookingfields[12];
  $sessionFields['numFCA'] = $bookingfields[13];
  $sessionFields['costFCA'] = $bookingfields[14];
  $sessionFields['numFCP'] = $bookingfields[15];
  $sessionFields['costFCP'] = $bookingfields[16];
  $sessionFields['numFCC'] = $bookingfields[17];
  $sessionFields['costFCC'] = $bookingfields[18];
  $sessionFields['totalCost'] = $bookingfields[19];
  $sessionFields['GST'] = $bookingfields[20];

  return $sessionFields;
}

function checkDay($selectedDay, $dayToCheck)
{
  if ($selectedDay == $dayToCheck) {
    return 'checked="checked"';
  }
}
