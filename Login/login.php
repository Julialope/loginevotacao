
<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Recebe os dados do formulário
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Cria um sistema decisório simples para verificar as informações
	if ($username == 'julia.lopes76@etec.sp.gov.br' && $password == '123456') {
		// Informações corretas, redireciona para a página de boas-vindas
		header('Location: indexvotacao.php');
		exit;
	} else {
		// Informações incorretas, exibe o arquivo com mensagem de erro
		header('Location: errado.php');
		exit;
	}
}
?>
