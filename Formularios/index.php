<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">
        <form id = "form1"action="process.php" method="post">
            <h2>Registro Usuario</h2>
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="email">
                <label for="email">Email</label>
                <input type="text" name="Email" id="txtEmail">
            </div>
            <div class="teléfono">
                <label for="teléfono">Teléfono</label>
                <input type="text" name="txtTeléfono" id="txtTeléfono">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>

</html>