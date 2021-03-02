<?php include("db.php") ?>
<?php include("includes/header.php") ?>
<!-- ------------------------------Header--------------------------------------------------------- -->
<?php

if(isset($_POST['selectCurso'])){
 
  
  $curso = $_POST['curso'];
  

  if($curso === 'Jardin'){

    header("Location: jardin.php");

  }elseif($curso === 'Transicion'){
    
    header("Location: Transicion.php");

  }
  
};


?>



<!-- ---------------------------------Footer------------------------------------------------------ -->
<?php include("includes/footer.php") ?>