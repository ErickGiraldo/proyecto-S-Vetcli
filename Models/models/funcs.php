<?php  

	function emailExiste($email)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT idUsuario FROM usuario WHERE correo = ? LIMIT 1");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		$stmt->close();
		
		if ($num > 0){
			return true;
			} else {
			return false;	
		}
	}

	function documentoExiste($docu)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT idPropietario FROM propietario WHERE numDocumento = ? LIMIT 1");
		$stmt->bind_param("s", $docu);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		$stmt->close();
		
		if ($num > 0){
			return true;
			} else {
			return false;	
		}
	}
	function enviarEmail($email,$asunto, $cuerpo){
		
		require_once 'PHPMailer/PHPMailerAutoload.php';
		
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls'; //Modificar
	    $mail->Host = 'smtp.gmail.com'; //Modificar
		$mail->Port = 587; //Modificar
		
		$mail->Username = 'svetcli1@gmail.com'; //Modificar
		$mail->Password = 'veterinaria'; //Modificar
		
		$mail->From     = $email;
		$mail->FromName = "clinica veterinaria";
		$mail->addAddress($email);
		
		$mail->Subject = $asunto;
		$mail->Body    = $cuerpo;
		$mail->IsHTML(true);
		
		if($mail->send())
		return true;
		else
		return false;
	}
	

?>