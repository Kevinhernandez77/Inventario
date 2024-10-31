<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="login-box">
            <h2 class="text-center mb-4">Iniciar sesión</h2>
            <!-- Se actualiza el formulario para enviar los datos a la ruta del login -->
            <form method="POST" action="{{ route('verificar-usuario') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Usuario:</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Ingrese su usuario"
                        required>
                </div>

                <div class="mb-3">

                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-dark btn-block">Ingresar</button>
                </div>


            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>