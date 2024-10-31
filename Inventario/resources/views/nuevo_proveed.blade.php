<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar proveedor</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
        }
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
        input, select, textarea {
            font-size: 0.9rem;
        }
        .btn-save {
            margin-top: 20px;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        footer {
            background-color: #e3f2fd;
            padding: 5px;
            text-align: center;
            font-size: 14px;
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


<!-- Main container -->
<div class="container">
    <div class="form-box">
        <h3 class="text-center mb-4">Añadir Proveedor</h3>
        <form action="{{ route('proveedores.store') }}" method="POST">
        @csrf
            <!-- Product Name -->
            <div class="mb-3">
                <label class="form-label">Nombre del proveedor:</label>
                <input type="text" class="form-control" id="proveedname" name="nombre" required>
            </div>


            <!-- Price -->
            <div class="mb-3">
                <label  class="form-label">Direccion:</label>
                <input type="text" class="form-control" id="direccionprov" name="direccion" required>
            </div>

         

            <!-- Stock -->
            <div class="mb-3">
                <label  class="form-label">Telefono:</label>
                <input type="text" class="form-control" id="telefonoproved" name="telefono" required>
            </div>

            <!-- Stock -->
            <div class="mb-3">
                <label  class="form-label">Email:</label>
                <input type="text" class="form-control" id="emailprov" name="email" required>
            </div>


            <!-- Submit Button -->
            <div class="d-grid gap-2 btn-save">
                <button type="submit" class="btn btn-dark btn-block">Guardar proveedor nuevo</button>
            </div>
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
