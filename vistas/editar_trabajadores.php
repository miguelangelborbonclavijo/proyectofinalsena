<?php
	include("db.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT * FROM trabajador WHERE TraPerId = $id";
		$resuleditar = mysqli_query($conn, $query);
		if(mysqli_num_rows($resuleditar) ==1){
			$filas = mysqli_fetch_array($resuleditar);
            $TraCargId = $filas['TraCarId'];
            $HorLabora = $filas['TraHor'];
            $SalarTrab = $filas['TraSalar'];
		}
	}
    if(isset($_POST['actualizar_trabajador'])){
        $id = $_GET['id'];
        $TraCargId = $_POST['TipCarTr'];
        $HorLabora = $_POST['HorLabTr'];
        $SalarTrab = $_POST['SalariTr'];
        $query = "UPDATE trabajador set TraCarId = '$TraCargId', TraHor = '$HorLabora', TraSalar = '$SalarTrab') WHERE TraPerId = $id";
        mysqli_query($conn, $query);
		header("Location: registro_trabajadores.php");
    }
?>
<?php include("../includes/head.php")?>
    <form id="formulario" action="editar_trabajadores.php" method="POST">
    <h1 style="text-align: center;">REGISTRO DE TRABAJADOR</h1>
    <hr>
    <table>
        <tr>
            <td></td>
            <td style="width: 200px; text-align: center"><p><strong>DATOS DEL TRABAJADOR</strong></p></td>
            <td></td>
        </tr>
    </table>
    <table>
        <tr>
            <td><h4>Tipo de cargo</h4></td>
        </tr>
        <tr>
            <td><input type="number" name="TipCarTr" value="<?php echo $TraCargId ?>"></td>
        </tr>
        <tr>
            <td><h4>Horas Laborales</h4></td>
            <td><h4>Salario</h4></td>
        </tr>
        <tr>
            <td><input type="number" name="HorLabTr" value="<?php echo $HorLabora ?>"></td>
            <td><input type="number" name="SalariTr" value="<?php echo $SalarTrab ?>"></td>
        </table>
    <br>
    <table>
        <tr>
            <td>
                <label for="cbox2">Señor usuario asegurese que los datos digitados estan correctos.</label>
            </td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td>
                <button type="submit" name="actualizar_trabajador" value="actualizar_trabajador"><label for="">Actualizar</label></button>           
            </td>
        </tr>
    </table>
    <br>
</form>
<?php include("../includes/footer.php")?>
</body>
</html>