<html lang="nl">
<!--

Name: Owen Ramaekers
Date: 20/2/2024 - 7/3/2024

-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainstation073.nl</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="scripts/script.js"></script>
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
    <div id="banner">
        <img src="images/header01.png" alt="header 1" class="imgslideshow">
        <img src="images/header02.png" alt="header 2" class="imgslideshow">
        <img src="images/header03.png" alt="header 3" class="imgslideshow">
    </div>
    <?php include ('pages/article.php'); ?>
</body>
</html>