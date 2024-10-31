<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Administrador de tareas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
       .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-top: 30px;
           margin-bottom: 40px;
        }
        .form-box {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
          }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">Inventario Tienda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Proveedores
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('proveedores.nuevo')}}">Nuevo</a></li>
            <li><a class="dropdown-item" href="{{route('proveedores.mostrar')}}">Listado</a></li>
            
          </ul>

          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('producto.nuevo')}}">Nuevo</a></li>
            <li><a class="dropdown-item" href="{{route('producto.mostrar')}}">Listado</a></li>
            
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('categoria.nuevo')}}">Nuevo</a></li>
            <li><a class="dropdown-item" href="{{route('categoria.mostrar')}}">Listado</a></li>
            
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('cliente.nuevo')}}">Nuevo</a></li>
            <li><a class="dropdown-item" href="{{route('cliente.mostrar')}}">Listado</a></li>
           
          </ul>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div style="text-align: center;" class="content">
    <h2>Bienvenido al administrador de tareas</h2>
</div>
<!-- Main container -->
<div class="container">
    <div class="form-box">
        <form action="prueba.php" method="GET">
            <!-- Product Name -->
            <div class="mb-3">
                <label class="form-label">Tarea:</label>
                  <input type="text" class="form-control" placeholder = "  Escribe la tarea" id="tarea" name="tarea" required>
                  <div class="d-grid gap-2 btn-save">
                    <button type="submit" class="btn btn-dark btn-block">Guardar tarea</button>
                  </div>
            </div>

            <!-- Submit Button -->
            
        </form>
    </div>
</div>



<footer style="background-color: #e3f2fd; padding: 10px; text-align: center;">
    <p>&copy; 2024 Sistema de Inventario web. Todos los derechos reservados.</p>
    <p>
        Política de Privacidad | 
        Términos de Servicio | 
        Contacto
    </p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>















