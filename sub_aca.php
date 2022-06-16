<?php
}
?>php
require = 'conexion.php';
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title> cafe </title>
</head>

<body>
	<br>
	<table border="1">
<tr>
	<td>Programa Educativo</td>
	<td>Total De Tutores</td>
	<td>Tutores Capacitados</td>
	<td>Tutores Con Certificado</td>

</tr>
</tr>
<?php
$sql="SELECT*from cafe";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>

<tr>
	<td><?php echo $mostrar ['ProgramaEducativo'] ?></td>
	<td><?php echo $mostrar['TotalDeTutores']?></td>
    <td><?php echo $mostrar['TutoresCapacitados']?></td>
    <td><?php echo $mostrar['TutoresConCertificado']?></td>
    


<?php
}
?>php
require='conexion.php';
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title> captuto </title>
</head>

<body>
	<br>
	<table border="1">
<tr>

<td>Descripcion</td>
	<td>Muybien5</td>
    <td>Bien4</td>
    <td>Regular3</td>
    <td>Mal2</td>
    <td>Pesimo1</td>
    <td>TotaldeAlumnos</td>
    <td>GradoDeSatisfacion</td>
</tr>
<?php
$sql="SELECT*from captuto";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>

<tr>
	<td><?php echo $mostrar ['descripcion'] ?></td>
	<td><?php echo $mostrar['Muybien5']?></td>
    <td><?php echo $mostrar['Bien4']?></td>
    <td><?php echo $mostrar['Regular3']?></td>
    <td><?php echo $mostrar['Mal2']?></td>
    <td><?php echo $mostrar['Pesimo1']?></td>
    <td><?php echo $mostrar['TotaldeAlumnos']?></td>
    <td><?php echo $mostrar['GradoDeSatisfacion']?></td>
</tr>
<?php
}
?>
?>php
require='conexion.php';
?>


<!DOCTYPE html>
<html>
	
	<head>
		<title> dep</title>
</head>

<body>
	<br>
	<table border="1">

  <tr>
  <td>Nombre del laboratorio</td>
  <td>Cantidad</td>
  <td>No. de equipos</td>
  <td>Actividad Realizada</td>
  <td>No man</td>
  <td>No preventivo</td>
</tr>
<?php
$sql="SELECT*from dep";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>

<tr>
	<td><?php echo $mostrar ['nombre_del_laboratorio'] ?></td>
	<td><?php echo $mostrar['cantidad']?></td>
    <td><?php echo $mostrar['no_equipos']?></td>
    <td><?php echo $mostrar['activi_realiz']?></td>
    <td><?php echo $mostrar['no_man']?></td>
    <td><?php echo $mostrar['no_equipos']?></td>
    
</tr>
<?php
}
?>
?>php
require='conexion.php';
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title> desclab</title>
</head>

<body>
	<br>
	<table border="1">
<tr>
	<td>Trimestre</td>
	<td>Fecha</td>
	<td>Actividad</td>
	<td>DescripcionBreveDeLaActividad</td>
	<td>BeneficioParaLaInstitucion</td>
</tr>
<?php
$sql="SELECT*from desclab";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
	?>

<tr>
	<td><?php echo $mostrar ['Trimestre'] ?></td>
	<td><?php echo $mostrar['Fecha']?></td>
    <td><?php echo $mostrar['Actividad']?></td>
    <td><?php echo $mostrar['DescripcionBreveDeLaActividad']?></td>
    <td><?php echo $mostrar['BeneficioParaLaInstitucion']?></td> 
</tr>
<?php
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> forinte</title>
</head>

<body>
	<br>
	<table border="1">
<tr>
<td>Descripcion</td>
	<td>Muy bien5</td>
    <td>Bien 4</td>
    <td>Regular 3</td>
    <td>Mal 2</td>
    <td>Pesimo 1</td>
    <td>Total de Alumnos</td>
    <td>Grado De Satisfacion</td>
    </tr>

