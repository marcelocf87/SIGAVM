@extends('layouts.master')

@section('Content')
	<div class="container">

		<div class="row">
			<!-- Cadastro -->
			<div class="col-xs-4 col-xs-offset-4">
				<h1> Cadastro Associados </h1>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<!--Inicio do Formulário-->
				<form class="form-horizontal" method="post">
					<!--Nome do Cadêmico-->
					<div class="form-group">
						<legend>Dados Pessoais</legend>
						<label for="nome" class="col-xs-2 control-label"><p class="text-left">Nome Completo:</p></label>
						<div class="col-xs-10">
							<input type="text" class="form-control" name="nome" placeholder="Nome" />
						</div>
					</div>

					<!--RG, ORGÃO EXPEDITOR e CPF -->
					<div class="form-group"> 
						<label for="rg" class="col-xs-2 control-label"><p class="text-left">RG:</p></label>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="rg" placeholder="RG" />
						</div>
						
						<label for="org" class="col-xs-1">Orgão Emissor</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" name="org" placeholder="Orgão Emissor">
						</div>
						
						<label for="cpf" class="col-xs-1">CPF:</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" name="cpf" placeholder="000.000.000-00" size=11 />
						</div>
					</div>

					<!--EMAIL E CELULAR -->
					<div class="form-group">
						<label for="email" class="col-xs-2 control-label"><p class="text-left">Email:</p></label>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="email" placeholder="Email" />
						</div>

						<label for="cel" class="col-xs-1">Celular:</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" name="cel" placeholder="Celular" />
						</div>
						<label for="emer" class="col-xs-1">Contato Emergência:</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" name="emer" placeholder="Contado..." />
						</div>
					</div>

					
					<!-- Onde Estuda-->
					<div class="form-group"> 
						<label for="tipo" class="col-xs-2 control-label"> <p class="text-left">Instituição:</p></label>
						<div class="col-xs-10">
							<select class="form-control">
								<option>ULBRA</option>
								<option>UNIR</option>
								<option>IFRO</option>
								<option>OUTROS</option>
							</select>
						</div>
					</div>
					<!--Dias em que estuda -->
					<div class="form-group">
							<label for="tipo" class="col-xs-2 control-label"><p class=" text-left">Selecione os dias:</p></label>
							<div class="col-xs-6">
								<label class="checkbox-inline">
									<input type="checkbox" name="dia1" value="1"> Segunda
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dia2" value="1"> Terça
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dia3" value="1">Quarta
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dia4" value="1">Quinta
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="dia5" value="1">Sexta
								</label>
							</div>
							<!-- Situação do usuário - ativo ou não-->
							<label for="tipo" class="col-xs-2 control-label">Situação:</label>
							<div class="col-xs-2">
								<label class="radio-inline">
									<input type="radio" name="optradio">Ativo
								</label>
								<label class="radio-inline">
									<input type="radio" name="optradio">Não Ativo
								</label>
							</div>
					</div>
					
  					<!--Endereço-->
					<div class="form-group">
						<legend>Endereço</legend>
						<label for="rua" class="col-xs-2 control-label"><p class="text-left">Rua:</p></label>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="rua" placeholder="Rua" />
						</div>
						<label for="n" class="col-xs-1 control-label">Número</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" name="n" placeholder="Número" />
						</div>
					</div>

					<div class="form-group">
						<label for="bairro" class="col-xs-2 control-label"><p class="text-left">Bairro:</p></label>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="bairro" placeholder="Bairro" />
						</div>
						<label for="cidade" class="col-xs-1 control-label">Cidade:</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" name="cidade" placeholder="Cidade" />
						</div>
					</div>

					<!--Botão enviar-->
					<div class="form-group">
						<div class=" col-xs-offset-10 col-xs-2">
							<button type="submit" class="btn btn-default">Enviar Informações</button>
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>
	<?php 
		if (isset($_POST['nome']))
		{
			echo $_POST['nome'];
		}
	?>

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>      
@endsection