<?php
$conexion = mysqli_connect("localhost","root","","bdparqueadero");
if (!$conexion) {
	echo 'erro al concectar a la base de datos';
	# code...
}
else{
	echo 'conectado a la base de datos';
}

    $Nombre = $_POST["Nombre"];
    $Email= $_POST["Email"];
    $Telefono = $_POST["Telefono"];
    $Dirrecion= $_POST["Dirrecion"];
    $Usuario= $_POST["Usuario"];
    $Password= $_POST["Password"];

    $statement = mysqli_prepare($con, "INSERT INTO user (Nombre,Email,Telefono,Dirrecion,Usuario,Password) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssis", $name, $username, $age, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
