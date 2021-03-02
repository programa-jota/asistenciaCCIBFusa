<?php

include("includes/header.php");
   

if (isset($_POST["save_new_asistencia"] )){
    
    include("db.php");
    session_start();
    $curso = $_SESSION['curso'];
    $estudiante = $_POST['estudiante'];
    $date = $_SESSION['fecha'];
    $asignatura = $_SESSION['asignatura'];
    $docente =  $_SESSION['docente'];
    $tema = $_SESSION['tema'];
    $zoom = $_POST['zoom']; 
    $camara = $_POST['camara'];
    $audio = $_POST['audio'];
    $participacion = $_POST['participacion'];
    $recursos = $_SESSION['recursos'];
    
    // inserto los datos. SUMAMENTE IMPORTANTE que TODOS los campos en el INSERT INTO esten bien escritos
   
    $sql = "INSERT INTO asistencia(curso,estudiante,fecha,asignatura,docente,tema,zoom,camara,audio,participacion,recursos) 
    VALUES( '$curso','$estudiante', '$date', '$asignatura', '$docente', '$tema', '$zoom','$camara','$audio','$participacion','$recursos')";
    mysqli_query($conn, $sql);

    

    // if (mysqli_query($conn, $sql)) {
    //               echo "New record created successfully";
    //             } else {
    //               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //             }
     
    // if($curso === "Jardin"){

    header("Location: nuevaAsistencia.php");

    // }else

       
}


?>


