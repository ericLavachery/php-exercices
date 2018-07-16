<?php
    $videoGames = array("civilization", "GTA", "Quake", "kingdom rush", "Tetris", "shattered colony", "Doom", "pong", "Donkey Kong");
    function showGame($vGame) {
        echo ucwords($vGame) . "<br>";
    }
    function showYear() {
        echo "On est en " . date('Y') . "<br>";
    }
    function showDate() {
        // echo "Plus exactement : " . date('d') . "/" . date('m') . "/" . date('Y') . " " . date('H') . ":" . date('i') . ":" . date('s');
        echo date('d/m/Y H:i:s') . "<br>";
    }
    function addition($a, $b) {
        if (is_int($a) && is_int($b)) {
            echo $a . "+" . $b . "=" . ($a + $b) . "<br>";
        } else {
            echo "Erreur, argument non numérique! <br>";
        }
    }
    function acronIt($a) {
        echo $a . " = ";
        echo strtoupper(preg_replace('/\b(\w)|./', '$1', $a)) . "<br>";
    }
    function aeReplace($a) {
        // echo $a . ' devient ' . preg_replace('/ae/', '&aelig;', $a) . "<br>";
        echo $a . ' devient ' . str_replace('ae', '&aelig', $a) . "<br>";
    }
    function aeligReplace($a) {
        echo $a . ' devient ' . str_replace('æ', 'ae', $a) . "<br>";
    }
    function feedback($message, $class) {
        if (isset($class)) {
            $modClass = $class;
        } else {
            $modClass = 'info';
        }
        echo '<div class="' . $modClass . '">' . $message . '</div>';
    }
    function aleaMots() {
        $alphabet = 'azertyuiopqsdfghjklmwxcvbn';
        $numLetters1 = rand(1,5);
        $numLetters2 = rand(7,15);
        $mot1 = '';
        $x = 1;
        while($x <= $numLetters1) {
            $mot1 = $mot1 . $alphabet[rand(0,25)];
            $x = $x+1;
        }
        $mot2 = '';
        $x = 1;
        while($x <= $numLetters2) {
            $mot2 = $mot2 . $alphabet[rand(0,25)];
            $x = $x+1;
        }
        echo 'Deux mots nawaks : ' . $mot1 . ' ' . $mot2 . '<br>';
    }
    function volumeCone($rayon, $hauteur) {
        $volume = $rayon * $rayon * 3.1416 * $hauteur * (1/3);
        return $volume;
    }
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Challenge 1</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <h1>Bonjour <?php echo $_GET['nom']; ?>!</h1>

        <?php
        $lengthX = count($videoGames);
        $x = 0;
        while($x <= $lengthX) {
            showGame($videoGames[$x]);
            $x = $x+1;
        }
        showYear();
        showDate();
        addition(7,4);
        addition('boudin',64);
        acronIt('Merci encore, Rudy Demol');
        aeReplace('sphaerotheca');
        aeligReplace('sphærotheca');
        feedback('Ta braguette est ouverte', 'warning');
        feedback("Attention, t'as oublié de mettre une classe");
        aleaMots();
        echo "Le volume d'un cône de rayon 4 et hauteur 2 est : " . volumeCone(4,2) . '<br>';
        ?>

    </body>
</html>
