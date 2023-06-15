<?php include('db.php')?>
<?php include("../includes/head.php")?>
<form action="guardar_producto.php" method="POST" style="width: 60%; margin-left: 20%" class="forCont row g-1">
    <h1 style="text-align: center;">REGISTRO DE TRABAJADOR</h1>
    <table>
        <tr>
            <td></td>
            <td style="width: 200px; text-align: center"><p><strong>DATOS DEL TRABAJADOR</strong></p></td>
            <td></td>
        </tr>
    </table>
    <br>
    <table>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Numero de Documento:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="NumDocTr" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label style="width:2000%:" for="inputState" class="form-label" name="TipCarTr">Tipo de cargo:</label>
            <select id="inputState" class="form-select" class="form-control" id="validationTooltip01" required  name="TipCarTr">
            <option selected>Seleccione el tipo de cargo</option>
            <option value="1">1. Administrador</option>
            <option value="2">2. Gerente</option>
            <option value="3">3. Vendedor</option>
            <div id="validationServer04Feedback" class="invalid-feedback">
                Seleccione el tipo de cargo
            </div>
            </select>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Horas Laborales:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="HorLabTr" required>
            <div class="valid-tooltip">
            Documento valido...!
            </div>
            <div class="invalid-tooltip">
                Documento no valido.
            </div>
        </div>
        <div class="col-md-6 position-relative">
            <label for="validationTooltip01" class="form-label">Salario:</label>
            <input type="number" class="form-control" id="validationTooltip01" name="SalariTr" required>
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
    <br>
    <br>
    <table>
        <tr>
            <div class="esp col-6" >
                <button type="submit" name="guardar_trabajador" value="guardar_trabajador" class="btn btn-success">Guardar</button>
            </div>
            <div class="esp col-6">
                <button class="btn btn-warning" type="reset">Limpiar datos</button>
            </div>
        </tr>
    </table>
</form>
<br><hr><br>
    <div class="container-lg">
            <table class="table">
            <thead>
                <tr>
                    <h1 style="text-align: center;">TRABAJADORES REGISTRADOS</h1>
                    <br>
                </tr>
                <tr style="text-align: center;">
                    <th scope="col">NUMERO DE DOCUMENTO</th>
                    <th scope="col">TIPO DE CARGO</th>
                    <th scope="col">HORAS LABORALES</th>
                    <th scope="col">SALARIO</th>
                    <th scope="col">ESTADOS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM trabajador";
                    $resulproductos = mysqli_query($conn, $query);
                    while($filas = mysqli_fetch_array($resulproductos)){?>
                        <tr style="text-align: center;">
                            <td><?php echo $filas['TraPerId'] ?></td>
                            <td><?php echo $filas['TraCarId'] ?></td>
                            <td><?php echo $filas['TraHor'] ?></td>
                            <td><?php echo $filas['TraSalar'] ?></td>
                            <td>
                                <a href="editar_trabajadores.php?id=<?php echo $filas['TraPerId']?>">Editar</a>
                                <a href="eliminar_trabajadores.php?id=<?php echo $filas['TraPerId']?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?> 
                </tbody> 
            </tbody>
        </table>
    </div>
<?php include("../includes/footer.php")?>
</body>
</html>