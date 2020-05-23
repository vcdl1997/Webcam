<?php
	extract($_POST);

	switch ($funcao) {
		case 'png':
			if(isset($data)){
				$data = base64_decode(explode(',', explode(';', $data)[1])[1]);
				file_put_contents('image.png', $data);
				// $ftp_server = "files.000webhost.com";
				// $ftp_user = "crisor";
				// $ftp_pass = "24031997vT@";
				// $caminho_absoluto = 'public_html/';

				// $conn_id = ftp_ssl_connect($ftp_server) or die("Couldn't connect to {$ftp_server}"); 
				// ftp_login($conn_id, $ftp_user, $ftp_pass);
				// ftp_put( $conn_id, $caminho_absoluto."image.png", $data, FTP_ASCII);
			}
		break;
	}
