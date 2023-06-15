<?php
	include("db.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT * FROM productos WHERE ProId = $id";
		$resuleditar = mysqli_query($conn, $query);
		if(mysqli_num_rows($resuleditar) ==1){
			$filas = mysqli_fetch_array($resuleditar);
            $TipPro = $filas['ProTip'];
            $DesPro = $filas['ProDes'];
            $PreCom = $filas['ProPreCo'];
            $PreVen = $filas['ProPreVe'];
		}
	}
    if(isset($_POST['actualizar_producto'])){
        $id = $_GET['id'];
        $TipPro = $_POST['TipPro'];
        $DesPro = $_POST['DesPro'];
        $PreCom = $_POST['PreCom'];
        $PreVen = $_POST['PreVent'];
        $query = "UPDATE productos set ProTip = '$TipPro', ProDes = '$DesPro', ProPreCo = '$PreCom' , ProPreVe = '$PreVen' WHERE ProId = $id";
        mysqli_query($conn, $query);
		header("Location: registro_productos.php");
    }
?>
<?php include("../includes/head.php")?>
    <hr>
    <form id="formulario" action="editar_productos.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <h1 style="text-align: center;">REGISTRO DE PRODUCTOS</h1>
    <hr>
    <table>
        <tr>
            <td></td>
            <td style="width: 200px; text-align: center"><p><strong>DATOS DEL PRODUCTO</strong></p></td>
            <td></td>
        </tr>
    </table>
    <table>
        <tr>
            <td></td>
            <td><h4>TIPO DE PRODUCTO</h4></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="number" name="TipPro" value="<?php echo $TipPro?>"></td>
        </tr>
    </table>
    <table>
        <tr>
            <td><h4>DESCRIPCION</h4></td>
            <td><h4>PRECIO DE COMPRA</h4></td>
        </tr>
        <tr>
            <td><input type="text" name="DesPro" value="<?php echo $DesPro?>"></td>
            <td><input type="number" name="PreCom" value="<?php echo $PreCom?>"></td>
        </tr>
        <table>
		<tr>
			<td><h4>PRECIO DE VENTA</h4></td>
		</tr>
		<tr>
			<td><input type="number" name="PreVent" value="<?php echo $PreVen?>"></td>
		</tr>
	</table>
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
                <button type="submit" name="actualizar_producto" value="actualizar_producto"><label for="">Actualizar</label></button>           
            </td>
        </tr>
    </table>
</form>
<?php include("../includes/footer.php")?>
</body>
</html>