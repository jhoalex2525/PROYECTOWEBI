<?php

include_once '../database/models/UsersModel.php';
$usersModel = new UsersModel();
$emaillogin = $_POST['emaillogin'];
$passwordlogin = $_POST['passwordlogin'];
$user = $usersModel->userValidation($emaillogin, $passwordlogin);
$countrows = mysqli_num_rows($user);
if ($countrows == 1) {
    while ($row = mysqli_fetch_assoc($user)) {        
        echo "<script>alert('Bienvenido, estás ingresando a tu perfil');
    window.location='profile.php?id={$row['id']}'</script>";
    }
} 
else {
    echo "<script>alert('El correo electrónico o la contraseña son incorrectos');
            window.location='login.php'</script>";
}
?>