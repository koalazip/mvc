<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
	<script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	<title>MVC com CRUD</title>
</head>
<body>
	<header>
		<h1>Meu Sistema de Contatos</h1>
	</header>
	<section>
	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</section>
	<footer>Todos direitos reservados!</footer>
</body>
</html>