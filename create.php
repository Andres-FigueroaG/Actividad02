

<?php
require 'banco.php';
//Acompanha os erros de validação

// Processar so quando tenha uma chamada post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreError = null;
    $contraseñaError = null;
    $direccionError = null;
    $telefonoError = null;
    $emailError = null;
    $sexoError = null;

    if (!empty($_POST)) {
        $validacion = True;
        $nuevoUsuario = False;
        if (!empty($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
        } else {
            $nombreError = 'Por favor ingrese su nombre';
            $validacion = False;
        }

        if (!empty($_POST['contraseña'])) {
            $contraseña = $_POST['contraseña'];
        } else {
            $contraseñaError = 'Por favor ingrese su contraseña';
            $validacion = False;
        }


        if (!empty($_POST['direccion'])) {
            $direccion = $_POST['direccion'];
        } else {
            $direccionError = 'Por favor ingrese su direccion';
            $validacion = False;
        }


        if (!empty($_POST['telefono'])) {
            $telefono = $_POST['telefono'];
        } else {
            $telefonoError = 'Por favor ingrese su telefono';
            $validacion = False;
        }


        if (!empty($_POST['email'])) {
            $email = $_POST['email'];
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $emailError = 'Por favor ingrese una direccion de correo correcta';
                $validacion = False;
            }
        } else {
            $emailError = 'Por favor ingrese  un correo';
            $validacion = False;
        }


        if (!empty($_POST['sexo'])) {
            $sexo = $_POST['sexo'];
        } else {
            $sexoError = 'Por favor seleccione un genero';
            $validacion = False;
        }
    }


    if ($validacion) {
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO Persona (nombre, contraseña ,direccion, telefono, email, sexo) VALUES(?,?,?,?,?,?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($nombre, $contraseña ,$direccion, $telefono, $email, $sexo));
        Banco::desconectar();
        header("Location: index.php");
    }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>SoundMania</title>
</head>

<body>
<div class="container">
    <div clas="span10 offset1">
        <div class="card">
            <div class="card-header">
                <h3 class="well"> Registrate </h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="create.php" method="post">

                    <div class="control-group  <?php echo !empty($nombreError) ? 'error ' : ''; ?>">
                        <label class="control-label">Nombre</label>
                        <div class="controls">
                            <input size="50" class="form-control" name="nombre" type="text" placeholder="nombre"
                                   value="<?php echo !empty($nombre) ? $nombre : ''; ?>">
                            <?php if (!empty($nombreError)): ?>
                                <span class="text-danger"><?php echo $nombreError; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="control-group <?php echo !empty($contraseñaError) ? 'error ' : ''; ?>">
                        <label class="control-label">Contraseña</label>
                        <div class="controls">
                            <input size="80" class="form-control" name="contraseña" type="text" placeholder="contraseña"
                                   value="<?php echo !empty($contraseña) ? $contraseña : ''; ?>">
                            <?php if (!empty($contraseñaError)): ?>
                                <span class="text-danger"><?php echo $contraseñaError; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="control-group <?php echo !empty($direccionError) ? 'error ' : ''; ?>">
                        <label class="control-label">Direccion</label>
                        <div class="controls">
                            <input size="80" class="form-control" name="direccion" type="text" placeholder="direccion"
                                   value="<?php echo !empty($direccion) ? $direccion : ''; ?>">
                            <?php if (!empty($emailError)): ?>
                                <span class="text-danger"><?php echo $direccionError; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group <?php echo !empty($telefonoError) ? 'error ' : ''; ?>">
                        <label class="control-label">Telefono</label>
                        <div class="controls">
                            <input size="35" class="form-control" name="telefono" type="text" placeholder="telefono"
                                   value="<?php echo !empty($telefono) ? $telefono : ''; ?>">
                            <?php if (!empty($telefonoError)): ?>
                                <span class="text-danger"><?php echo $telefonoError; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group <?php !empty($emailError) ? '$emailError ' : ''; ?>">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input size="40" class="form-control" name="email" type="text" placeholder="Email"
                                   value="<?php echo !empty($email) ? $email : ''; ?>">
                            <?php if (!empty($emailError)): ?>
                                <span class="text-danger"><?php echo $emailError; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group <?php !empty($sexoError) ? 'echo($sexoError)' : ''; ?>">
                        <div class="controls">
                            <label class="control-label">Sexo</label>
                            <div class="form-check">
                                <p class="form-check-label">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo"
                                           value="M" <?php isset($_POST["sexo"]) && $_POST["sexo"] == "M" ? "checked" : null; ?>/>
                                    Masculino</p>
                            </div>
                            <div class="form-check">
                                <p class="form-check-label">
                                    <input class="form-check-input" id="sexo" name="sexo" type="radio"
                                           value="F" <?php isset($_POST["sexo"]) && $_POST["sexo"] == "F" ? "checked" : null; ?>/>
                                    Femenino</p>
                            </div>
                            <?php if (!empty($sexoError)): ?>
                                <span class="help-inline text-danger"><?php echo $sexoError; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-actions">
                        <br/>
                        <button type="submit" class="btn btn-success">Añadir</button>
                        <a href="user.php" type="btn" class="btn btn-default">Volver atras</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

