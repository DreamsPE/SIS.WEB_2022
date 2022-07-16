<?php
$this->view('includes/header')
?>          
<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	<?php $this->view('includes/crumbs', ['crumbs' => $crumbs]) ?>

	<div class="col-md-12">
	<a style="font-size: 11px" href="<?=ROOT?>/courses/index" class="btn btn-danger btn-sm pull-right"><i class=""></i> REGRESAR </a>
    <h1 class="page-head-line"></h1>
	<br>
	<form action="<?= ROOT ?>/courses/store" method="POST">

		<div class="row">
			<div class="col-sm-4 col-md-3">
				<img src="<?= ROOT ?>/assets//images/libros_2.png" class="border border-primary d-block mx-auto" style="width:100%">

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
						<label for="nombreCurso">Asignaturas:</label>
						<select id="nombreCurso" class="form-control" name="nombreCurso">
							<option selected> Seleccionar </option>
							<option value="Personal Social">Personal Social</option>
							<option value="Educación Física">Educación Física</option>
							<option value="Comunicación">Comunicación</option>
							<option value="Inglés">Inglés</option>
							<option value="Matemática">Matemática</option>
							<option value="Ciencia Y Tecnología">Ciencia Y Tecnología</option>
							<option value="Educación Religios">Educación Religiosa</option>	
							<option value="Arte y cultura">Arte y cultura</option>
						</select>
					</div>
					<?php if (count($rows) > 0) : ?>
					<div class="form-group col-md-6">
						<label for="Id_Grado">Grado / Sección:</label>
						<select id="Id_Grado" class="form-control" name="Id_Grado">
							<option selected> Seleccionar </option>
							<?php foreach ($rows as $key => $row) :?>
								<option value="<?=$row->Id_Grado?>"><?=$row->Grado?> <?=$row->Seccion?></option>
							<?php endforeach?>
							
						</select>

					</div>
					<?php endif?>
				</div>
				<div class="form-group">
						<label for="Detalle">Descripcion:</label>
						<textarea class="form-control" id="Detalle" name="Detalle"></textarea>
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
