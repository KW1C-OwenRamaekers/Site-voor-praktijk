<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="../css/calc.css">
    <link rel="stylesheet" href="../css/topnav.css">
    <script>
        function popup(url) {
          window.open(url, 'popup', 'width=600,height=600');
        }
    </script>
</head>
<body>
    <?php include ('Topnav.php'); ?>
    <article id="calc">
    <h1>Calorie Calculator</h1>
    <form action="calc_result.php" method="post" target="popup" onsubmit="popup(this.getAttribute('action'))">
    <p>Geslacht:
        <input type="radio" name="gender" value="male"> man
        <input type="radio" name="gender" value="female"> vrouw
    </p>
    <p>Leeftijd: <input type="number" name="age" min="10" max="100"></p>
    <p>Hoe vaak per week traint u? <select name="frequency">
        <option value="0">niet
        <option value="1">1 keer
        <option value="2">2 keer
        <option value="3">3 keer
        <option value="4">4 keer
        <option value="5">5 keer
        <option value="6">6 keer
        <option value="7">elke dag
    </select></p>
    <p><input type="submit" value="Bereken"></p>
    </form>
    </article>
    </body>
</html>
