<?php include('db.php')?>
<?php include("../includes/head.php")?>
<form action="guardar_producto.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
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
        <div class="col-md-12 position-relative">
            <label for="validationTooltip01" class="form-label">TIPO DE PRODUCTO:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="TipPro" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-12 position-relative">
            <label for="validationTooltip01" class="form-label">DESCRIPCION:</label>
            <input type="text" class="form-control" id="validationTooltip01" name="DesPro" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">PRECIO DE COMPRA:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="PreCom" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">PRECIO DE VENTA:</label>
            <input type="numbar" class="form-control" id="validationTooltip01" name="PreVent" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <br>
        <br>
        <table>
            <tr>
                <td>
                    <label for="cbox2">Señor usuario asegurese que los datos digitados estan correctos.</label>
                    <br>
                </td>
            </tr>
        </table>
        <table>
	    <br>
        <table>
            <tr>
                <div class="esp col-6" >
                    <button type="submit" name="guardar_producto" value="guardar_producto" class="btn btn-success">Guardar</button>
                </div>
                <div class="esp col-6">
                    <button class="btn btn-warning" type="reset">Limpiar datos</button>
                </div>
            </tr>
        </table>
    </table>
    </form>
    <br><hr><br>
    <div class="container-lg">
            <table class="table">
            <thead>
                <tr>
                    <h1 style="text-align: center;">PRODUCTOS REGISTRADOS</h1>
                    <br>
                </tr>
                <tr style="text-align: center;">
                    <th scope="col">TIPO DE PRODUCTO</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">PRECIO DE COMPRA</th>
                    <th scope="col">PRECIO DE VENTA</th>
                    <th scope="col">ESTADOS</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        $query = "SELECT * FROM productos";
                        $resulproductos = mysqli_query($conn, $query);
                        while($filas = mysqli_fetch_array($resulproductos)){?>
                            <tr style="text-align: center;">
                                <td><?php echo $filas['ProTip'] ?></td>
                                <td><?php echo $filas['ProDes'] ?></td>
                                <td><?php echo $filas['ProPreCo'] ?></td>
                                <td><?php echo $filas['ProPreVe'] ?></td>
                                <td>
                                    <a href="editar_productos.php?id=<?php echo $filas['ProId']?>">Editar</a>
                                    <a href="eliminar_productos.php?id=<?php echo $filas['ProId']?>">Eliminar</a>
                                </td>
                            </tr>
                    <?php } ?>  
                </tbody> 
            </tbody>
        </table>
    </div>
    <?php include("../includes/footer.php")?>
</form>
</body>
</html>