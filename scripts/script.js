function createToDo() {
    var todo = document.getElementById("todo-input");
    var todoValue = todo.value;
    if (todoValue === '' || todoValue.length < 5)  {
        var msgConsole = document.getElementById('msg-console');
        msgConsole.innerHTML = "Please write the todo content";
        msgConsole.className = 'error';
        return;
    }

    var data = {todo: todo.value};
    $.ajax({
        method: 'POST',
        url: 'http://localhost:8888/php/tests/includes/Insert.php',
        success: success,
        data: data,
        error: error
    });

}

function success(response) {
    console.log(response);
    var msgConsole = document.getElementById('msg-console');
    msgConsole.innerHTML = "Success";
    msgConsole.className = 'success';
    getToDo();
}

function error(resp) {
    console.log('error');
    var msgConsole = document.getElementById('msg-console');
    msgConsole.innerHTML = "Network Error";
    msgConsole.className = 'error';
}

function getToDo() {
    $.ajax({
        method: 'GET',
        url: 'http://localhost:8888/php/tests/includes/Output.php',
        success: successOutput,
        error: error
    });
}

function successOutput(response) {
    var todoList = JSON.parse(response);
    // console.log(todoList);
    var todoCont = document.getElementById('output');
    todoCont.innerHTML = '';

    for (var key in todoList) {
        console.log(todoList[key]);
        todoCont.innerHTML += '<br>' + todoList[key];
    }
}

// this is new feature
// test test test,
// fix some new bugs