<?php

	//include_once("conecta.php");
	
	//$dados = $_FILES['arquivo'];
	//var_dump($dados);
	
	if(!empty($_FILES['arquivo']['tmp_name'])){
		$arquivo = new DomDocument();
		$arquivo->load($_FILES['arquivo']['tmp_name']);
		//var_dump($arquivo);
		
		$linhas = $arquivo->getElementsByTagName("Row");
		//var_dump($linhas);
		
		$primeira_linha = true;
		
		foreach($linhas as $linha){
			if($primeira_linha == false){
								
				$nome = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
				echo "Nome: $nome <br>";			
				
				$telefone = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
				echo "Nome: $telefone <br>";			
				
				echo "<hr>";
				
				//mandar Watsapp
				header("location:https://api.whatsapp.com/send?phone=5551989505145&text=oi%20deivid");
				
			 }
			$primeira_linha = false;
		}
	}
?>