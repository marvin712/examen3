<?php
include "EstudianteModel.php";
$nuevoEstudiante = new Estudiante();

if(isset($_POST['btnGuardar']))
{
    $nuevoEstudiante->GuardarEstudiante($_POST['nombre']);
    header('Location: VistaEstudiante.php');
}
else
if(isset($_POST['btnEditar']))
{
 $nuevoEstudiante->EditarEstudiante($_POST['idStudent'],$_POST['txtnombre']); 
 header('Location: VistaEstudiante.php');
        
}
else
if(isset($_POST['btnEliminar']))
{
 $nuevoEstudiante->EliminarEstudiante($_POST['idStudent'],$_POST['txtnombre']); 
 header('Location: VistaEstudiante.php');
        
}



