<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Uitkomst</title>
    <link rel="stylesheet" href="../css/calc.css">
</head>
<body>
    <h1 class="result" class="error">Uitkomst</h1>
    <?php
    if (isset($_POST['gender'], $_POST['age'], $_POST['frequency'])) {
        $gender = $_POST['gender'];
        $age = (int)$_POST['age'];
        $frequency = (int)$_POST['frequency'];
        $result = '';}

        if ($gender === 'male') {
            if ($age <= 16 && $age >= 0) {
                $result = 'U bent te jong voor de sportschool.';
            } else {
            if ($age >= 16 && $age <= 39) {
                if ($frequency === 0) {
                    $result = 'U zou minimaal 3 keer per week moeten trainen.';
                } elseif ($frequency === 1) {
                    $result = 'U heeft te weinig Trainingen.';
                }
            } elseif ($age >= 40 && $age <= 59) {
                if ($frequency === 0) {
                    $result = 'U zou minimaal 2 keer per week moeten trainen.';
                } elseif ($frequency === 1) {
                    $result = 'U heeft goed gefit.';
                } elseif ($frequency === 2) {
                    $result = 'U heeft een te hoge trainingspoor.';
                }
            } elseif ($age >= 60) {
                if ($frequency === 0) {
                    $result = 'U moet minimaal 1 keer per week trainen.';
                } elseif ($frequency === 1) {
                    $result = 'U heeft goed gefit.';
                }
            }
        } if ($gender === 'female') {
            if ($age <= 16 && $age >= 0) {
                $result = 'U bent te jong voor de sportschool.';
            } else {
            }
            if ($age >= 16 && $age <= 39) {
                if ($frequency === 0) {
                    $result = 'U moet minimaal 2 keer per week trainen.';
                } elseif ($frequency === 1) {
                    $result = 'U heeft een te laag trainingspoor.';
                } elseif ($frequency === 2) {
                    $result = 'U heeft goed gefit.';
                } elseif ($frequency === 3) {
                    $result = 'U heeft te veel Trainingen.';
                }
            } elseif ($age >= 40 && $age <= 59) {
                if ($frequency === 0) {
                    $result = 'U moet minimaal 1 keer per week trainen.';
                } elseif ($frequency === 1) {
                    $result = 'U heeft goed gefit.';
                }
            } elseif ($age >= 60) {
                if ($frequency === 0) {
                    $result = 'U moet minimaal 1 keer per week trainen.';
                } elseif ($frequency === 1) {
                    $result = 'U heeft goed gefit.';
                }
            }
        }

        echo "<p class='result'>$result</p>";
    }
    ?>
</body>
</html>