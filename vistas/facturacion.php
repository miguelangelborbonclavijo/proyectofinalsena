<?php include("../includes/head.php")?>
<h1 id="formulario" style="text-align: center;">Facturación </h1>
<hr>
<table style=" background-color: black;" >
    <table>
        <tr>
        <td><p><strong>NUMERO DE FACTURA</strong></p></td>
        <td></td>
        <td><p><strong>CEDULA DE CIUDADANIA</strong></p></td>
        <td></td>
        <td><p><strong>TIPO DE PAGO</strong></td>       
        </tr>
        <tr>
            <td><input type="number"></td>
            <td></td>
            <td><input type="number"></td>
            <td></td>
            <td><input type="text"></td>
        </tr> 
    </table>
    <br>
    <hr>
    <table>
    <tr>
        <td></td>
        <td  style="width: 100px; text-align: center"><p><strong>MOSTRADOR</strong></p></td>
        <td></td>
    </tr>
    </table>
    <table>
    <tr>
            <td><label for="">FECHA/HORA</label></td>
            <td><label for="">CAJERO</label></td>
            <td><label for="">VENDEDOR</label></td>
        </tr>
        <tr>
            <td><input type="TIMETAME"></td>
            <td><input type="number"></td>
            <td><input type="text"></td>
        </tr>
    </table>
    <br>
    <hr>
    <table>
    <tr>
        <td></td>
        <td  style="width: 100px; text-align: center"><p><strong>PRODUCTOS</strong></p></td>
        <td></td>
    </tr>
    </table>
    <table>
        <tr>
        <td style="width: 200px; text-align: center">CODIGO</td>
        <td style="width: 200px; text-align: center">DESCRIPCION</td>
        <td style="width: 200px; text-align: center">CANTIDAD</td>
        <td style="width: 200px; text-align: center">VALOR</td>
    </tr>
    <tr>
        <td><input type="number"></td>
        <td><input type="text"></td>
        <td><input type="number"></td>
        <td><input type="number"></td>
    </tr>
    <tr>
        <td><input type="number"></td>
        <td><input type="text"></td>
        <td><input type="number"></td>
        <td><input type="number"></td>
    </tr>
    <tr>
        <td><input type="number"></td>
        <td><input type="text"></td>
        <td><input type="number"></td>
        <td><input type="number"></td>
    </tr>
        <tr>
        <td><input type="number"></td>
        <td><input type="text"></td>
        <td><input type="number"></td>
        <td><input type="number"></td>
    </tr>
    <tr>
        <td><label for="">Total Factura</label></td>
        <td></td>
        <td></td>
        <td><input type="number"></td>
    </tr>
    <tr>
        <td><label for="">Valor Recibido</label></td>
        <td></td>
        <td></td>
        <td><input type="number"></td>
    </tr>
    <tr>
        <td><label for="">Cambio</label></td>
        <td></td>
        <td></td>
        <td><input type="number"></td>
    </tr>
    </table>
<br>
<hr>
    <br>
    <table>
        <td>
            <button>
                <label for="">Guardar</label>
            </button>
        </td>
        <td>
            <button>
                <label for="">Reseteaer</label>
            </button>
        </td>
    </table>
    <br>
    </table>
</table>
<?php include("../includes/footer.php")?>
</body>
</html>