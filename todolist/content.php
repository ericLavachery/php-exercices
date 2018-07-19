<div>
    <h3>A faire</h3>
    <form class="" action="index.php" method="post">
    <?php
    foreach ($oldData as $value) {
        if ($value['done'] != 'yes') {
            $newLine = '<input type="checkbox" name="xxx" value="yes">';
            $newLine = $newLine . $value['task'] . "<br>";
            // echo key($oldData);
            echo $newLine;
        }
    }
    ?>

    <br>

        <button type="submit" name="fait">Enregistrer</button>
    </form>

    <h3>Déjà fait</h3>
    <?php
    foreach ($oldData as $value) {
        if ($value['done'] == 'yes') {
            $newLine = '<input type="checkbox" name="xxx" value="yes">';
            $newLine = $newLine . '<del>' . $value['task'] . '</del><br>';
            echo $newLine;
        }
    }
    ?>

</div>
