<?php
if(file_exists('todo.json'))
{
    if (isset($_POST['task'])) {
        $oldDataJSON = file_get_contents('todo.json');
        $oldData = json_decode($oldDataJSON, true);
        // var_dump($oldData);
        // echo "<br><br>";
        $firstTask['task'] = $_POST['task'];
        $firstTask['done'] = $_POST["done"];
        $extraData[1] = $firstTask;
        // var_dump($extraData);
        // echo "<br><br>";
        $updatedData = array_merge($oldData,$extraData);
        // var_dump($updatedData);
        // echo "<br><br>";
        $updatedDataJSON = json_encode($updatedData);
        if(file_put_contents('todo.json', $updatedDataJSON)){
            $addMessage = "<p>Tâche rajoutée!</p>";
        }
    }
}
else
{
    $firstTask['task'] = 'Aquaponey';
    $firstTask['done'] = 'yes';
    $baseTask[0] = $firstTask;
    file_put_contents('todo.json', json_encode($baseTask));
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

</body>
</html>
