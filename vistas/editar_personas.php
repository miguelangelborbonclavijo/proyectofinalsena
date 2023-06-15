<?php
	include("db.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT * FROM personas WHERE PerId = $id";
		$resuleditar = mysqli_query($conn, $query);
		if(mysqli_num_rows($resuleditar) ==1){
			$filas = mysqli_fetch_array($resuleditar);
            $PeTipDoc = $filas['PerTidId'];
            $PeNumDoc = $filas['PerId'];
            $PriNom = $filas['PerNom1'];
            $SegNom = $filas['PerNom2'];
            $PriApe = $filas['PerApe1'];
            $SegApe = $filas['PerApe2'];
		}
	}
    if(isset($_POST['actualizar_personas'])){
        $id = $_GET['id'];
        $PeTipDoc = $filas['TipDoc'];
        $PeNumDoc = $filas['NumDoc'];
        $PriNom = $filas['PriNomPer'];
        $SegNom = $filas['SegNomPer'];
        $PriApe = $filas['PriApePer'];
        $SegApe = $filas['SegApePer'];
        $query = "UPDATE personas set TipDoc = '$PeTipDoc', PriNomPer = '$PriNom', 
        SegNomPer = '$SegNom', PriApePer = '$PriApe', SegApePer = '$SegApe' WHERE PerId = $id";
        mysqli_query($conn, $query);
		header("Location: registro_personas.php");
    }
?>
<?php include("../includes/head.php")?>
<form id="formulario" action="guardar_producto.php" method="POST">
    <h1 style="text-align: center;">REGISTRO DE PERSONAS</h1>
    <hr>
    <table>
        <tr>
            <td></td>
            <td style="width: 200px; text-align: center"><p><strong>DATOS DEL USUARIO</strong></p></td>
            <td></td>
        </tr>
    </table>
    <table>
        <tr>
            <td><h4>Tipo de documento</h4></td>
            <td><h4>Número de documento</h4></td>
        </tr>
        <tr>
            <td><input type="number" name="TipDoc" value="<?php echo $PeTipDoc?>">
                <!--<select style="width:208px; height: 21px;">
                    <optgroup label="Seleccione uno">
                    <option name="TipDoc" value="1">Cedula de ciudadania</option>
                    <option name="TipDoc" value="2">Tarjeta de Identidad</option>
                    <option name="TipDoc" value="3">Cedula de extranjeria</option>
                </select>-->
                <td><input type="number" name="NumDoc" value="<?php echo $PeTipDoc?>"></td>
            </td>
        </tr>
        <tr>
            <td><h4>Primer Nombre</h4></td>
            <td><h4>Segundo Nombre</h4></td>
        </tr>
        <tr>
            <td><input type="text" name="PriNomPer" value="<?php echo $PriNom?>"></td>
            <td><input type="text" name="SegNomPer" value="<?php echo $SegNom?>"></td>
        </tr>
            <tr>
            <td><h4>Primer Apellido</h4></td>
            <td><h4>Segundo Apellido</h4></td>
        </tr>
        <tr>
            <td><input type="text" name="PriApePer" value="<?php echo $PriApe?>"></td>
            <td><input type="text" name="SegApePer" value="<?php echo $SegApe?>"></td>
        </tr>
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
                <button type="submit" name="actualizar_personas" value="actualizar_personas"><label for="">Actualizar</label></button>           
            </td>
        </tr>
    </table>
    <br>
</form>
<?php include("../includes/footer.php")?>
</body>
</html>