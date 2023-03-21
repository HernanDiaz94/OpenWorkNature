<?PHP
		

	
  //  while ($rowComen = mysql_fetch_array($inscriptos)) {
	
	  $destinatario = 'mbelenleguizamon@gmail.com';
      $asunto = 'Capacitación: "Prescripción y Control de la Actividad Física"';
      $mensaje = 'Muchas gracias por inscribirse. La Dirección de Deportes que depende de la Secretaría de Bienestar Universitario y Asuntos Estudiantiles organiza un ciclo de conferencias durante los meses de octubre y noviembre. Este jueves 22 de octubre a las 16 horas se iniciará con la capacitación "Prescripción y Control de la Actividad Física", dictada por el docente, Prof. Augusto Martínez, especialista en el tema y docente de la Dirección de Deportes de la UNCA, en el enlace: https://meet.google.com/ejz-nkhx-eyg
Se entregarán certificados.
Saludos cordiales.
Comité Organizador.';
      $desde = "From: comunicacion@unca.edu.ar";

	  $result = mail($destinatario, $asunto, $mensaje, $desde); 

      if($result == true)
          echo "correo enviado";
      else
          echo "correo no enviado";		
		
	//}


?>

