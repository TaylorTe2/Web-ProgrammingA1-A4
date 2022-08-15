<?php
session_start();
/* Put your PHP functions and modules here.
   Many will be provided in the teaching materials,
   keep a look out for them!
*/

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

  if ($day == 'Wednesday') {
    return $numSeats * $discPricetable[$seat];
  }
  else {
    return $numSeats * $fullPricetable[$seat];
  }
}
