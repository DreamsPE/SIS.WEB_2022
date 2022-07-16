<?php
$this->view('includes/header')
?>          
<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	<?php $this->view('includes/crumbs', ['crumbs' => $crumbs]) ?>

	<div class="col-md-12">
	<a style="font-size: 11px" href="<?=ROOT?>/teachers" class="btn btn-danger btn-sm pull-right"><i class=""></i> REGRESAR </a>
    <h1 class="page-head-line"></h1>
	<br>
	<form action="<?= ROOT ?>/teachers/store" method="POST">

		<div class="row">
			<div class="col-sm-4 col-md-3">
				<img src="<?= ROOT ?>/assets/images/teachers.png" class="border border-primary d-block mx-auto" style="width:100%">

			</div>
			<div class="col-sm-8 col-md-7">
				<?php if (count($errors) > 0) : ?>
					<div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
						<strong>Errors:</strong>
						<?php foreach ($errors as $error) : ?>
							<br><?= $error ?>
						<?php endforeach; ?>
						<span type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</span>
					</div>

				<?php endif; ?>

				<div class="row my-2">
					<div class="form-group col-md-6">
						<label for="number">Nombres:</label>
						<input type="text" value="<?= get_var('NombreProfesor') ?>" class="form-control" id="NombreProfesor" name="NombreProfesor">
					</div>
					<div class="form-group col-md-6">
						<label for="number">Apellidos:</label>
						<input type="text" value="<?= get_var('ApellidoProfesor') ?>" class="form-control" id="ApellidoProfesor" name="ApellidoProfesor">
					</div>
				</div>
				<div class="row my-2">
					<div class="form-group col-md-6">
						<label for="number">Telefono:</label>
						<input type="text" value="<?= get_var('TelefonoProfesor') ?>" class="form-control" id="TelefonoProfesor" name="TelefonoProfesor">
					</div>
					<div class="form-group col-md-6">
						<label for="number">Direccion:</label>
						<input type="text" value="<?= get_var('DireccionProfesor') ?>" class="form-control" id="DireccionProfesor" name="DireccionProfesor">
					</div>
				</div>
			
				
				<button style="font-size: 11px" class="btn btn-info btn-sm">GUARDAR</button>
			</div>
		</div>
		
		<h1 style="font-size: 10px" class="page-subhead-line">Seleccione <strong>guardar</strong> para completar el registro o <strong>regresar</strong> para volver a la pagina anterior.</h1>
	</form>
</div>
</div>
</div>
<?php
$this->view('includes/footer')
?>
