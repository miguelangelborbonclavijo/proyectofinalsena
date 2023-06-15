<?php
	include("db.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT * FROM soportes WHERE SopId = $id";
		$resuleditar = mysqli_query($conn, $query);
		if(mysqli_num_rows($resuleditar) ==1){
			$filas = mysqli_fetch_array($resuleditar);
            
		}
	}
    if(isset($_POST['actualizar_tipProveedor'])){
        $id = $_GET['id'];
        $NumSop = $_POST['NumDocSop'];
        $TipClSop = $_POST['TipCliSop'];
        $EstadSop = $_POST['EstSop'];
        $TipSop = $_POST['TipSopor'];
        $DescrSop = $_POST['DesSop'];
        $query = "UPDATE soportes set SopTipCl = '$TipClSop', SopEsId = '$EstadSop', SopTipS = '$TipSop', SopDes = '$DescrSop') WHERE SopId = $id";
        mysqli_query($conn, $query);
		header("Location: registro_soportes.php");
    }
?>
<?php include("../includes/head.php")?>
    <hr>
    <hr>
    <form id="formulario" action="guardar.php" method="POST">
    <h1 style="text-align: center;">REGISTRO DE CLIENTES</h1>
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
            <td><h4>Numero de documento</h4></td>
            <td><h4>Tipo de clientes</h4></td>
        </tr>
        <tr>
            <td><input type="number" name=""></td>
            <td>
            <select style="width:208px; height: 21px;">
                    <optgroup label="Seleccione uno">
                    <option name="TipDoc" value="1">Cedula de ciudadania</option>
                    <option name="TicDoc" value="2">Tarjeta de Identidad</option>
                    <option name="TicDoc" value="3">Cedula de extranjeria</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><h4>Estado de Clientes</h4></td>
            <td><h4>Dirreccion de Clientes</h4></td>
        </tr>
        <tr>
            <td>
                <select style="width:208px; height: 21px;">
                    <optgroup label="Seleccione uno">
                    <option name="EstCli" value="1">Activo</option>
                    <option name="EstCli" value="2">Inactivo</option>
                </select>
            </td>
            <td><input type="text"></td>
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
                <button type="submit" name="guardar" value="guardar"><label for="">Guardar</label></button>           
            </td>
            <td>
                <button type="reset" name="Restablecer" value="restablecer"><label for="">Restablecer</label></button>
            </td>
        </tr>
    </table>
    <br>
</form>
<?php include("../includes/footer.php")?>
</body>
</html>