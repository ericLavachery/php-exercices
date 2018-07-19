<p>
    <a href="index.php?nom=Oussama" class="<?php if ($teou == "index" && $_GET['nom'] != 'Bob') {echo "here";} else {echo "there";} ?>">Accueil</a> &nbsp;|&nbsp;
    <a href="sorry.php" class="<?php if ($teou == "sorry") {echo "here";} else {echo "there";} ?>">Générateur d'excuses</a> &nbsp;|&nbsp;
    <a href="index.php?nom=Bob" class="<?php if ($teou == "index" && $_GET['nom'] == 'Bob') {echo "here";} else {echo "there";} ?>">Moi c'est Bob, pas Oussama</a> &nbsp;|&nbsp;
    <a href="tests.php" class="<?php if ($teou == "tests") {echo "here";} else {echo "there";} ?>">Tests</a>
</p>
