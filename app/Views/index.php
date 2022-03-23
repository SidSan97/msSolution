<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
		    $('#jquery-datatable-ajax-php').DataTable({
		      	'processing': true,
		      	'serverSide': true,
		      	'serverMethod': 'post',
		      	'ajax': {
		          	'url':'http://localhost/msSolution/public/Controller/ClientesController.php'
		      	},
		      	'columns': [
		         	{ data: 'nome' },
		         	{ data: 'email' },
		         	{ data: 'cpf' },
		         	{ data: 'data_cadastro' }
		      	]
		   });

		} );
	</script>
</head>
<body>
	<div class="container mt-5">
		<h2 style="margin-bottom: 30px;">jQuery Datatable Ajax PHP Example</h2>
		<table id="jquery-datatable-ajax-php" class="display" style="width:100%">
	        <thead>
	            <tr>
	                <th>Nome</th>
	                <th>Email</th>
	                <th>CPF</th>
	                <th>Data do Cadastro</th>
	            </tr>
	        </thead>
	    </table>
	</div>
</body>
</html>