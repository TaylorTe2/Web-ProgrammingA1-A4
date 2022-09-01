<?php

/* Call this function in the booking page like so: 
   $fieldErrors = validateBooking();
   If the array is empty, then no errors were generated
*/
function validateBooking($movies, $mvnum) {
  $errors = []; // new empty array to return error messages
  $warnings = []; //new empty array to send warnings to honest users.

  //made an adjustment so that errors that will not return to index.php will be saved in 
  //a warnings array instead. This is easier to display back to the user without having
  //to filter through all of the array elements of errors. Allowing for a simple
  // if errors isn't empty return home, else continue.
  if ($_POST['user']['name'] == '') {
    $warnings['name'] = "Name can't be blank";
  }

  if ($_POST['user']['email'] == '') {
    $warnings['email'] = "Email can't be blank";
  }

  //validate movie codes
  $acceptableMovieCodes = array("ACT", "FAM", "RMC", "AHF");

  if (!in_array($_POST['movieID'], $acceptableMovieCodes)) {
    $errors['movieID'] = "Invalid Movie code.";
  }

  //validate selected day
  $acceptableMovieDays = array();

  for ($i = 0; $i < count($movies[$mvnum][4]); $i++) {
    array_push($acceptableMovieDays, implode($movies[$mvnum][4][$i]));
  }

  if ((isset($_POST['day'])) && (!in_array($_POST['day'], $acceptableMovieDays))) {
    $errors['day'] = "A day that is not on the list has been selected.";
  }

  //assign variable for the number of seats chosen for each seat (used in later calc)
  $STACount = $_POST['seats']['STA'];
  $STCCount = $_POST['seats']['STC'];
  $STPCount = $_POST['seats']['STP'];
  $FCACount = $_POST['seats']['FCA'];
  $FCCCount = $_POST['seats']['FCC'];
  $FCPCount = $_POST['seats']['FCP'];

  //ensure that malicious users haven't found a way to enter negative numbers for
  //seat amounts
  if ($STACount < 0) $errors['seats']['STA'] = "Negative number of seats STA";
  if ($STCCount < 0) $errors['seats']['STC'] = "Negative number of seats STC";
  if ($STPCount < 0) $errors['seats']['STP'] = "Negative number of seats STP";
  if ($FCACount < 0) $errors['seats']['FCA'] = "Negative number of seats FCA";
  if ($FCCCount < 0) $errors['seats']['FCC'] = "Negative number of seats FCC";
  if ($FCPCount < 0) $errors['seats']['FCP'] = "Negative number of seats FCP";

  //ensure that at least one seat has been chosen
  $sumSeatsChosen = 0;
  $sumSeatsChosen = $STACount + $STCCount + $STPCount + $FCACount + $FCCCount + $FCPCount;

  if ($sumSeatsChosen == 0) {
    $warnings['seats'] = "At least one seat needs to be selected";
  }

  //validate name for honest users
  if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['user']['name'])){
    $warnings['name'] = "Full Name Field only allows letters and white space!";
  }

  //validate email for honest users
  if (!filter_var($_POST['user']['email'], FILTER_VALIDATE_EMAIL)) {
    $warnings['email'] = "Invalid email format";
  }

  //validate phone for honest users
  if (!preg_match("/^(\(04\)|04|\+614)(-?\d){8}$/", $_POST['user']['phone'])) {
    $warnings['phone'] = "Invalid phone format, try removing white spaces";
  }

  //inform users that they have not chosen a day.
  if (!isset($_POST['day'])) {
    $warnings['day'] = "Please select a viewing day.";
  }

  $err = array($errors, $warnings);

  return $err;

}


?>
