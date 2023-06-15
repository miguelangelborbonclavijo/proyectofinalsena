<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Facturas electronicas para multiples empresas">
    <meta name="keywords" content="Factura Electronica">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="icon" href="../img/logo-sena-verde-png-sin-fondo.png" type="image/png" sizes="16x16">
    <title>Inicio</title>
    <link rel="stylesheet" href="./decoracion.css">
  </head>
<body>
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <img src="../img/logo-sena-verde-png-sin-fondo.png" alt="" width="5%">
    <a class="navbar-brand" href="#">FACTURAS ELECTRONICAS S.A.S</a>
    <button><a href="../vistas/login.php">inicio de seccion</a></button>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../vistas/index.php">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Registrar</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../vistas/registro_personas.php">Registro de Personas</a></li>
              <li><a class="dropdown-item" href="../vistas/registro_clientes.php">Registrar Clientes</a></li>
              <li><a class="dropdown-item" href="../vistas/registro_trabajadores.php">Registrar Trabajadores</a></li>
              <li><a class="dropdown-item" href="../vistas/registro_proveedores.php">Registrar Proveedor</a></li>
              <li><a class="dropdown-item" href="../vistas/formulario_ventas.php">Registrar ventas</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../vistas/registro_productos.php">Registrar Productos</a></li>
              <li><a class="dropdown-item" href="../vistas/tipo_producto.php">Registrar Tipo Productos</a></li>
            </ul>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../vistas/facturacion.php">Facturación</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../vistas/registro_ventas.php">Ventas</a>
        </li>   
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../vistas/registro_soporte.php">Soporte</a>
        </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<br><br><br><br>