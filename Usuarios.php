<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
	<meta name="color-scheme" content="light dark"> 	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<!--<script src="js/funcoes.js"></script>-->
	<title>Sistema de agendamento - clientes </title>
</head>
<body>
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
				<a class="navbar-brand" href="#">Sistema web</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="index.html">Cadastrar<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="consultarClientes.html">Consultar</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body">
					<h5 class="card-title">Consultar - Contatos Agendados</h5>
					<table class="table table-responsive table-hover col-12" style="width: auto;">
						<thead class="table-active bg-primary">
							<tr>
								<th scope="col">Nome</th>
								<th scope="col">Telefone</th>
								<th scope="col">Origem</th>
								<th scope="col">Contato</th>
								<th scope="col">Observação</th>
								<th scope="col">Ação</th>
							</tr>
						</thead>
						<tr>
							<td scope="row"> João testeiro</td>
							<td>(00)00000-0000</td>
							<td>Gugle</td>
							<td>32/00/2045</td>
							<td>Serviço agendado para 01/13/2045</td>
							<td>
								<button type="button" class="btn btn-outline-primary" style="width: 72px;">Editar</button>
								<button type="button" class="btn btn-outline-primary" style="width: 72px;">Excluir</button>
							</td>
					</table>
					<tr>
						<button type="button" class="btn btn-outline-primary" style="width: 200px;">Buscar agendamentos</button>
					</tr>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
				