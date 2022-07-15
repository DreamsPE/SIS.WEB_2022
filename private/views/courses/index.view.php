<?php
$this->view('includes/header')
?>
<?php $this->view('includes/crumbs', ['crumbs' => $crumbs]) ?>
<div class="col-md-12">
<a style="font-size: 11px" href="<?=ROOT?>/courses/create" class="btn btn-danger btn-sm pull-right"><i class=""></i> AGREGAR </a>
<h1 class="page-head-line"></h1>
<br>

<link href="./assets/css/datatable/datatable.css" rel="stylesheet" />
		 
         <div class="panel panel-default">
             <div class="panel-heading">
                 Administrar Asignaturas:  
             </div>
             <div class="panel-body">
                  <div class="table-sorting table-responsive">

                     <table class="table table-striped table-bordered table-hover" id="tSortable22">
                         <thead>
                             <tr>
                                 <th>Id_Curso</th>
                                 <th>NombreCurso</th>
                                 <th>Detalle</th>
                                 <th>Area</th>
                                 <th>Acción</th>
                             </tr>
                         </thead>
                         <tbody>
                         <?php if ($rows) : ?>
                            <?php foreach ($rows as $row) : ?>

                                <tr>
                                    
                                    <td><?= $row->Id_Curso ?></td>
                                    <td><?= $row->nombreCurso ?></td>
                                    <td><?= $row->Detalle?></td>
                                    <td><?= $row->Area?></td>
                                    <td>
                                        <a href="<?= ROOT ?>/condominios/edit/<?= $row->id ?>">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-uniF044"></i> Modifica </button>
                                        </a>

                                        <a href="<?= ROOT ?>/condominios/destroy/<?= $row->id ?>">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-bin"></i> Elimina </button>
                                        </a>

                                        <a href="<?= ROOT ?>/condominios/destroy/<?= $row->id ?>">
                                            <button class="btn btn-info btn-xs"><i class="fa fa-uniF08B"></i> Información</button>
                                        </a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                     </table>
                 </div>
             </div>
        </div>
        <h1 style="font-size: 10px" class="page-subhead-line">Información de <strong>asignaturas</strong> registradas. </h1>
<script src="./assets/js/dataTable/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () {
  $('#tSortable22').dataTable({
"bPaginate": true,
"bLengthChange": true,
"bFilter": true,
"bInfo": true,
"bAutoWidth": true });
});
</script>
<?php
$this->view('includes/footer')
?>
