<?php
   
   if (isset($_POST["save_asistencia"]  )){
        #abro la base de datos
        include("db.php");  
                          
        $curso = $_POST['curso'];
        $date = $_POST['fecha'];
        $asignatura = $_POST['asignatura'];
        $docente = $_POST['docente'];
        $recursos = $_POST['recursos'];
        $tema = $_POST['tema_de_clase'];

                    
        #inserto los datos 
        $sql = "INSERT INTO principal(curso,fecha,asignatura,docente,recursos,tema) VALUES ('$curso','$date','$asignatura','$docente','$tema','$recursos')";
        mysqli_query($conn, $sql);
        // CODIGO PARA VERIFICAR QUE LOS DATOS SE ENVIARON 
            if (mysqli_query($conn, $sql)) {
              echo "New record created successfully";
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
 
          }
        // header("Location: save_task.php");    
        
        
//    } elseif (isset($_POST["savepar"])){
//         $curso = $_POST['curso'];
//         $date = $_POST['fecha'];
//         $asignatura = $_POST['asignatura'];
//         $docente = $_POST['docente'];
//         $recursos = $_POST['recursos'];
//         $tema = $_POST['tema_de_clase'];
//     }
  
   
?>