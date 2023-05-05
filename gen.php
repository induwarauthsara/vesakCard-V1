<?php
$from = $_GET['from'];
$to = $_GET['to'];
$card = $_GET['card'];
$vcard = "V01";

if ($to == "g") {
    $vcard = "1.jpg";
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
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">

</head>

<body>

    <center>
        <header>
            <a href="http://induwara.rf.gd/vesak/" style="color:black; background:white; padding:0px 8px; display:flex; border-radius:8px;"> Home </a>
            <span style="color:black;"> Happy Vesak, <?php echo $to; ?>...! </span>
            <div class="ep"></div>
        </header> <br>
        <div class="main">
            <?php echo "From : " . $from . "<br>";
            echo "To : " . $to . "<br /><br />"  ?>
            <div class="content">
                <?php

                echo "<div class='one'>   <div class='dd'> ";
                echo "<img src='" . $vcard . "' />"; ?></div>
            <br>
            <div class="back">
                <h3>Happy Vesak...!</h3>
                <p>
                    From :
                    <?php echo $from; ?>
                </p>
                <p>
                    To :
                    <?php echo $to; ?>
                </p>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo $vcard; ?>" alt="Avatar" style="width: 490px; height: 300px" />
                </div>
                <div class="flip-card-back">
                    <h1>Happy Vesak...!</h1>
                    <p>
                        From :
                        <?php echo $from; ?>
                    </p>
                    <p>
                        To :
                        <?php echo $to; ?>
                    </p>
                </div>
            </div>
        </div>
        <br /> (click card to rotate)
        </div>
        </div>
        <br />
        <a href="https://api.whatsapp.com/send?text=<?php echo $share_link; ?>" class="share" data-action="share/whatsapp/share" target="_blank">
            Share Link With Friends
        </a>

    </center>
</body>
<?php include('fotter.php') ?>

</html>