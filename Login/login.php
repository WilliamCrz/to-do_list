<?php
include_once('../partials/configuracion.php');
include_once('../partials/conexion.php');


if (isset($_POST["entrar"])) {

    if (empty($_POST["user"]) || empty($_POST["pass"])) {

        echo "<div class='alert alert-danger'>Campos vacíos</div>";

    } else {

        $usuario = $_POST["user"];
        $password = $_POST["pass"];

        $SLT = "SELECT * FROM usuario WHERE Usuario='$usuario' ";
        $query = mysqli_query($link, $SLT);

        if ($datos = mysqli_fetch_object($query)) {

            if ($password == $datos->Password) {
                $_SESSION['$usuario'] = $datos->usuario;

                header("Location: ../partials/index.php");
                exit();

            } else {

                echo "<div class='alert alert-danger'>Contraseña incorrecta</div>";
            }

        } else {

            echo "<div class='alert alert-danger'>Usuario no encontrado</div>";
        }

    }
}


include_once("../partials/grupo.html");
?>