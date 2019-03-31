<?php include 'header.php'; ?>

 <div class="container">
	 <div class="card mt-5">
	 	<div class="card-header">
	 		<h1>Login</h1>
	 	</div>
	 	<div class="card-body">

	 		<?php if(isset($_SESSION['erro'])): ?>
	 			<div class="alert alert-danger">
	 				<?php echo $_SESSION['erro']; ?>
	 			</div>
	 		<?php  endif;?>

	 		<form action="logar.php" method="post">
	 			<div class="form-group">
	 				<label for="usuario">Usuário</label>
	 				<input type="text" name="usuario" class="form-control">
	 			</div>
	 			<div class="form-group">
	 				<label for="senha">Senha</label>
	 				<input type="password" name="senha" class="form-control">
	 			</div>
	 			<input type="submit" class="btn btn-primary" value="Enviar">
	 			<input type="reset" class="btn btn-primary" value="Limpar">
	 		</form>
	 	</div>
	 </div>
 </div>

<?php include 'footer.php'; ?>