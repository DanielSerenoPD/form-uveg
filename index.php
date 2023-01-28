<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de contacto</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <h1>Registrar Alumno</h1>
            <form action="card.php" method="post">
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="add_nombre" id="nombre" required
                        placeholder="Ingresa tu nombre">
                </div>
                <div>
                    <label for="last_name">
                        Apellidos
                    </label>
                    <input type="text" name="add_last_name" id="last_name" placeholder="Ingresa tus apellidos">
                </div>
                <div>
                    <label for="age">
                        Edad
                    </label>
                    <input type="number" name="add_age" id="age" placeholder="Ingresa tu edad">
                </div>

                <div>
                    <label for="email">Email
                    </label>
                    <input type="email" name="add_email" id="email" required
                        placeholder="Ingresa tu Email">
                </div>

                <div>
                    <label for="password">
                        Contraseña
                    </label>
                    <input type="password" name="add_password" id="password" placeholder="*********">
                </div>
                <button type="submit"name="send_form" id="send">
                    <div>Registrar</div>
                </button>
            </form>
        </div>
    </div>

</body>

</html>
