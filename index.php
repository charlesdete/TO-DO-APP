<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <title>TO-DO LIST APP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <div class="container">
        <div class="todo-app">
            <h2>To-Do List <img src="images/todo.png" alt=""></h2>

            <div class="row">
                <input type="text" id="input-box" placeholder="">
                <label for="task">Add your task</label>
                <button onclick="addTask()">Add</button>
            </div>

            <ul id="list-container">
                <!-- <li class="checked">Task1</li>
                <li>Task2</li>
                <li>Task3</li>
                <li>Task4</li> -->

            </ul>
        </div>
    </div>

<script src="script.js"></script>
    </body>
</html>