<?php
	include("db.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "SELECT * FROM tipodeproducto WHERE TipId = $id";
		$resuleditar = mysqli_query($conn, $query);
		if(mysqli_num_rows($resuleditar) ==1){
			$filas = mysqli_fetch_array($resuleditar);
            $TipNomPro = $filas['TipNom'];
		}
	}
    if(isset($_POST['actualizar_tipProducto'])){
        $id = $_GET['id'];
        $TipNomPro = $_POST['TipNomPro'];
        $query = "UPDATE tipodeproducto set TipNom = '$TipNomPro' WHERE TipId = $id";
        mysqli_query($conn, $query);
		header("Location: registro_productos.php");
    }
?>
<?php include("../includes/head.php")?>
    <hr>
    <hr>
    <form id="formulario" action="editar_tipo_producto.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <table>
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
            <td><input type="text" name="TipNomPro" value="<?php echo $TipNomPro?>"></td>
            <td></td>
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
                <button type="submit" name="actualizar_tipProducto" value="actualizar_tipProducto"><label for="">Actualizar</label></button>           
            </td>
        </tr>
    </table>
    </form>
    <?php include("../includes/footer.php")?>
</body>
</html>