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
        <h3>Here are the tickets of yours that we found!</h3>

        <?php receiveBookings(); ?>

        <footer>
            <div>
                Lunardo
                <br> 0338 248 650
                <br>info@lunardo.com.au
                <br><br>
                Please bring your receipt and tickets with you on your selected day (shown on tickets).
            </div>
        </footer>
        </div>
    </main>

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