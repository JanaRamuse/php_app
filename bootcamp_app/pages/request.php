<?php
header('Content-Type: application/json');
$data = $_REQUEST;

if (isset($data['action'])) {
    if ($data['action'] == 'get'){
        echo get();
    }
    elseif ($data['action'] == 'update' && isset($data['todos'])){
        echo update($data['todos']);
    }
    else {
        echo error("wrong data");
    }
}
else {
    echo error();
}


function update($todos) {
    include_once "../bootcamp_app/classes/Todo.php";
    $todo_manager = new Todo('todo-tasks');
    $last_todo = $todos[count($todos) - 1];
    $todo_manager->setData($last_todo['text'], $last_todo['status']);

    $file_name = '../bootcamp_app/json_database.json';
    file_put_contents($file_name, json_encode($todos));
    return json_encode([
        'status' => 'success',
        'message' => 'data saved',
        'debug' => $todo_manager->last_message
    ]);
}

function get() {
    $file_name = '../bootcamp_app/json_database.json';
    if (file_exists($file_name)) {
        return json_encode([
            'status' => 'success',
            'data' => file_get_contents($file_name)
        ]);
    }
    return error('DB file does not exist');
}

function error($msg = 'wrong request') {
    return json_encode([
        'status' => 'error',
        'message' => $msg
    ]);
}
