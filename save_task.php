<?php

include("db.php");

if (isset($_POST['save_task'])) {

    
    $title = $_POST['title'];
    $descripcion = $_POST['description'];

    if (empty($title) || empty($descripcion)) {
        $_SESSION['message'] = 'Por favor!! Complete los campos para Guardar';
        $_SESSION['message_type'] = 'warning';
    } else {
    
        $query = "INSERT INTO task (nombre, descripcion) VALUES ('$title', '$descripcion')";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die ('failed');
        }

        $_SESSION['message'] = 'Tarea guardada satisfactoriamente!!';
        $_SESSION['message_type'] = 'success';
    }

    header("Location: index.php");

}



?>