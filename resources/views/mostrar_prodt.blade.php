<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
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
    <h2 class="text-center"> Listado de Productos</h2>

    <!-- Search Bar -->
    <div class="row mt-4">
        <div class="col-md-6 offset-md-3">
            <input type="text" class="form-control" id="searchBar" placeholder="Search for products">
        </div>
    </div>

    <!-- Product Table -->
    <div class="table-container">
        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre producto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Estante</th>
                    <th scope="col">Caducidad</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody id="productTable">
            @foreach ($productos as $producto)     
                <tr>
                    <td>{{ $producto->producto_id }}</td>
                    <td>{{ $producto->producto_nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->producto_precio }}</td>
                    <td>{{ $producto->producto_stock }}</td>
                    <td>{{ $producto->categoria->nombre ?? 'Sin categoría' }}</td>
                    <td>{{ $producto->proveedor->nombre ?? 'Sin proveedor' }}</td>
                    <td>{{ $producto->estante }}</td>
                    <td>{{ $producto->fecha_caduca }}</td>
   
                    <td>
                    <form action="{{route('producto.destroy', parameters:$producto->producto_id)}}" method="POST">
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Optional JavaScript for Search Functionality -->
<script>
    const searchBar = document.getElementById('searchBar');
    const productTable = document.getElementById('productTable');

    searchBar.addEventListener('keyup', function() {
        let filter = searchBar.value.toLowerCase();
        let rows = productTable.getElementsByTagName('tr');

        for (let i = 0; i < rows.length; i++) {
            let productName = rows[i].getElementsByTagName('td')[0];
            if (productName) {
                let textValue = productName.textContent || productName.innerText;
                if (textValue.toLowerCase().indexOf(filter) > -1) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }
    });
</script>
<footer style="background-color: #e3f2fd; padding: 10px; text-align: center;">
    <p>&copy; 2024 Sistema de Inventario web. Todos los derechos reservados.</p>
    <p>
        Política de Privacidad | 
        Términos de Servicio | 
        Contacto
    </p>
</footer>

</body>
</html>
