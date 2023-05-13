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

<body>
    <div class="container">
        <form action="gen.php" method="GET">
            <h1>Send Vesak Card to Your Friends </h1>

            <label for="from">From:</label>
            <input type="text" id="from" name="from" placeholder="Enter your name" pattern="[^()/<>[\]\\,'|\x22]+" required>
            <label for="to">To:</label>
            <input type="text" id="to" name="to" placeholder="Enter recipient's name" pattern="[^()/<>[\]\\,'|\x22]+" required>
            <label for="cards">Select a Vesak Card No. : </label>
            <select id="cards" name="n" required>
                <option value="" disabled selected>Select a card</option>
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
            <button id="check-list"> <a href="card.php" target="_blank">(Check Vesak Card List)</a></button>
            <button type="submit" id="submit" name="submit" value="Submit">Create Card</button>
        </form>

    </div>
    <?php include('fotter.php')

    ?>


</body>

</html>