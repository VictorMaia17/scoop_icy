<?php
require_once("controllerCliente.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="gerenciar.js"></script>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gerenciar <b>clientes</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addgerenciarModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Adicionar novo cliente</span></a>	
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th>Cod</th>
						<th>Nome</th>
					    <th>Numero</th>
						<th>Rua</th>
						<th>Telefone</th>
						<th>Bairro</th>
						<th>Cidade</th>
						<th>Rg</th>
						<th>Cpf</th>
						<th>Complemento</th>
						<th>Login</th>		
						<th>Email</th>
						<th>Senha</th>	
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
           <?php foreach($clientes as $cliente){ ?>

					<tr>
						<td><?=$cliente['cod']?></td>
						<td><?=$cliente['nome']?></td>
						<td><?=$cliente['numero']?></td>
						<td><?=$cliente['rua']?></td>
						<td><?=$cliente['telefone']?></td>
           			    <td><?=$cliente['bairro']?></td>
            			<td><?=$cliente['cidade']?></td>
            			<td><?=$cliente['rg']?></td>
            			<td><?=$cliente['cpf']?></td>
            			<td><?=$cliente['complemento']?></td>
            			<td><?=$cliente['login']?></td>
            			<td><?=$cliente['email']?></td>
            			<td><?=$cliente['senha']?></td>
						<td>
						
						<a href="#editgerenciarModal" class="edit" data-toggle="modal" onclick="editarCliente('<?=$cliente['cod']?>', '<?=$cliente['nome']?>', '<?=$cliente['numero']?>', '<?=$cliente['rua']?>', '<?=$cliente['telefone']?>', '<?=$cliente['bairro']?>', '<?=$cliente['cidade']?>', '<?=$cliente['rg']?>', '<?=$cliente['cpf']?>', '<?=$cliente['complemento']?>', '<?=$cliente['login']?>', '<?=$cliente['email']?>', '<?=$cliente['senha']?>')"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>	
							<a href="#deletegerenciarModal" class="delete" data-toggle="modal" onclick="excluirCliente('<?=$cliente['cod']?>')"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						
						</td>
					</tr>

          <?php }?>
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Mostrando <b>5</b> de <b>25</b> entradas</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Anterior</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Próximo</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addgerenciarModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Adicionar cliente</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
				
					<div class="form-group">
						<label>Nome</label>
						<input type="text" class="form-control" required name="nome">
					</div>
					
					<div class="form-group">
						<label>Numero</label>
						<input type="numero" class="form-control" required name="numero">
					</div>
					
					<div class="form-group">
						<label>rua</label>
						<textarea class="form-control" required name="rua"></textarea>
					</div>
					
					<div class="form-group">
						<label>Telefone</label>
						<input type="tel" class="form-control" required name="telefone">
					</div>
					
          <div class="form-group">
						<label>Bairro</label>
						<input type="text" class="form-control" required name="bairro">
					</div>
					
				<div class="form-group">
						<label>Cidade</label>
						<input type="text" class="form-control" required name="cidade">
					</div>
					
				<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required name="email">
					</div>
					
				<div class="form-group">
						<label>Senha</label>
						<input type="password" class="form-control" required name="password">
					</div>
					
        <div class="form-group">
						<label>Rg</label>
						<input type="text" class="form-control" required name="rg">
					</div>
					
					<div class="form-group">
						<label>Cpf</label>
						<input type="text" class="form-control" required name="cpf">
					</div>
					
					<div class="form-group">
						<label>complemento</label>
						<input type="text" class="form-control" required name="complemento">
					</div>
					
					<div class="form-group">
						<label>Login</label>
						<input type="text" class="form-control" required name="login">
					</div>
					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-success" value="cadastrar" name="botao" >
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editgerenciarModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Edit gerenciar</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<input type="hidden" class="form-control" required id="editCod" name="cod">
					<div class="form-group">
						<label>Nome</label>
						<input type="text" class="form-control" required id="editNome" name="nome">
					</div>
					<div class="form-group">
						<label>Numero</label>
						<textarea class="form-control" required id="editNumero" name="numero"></textarea>
					</div>
					<div class="form-group">
						<label>Rua</label>
						<input type="text" class="form-control" required id="editRua" name="rua">
					</div>		
					<div class="form-group">
						<label>Telefone</label>
						<input type="text" class="form-control" required id="editTelefone" name="telefone">
					</div>
					<div class="form-group">
						<label>Bairro</label>
						<input type="text" class="form-control" required id="editBairro" name="bairro">
					</div>
					<div class="form-group">
						<label>Cidade</label>
						<input type="text" class="form-control" required id="editCidade" name="cidade">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" required id="editEmail" name="email">
					</div>
					<div class="form-group">
						<label>Senha</label>
						<input type="text" class="form-control" required id="editSenha" name="password">
					</div>
					<div class="form-group">
						<label>Rg</label>
						<input type="text" class="form-control" required id="editRg" name="rg">
					</div>
					<div class="form-group">
						<label>Cpf</label>
						<input type="text" class="form-control" required id="editCpf" name="cpf">
					</div>
					<div class="form-group">
						<label>Complemento</label>
						<input type="text" class="form-control" required id="editComplemento" name="complemento">
					</div>
					<div class="form-group">
						<label>Login</label>
						<input type="text" class="form-control" required id="editLogin" name="login">
					</div>			
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-info" value="editar" name="botao">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deletegerenciarModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST"> 
				<input name="cod" id="excluirCod" type="hidden"></input>
				<div class="modal-header">						
					<h4 class="modal-title">Deletar cliente</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Tem certeza de que deseja excluir esses registros?</p>
					<p class="text-warning"><small>Essa ação não pode ser desfeita.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-danger" value="Deletar" name = "botao">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>