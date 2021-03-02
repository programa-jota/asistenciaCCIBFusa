<?php include("db.php") ?>
<?php include("includes/header.php") ?>
<!-- ------------------------------Header--------------------------------------------------------- -->

<div class="container">

    <div class="row abs-center mt-n1">

        <div class="col-md-7">

            <div class="card card-body ">
                <form method="POST" action="tomaDeAsistencia.php?">
                    <div class="form-group" >
                        <select class="form-control pointer" name="curso">
                            <option selected>Selecciona Curso</option>
                            <option value="Jardin">Jardin</option>
                            <option value="Transicion">Transicion</option>
                            <option value="Primero">Primero</option>
                            <option value="Segundo">Segundo</option>
                            <option value="Tercero">Tercero</option>
                            <option value="Cuarto">Cuarto</option>
                            <option value="Cuarto">Quinto</option>
                            <option value="Sexto">Sexto</option>
                            <option value="Septimo">Septimo</option>
                            <option value="Octavo">Octavo</option>
                            <option value="Octavo">Noveno</option>
                            <option value="Decimo">Decimo</option>
                            <option value="Decimo">Once</option>
                        </select>
                    </div>
                   
<!-- Boton para que me guarde los datos -->
                    <input type="submit" class="btn btn-success btn-center mt-2" name="selectCurso" value="Guardar">                    
                    
                </form>

            </div>

        </div>

        
    </div>

</div>
<!-- ---------------------------------Footer------------------------------------------------------ -->
<?php include("includes/footer.php") ?>