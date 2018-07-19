<?php
if(file_exists('todo.json'))
{
    $oldDataJSON = file_get_contents('todo.json');
    $oldData = json_decode($oldDataJSON, true);
    if (isset($_POST['task']) && $_POST['task'] != "") {
        // foreach ($oldData as $value) {
        //     $lastKey = key($oldData);
        // }
        // $nextKey = $lastKey+1;
        $firstTask['task'] = $_POST['task'];
        $firstTask['done'] = $_POST["done"];
        $extraData[0] = $firstTask;
        $updatedData = array_merge($oldData,$extraData);
        $updatedDataJSON = json_encode($updatedData);
        if(file_put_contents('todo.json', $updatedDataJSON)){
            $addMessage = "<p>Tâche rajoutée!</p>";
        }
        $oldData = $updatedData;
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
    <br><hr><br>
    <?php include 'form.php' ?>

</body>
</html>
