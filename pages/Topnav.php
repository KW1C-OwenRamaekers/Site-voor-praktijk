<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topnav</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div>
        <ul id="topnav">
            <li class="topbar"><a href="index.php"> <img src="../images/logo.png" alt="Trainstation073.nl logo"></a></li>
            <li class="topbar"><a class="menu" href="pages/overons.php">Over ons</a></li>
            <li class="topbar"><a class="menu" href="pages/calcalc.php">Calorieën Calculator</a></li>
            <li class="topbar" id="time"><?php echo date('g:i A'); ?></li>
        </ul>
    </div>
</body>
</html>
