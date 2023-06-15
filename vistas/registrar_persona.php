<?php include("db.php")?>
<?php include("../includes/head.php")?>
<form id="formulario" action="guardar.php" action="guardarcorreo.php" method="POST">
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
            <td><input type="number" name="TipDoc">
                <!--<select style="width:208px; height: 21px;">
                    <optgroup label="Seleccione uno">
                    <option name="TipDoc" value="1">Cedula de ciudadania</option>
                    <option name="TipDoc" value="2">Tarjeta de Identidad</option>
                    <option name="TipDoc" value="3">Cedula de extranjeria</option>
                </select>-->
            </td>
            <td><input type="number" name="NumDoc"></td>
        </tr>
        <tr>
            <td><h4>Primer Nombre</h4></td>
            <td><h4>Segundo Nombre</h4></td>
        </tr>
        <tr>
            <td><input type="text" name="PriNomPer"></td>
            <td><input type="text" name="SegNomPer"></td>
        </tr>
            <tr>
            <td><h4>Primer Apellido</h4></td>
            <td><h4>Segundo Apellido</h4></td>
        </tr>
        <tr>
            <td><input type="text" name="PriApePer"></td>
            <td><input type="text" name="SegApePer"></td>
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
                <button type="submit" name="guardar_personas" value="guardar_personas"><label for="">Guardar</label></button>           
            </td>
            <td>
                <button type="reset" name="Restablecer" value="restablecer"><label for="">Restablecer</label></button>
            </td>
        </tr>
    </table>
    <br>
</form>
<table>
    <thead>
        <tr>
            <th>TipoDeDocumento</th>
            <th>NumeroDeDocumento</th>
            <th>PrimerNombre</th>
            <th>egundoNombre</th>
            <th>PrimerApellido</th>
            <th>SegundoApellido</th>
            <th>CorreoElectronico</th>
            <th>Celular</th>
            <th>Estados</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM "
        ?>
    </tbody>
</table>
<?php include("../includes/footer.php")?>
</body>
</html>