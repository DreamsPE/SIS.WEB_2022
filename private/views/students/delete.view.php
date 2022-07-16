<?php
$this->view('includes/header')
?> 
<div class="container-fluid p-4 shadow mx-auto" style="max-width: 580px;">
	<?php $this->view('includes/crumbs', ['crumbs' => $crumbs]) ?>
    <h1 class="page-head-line"></h1>
	<br>
	<?php if ($row) : ?>
		<div class="card-group justify-content-center">
			<form method="post">
				<h6>Estas seguro de <strong>eliminar</strong> el registro?</h6>
				<input type="hidden" value=<?=$row[0]->Id_Curso?> name="hidden">
				<input disabled autofocus class="form-control" value="<?= get_var('nombreCurso', $row[0]->nombreCurso) ?>" type="text" name="numeracion"><br><br>

				<input style="font-size: 11px" class="btn btn-danger float-end" type="submit" value="ELIMINAR">

				<a href="<?= ROOT ?>/courses">
					<input style="font-size: 11px" class="btn btn-success" type="button" value="CANCELAR">
				</a>
			</form>

		</div>
	<?php else : ?>

		<div style="text-align: center;">
			<div class="clearfix"></div>
			<br><br>
			<a href="<?= ROOT ?>/courses">
				<input class="btn btn-danger" type="button" value="Cancel">
			</a>
		</div>
	<?php endif; ?>
    <h1 style="font-size: 10px" class="page-subhead-line">Seleccione <strong>eliminar</strong> para completar el proceso o <strong>regresar</strong> para volver a la pagina anterior.</h1>
</div>
</div>
<?php
$this->view('includes/footer')
?>