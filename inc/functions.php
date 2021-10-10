<?php
//require_once('db.php');

function get_data($tid){
    require_once('db.php');
    $stmt = $conn->prepare('SELECT id, nombre, rut, trabajo, detalles, estado FROM trabajos WHERE id = ?');
    $stmt->bind_param('s', $tid);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();
    $stmt->close();
    $conn->close();
    return $row;
}

function get_rut($rut){
    require_once('db.php');
    $query = "SELECT id, nombre, rut, trabajo, detalles, estado FROM trabajos WHERE rut = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $rut);
    $stmt->execute();
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();
    $stmt->close();
    $conn->close();
    return $row;
}




?>
