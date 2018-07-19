<?php
$teou = 'index';
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
$famille = array('Eric', 'Zazie', 'Vincent', 'Anaïs', 'Eva', 'Mika', 'Beathe', 'Philippe', 'Suzanne', 'Zanga', 'Quentin', 'Chantal', 'Michel', 'Frédéric', 'Thomas', 'Marcelle');
$team['vc'] = 'Vincent Company';
$team['eh'] = 'Eden Hazard';
$team['mp'] = 'Manneken Pis';
$moi['firstName'] = 'Eric';
$moi['lastName'] = 'Lavachery';
$moi['foot'] = FALSE;
$moi['yearBirth'] = 1965;
$moi['hobbies'] = array('MMA', 'Cinéma', 'Politique', 'Musique');
$papa['firstName'] = 'Michel';
$papa['lastName'] = 'Lavachery';
$papa['foot'] = FALSE;
$papa['yearBirth'] = 1936;
$papa['hobbies'] = array('Bois', 'Animaux', 'Art');
$moi['papa'] = $papa;
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>PHP Challenge 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navig.php'; ?>

    <h1>Bonjour <?php echo $_GET['nom']; ?>!</h1>

    <?php
    $lengthX = count($videoGames);
    $x = 0;
    while($x < $lengthX) {
        showGame($videoGames[$x]);
        $x = $x+1;
    }
    ?>
    <h3>Exercices FUNCTIONS</h3>
    <?php
    showYear();
    showDate();
    addition(7,4);
    addition('boudin',64);
    acronIt('Merci encore, Rudy Demol');
    aeReplace('sphaerotheca');
    aeligReplace('sphærotheca');
    feedback('Ta braguette est ouverte', 'warning');
    feedback("Attention, t'as oublié de mettre une classe","");
    aleaMots();
    echo "Le volume d'un cône de rayon 4 et hauteur 2 est : " . volumeCone(4,2) . '<br>';
    ?>
    <h3>Exercices ARRAYS</h3>
    <pre><?php print_r ($famille); ?></pre>
    <?php echo $team['mp']; ?>
    <pre><?php print_r ($moi); ?></pre>
    <p>
        Il se passe quoi maintenant si je rajoute un élément au tableau "$papa" dont la clef est "fils" et qui équivaut à "$moi"?<br>
        Une brèche dans l'espace-temps?
    </p>
    <p><?php echo "Papa a " . count($papa['hobbies']) . " hobbies. Mais on s'en fout vu que tout le monde va tomber dans la brèche." ?></p>
    <?php $moi['lastName'] = "M'Bala M'Bala"; print_r ($moi); ?>
    <p>Pas peu fier de porter ce nouveau nom de famille :)</p>
</body>
</html>
