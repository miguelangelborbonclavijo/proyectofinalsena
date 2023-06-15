<?php include('db.php')?>
<?php include("../includes/head.php")?>
    <hr>
    <form action="guardar_producto.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
    <h1 style="text-align: center;">REGISTRO DE CLIENTES</h1>
    <hr>
    <table>
        <tr>
            <td></td>
            <td style="width: 200px; text-align: center"><p><strong>DATOS DEL CLIENTE</strong></p></td>
            <td></td>
        </tr>
    </table>
    <table>
        <br>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Numero de Documento:</label>
                <input type="number" class="form-control" id="validationTooltip01" name="NumDocuCli" required>
                <div class="valid-tooltip">
                Documento valido...!
                </div>
                <div class="invalid-tooltip">
                    Documento no valido.
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label style="width:2000%:" for="inputState" class="form-label" name="TipoCli">Tipo de cliente:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required  name="TipoCli">
                <option selected>Seleccione su documento</option>
                <option value="1">1. BASICO</option>
                <option value="2">2. PREMIU</option>
                <div id="validationServer04Feedback" class="invalid-feedback">
                    Por favor seleccion su tipo de documento
                </div>
                </select>
            </div>
            <div class="col-md-6 position-relative">
                <label style="width:2000%:" for="inputState" class="form-label" name="EstaCli">Estado de Clientes:</label>
                <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required  name="EstaCli">
                <option selected>Seleccione su documento</option>
                <option value="1">1. ACTIVO</option>
                <option value="2">2. INACTIVO</option>
                <div id="validationServer04Feedback" class="invalid-feedback">
                    Por favor seleccion su tipo de documento
                </div>
                </select>
            </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Dirreccion de Clientes:</label>
            <input type="text" class="form-control" id="validationTooltip01" name="DirreCli" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
            <br>
        </div>
        <br> 
            <tr>
                <td>
                    <label for="cbox2" class="text-center">Señor usuario asegurese que los datos digitados estan correctos.</label>
                </td>
            </tr>
    </table>
    <br>
    <br>
    <table>
        <tr>
            <div class="esp col-6" >
                <button type="submit" name="guardar_clientes" value="guardar_clientes" class="btn btn-success">Guardar</button>
            </div>
            <div class="esp col-6">
                <button class="btn btn-warning" type="reset">Limpiar datos</button>
            </div>
        </tr>
    </table>
</form>
<br>
<hr>
<br>
    <div class="container-lg">
        <table class="table">
        <thead>
            <tr>
                <h1 style="text-align: center;">CLIENTES REGISTRADOS</h1>
                <br>
            </tr>
            <tr style="text-align: center;">
                <th scope="col">NUMERO DE DOCUMENTO</th>
                <th scope="col">TIPO DE CLIENTE</th>
                <th scope="col">ESTADO DE CLIENES</th>
                <th scope="col">DIRECCION DE CLIENTES</th>
                <th scope="col">ESTADOS</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $query = "SELECT * FROM clientes";
                $resulproductos = mysqli_query($conn, $query);
                while($filas = mysqli_fetch_array($resulproductos)){?>
                    <tr style="text-align: center;">
                        <td><?php echo $filas['CliPerId'] ?></td>
                        <td><?php echo $filas['CliTipId'] ?></td>
                        <td><?php echo $filas['CliEsId'] ?></td>
                        <td><?php echo $filas['CliDirr'] ?></td>
                        <td>
                            <a href="editar_soportes.php?id=<?php echo $filas['CliPerId']?>">Editar</a>
                            <a href="eliminar_clientes.php?id=<?php echo $filas['CliPerId']?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?> 
            </tbody> 
        </tbody>
        </table>
    </div>
	<br>
<?php include("../includes/footer.php")?>
</body>
</html>