<?php
$sql="SELECT*from forinte";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){


<tr>
	<td><?php echo $mostrar ['Descripcion'] ?></td>
	<td><?php echo $mostrar['Muybien5']?></td>
    <td><?php echo $mostrar['Bien4']?></td>
    <td><?php echo $mostrar['Regular3']?></td>
    <td><?php echo $mostrar['Mal2']?></td>
    <td><?php echo $mostrar['Pesimo1']?></td>
    <td><?php echo $mostrar['TotaldeAlumnos']?></td>
    <td><?php echo $mostrar['GradoDeSatisfacion']?></td>
</tr>
<?php
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> infoestrut </title>
</head>

<body>
	<br>
	<table border="1">
<tr>
	<td>cuatrimestre1</td>
	<td>cuatrimestre2</td>
	<td>cuatrimestre3</td>
	<td>anual</td>
	</tr>
	<?php
$sql="SELECT*from infoestrut";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>

<tr>
	<td><?php echo $mostrar ['cuatrimestre1'] ?></td>
	<td><?php echo $mostrar['cuatrimestre2']?></td>
    <td><?php echo $mostrar['cuatrimestre3']?></td>
    <td><?php echo $mostrar['anual']?></td>
    
</tr>
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> poatuc </title>
</head>

<body>
	<br>
	<table border="1">

<tr>
    <td>cuatrimestre1</td>
	<td>cuatrimestre2</td>
	<td>cuatrimestre3</td>
	<td>anual</td>
</tr>
<?php
$sql="SELECT*from poatuc";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>
<tr>
	<td><?php echo $mostrar ['cuatrimestre1'] ?></td>
	<td><?php echo $mostrar['cuatrimestre2']?></td>
    <td><?php echo $mostrar['cuatrimestre3']?></td>
    <td><?php echo $mostrar['anual']?></td>
    
</tr>
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> poatut </title>
</head>

<body>
	<br>
	<table border="1">
<tr>

    <td>No</td>
	<td>Fecha</td>
	<td>Actividad</td>
	<td>PersonalQueImpartio</td>
	<td>Lugar</td>
	<td>RedSocial</td>
	</tr>
<?php
$sql="SELECT*from poatut";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>
<tr>
	<td><?php echo $mostrar ['No'] ?></td>
	<td><?php echo $mostrar['Fecha']?></td>
    <td><?php echo $mostrar['Actividad']?></td>
    <td><?php echo $mostrar['PersonalQueImpartio']?></td>
	<td><?php echo $mostrar ['Lugar'] ?></td>
	<td><?php echo $mostrar['RedSocial']?></td>   
</tr>
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> prepvio </title>
</head>

<body>
	<br>
	<table border="1">
<tr>
    <td>ProgramaEducativo</td>
    <td>FechaDeInicio</td>
    <td>FechaDeTermino</td>
	<td>NombreDelProyecto</td>
	<td>ObjetivoDelProyecto</td>
	<td>NombreDelResponsable</td>
	<td>Rol</td>
	<td>RegistroEnAlgunaInstancia</td>
	<td>Entregable</td>
</tr>

<?php
$sql="SELECT*from prepvio";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
	?>

<tr>
	<td><?php echo $mostrar ['ProgramaEducativo'] ?></td>
	<td><?php echo $mostrar['FechaDeInicio']?></td>
    <td><?php echo $mostrar['FechaDeTermino']?></td>
    <td><?php echo $mostrar['NombreDelProyecto']?></td>
    <td><?php echo $mostrar['NombreDelResponsable']?></td>
    <td><?php echo $mostrar['Rol']?></td>
    <td><?php echo $mostrar['RegistroEnAlgunaInstancia']?></td>
    <td><?php echo $mostrar['Entregable']?></td>
</tr>
<?php
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> proto_inv</title>
</head>

<body>
	<br>
	<table border="1">
<tr>
	<td>Descripcion</td>
	<td>Muybien 5</td>
    <td>Bien 4</td>
    <td>Regular 3</td>
    <td>Mal 2</td>
    <td>Pesimo 1</td>
    <td>Total de Alumnos</td>
    <td>Grado De Satisfacion</td>
    </tr>
    <?php

<?php
$sql="SELECT*from proto_inv";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>
<tr>
	<td><?php echo $mostrar ['Descripcion'] ?></td>
	<td><?php echo $mostrar['Muybien5']?></td>
    <td><?php echo $mostrar['Bien4']?></td>
    <td><?php echo $mostrar['Regular3']?></td>
    <td><?php echo $mostrar['Mal2']?></td>
    <td><?php echo $mostrar['Pesimo1']?></td>
    <td><?php echo $mostrar['TotaldeAlumnos']?></td>
    <td><?php echo $mostrar['GradoDeSatisfacion']?></td>
</tr>
<?php
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> satdeser</title>
</head>

<body>
	<br>
	<table border="1">
<tr>
	<td>Descripcion</td>
	<td>Muybien5</td>
    <td>Bien4</td>
    <td>Regular3</td>
    <td>Mal2</td>
    <td>Pesimo1</td>
    <td>TotaldeAlumnos</td>
    <td>GradoDeSatisfacion</td>
</tr>
<?php
$sql="SELECT*from satdeser";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>

<tr>
	<td><?php echo $mostrar ['Descripcion'] ?></td>
	<td><?php echo $mostrar['Muybien5']?></td>
    <td><?php echo $mostrar['Bien4']?></td>
    <td><?php echo $mostrar['Regular3']?></td>
    <td><?php echo $mostrar['Mal2']?></td>
    <td><?php echo $mostrar['Pesimo1']?></td>
    <td><?php echo $mostrar['TotaldeAlumnos']?></td>
    <td><?php echo $mostrar['GradoDeSatisfacion']?></td>
</tr>
<?php
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> sarmed </title>
</head>

<body>
	<br>
	<table border="1">
<
	<td>Trimestre1</td>
     <td>Trimestre2</td>
     <td>Trimestre3</td>
     <td>Trimestre4</td>
     <td>Anual</td>
     <td>Sexo</td>
     <td>Nivel</td>
</tr>
<?php
$sql="SELECT*from sarmed";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>
<tr>
	<td><?php echo $mostrar ['trimestre1'] ?></td>
	<td><?php echo $mostrar['trimestre2']?></td>
    <td><?php echo $mostrar['trimestre3']?></td>
    <td><?php echo $mostrar['trimestre4']?></td>
    <td><?php echo $mostrar['anual']?></td>
    <td><?php echo $mostrar['sexo']?></td>
    <td><?php echo $mostrar['nivel']?></td>
</tr>
<?php
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> sipreping </title>
</head>

<body>
	<br>
	<table border="1">

	<tr>
	<td>trimestre1</td>
     <td>trimestre2</td>
     <td>trimestre3</td>
     <td>trimestre4</td>
     <td>anual</td>
</tr>
<?php
$sql="SELECT*from sipreping";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>
<tr>
	<td><?php echo $mostrar ['trimestre1'] ?></td>
	<td><?php echo $mostrar['trimestre2']?></td>
    <td><?php echo $mostrar['trimestre3']?></td>
    <td><?php echo $mostrar['trimestre4']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
<?php
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> sipreppvio</title>
</head>

<body>
	<br>
	<table border="1">
<tr>
	<td>trimestre1</td>
     <td>trimestre2</td>
     <td>trimestre3</td>
     <td>trimestre4</td>
     <td>anual</td>
</tr>
<?php
$sql="SELECT*from sipreppvio";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>
<tr>
	<td><?php echo $mostrar ['trimestre1'] ?></td>
	<td><?php echo $mostrar['trimestre2']?></td>
    <td><?php echo $mostrar['trimestre3']?></td>
    <td><?php echo $mostrar['trimestre4']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
<?php
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title>  sipreptratoyop </title>
</head>

<body>
	<br>
	<table border="1">
<tr>
	<td>trimestre1</td>
     <td>trimestre2</td>
     <td>trimestre3</td>
     <td>trimestre4</td>
     <td>anual</td>
</tr>

<?php
$sql="SELECT*from sipreptratoyop";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>
<tr>
	<td><?php echo $mostrar ['trimestre1'] ?></td>
	<td><?php echo $mostrar['trimestre2']?></td>
    <td><?php echo $mostrar['trimestre3']?></td>
    <td><?php echo $mostrar['trimestre4']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
<?php
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> siprep_desm_aca </title>
</head>

<body>
	<br>
	<table border="1">
<tr>
	<td>trimestre1</td>
     <td>trimestre2</td>
     <td>trimestre3</td>
     <td>trimestre4</td>
     <td>anual</td>
</tr>
<?php
$sql="SELECT*from siprep_desm_aca";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){

?>	
<tr>
	<td><?php echo $mostrar ['trimestre1'] ?></td>
	<td><?php echo $mostrar['trimestre2']?></td>
    <td><?php echo $mostrar['trimestre3']?></td>
    <td><?php echo $mostrar['trimestre4']?></td>
    <td><?php echo $mostrar['anual']?></td>
</tr>
<?php
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> siprep_prot </title>
</head>

<body>
	<br>
	<table border="1">

<tr>
	<td>No</td>
	<td>Fecha</td>
	<td>Actividad</td>
	<td>PersonalQueImpartio</td>
	<td>Lugar</td>
	<td>RedSocial</td>
</tr>
<?php
$sql="SELECT*from siprep_prot";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){

?>	
<tr>
	<td><?php echo $mostrar ['No'] ?></td>
	<td><?php echo $mostrar['Fecha']?></td>
    <td><?php echo $mostrar['Actividad']?></td>
    <td><?php echo $mostrar['PersonalQueImpartio']?></td>
	<td><?php echo $mostrar ['Lugar'] ?></td>
	<td><?php echo $mostrar['RedSocial']?></td>   
</tr>
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> tatyop </title>
</head>

<body>
	<br>
	<table border="1">
<tr>
	<td>Descripcion</td>
	<td>Muybien5</td>
    <td>Bien4</td>
    <td>Regular3</td>
    <td>Mal2</td>
    <td>Pesimo1</td>
    <td>TotaldeAlumnos</td>
    <td>GradoDeSatisfacion</td>
</tr>
<?php
$sql="SELECT*from tatyop";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>
<tr>
	<td><?php echo $mostrar ['Descripcion'] ?></td>
	<td><?php echo $mostrar['Muybien5']?></td>
    <td><?php echo $mostrar['Bien4']?></td>
    <td><?php echo $mostrar['Regular3']?></td>
    <td><?php echo $mostrar['Mal2']?></td>
    <td><?php echo $mostrar['Pesimo1']?></td>
    <td><?php echo $mostrar['TotaldeAlumnos']?></td>
    <td><?php echo $mostrar['GradoDeSatisfacion']?></td>
</tr>
<?php
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> tatu</title>
</head>

<body>
	<br>
	<table border="1">
<tr>
	<td>EstudiantesQueAsisten</td>
	<td>sexo</td>
	<td>NumeroDeEstudiantes</td>
      <td>EstudiantesAtendidos</td>

</tr>
<?php
$sql="SELECT*from tatu";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>

<tr>
	<td><?php echo $mostrar ['EstudiantesQueAsisten'] ?></td>
	<td><?php echo $mostrar['sexo']?></td>
    <td><?php echo $mostrar['NumeroDeEstudiantes']?></td>
    <td><?php echo $mostrar['EstudiantesAtendidos']?></td> 
</tr>
}
?>
?>php
require='conexion.php';
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title> tatorias_est </title>
</head>

<body>
	<br>
	<table border="1">
<tr>
<td>cuatrimestre1</td>
	<td>cuatrimestre2</td>
	<td>cuatrimestre3</td>
	<td>anual</td>
	<?php
$sql="SELECT*from tatorias_est";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysql_fetch_array($result)){
?>

<tr>
	<td><?php echo $mostrar ['cuatrimestre1'] ?></td>
	<td><?php echo $mostrar['cuatrimestre2']?></td>
    <td><?php echo $mostrar['cuatrimestre3']?></td>
    <td><?php echo $mostrar['PersonalQueImpartio']?></td>
	<td><?php echo $mostrar ['anual'] ?></td>

</tr>
}
?>
<?php

</table>
</body>
