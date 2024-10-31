<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Clientes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
            margin-bottom: 20px;
        }
        .table-container {
            margin-top: 30px;
        }
        table {
        font-size: 14px; /* Tamaño de fuente más pequeño */
        }
        .no-data {
            text-align: center;
            margin-top: 20px;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0px;
        }
        footer {
            background-color: #e3f2fd;
            padding: 5px;
            text-align: center;
            font-size: 14px;
            margin-top: auto;
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

<div class="container">
    <h3 class="text-center">Listado de Clientes</h>

    <!-- Customers Table -->
    <div class="table-container">
        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($clientes as $cliente)     
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->email }}</td>
                    
                    
                    <td>
                      <form action="{{route('cliente.destroy', parameters:$cliente->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                      </form>
                    </td>
                    <td>
                        <form >
                        
                        <button type="submit" class="btn btn-danger btn-sm">Editar</button>
                        </form>
                        
                    </td>
                </tr>
               

              @endforeach
               
            </tbody>
        </table>
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


