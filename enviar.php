<?php
	ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    if (session_status() !== PHP_SESSION_ACTIVE) {
		session_start();
	}
	
	$servername = "10.134.25.3";
	$username = "festival_industriario";
	$password = "wvcC$541";
    $dbname = "db_festival_industriario_sesi";

	// Create connection
    try{
        //$conn = new mysqli($servername, $username, $password, $dbname);
        $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch( PDOException $e ){
        die( "Connection Error: ".$e->getMessage() );

    }

    
	// Check connection
	/*if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}*/


	$categoria = !empty($_POST['categoria']) ? $_POST['categoria'] : "CATEGORIA I";
	//$polo = mb_convert_encoding($_POST['polo'], "ISO-8859-1","UTF-8");
    $polo = $_POST['polo'];
	//$tipo_inscricao = mb_convert_encoding($_POST['tipo_inscricao'],"ISO-8859-1","UTF-8");
    $tipo_inscricao = $_POST['tipo_inscricao'];
    //$nome = mb_convert_encoding($_POST['nome'], "ISO-8859-1","UTF-8");
    $nome = $_POST['nome'];
	//$nome_artistico = mb_convert_encoding($_POST['nome_artistico'], "ISO-8859-1","UTF-8");
    $nome_artistico = $_POST['nome_artistico'];
	$cpf = $_POST['cpf'];
	$data_nascimento = $_POST['data_nascimento'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	//$endereco = mb_convert_encoding($_POST['endereco'], "ISO-8859-1","UTF-8");
    $endereco = $_POST['endereco'];
	//$empresa = mb_convert_encoding($_POST['empresa'], "ISO-8859-1","UTF-8");
    $empresa = $_POST['empresa'];
	//$cargo =  !empty($_POST['cargo']) ? mb_convert_encoding($_POST['cargo'], "ISO-8859-1","UTF-8") : "NÃO SE APLICA";
    $cargo =  !empty($_POST['cargo']) ? $_POST['cargo'] : "NÃO SE APLICA";
	//$matricula = !empty($_POST['matricula']) ? mb_convert_encoding($_POST['matricula'], "ISO-8859-1","UTF-8") : "NÃO SE APLICA";
    $matricula = !empty($_POST['matricula']) ? $_POST['matricula'] : "NÃO SE APLICA";
	//$musica = mb_convert_encoding($_POST['musica'], "ISO-8859-1","UTF-8");
    $musica = $_POST['musica'];
	//$compositor = mb_convert_encoding($_POST['compositor'], "ISO-8859-1","UTF-8");
    $compositor = $_POST['compositor'];
	//$link_musica = mb_convert_encoding($_POST['link_youtube'], "ISO-8859-1","UTF-8");
    $link_musica = $_POST['link_youtube'];
	/*$id_profissional = $_FILES['id_profissional']['name'];
	$rg_cnh = $_FILES['rg_cnh']['name'];
	$contrato_social = $_FILES['contrato_social']['name'];
	$comprovante_residencial = $_FILES['comprovante_residencial']['name'];
	$doc_dependente = $_FILES['doc_dependente']['name'];/
	$video_candidato = $_FILES['video_candidato']['name'];
	$letra_cifrada = $_FILES['letra_cifrada']['name'];*/
	//$link_video_candidato = mb_convert_encoding($_POST['link_video_candidato'], "Windows-1252","UTF-8");
    $link_video_candidato = "";
	
	
	$folder = 'files/interessados/'.$cpf;
	if(!is_dir($folder)){
		mkdir($folder, 0757);
	}
	
	if(isset($_FILES['id_profissional']) && $_FILES['id_profissional']['name'] != ""){
		$extensao_1 = strripos(strtolower(substr($_FILES['id_profissional']['name'], -4)), ".") === false ?
					  ".".strtolower(substr($_FILES['id_profissional']['name'], -4)) :
					  strtolower(substr($_FILES['id_profissional']['name'], -4)); //pega a extensao do arquivo
		$id_profissional_nome = rand().md5(time()) . $extensao_1; //define o nome do arquivo
		move_uploaded_file($_FILES['id_profissional']['tmp_name'], $folder.'/'.$id_profissional_nome); //efetua o upload	
	}
	
	if(isset($_FILES['rg_cnh'])){
		/*$extensao_2 = strtolower(substr($_FILES['rg_cnh']['name'], -4)); //pega a extensao do arquivo
		$rg_cnh_nome = rand().md5(time()) . $extensao_2; //define o nome do arquivo
		move_uploaded_file($_FILES['rg_cnh']['tmp_name'], $folder.'/'.$rg_cnh_nome); //efetua o upload*/

		# Declarar a variável "i", que será nosso controle, para que não haja loop infinito.
		$i = 0;
		
		$rg_cnh_lado1_nome = "";
		$rg_cnh_lado2_nome = "";
		# Faz um loop conforme o número de arquivos
		foreach ($_FILES["rg_cnh"]["error"] as $key => $error) {
			
			if( $i < 2 ){
				$extensao_2 = strripos(strtolower(substr($_FILES['rg_cnh']['name'][$i], -4)), ".") === false ?
							  ".".strtolower(substr($_FILES['rg_cnh']['name'][$i], -4)) :
							  strtolower(substr($_FILES['rg_cnh']['name'][$i], -4)); //pega a extensao do arquivo
				if( $i == 0 ){
					# Definir a pasta que os arquivos serão "upados".
					//$pasta = "fotos/_" . $_FILES["uploads"]["name"][$i];
					$rg_cnh_lado1_nome = rand().md5(time()) . $extensao_2; //define o nome do arquivo
					# Aqui, você faz o upload do arquivo, utilizando a classe que você
					# tem aí.
					//$ftp->upload($_FILES["uploads"]["tmp_name"][$i], $pasta);
					move_uploaded_file($_FILES['rg_cnh']['tmp_name'][$i], $folder.'/'.$rg_cnh_lado1_nome); //efetua o upload
				}else {
					$rg_cnh_lado2_nome = rand().md5(time()) . $extensao_2; //define o nome do arquivo
					move_uploaded_file($_FILES['rg_cnh']['tmp_name'][$i], $folder.'/'.$rg_cnh_lado2_nome); //efetua o upload
				}
			}else{
				break;
			}
		
			# Agora o arquivo já foi upado, pode fazer alguns scripts adicionais, como por exemplo
			# adicionar o nome dele no banco de dados, ou talvez alertar o nome de cada arquivo.
		
			# Incrementar algum um valor a mais na variável "i" para que não ocorra loop infinito.
			++$i;
		}

	}
	
    $contrato_social_nome = "";
	if(isset($_FILES['contrato_social']) && $_FILES['contrato_social']['name'] != ""){
		$extensao_3 = strripos( strtolower(substr($_FILES['contrato_social']['name'], -4)), "." ) === false ?
					  ".".strtolower(substr($_FILES['contrato_social']['name'], -4)) :
					  strtolower(substr($_FILES['contrato_social']['name'], -4)); //pega a extensao do arquivo
		$contrato_social_nome = rand().md5(time()) . $extensao_3; //define o nome do arquivo
		move_uploaded_file($_FILES['contrato_social']['tmp_name'], $folder.'/'.$contrato_social_nome); //efetua o upload	
		
	}
	
	if(isset($_FILES['comprovante_residencia']) && $_FILES['comprovante_residencia']['name'] != ""){
		$extensao_4 = strripos(strtolower(substr($_FILES['comprovante_residencia']['name'], -4)), ".") === false ?
					  ".".strtolower(substr($_FILES['comprovante_residencia']['name'], -4)) :
					  strtolower(substr($_FILES['comprovante_residencia']['name'], -4)); //pega a extensao do arquivo
		$comprovante_residencial_nome = rand().md5(time()) . $extensao_4; //define o nome do arquivo
		move_uploaded_file($_FILES['comprovante_residencia']['tmp_name'], $folder.'/'.$comprovante_residencial_nome); //efetua o upload	
	}
	
    $doc_dependente_nome = "";
	if(isset($_FILES['doc_dependente']) && $_FILES['doc_dependente']['name'] != ""){
		$extensao_5 = strripos(strtolower(substr($_FILES['doc_dependente']['name'], -4)), ".") === false ?
					  ".".strtolower(substr($_FILES['doc_dependente']['name'], -4)) :
					  strtolower(substr($_FILES['doc_dependente']['name'], -4)); //pega a extensao do arquivo
		$doc_dependente_nome = rand().md5(time()) . $extensao_5; //define o nome do arquivo
		move_uploaded_file($_FILES['doc_dependente']['tmp_name'], $folder.'/'.$doc_dependente_nome); //efetua o upload	
	}
	
    $video_candidato_nome = "";
	/*if(isset($_FILES['video_candidato']) && $_FILES['video_candidato']['name'] != ""){
		$extensao_6 = strripos( strtolower(substr($_FILES['video_candidato']['name'], -4)), ".") === false ?
					  ".".strtolower(substr($_FILES['video_candidato']['name'], -4)) :
					  strtolower(substr($_FILES['video_candidato']['name'], -4)); //pega a extensao do arquivo
		$video_candidato_nome = rand().md5(time()) . $extensao_6; //define o nome do arquivo
		move_uploaded_file($_FILES['video_candidato']['tmp_name'], $folder.'/'.$video_candidato_nome); //efetua o upload	
	}*/
	
    $letra_cifrada_nome = "";
	/*if(isset($_FILES['letra_cifrada']) && $_FILES['letra_cifrada']['name'] != ""){
		$extensao_7 = strripos( strtolower(substr($_FILES['letra_cifrada']['name'], -4)), ".") === false ?
					  ".".strtolower(substr($_FILES['letra_cifrada']['name'], -4)) :
					  strtolower(substr($_FILES['letra_cifrada']['name'], -4)); //pega a extensao do arquivo
		$letra_cifrada_nome = rand().md5(time()) . $extensao_7; //define o nome do arquivo
		move_uploaded_file($_FILES['letra_cifrada']['tmp_name'], $folder.'/'.$letra_cifrada_nome); //efetua o upload	
	}*/
	

	/*$sql = "INSERT INTO interessados_2025 (categoria,
										polo,
										tipo_inscricao,
										nome,
										nome_artistico,
										cpf,
										data_nascimento,
										telefone,
										email,
										endereco,
										empresa,
										cargo,
										matricula,
										musica,
										compositor,
										link_musica,
										id_profissional,
										rg_cnh,
										rg_cnh_lado2,
										contrato_social,
										comprovante_residencial,
										doc_dependente,
										link_video_candidato,
										video_candidato,
										letra_cifrada)
										
								VALUES ('$categoria',
										'$polo',
										'$tipo_inscricao',
										'$nome',
										'$nome_artistico',
										'$cpf',
										'$data_nascimento',
										'$telefone',
										'$email',
										'$endereco',
										'$empresa',
										'$cargo',
										'$matricula',
										'$musica',
										'$compositor',
										'$link_musica',
										'$id_profissional_nome',
										'$rg_cnh_lado1_nome',
										'$rg_cnh_lado2_nome',
										'$contrato_social_nome',
										'$comprovante_residencial_nome',
										'$doc_dependente_nome',
										'$link_video_candidato',
										'$video_candidato_nome',
										'$letra_cifrada_nome')";*/

$sql = "INSERT INTO interessados_2025 (categoria,
                                        polo,
                                        tipo_inscricao,
                                        nome,
                                        nome_artistico,
                                        cpf,
                                        data_nascimento,
                                        telefone,
                                        email,
                                        endereco,
                                        empresa,
                                        cargo,
                                        matricula,
                                        musica,
                                        compositor,
                                        link_musica,
                                        id_profissional,
                                        rg_cnh,
                                        rg_cnh_lado2,
                                        contrato_social,
                                        comprovante_residencial,
                                        doc_dependente,
                                        link_video_candidato,
                                        video_candidato,
                                        letra_cifrada)

                                VALUES (:categoria,
                                        :polo,
                                        :tipo_inscricao,
                                        :nome,
                                        :nome_artistico,
                                        :cpf,
                                        :data_nascimento,
                                        :telefone,
                                        :email,
                                        :endereco,
                                        :empresa,
                                        :cargo,
                                        :matricula,
                                        :musica,
                                        :compositor,
                                        :link_musica,
                                        :id_profissional_nome,
                                        :rg_cnh_lado1_nome,
                                        :rg_cnh_lado2_nome,
                                        :contrato_social_nome,
                                        :comprovante_residencial_nome,
                                        :doc_dependente_nome,
                                        :link_video_candidato,
                                        :video_candidato_nome,
                                        :letra_cifrada_nome)";
    try{
        $stmt = $conn->prepare( $sql );
        $stmt->execute(array(
                                    ':categoria' => $categoria,
                                    ':polo' => $polo,
                                    ':tipo_inscricao' => $tipo_inscricao,
                                    ':nome' => $nome,
                                    ':nome_artistico' => $nome_artistico,
                                    ':cpf' => $cpf,
                                    ':data_nascimento' => $data_nascimento,
                                    ':telefone' => $telefone,
                                    ':email' => $email,
                                    ':endereco' => $endereco,
                                    ':empresa' => $empresa,
                                    ':cargo' => $cargo,
                                    ':matricula' => $matricula,
                                    ':musica' => $musica,
                                    ':compositor' => $compositor,
                                    ':link_musica' => $link_musica,
                                    ':id_profissional_nome' => $id_profissional_nome,
                                    ':rg_cnh_lado1_nome' => $rg_cnh_lado1_nome,
                                    ':rg_cnh_lado2_nome' => $rg_cnh_lado2_nome,
                                    ':contrato_social_nome' => $contrato_social_nome,
                                    ':comprovante_residencial_nome' => $comprovante_residencial_nome,
                                    ':doc_dependente_nome' => $doc_dependente_nome,
                                    ':link_video_candidato' => $link_video_candidato,
                                    ':video_candidato_nome' => $video_candidato_nome,
                                    ':letra_cifrada_nome' => $letra_cifrada_nome
        ));

        header('Location: index.php?msg=success');
    }catch( PDOException $e ){
        header('Location: index.php?msg=error');
        throw new Exception( "Error: {$e->getMessage()}" );

    }

	/*if ($conn->query($sql) === TRUE) {
	  header('Location: index.html?msg=success');
	} else {
		
	  header('Location: index.html?msg=error');
	}
	
	$conn->close();*/
	
	
	
	