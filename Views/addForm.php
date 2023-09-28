<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>
    <ul>
        <a href="index.php"><li>Accueil</li></a>
        <a href="index.php?page=addTask"><li>Add task</li></a>
    </ul>
    <h1>vue de add form</h1>

    <form method="POST" id="taskForm">
         <input type="text" id="taskName" name="taskName" placeholder="Nom de la tâche" required>
         <input type="submit" name="submit" value="enregistrer">
    </form>

    <script src="script/script.js"></script>
</body>
</html>