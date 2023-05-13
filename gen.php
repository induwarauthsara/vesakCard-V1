<?php
// Prevent Get request from XSS attack
if (isset($_GET['from'])) {
    $from = $_GET['from'];
    $from = htmlspecialchars($from);
} else {
    $from = "Induwara Uthsara";
}

// to
if (isset($_GET['to'])) {
    $to = $_GET['to'];
    $to = htmlspecialchars($to);
} else {
    $to = "You";
}

//card
if (isset($_GET['card'])) {
    $card = $_GET['card'];
    $card = htmlspecialchars($card);
} else {
    $card = "V01";
}

if ($card == "V01") {
    $vcard = "1.jpg";
} elseif ($card == "V02") {
    $vcard = "2.jpg";
} elseif ($card == "V03") {
    $vcard = "3.jpg";
} elseif ($card == "V04") {
    $vcard = "4.jpg";
} elseif ($card == "V05") {
    $vcard = "5.jpg";
} elseif ($card == "V06") {
    $vcard = "6.jpg";
} elseif ($card == "V07") {
    $vcard = "7.jpg";
} elseif ($card == "V08") {
    $vcard = "8.jpg";
} elseif ($card == "V09") {
    $vcard = "9.jpg";
} elseif ($card == "V10") {
    $vcard = "10.jpg";
}

/* Curent Link gen */
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


$share_link = "http://induwara.rf.gd/vesak/gen.php?from=" . $from . "%26to=" . $to . "%26card=" . $card;

$fullUrl = 'http';
if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
    $fullUrl .= "s";
}
$fullUrl .= "://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$share_link = urlencode($fullUrl);

/*  $q = urlencode($from."&to=".$to."&card=".$card);

    $en=

  $share_link = "http://induwara.rf.gd/Vesak/gen.php?from=".$q; 

 if (isset($_GET['s'])){ $de = urldecode($s);} */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Happy Vesak,
        <?php echo $to; ?>
    </title>
    <link rel="stylesheet" href="flip.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">

</head>

<body>

    <center>
        <header>
            <a href="index.php" style="color:black; background:white; padding:0px 8px; display:flex; border-radius:8px;"> Create New Card </a>
            <span style="color:black;"> Happy Vesak, <?php echo $to; ?>...! </span>
            <div class="ep"></div>
        </header> <br>
        <div class="container">
            <div>
                <span style="font-weight: bold;"> From :</span>
                <?php echo $from; ?>
            </div>
            <div>
                <span style="font-weight: bold;"> To :</span>
                <?php echo $to; ?>
            </div>

            <div class="flip-card card">
                <div class="flip-card-inner card">
                    <div class="flip-card-front card">
                        <img src="<?php echo $vcard; ?>" alt="Avatar" style="width: 490px; height: 300px" class="vesak-card-front-image" />
                    </div>
                    <div class="flip-card-back card">
                        <br>
                        <h1>Happy Vesak...!</h1>
                        <flex>
                            <img class="vesak-card-back-image" src=" art.svg">
                            <div class="fromTo">
                                <p>
                                    <span class="bold"> From :</span> <br>
                                    <?php echo $from; ?>
                                </p>
                                <br>
                                <p>
                                    <span class="bold"> To :</span> <br>
                                    <?php echo $to; ?>
                                </p>
                            </div>
                        </flex>
                    </div>
                </div>
            </div>
            (click card to rotate)
        </div>
        </div>
        <br />
        <button class="share">

            <a href="https://api.whatsapp.com/send?text=<?php echo $share_link; ?>" data-action="share/whatsapp/share" target="_blank">
                <img src="whatsapp.png" alt="whatsapp" style="width:20px !important; height:20px !important;" />
                Share Card with Friend via Whatsapp
            </a>
        </button>
        </div>
    </center>
</body>
<?php include('fotter.php') ?>

</html>