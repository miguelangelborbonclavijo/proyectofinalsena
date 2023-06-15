<?php
	include("db.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT * FROM proveedores WHERE PrId = $id";
		$resuleditar = mysqli_query($conn, $query);
		if(mysqli_num_rows($resuleditar) ==1){
			$filas = mysqli_fetch_array($resuleditar);
            $TipNomProv = $filas['PrNomPr'];
            $TipDirrP = $filas['PrDirr'];
		}
	}
    if(isset($_POST['actualizar_tipProveedor'])){
        $id = $_GET['id'];
        $TipNomProv = $_POST['NomPro'];
        $TipDirrP = $_POST['Dirr'];
        $query = "UPDATE proveedores set PrNomPr = '$TipNomProv', PrDirr = '$TipDirrP' WHERE PrId = $id";
        mysqli_query($conn, $query);
		header("Location: registro_proveedores.php");
    }
?>
<?php include("../includes/head.php")?>
    <hr>
    <hr>
    <form id="formulario" action="editar_proveedores.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <table>
            <h1 style="text-align: center;">INFO DE PROVEEDOR</h1>
    <hr>
    <table>
        <tr>
            <td></td>
            <td style="width: 200px; text-align: center"><p><strong>DATOS DEL PROVEEDOR</strong></p></td>
            <td></td>
        </tr>
        
    </table>
    <table>
        <tr>
            <td><h4>NOMBRE DE PROVEEDOR</h4></td>
        </tr>
        <tr>
            <td><input type="text" name="NomPro" value="<?php echo $TipNomProv?>"></td>
        </tr>
        <tr>
            <td><h4>DIRRECCION</h4></td>
        </tr>
        <tr>
            <td><input type="text" name="Dirr" value="<?php echo $TipDirrP?>"></td>
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
                <button type="submit" name="actualizar_tipProveedor" value="actualizar_tipProveedor"><label for="">Actualizar</label></button>           
            </td>
        </tr>
    </table>
    </form>
    <?php include("../includes/footer.php")?>
</body>
</html>