<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VistaEditarEstudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <h1 class="bg-danger text-center text-white">Eliminar Estudiante</h1>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <form action="EstudianteController.php" method="POST">
                        <?php
                            include_once "EstudianteModel.php";
                            $nuevoEstudiante = new Estudiante();
                            /*FILTRAR AL ESTUDIANTE SEGUN ID ENVIADO*/
                            $resultado = $nuevoEstudiante->FiltrarEstudiante($_GET['idEst']);

                            while($resultadoFiltrado = mysqli_fetch_assoc($resultado))
                            {
                        ?>

                                <p>
                                <label for="txtnombre">Nombre:</label>
                                <input type="text" name="txtnombre" class="form-control" 
                                value="<?php echo $resultadoFiltrado['nombre']?>">
                                </p>


                                 <p>
                                    <input type="hidden" name="idStudent" 
                                    value="<?php echo $resultadoFiltrado['idMascota']?>">
                                 </p>   
                            <?php
                            }
                            ?>
                        
                <input type="submit" value="Eliminar Estudiante" name="btnEliminar" class="bg-danger">            
    </form>
        </div>
        <div class="col-3"></div>
    </div>
   
</body>
</html>