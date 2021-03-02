<?php include("db.php") ?>
<?php include("includes/header.php") ?>
<!-- ------------------------------Header--------------------------------------------------------- -->

<div class="container">

<div class="row abs-center mt-n1">

    <div class="col-md-7">

        <div class="card card-body ">
            <form method="POST" action="tomaDeAsistencia.php?">
<!-- Fecha -->
                <div class="form-group" >
                    <input type="date" name="fecha" class="form-control pointer  " >
                </div>
<!-- Materia -->
                <div class="form-group pt-2">
                    <select class="form-control pointer" name="asignatura">
                    <option selected>Selecciona asignatura</option>
                    <option value="Artistica">Artistica</option>
                    <option value="Biologia">Biologia</option>
                    <option value="C.Lectora">C.Lectora</option>
                    <option value="C.Naturales">C.Naturales</option>
                    <option value="C.Politica">C.Politica</option>
                    <option value="C.Sociales">C.Sociales</option>
                    <option value="E.Ambiental">E.Ambiental</option>
                    <option value="E.Ambiental">E.Cristiana</option>
                    <option value="E.Fisica">E.Fisica</option>
                    <option value="Escritura">Escritura</option>
                    <option value="Español">Español</option>
                    <option value="Estadistica">Estadistica</option>
                    <option value="Filosofia">Filosofia</option>
                    <option value="Fisica">Fisica</option>
                    <option value="Geografia">Geografia</option>
                    <option value="Geometria">Geometria</option>
                    <option value="Historia">Historia</option>
                    <option value="Ingles">Ingles</option>
                    <option value="Lectura">Lectura</option>
                    <option value="Matematicas">Matematicas</option>
                    <option value="T.Ciencias">T.Ciencias</option>
                    <option value="T.Español">T.Español</option>
                    <option value="T.Matematicas">T.Matematicas</option>
                    <option value="Tecnologia">Tecnologia</option>
                    </select>
                </div>
<!-- Docente -->
                <div class="form-group pt-2">
                    <select class="form-control pointer" name="docente">
                    <option selected>Selecciona Docente</option>
                    <option value="Camila">Camila</option>
                    <option value="Elizabeth">Elizabeth</option>
                    <option value="Jhon Parra">Jhon Parra</option>
                    <option value="Jonh Jairo Cardenas">Jonh Jairo Cardenas</option>
                    <option value="Lilian Barrios">Lilian Barrios</option>
                    <option value="Luz Marina">Luz Marina</option>
                    <option value="Michell Camacho">Michell Camacho</option>
                    <option value="Nancy Rodriguez">Nancy Rodriguez</option>
                    <option value="Sandra">Sandra</option>
                    </select>
                </div>

<!-- Recursos -->
                <div class="form-group pt-2" >
                    <textarea name="recursos" rows="2" class="form-control" placeholder="¿Qué recursos usaste?"></textarea>
                </div>

<!-- Tema de clase -->
                <div class="form-group pt-2">
                    <textarea name="tema_de_clase" rows="2" class="form-control" placeholder="¿Qué tema vieron?"></textarea>
                </div>

<!-- Lista de estudiantes -->
                

                  <?
                  
                    if($curso === "Jardin" ){?>
                      <div class="form-group">
                        
                        <select name="estudiante" class="form-control pointer mt-2">

                          <option selected>Selecciona Estudiante</option>
                          <option value="Ismael Charris">sdfsdf</option>
                          <option value="Liam Fajardo">Liam Fajardo</option>
                          <option value="Jampier Parra">Jampier Parra</option>
                          <option value="Emanuel Rodriguez">Emanuel Rodriguez</option>
                          <option value="Juan Jose Avila">Juan Jose Avila</option>

                        </select>

                      </div>

                    <? } ?>
                      
                     
                

<!-- Boton para que me guarde los datos -->
                <input type="submit" class="btn btn-success btn-center mt-2" name="save_asistencia" value="Guardar">  

<!-- Enlace para agregar nuevos estudiantes -->
                <a href="students.php" class="btn btn-secondary mt-2" >Agregar estudiante</a>

            </form>
        </div>
    </div>

    <div class="col-md-8">
    
    </div>

</div>

</div>

<!-- ---------------------------------Footer------------------------------------------------------ -->
<?php include("includes/footer.php") ?>