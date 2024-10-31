<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Proveedores</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       .container {
            margin-top: 50px;
            margin-bottom: 30px;
        }
        .table-container {
            margin-top: 30px;
        }
        .no-data {
            text-align: center;
            margin-top: 20px;
        }
        table {
        font-size: 14px; /* Tamaño de fuente más pequeño */
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
            margin-top: auto; /* Esto asegura que el footer quede al final */
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
    <h2 class="text-center">Listado de Proveedores</h2>

    <!-- Suppliers Table -->
    <div class="table-container">
        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre Proveedor</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    <td>{{ $proveedor->id }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->email }}</td>
   
                    <td>
                        
                        <form action="{{route('proveedores.destroy', parameters:$proveedor->id)}}" method="POST">
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

