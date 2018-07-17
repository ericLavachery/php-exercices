<?php
$teou = 'sorry';
function motExcuse() {
    if (isset($_POST['enfant'])) {
        $enfant = $_POST['enfant'];
    } else {
        $enfant = 'Bob Junior';
    }
    $gf = $_POST['gf'];
    $prof = $_POST['prof'];
    $pres = $_POST['pres'];
    $excuse = $_POST['excuse'];
    $wholeText = '';
    if ($pres == 'Madame') {
        $wholeText = $wholeText . 'Chère Madame ';
    } else {
        $wholeText = $wholeText . 'Cher Monsieur ';
    }
    $wholeText = $wholeText . $prof . ',<br><br>';
    if ($gf == 'f') {
        $wholeText = $wholeText . 'La petite ';
    } else {
        $wholeText = $wholeText . 'Le petit ';
    }
    $wholeText = $wholeText . $enfant . " n'a pas pu se rendre à l'école hier, car ";
    switch ($excuse) {
        case 'maladie':
        if ($gf == 'f') {
            $wholeText = $wholeText . 'elle ';
        } else {
            $wholeText = $wholeText . 'il ';
        }
        $wholeText = $wholeText . 'avait le cancer. <br>';
        break;
        case 'deces':
        $wholeText = $wholeText . "sa maman est à nouveau morte dans d'attroces souffrances. <br>";
        break;
        case 'activite':
        if ($gf == 'f') {
            $wholeText = $wholeText . 'elle ';
        } else {
            $wholeText = $wholeText . 'il ';
        }
        $wholeText = $wholeText . "avait aquaponey. <br>";
        break;
        case 'demotivation':
        $wholeText = $wholeText . "sa démotivation avait atteint un niveau hors de contrôle. <br>";
        break;
        case 'principe':
        $wholeText = $wholeText . "votre enseignement c'est de la merde en barquette pour ";
        if ($gf == 'f') {
            $wholeText = $wholeText . 'pucelle dégénérée. <br>';
        } else {
            $wholeText = $wholeText . 'puceau dégénéré. <br>';
        }
        break;
        default:
        $wholeText = $wholeText . "il s'est perdu dans la jungle. <br>";
        break;
    }
    $wholeText = $wholeText . "<br>Je vous prie de bien vouloir agréer, ";
    if ($pres == 'Madame') {
        $wholeText = $wholeText . 'Madame, ';
    } else {
        $wholeText = $wholeText . 'Monsieur, ';
    }
    $wholeText = $wholeText . "l’expression de mes honnêtes et respectueuses salutations.<br><br> Bob Roberts";

    return $wholeText;
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Sorry : Le générateur d'excuses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navig.php'; ?>

    <h1>Générateur d'excuses</h1>

    <form class="" action="sorry.php" method="post">
        <select class="" name="gf">
            <option value=""></option>
            <option value="f"<?php if ($_POST['gf'] == "f") {echo " selected";} ?>>La petite</option>
            <option value="g"<?php if ($_POST['gf'] == "g") {echo " selected";} ?>>Le petit</option>
        </select>
        <input type="text" name="enfant" value="<?php echo $_POST['enfant'] ?>" placeholder="Enfant"><br>
        <select class="" name="pres">
            <option value=""></option>
            <option value="Madame"<?php if ($_POST['pres'] == "Madame") {echo " selected";} ?>>Madame</option>
            <option value="Monsieur"<?php if ($_POST['pres'] == "Monsieur") {echo " selected";} ?>>Monsieur</option>
        </select>
        <input type="text" name="prof" value="<?php echo $_POST['prof'] ?>" placeholder="Prof"><br>
        <br>
        <input type="radio" name="excuse" value="maladie"<?php if ($_POST['excuse'] == "maladie") {echo " checked";} ?>>Maladie<br>
        <input type="radio" name="excuse" value="deces"<?php if ($_POST['excuse'] == "deces") {echo " checked";} ?>>Décès<br>
        <input type="radio" name="excuse" value="activite"<?php if ($_POST['excuse'] == "activite") {echo " checked";} ?>>Activité extra-scolaire<br>
        <input type="radio" name="excuse" value="demotivation"<?php if ($_POST['excuse'] == "demotivation") {echo " checked";} ?>>Démotivation<br>
        <input type="radio" name="excuse" value="principe"<?php if ($_POST['excuse'] == "principe") {echo " checked";} ?>>Question de principe<br>
        <br>
        <button type="submit" name="button" value="Go!">Go!</button>
    </form>
    <br>
    <div class="excuses">
        <?php if (isset($_POST['prof'])) {echo motExcuse();} ?>
    </div>
</body>
</html>
