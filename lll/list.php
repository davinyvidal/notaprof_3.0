<?php
/**
* Página de lições e dados básicos.
*
* Todos direitos reservado (c).
*
* Autor: Daivny Vidal.
*
*/

/** /lll/list.php */

if (isset($proteger)) { // if de proteção.

	if($proteger == 1){

		include("cone.php");  // conexão db.
        	$sql = "SELECT id, nome,usuario, aluno_prof, aluno_licao, aluno_apostila, aluno_localidade, aluno_simulador, aluno_exame, aluno_nota, aluno_hist, titulo, barra_aviso, aluno_notificacao, aluno_duvida, atividade FROM usuarios";
        	$qr = mysql_query($sql);
 	
        	//Cria um vetor unidimensional com os dados da primeira
        	//linha retornada na nossa consulta
        	$row = mysql_fetch_array($qr);
 	
        	//Exibe os dados da primeira linha separados por -
        	$nome[0] = $row['nome'];
		$usuario[0] = $row['usuario'];
		$profissao[0] = $row['aluno_prof'];
		$licao[0] = $row['aluno_licao'];
		$apostila[0] = $row['aluno_apostila'];
		$localidade[0] = $row['aluno_localidade'];
		$simulador[0] = $row['aluno_simulador'];
		$avaliacao[0] = $row['aluno_exame'];
		$nota[0] = $row['aluno_nota'];
		$hist[0] =$row['aluno_hist'];
		$aula[0] =$row['titulo'];
		$aviso[0] =$row['barra_aviso'];
		$notificacao[0]=$row['aluno_notificacao'];
		$notificacao[0] = str_replace('\"', '"', $notificacao[0]);
		$duvida[0] = $row['aluno_duvida'];
		$responder[0] = $row['atividade'];
		$responder[0] = str_replace('\"', '"', $responder[0]);
		
        	//Atualiza a variável criada acima, porém agora contendo
        	//os dados da segunda linha retornada pela consulta
        	$row = mysql_fetch_array($qr);
 	
        	//Exibe os dados da segunda linha separados por -
        	$nome[1] = $row['nome'];
		$usuario[1] = $row['usuario'];
		$profissao[1] = $row['aluno_prof'];
		$licao[1] = $row['aluno_licao'];
		$apostila[1] = $row['aluno_apostila'];
		$localidade[1] = $row['aluno_localidade'];
		$simulador[1] = $row['aluno_simulador'];
		$avaliacao[1] = $row['aluno_exame'];
		$nota[1] = $row['aluno_nota'];
		$hist[1] =$row['aluno_hist'];
		$aula[1] =$row['titulo'];
		$aviso[1] =$row['barra_aviso'];
		$notificacao[1]=$row['aluno_notificacao'];
		$notificacao[1] = str_replace('\"', '"', $notificacao[1]);
		$duvida[1] = $row['aluno_duvida'];
		$responder[1] = $row['atividade'];
		$responder[1] = str_replace('\"', '"', $responder[1]);
	
		$row = mysql_fetch_array($qr);
 	
        	//Exibe os dados da segunda linha separados por -
        	$nome[2] = $row['nome'];
		$usuario[2] = $row['usuario'];
		$profissao[2] = $row['aluno_prof'];
		$licao[2] = $row['aluno_licao'];
		$apostila[2] = $row['aluno_apostila'];
		$localidade[2] = $row['aluno_localidade'];
		$simulador[2] = $row['aluno_simulador'];
		$avaliacao[2] = $row['aluno_exame'];
		$nota[2] = $row['aluno_nota'];
		$hist[2] =$row['aluno_hist'];
		$aula[2] =$row['titulo'];
		$aviso[2] =$row['barra_aviso'];
		$notificacao[2]=$row['aluno_notificacao'];
		$notificacao[2] = str_replace('\"', '"', $notificacao[2]);
		$duvida[2] = $row['aluno_duvida'];
		$responder[2] = $row['atividade'];
		
		$row = mysql_fetch_array($qr);
 	
        	//Exibe os dados da segunda linha separados por -
        	$nome[3] = $row['nome'];
		$usuario[3] = $row['usuario'];
		$profissao[3] = $row['aluno_prof'];
		$licao[3] = $row['aluno_licao'];
		$apostila[3] = $row['aluno_apostila'];
		$localidade[3] = $row['aluno_localidade'];
		$simulador[3] = $row['aluno_simulador'];
		$avaliacao[3] = $row['aluno_exame'];
		$nota[3] = $row['aluno_nota'];
		$hist[3] =$row['aluno_hist'];
		$aula[3] =$row['titulo'];
		$aviso[3] =$row['barra_aviso'];
		$notificacao[3]=$row['aluno_notificacao'];
		$notificacao[3] = str_replace('\"', '"', $notificacao[3]);
		$duvida[3] = $row['aluno_duvida'];
		$responder[3] = $row['atividade'];
		$responder[3] = str_replace('\"', '"', $responder[3]);
		
		$row = mysql_fetch_array($qr);
 	
        	//Exibe os dados da segunda linha separados por -
        	$nome[4] = $row['nome'];
		$usuario[4] = $row['usuario'];
		$profissao[4] = $row['aluno_prof'];
		$licao[4] = $row['aluno_licao'];
		$apostila[4] = $row['aluno_apostila'];
		$localidade[4] = $row['aluno_localidade'];
		$simulador[4] = $row['aluno_simulador'];
		$avaliacao[4] = $row['aluno_exame'];
		$nota[4] = $row['aluno_nota'];
		$aluno_hist[4] =$row['aluno_hist'];
		$aula[4] =$row['titulo'];
		$aviso[4] =$row['barra_aviso'];
		$notificacao[4]=$row['aluno_notificacao'];
		$notificacao[4] = str_replace('\"', '"', $notificacao[4]);
		$duvida[4] = $row['aluno_duvida'];
		$responder[4] = $row['atividade'];
		$responder[4] = str_replace('\"', '"', $responder[4]);
		
		$row = mysql_fetch_array($qr);
 	
        	//Exibe os dados da segunda linha separados por -
        	$nome[5] = $row['nome'];
		$usuario[5] = $row['usuario'];
		$profissao[5] = $row['aluno_prof'];
		$licao[5] = $row['aluno_licao'];
		$apostila[5] = $row['aluno_apostila'];
		$localidade[5] = $row['aluno_localidade'];
		$simulador[5] = $row['aluno_simulador'];
		$avaliacao[5] = $row['aluno_exame'];
		$nota[5] = $row['aluno_nota'];
		$hist[5] =$row['aluno_hist'];
		$aula[5] =$row['titulo'];
		$aviso[5] =$row['barra_aviso'];
		$notificacao[5]=$row['aluno_notificacao'];
		$notificacao[5] = str_replace('\"', '"', $notificacao[5]);
		$duvida[5] = $row['aluno_duvida'];
		$responder[5] = $row['atividade'];
		$responder[5] = str_replace('\"', '"', $responder[5]);
		
		$row = mysql_fetch_array($qr);
 	
        	//Exibe os dados da segunda linha separados por -
        	$nome[6] = $row['nome'];
		$usuario[6] = $row['usuario'];
		$profissao[6] = $row['aluno_prof'];
		$licao[6] = $row['aluno_licao'];
		$apostila[6] = $row['aluno_apostila'];
		$localidade[6] = $row['aluno_localidade'];
		$simulador[6] = $row['aluno_simulador'];
		$avaliacao[6] = $row['aluno_exame'];
		$nota[6] = $row['aluno_nota'];
		$hist[6] =$row['aluno_hist'];
		$aula[6] =$row['titulo'];
		$aviso[6] =$row['barra_aviso'];
		$notificacao[6]=$row['aluno_notificacao'];
		$notificacao[6] = str_replace('\"', '"', $notificacao[6]);
		$duvida[6] = $row['aluno_duvida'];
		$responder[6] = $row['atividade'];
		$responder[6] = str_replace('\"', '"', $responder[6]);
		
		$row = mysql_fetch_array($qr);
 	
        	//Exibe os dados da segunda linha separados por -
        	$nome[7] = $row['nome'];
		$usuario[7] = $row['usuario'];
		$profissao[7] = $row['aluno_prof'];
		$licao[7] = $row['aluno_licao'];
		$apostila[7] = $row['aluno_apostila'];
		$localidade[7] = $row['aluno_localidade'];
		$simulador[7] = $row['aluno_simulador'];
		$avaliacao[7] = $row['aluno_exame'];
		$nota[7] = $row['aluno_nota'];
		$hist[7] =$row['aluno_hist'];
		$aula[7] =$row['titulo'];
		$aviso[7] =$row['barra_aviso'];
		$notificacao[7]=$row['aluno_notificacao'];
		$notificacao[7] = str_replace('\"', '"', $notificacao[7]);
		$duvida[7] = $row['aluno_duvida'];
		$responder[7] = $row['atividade'];
		$responder[7] = str_replace('\"', '"', $responder[7]);
		
		$row = mysql_fetch_array($qr);
	 
	        //Exibe os dados da segunda linha separados por -
	        $nome[8] = $row['nome'];
		$usuario[8] = $row['usuario'];
		$profissao[8] = $row['aluno_prof'];
		$licao[8] = $row['aluno_licao'];
		$apostila[8] = $row['aluno_apostila'];
		$localidade[8] = $row['aluno_localidade'];
		$simulado[8] = $row['aluno_simulador'];
		$avaliacao[8] = $row['aluno_exame'];
		$nota[8] = $row['aluno_nota'];
		$hist[8] =$row['aluno_hist'];
		$aula[8] =$row['titulo'];
		$aviso[8] =$row['barra_aviso'];
		$notificacao[8]=$row['aluno_notificacao'];
		$notificacao[8] = str_replace('\"', '"', $notificacao[8]);
		$duvida[8] = $row['aluno_duvida'];
		$responder[8] = $row['atividade'];
		$responder[8] = str_replace('\"', '"', $responder[8]);
		
		$row = mysql_fetch_array($qr);
	 
	        //Exibe os dados da segunda linha separados por -
	        $nome[9] = $row['nome'];
		$usuario[9] = $row['usuario'];
		$profissao[9] = $row['aluno_prof'];
		$licao[9] = $row['aluno_licao'];
		$apostila[9] = $row['aluno_apostila'];
		$localidade[9] = $row['aluno_localidade'];
		$simulador[9] = $row['aluno_simulador'];
		$avaliacao[9] = $row['aluno_exame'];
		$nota[9] = $row['aluno_nota'];
		$hist[9] =$row['aluno_hist'];
		$aula[9] =$row['titulo'];
		$aviso[9] =$row['barra_aviso'];
		$notificacao[9]=$row['aluno_notificacao'];
		$notificacao[9] = str_replace('\"', '"', $notificacao[9]);
		$duvida[9] = $row['aluno_duvida'];
		$responder[9] = $row['atividade'];
		$responder[9] = str_replace('\"', '"', $responder[9]);
		

	mysql_close();
	}

	
}else{
		if (file_exists("../np-404.php")){
			include"../np-404.php"; // include do erro 404.
		}

	
}
?>
