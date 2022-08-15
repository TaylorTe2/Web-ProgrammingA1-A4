<?php
include 'tools.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Lunardo Receipt</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id="wireframecss" type="text/css" rel="stylesheet" href="../wireframe.css" disabled>

    <!-- TODO: remove line below. -->
    <link rel="stylesheet" href="receipt-style.css">

    <link id="stylecss" type="text/css" rel="stylesheet" href="receipt-style.css">
    <script src="../wireframe.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kantumruy+Pro|Righteous">
</head>

<body>
    <header>
        <div class="topHeaderArea">
            <img src="../../media/cinema-logo.png" alt="Lundaro Cinema Logo">
            <h1>Lunardo</h1>
        </div>
    </header>

    <main>

        <?php
        //validate $_SESSION is set.
        if (!isset($_SESSION['bookingInfo'])) {
            header("Location: " . 'index.php');
        }
        ?>

        <h2>Your Receipt</h2>
        <p>
            <?php
            echo 'Date: ' . $_SESSION['bookingInfo']['date'] .
                '<br>Your Name: ' . $_SESSION['bookingInfo']['name'] .
                '<br>Your Email: ' . $_SESSION['bookingInfo']['email'] .
                '<br>Your Phone: ' . $_SESSION['bookingInfo']['phone'] . '<br><br>';
            if ($_SESSION['bookingInfo']['numSTA'] > 0) {
                echo '<br>Standard Adult Seating: x' . $_SESSION['bookingInfo']['numSTA'] . '  @ ' . number_format(getSingleSeatPrice($_SESSION['bookingInfo']['day'], 'STA'), 2) .
                    '<br>Cost: ' . number_format($_SESSION['bookingInfo']['costSTA'], 2) . '<br>';
            }

            if ($_SESSION['bookingInfo']['numSTP'] > 0) {
                echo '<br>Standard Pension Seating: x' . $_SESSION['bookingInfo']['numSTP'] . '  @ ' . number_format(getSingleSeatPrice($_SESSION['bookingInfo']['day'], 'STP'), 2) .
                    '<br>Cost: ' . number_format($_SESSION['bookingInfo']['costSTP'], 2) . '<br>';
            }

            if ($_SESSION['bookingInfo']['numSTC'] > 0) {
                echo '<br>Standard Child Seating: x' . $_SESSION['bookingInfo']['numSTC'] . '  @ ' . number_format(getSingleSeatPrice($_SESSION['bookingInfo']['day'], 'STC'), 2) .
                    '<br>Cost: ' . number_format($_SESSION['bookingInfo']['costSTC'], 2) . '<br>';
            }

            if ($_SESSION['bookingInfo']['numFCA'] > 0) {
                echo '<br>Premium Adult Seating: x' . $_SESSION['bookingInfo']['numFCA'] . '  @ ' . number_format(getSingleSeatPrice($_SESSION['bookingInfo']['day'], 'FCA'), 2) .
                    '<br>Cost: ' . number_format($_SESSION['bookingInfo']['costFCA'], 2) . '<br>';
            }

            if ($_SESSION['bookingInfo']['numFCP'] > 0) {
                echo '<br>Premium Pension Seating: x' . $_SESSION['bookingInfo']['numFCP'] . '  @ ' . number_format(getSingleSeatPrice($_SESSION['bookingInfo']['day'], 'FCP'), 2) .
                    '<br>Cost: ' . number_format($_SESSION['bookingInfo']['costFCP'], 2) . '<br>';
            }

            if ($_SESSION['bookingInfo']['numFCC'] > 0) {
                echo '<br>Premium Child Seating: x' . $_SESSION['bookingInfo']['numFCC'] . '  @ ' . number_format(getSingleSeatPrice($_SESSION['bookingInfo']['day'], 'FCC'), 2) .
                    '<br>Cost: ' . number_format($_SESSION['bookingInfo']['costFCC'], 2) .
                    '<br>GST: ' . number_format($_SESSION['bookingInfo']['GST'], 2);
            }
            ?>
        </p>

        <footer>
            <div>
                Lunardo
                <br> 0338 248 650
                <br>info@lunardo.com.au
                <br><br>
                Please bring your receipt and tickets with you on your selected day (shown on tickets).
            </div>
        </footer>

        <div class="tickets">
            <h3>Your Tickets: </h3>
            <?php
            for ($i = 0; $i < $_SESSION['bookingInfo']['numSTA']; $i++) {
                echo
                '<div class="singleTicket"><h4>Standard Adult</h4>
                Name: ' .
                    $_SESSION['bookingInfo']['name'] .
                    '<br>Email: ' .
                    $_SESSION['bookingInfo']['email'] .
                    '<br>Phone: ' .
                    $_SESSION['bookingInfo']['phone'] .
                    '<br><br>1x Standard Adult
                <br>Movie Code: ' . $_SESSION['bookingInfo']['movieID'] . '
                <br>' . $_SESSION['bookingInfo']['day'] . ' - ' . $_SESSION['bookingInfo']['time'] .
                    '<br><br>Ticket Price: $' .
                    number_format(getSingleSeatPrice($_SESSION['bookingInfo']['day'], 'STA'), 2) .
                    '</div>';
            }

            for ($i = 0; $i < $_SESSION['bookingInfo']['numSTP']; $i++) {
                echo
                '<div class="singleTicket"><h4>Standard Pension</h4>
                Name: ' .
                    $_SESSION['bookingInfo']['name'] .
                    '<br>Email: ' .
                    $_SESSION['bookingInfo']['email'] .
                    '<br>Phone: ' .
                    $_SESSION['bookingInfo']['phone'] .
                    '<br><br>1x Standard Pension
                <br>Movie Code: ' . $_SESSION['bookingInfo']['movieID'] . '
                <br>' . $_SESSION['bookingInfo']['day'] . ' - ' . $_SESSION['bookingInfo']['time'] .
                    '<br><br>Ticket Price: $' .
                    number_format(getSingleSeatPrice($_SESSION['bookingInfo']['day'], 'STP'), 2) .
                    '</div>';
            }

            for ($i = 0; $i < $_SESSION['bookingInfo']['numSTC']; $i++) {
                echo
                '<div class="singleTicket"><h4>Standard Child</h4>
                Name: ' .
                    $_SESSION['bookingInfo']['name'] .
                    '<br>Email: ' .
                    $_SESSION['bookingInfo']['email'] .
                    '<br>Phone: ' .
                    $_SESSION['bookingInfo']['phone'] .
                    '<br><br>1x Standard Child
                <br>Movie Code: ' . $_SESSION['bookingInfo']['movieID'] . '
                <br>' . $_SESSION['bookingInfo']['day'] . ' - ' . $_SESSION['bookingInfo']['time'] .
                    '<br><br>Ticket Price: $' .
                    number_format(getSingleSeatPrice($_SESSION['bookingInfo']['day'], 'STC'), 2) .
                    '</div>';
            }

            for ($i = 0; $i < $_SESSION['bookingInfo']['numFCA']; $i++) {
                echo
                '<div class="singleTicket"><h4>First Class Adult</h4>
                Name: ' .
                    $_SESSION['bookingInfo']['name'] .
                    '<br>Email: ' .
                    $_SESSION['bookingInfo']['email'] .
                    '<br>Phone: ' .
                    $_SESSION['bookingInfo']['phone'] .
                    '<br><br>1x First Class Adult
                <br>Movie Code: ' . $_SESSION['bookingInfo']['movieID'] . '
                <br>' . $_SESSION['bookingInfo']['day'] . ' - ' . $_SESSION['bookingInfo']['time'] .
                    '<br><br>Ticket Price: $' .
                    number_format(getSingleSeatPrice($_SESSION['bookingInfo']['day'], 'FCA'), 2) .
                    '</div>';
            }

            for ($i = 0; $i < $_SESSION['bookingInfo']['numFCP']; $i++) {
                echo
                '<div class="singleTicket"><h4>First Class Pension</h4>
                Name: ' .
                    $_SESSION['bookingInfo']['name'] .
                    '<br>Email: ' .
                    $_SESSION['bookingInfo']['email'] .
                    '<br>Phone: ' .
                    $_SESSION['bookingInfo']['phone'] .
                    '<br><br>1x First Class Pension
                <br>Movie Code: ' . $_SESSION['bookingInfo']['movieID'] . '
                <br>' . $_SESSION['bookingInfo']['day'] . ' - ' . $_SESSION['bookingInfo']['time'] .
                    '<br><br>Ticket Price: $' .
                    number_format(getSingleSeatPrice($_SESSION['bookingInfo']['day'], 'FCP'), 2) .
                    '</div>';
            }

            for ($i = 0; $i < $_SESSION['bookingInfo']['numFCC']; $i++) {
                echo
                '<div class="singleTicket"><h4>First Class Child</h4>
                Name: ' .
                    $_SESSION['bookingInfo']['name'] .
                    '<br>Email: ' .
                    $_SESSION['bookingInfo']['email'] .
                    '<br>Phone: ' .
                    $_SESSION['bookingInfo']['phone'] .
                    '<br><br>1x First Class Child
                <br>Movie Code: ' . $_SESSION['bookingInfo']['movieID'] . '
                <br>' . $_SESSION['bookingInfo']['day'] . ' - ' . $_SESSION['bookingInfo']['time'] .
                    '<br><br>Ticket Price: $' .
                    number_format(getSingleSeatPrice($_SESSION['bookingInfo']['day'], 'FCC'), 2) .
                    '</div>';
            }
            ?>
        </div>
    </main>
<?php //clear session after relevant information is loaded.
$_SESSION['bookingInfo'] = array();
?>

</body>


<!-- <aside id="debug">
    <hr>
    <h3>Debug Area</h3>
    <pre>
GET Contains:
<?php //print_r($_GET) 
?>
POST Contains:
<?php //print_r($_POST) 
?>
SESSION Contains:
<?php //print_r($_SESSION) 
?> 
    </pre>
</aside> -->
       

</html>