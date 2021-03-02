<?php include("db.php") ?>
<?php include("includes/header.php") ?>
<!-- ------------------------------Header--------------------------------------------------------- -->
<div class="container">


    <div class="row">

        <div class="col-md-4">

        <div class="card card-body">
        <form action="guardarNuevaAsistencia.php" method="POST">
<!-- Fecha -->
        <div class="form-group" >
        
            <label for="fecha"><?php session_start(); echo $_SESSION['fecha'];?></label>
            <input type="date" name="fecha" class="form-control pointer " disabled >
        </div>
<!-- Materia -->
        <div class="form-group pt-2">

            <label for="Asignatura"><?php  echo $_SESSION['asignatura'];?></label>

            <select class="form-control pointer" name="asignatura" disabled>
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

            <label for="docente"><?php  echo $_SESSION['docente'];?></label>

            <select class="form-control pointer" name="docente" disabled>
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
            <label for="recursos"><?php  echo $_SESSION['recursos'];?></label>
            <textarea name="recursos" rows="2" class="form-control" placeholder="¿Qué recursos usaste?" disabled></textarea>
        </div>

<!-- Tema de clase -->
        <div class="form-group pt-2">
            <label for="tema_de_clase"><?php  echo $_SESSION['tema'];?></label>
            <textarea name="tema_de_clase" rows="2" class="form-control" placeholder="¿Qué tema vieron?" disabled></textarea>
        </div>

        </div> <!-- card -->
        </div> <!-- col-->

        <div class="col-md-8">

            <div class="card card-body">
<!-- Lista de estudiantes -->
            <div class="form-group">
                        
                        <select name="estudiante" class="form-control pointer mt-2">

                          <option selected>Selecciona Estudiante</option>
                          <option value="Ismael Charris">Ismael Charris</option>
                          <option value="Liam Fajardo">Liam Fajardo</option>
                          <option value="Jampier Parra">Jampier Parra</option>
                          <option value="Emanuel Rodriguez">Emanuel Rodriguez</option>
                          <option value="Juan Jose Avila">Juan Jose Avila</option>

                        </select>

            </div>
<!-- Toma de asistencia  -->
            <div class="form-group">

                    <label for="zoom">Zoom</label>
                    <select name="zoom" class="form-control pointer mt-2">

                        <option selected>Si</option>
                        <option value= 0 >No</option>

                    </select>

                    <label for="camara">Camara</label>
                    <select name="camara" class="form-control pointer mt-2">

                        <option selected>Si</option>
                        <option value= 0 >No</option>

                    </select>

                    <label for="audio">Audio</label>
                    <select name="audio" class="form-control pointer mt-2">

                        <option selected>Si</option>
                        <option value= 0 >No</option>   

                    </select>

                    <label for="participacion">Participacion</label>
                    <select name="participacion" class="form-control pointer mt-2">

                        <option selected>Si</option>
                        <option value= 0 >No</option>
                        

                    </select>

                    </div>
                    <!-- Boton para que me guarde los datos -->
                    <input type="submit" class="btn btn-success btn-center mt-2" name="save_new_asistencia" value="Guardar">  

                    </form>
            </div><!-- card cardbody de col-md-8 -->

        </div> <!-- col-md-8-->

    </div> <!-- row -->

</div> <!-- container -->




<!-- ---------------------------------Footer------------------------------------------------------ -->
<?php include("includes/footer.php") ?>