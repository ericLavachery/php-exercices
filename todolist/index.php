

<?php
if (isset($_POST['task'])) {

    if(file_exists('todo.json'))
    {
        // $oldData = array();
        $oldDataJSON = file_get_contents('todo.json');
        $oldData = json_decode($oldDataJSON, true);
        var_dump($oldData);
        echo "<br><br>";
        $extraData = array(
            'task' => $_POST['task'],
            'done' => $_POST["done"],
            'edit' => $_POST["edit"]
        );
        var_dump($extraData);
        echo "<br><br>";
        // $oldData[] = $extraData;
        $updatedData = array_merge($oldData,$extraData);
        var_dump($updatedData);
        echo "<br><br>";
        $updatedDataJSON = json_encode($updatedData);
        // if(file_put_contents('todo.json', $updatedDataJSON)){
        //     $addMessage = "<p>Tâche rajoutée!</p>";
        // }
    }
    else
    {
        file_put_contents('todo.json', json_encode($_REQUEST));
    }

}
?>



<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>ToDoList : Gestionnaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>To Do List</h1>

    <?php include 'content.php' ?>
    <?php include 'form.php' ?>

    <br><br>
    <?php echo json_encode($_REQUEST) ?>

</body>
</html>
