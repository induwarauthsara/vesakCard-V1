<?php

if (isset($_POST['submit'])) {

    $to = $_POST['to'];
    $from = $_POST['from'];
    $n = $_POST['n'];
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


    /*

$query_string = 'from=' . urlencode($from) . '&to=' . urlencode($to) . '&card=' . urlencode($n);
echo '<a href="mycgi?' . htmlentities($query_string) . '">';

*/

    $gen = "http://induwara.rf.gd/vesak/gen.php?from=" . $from . "&to=" . $to . "&card=" . $n;




    /* get data */
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'] . "\r\n";
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'] . "\r\n";
    } else {
        $ipaddress = $_SERVER['REMOTE_ADDR'] . "\r\n";
    }
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $date = date("m-d-Y");
    $time = date("H:i:s");
    $clock = $date . ' at ' . $time;

    $text = "\n" . "From : " . $from . "\n" . "To   : " . $to . "\n" . "Card : " . $n . "\n" . "IP   : " . $ipaddress . "Browser: " . $browser .   "\n" .  "Time : " . $clock .   "\n" . "--------------------------" . "\n";
    $fp = fopen('ttt.txt', 'a+');

    if (fwrite($fp, $text)) {
    }
    fclose($fp);
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Vesak</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">

</head>




<img src="v.svg" alt="" width="60px" style="position:absolute; left: 5px; top:60px;">
<img src="v.svg" alt="" width="60px" style="position:absolute; right: 5px; top:60px;">

<center>
    <h1>..:: Happy Vesak ::..</h1>

    <back> </back>


    <form action="" method="POST">
        <h2>Send Vesak Card to Your Friends </h2>

        <div> <label for="from">From :</label><br><input type="text" name="from" id="from" placeholder="Your Name" pattern="[^()/<>[\]\\,'|\x22]+" required> </div>
        <div class="empty"></div>
        <div> <label for="to">To :</label><br><input type="text" name="to" id="to" placeholder="Your Friend's Name" pattern="[^()/<>[\]\\,'|\x22]+" required> </div>
        <div><br> <label for="n" id="CN">Vesak Card Design No.</label>
            <select name="n" id="n" required>
                <option value="V01">V01</option>
                <option value="V02">V02</option>
                <option value="V03">V03</option>
                <option value="V04">V04</option>
                <option value="V05">V05</option>
                <option value="V06">V06</option>
                <option value="V07">V07</option>
                <option value="V08">V08</option>
                <option value="V09">V09</option>
                <option value="V10">V10</option>
            </select>
        </div>
        <div class="empt"></div>
        <div>
            <a href="card.php" target="_blank" class="button">
                <span> Vesak Card list </span>
            </a>
        </div> <br>
        <div class="empt">
            <div class="empt"></div>
        </div>
        <div><input type="submit" id="submit" name="submit" value="Submit" class="wrapper"> </div>
    </form>
    <div id="link">
        <div class="txt">Your Link: </div>
        <a style="color:white;" href="<?php echo $gen; ?>">
            <p id="gen">
                <?php if (isset($_POST["submit"])) {
                    echo $gen;
                }      ?>
        </a>
        </p>
    </div>
</center>
<?php include('fotter.php') ?>


</body>

</html>