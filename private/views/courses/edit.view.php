<?php
$this->view('includes/header')
?>          
<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
	<?php $this->view('includes/crumbs', ['crumbs' => $crumbs]) ?>

	<div class="col-md-12">
	<a style="font-size: 11px" href="<?=ROOT?>/courses" class="btn btn-danger btn-sm pull-right"><i class=""></i> REGRESAR </a>
    <h1 class="page-head-line"></h1>
	<br>
	<form action="<?= ROOT ?>/courses/update/<?= $rows->Id_Curso ?>" method="POST">

		<div class="row">
			<div class="col-sm-4 col-md-3">
				<img src="<?= ROOT ?>/assets/images/libros_2.png" class="border border-primary d-block mx-auto" style="width:100%">

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
                        <option value="<?= $rows->nombreCurso ?>"><?= ucwords($rows->nombreCurso) ?></option>
							<option <?= get_select('nombreCurso', 'Personal Social') ?> value="Personal Social">Personal Social</option>
							<option <?= get_select('nombreCurso', 'Educación Física') ?> value="Educación Física">Educación Física</option>
							<option <?= get_select('nombreCurso', 'Comunicación') ?> value="Comunicación">Comunicación</option>
							<option <?= get_select('nombreCurso', 'Inglés') ?> value="Inglés">Inglés</option>
                            <option <?= get_select('nombreCurso', 'Matemática') ?> value="Matemática">Matemática</option>
							<option <?= get_select('nombreCurso', 'Ciencia Y Tecnología') ?> value="Ciencia Y Tecnología">Ciencia Y Tecnología</option>
							<option <?= get_select('nombreCurso', 'Educación Religiosa') ?> value="Educación Religiosa">Educación Religiosa</option>
							<option <?= get_select('nombreCurso', 'Arte y cultura') ?> value="Arte y cultura">Arte y cultura</option>
								
                        </select>
					</div>
					<?php if (count($courses) > 0) : ?>
					<div class="form-group col-md-6">
						<label for="get_grades">Grado / Sección:</label>
						<select id="get_grades" class="form-control" name="Id_Curso">

						        <option <?= get_select('Id_Curso', $rows->get_grades ??$rows->get_grades->Id_Curso) ?> value="<?= $rows->get_grades ? $rows->get_grades->Id_Curso : '' ?>">
								<?php if ($rows->get_grades):?>
									<?= ucwords($rows->get_grades->Grado) ?> <?= ucwords($rows->get_grades->Seccion) ?>
								<?php else:?>	
								 Selecionar 
								<?php endif;?>
								</option>

                            <?php foreach ($courses as $key => $course) :?>
                            <option value="<?=$course->Id_Grado?>"><?=$course->Grado?> <?=$course->Seccion?></option>
                            <?php endforeach?>
							
						</select>

					</div>
					<?php endif?>
				</div>
				<div class="form-group">
						<textarea  class="form-control" id="Detalle" name="Detalle"><?= $rows->Detalle ?></textarea>
				</div>

				<button style="font-size: 11px" class="btn btn-info btn-sm">GUARDAR</button>
			</div>
		</div>
		
		<h1 style="font-size: 10px" class="page-subhead-line">Seleccione <strong>guardar</strong> para completar el registro o <strong>regresar</strong> para volver a la pagina anterior.</h1>
	</form>
</div>
</div>
</div>
</div>
<?php
$this->view('includes/footer')
?>
