<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8888/php/tests/styles/style.css">
</head>
<body>
<div id="msg-console"></div>
<div class="container">
    <h1>To Do List</h1>
    <input name="todo" id="todo-input" placeholder="add a task">
    <input type="submit" value="create" onclick="createToDo()">

    <div class="box"><input type="button" value="Refresh" onclick="getToDo()"/></div>
    <div id="output">

    </div>
</div>
<script src="scripts/jquery.min.js" crossorigin="anonymous"></script>
<script src="scripts/script.js"></script>
</body>
</html>