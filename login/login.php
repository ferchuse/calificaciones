<?phpheader("Content-Type: application/json");$response= array();include("../conexi.php");$link=Conectarse();$myusername=$_POST['username'];$mypassword=$_POST['password']; $myusername = stripslashes($myusername);$mypassword = stripslashes($mypassword);/* $myusername = mysqli_real_escape_string($myusername);$mypassword = mysqli_real_escape_string($mypassword); */if($_POST['tipo_usuario'] == "admin"){$sql="SELECTid_usuarios,nombre_usuarios,permiso_usuariosFROM usuarios WHERE nombre_usuarios='$myusername' AND pass_usuarios='$mypassword'";}else{$sql="SELECT *FROM alumnosWHERE id_alumnos = '$myusername'AND contrasena='$mypassword'";}$result=mysqli_query($link, $sql);if (!$result){die('Error: ' . mysqli_error($link));}$count=mysqli_num_rows($result);if($count==1){session_start();$row = mysqli_fetch_assoc($result);if($_POST['tipo_usuario'] == "admin"){setcookie("id_usuarios", $row["id_usuarios"],time() + (86400 * 30), "/") or die("Error cookie id_usuarios");setcookie("nombre_usuarios", $row["nombre_usuarios"],  time() + (86400 * 30), "/") or die("Error cookie id_usuarios");$_SESSION["id_usuarios"] = $row["id_usuarios"] or die("Error al iniciar username");$_SESSION["nombre_usuarios"] = $row["nombre_usuarios"] or die("Error al iniciar username");}else{$nombre_usuario= $row["nombre_alumno"];setcookie("id_usuarios",$row["id_alumnos"],  time() + (86400 * 30), "/");setcookie("nombre_completo",$row["nombre_alumno"]." ".$row["ape_pat"]." ".$row["ape_mat"],  0, "/calificaciones/");setcookie("grupo",$row["id_grupo"],  time() + (86400 * 30), "/");$_SESSION["id_usuarios"] = $row["id_alumnos"] or die("Error al iniciar username");$_SESSION["nombre_usuarios"] =$row["nombre_alumno"]." ".$row["ape_pat"]." ".$row["ape_mat"] or die("Error al iniciar username");$_SESSION["grupo"] = $row["id_grupo"] or die("Error al iniciar username");}$response["login"] = "valid";$response["permisos"] = $_POST["tipo_usuario"];}else{$response["login"] = "invalid";$response["mensaje"] = "Usuario y/o Contraseña Inválidos";}$response["query"] = $sql;echo json_encode($response);?>